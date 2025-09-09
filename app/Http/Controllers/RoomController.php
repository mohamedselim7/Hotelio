<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Service;
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
    public function AddServicePage(){
        return view('AddService');
    }
    public function AddService(Request $request){
        $request->validate([
            'NameOfService' => 'required|string|max:255',
            'DescriptionOfService' => 'required|string',
            'NameOfServiceProvided' => 'required|string',
        ]);
        $service = new Service();
        $service->NameOfService = $request->input('NameOfService');
        $service->DescriptionOfService = $request->input('DescriptionOfService');
        $service->NameOfServiceProvided = $request->input('NameOfServiceProvided');
         if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads/services'), $imageName);
        $service->imagepath = 'uploads/services/' . $imageName; 
}
        $service->save();
        return redirect()->back();
}
}