<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function RoomsPage() {
        $rooms = Room::all();
        return view('Hotel.Rooms', ['rooms' => $rooms]);
    }

    public function AddRoomPage() {
        return view('AddRoom');
    }

    public function AddRoom(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $room = new Room();
        $room->name = $request->input('name');
        $room->description = $request->input('description');
        $room->price = $request->input('price');

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/rooms'), $imageName);
            $room->imagepath = 'uploads/rooms/' . $imageName;
        }

        $room->save();

        return redirect('AddRoom')->with('success', 'Room added successfully!');
    }
    public function DeleteRoom($id) {
        $room = Room::findorfail($id);
        $room->delete();
        return redirect()->back();
    }
}