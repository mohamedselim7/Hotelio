<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Appointment;
use App\Models\Service;
class FirstController extends Controller
{
    public function ContactPage() {
        return view('Hotel.Contact');
    }
    public function ContactUs(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);
        $appointment = new Appointment();
        $appointment->name = $request->input('name');
        $appointment->email = $request->input('email');
        $appointment->phone = $request->input('phone');
        $appointment->message = $request->input('message');       
        $appointment->save();
        return redirect()->back();
}
    public function ServicesPage() {
        $services = Service::all();
        return view('Hotel.Services',['services' => $services]);
}
}