<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rate;
class RateController extends Controller
{
    public function YourOpinionPage() {
        return view('YourOpinion',);
    }
public function AddYourOpinion(Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'YourOpinion' => 'required|string',
        'NameOfService' => 'required|string',
        'TypeOfClient' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ]);
    $rate = new Rate();
    $rate->name = $request->input('name');
    $rate->YourOpinion = $request->input('YourOpinion');    
    $rate->NameOfService = $request->input('NameOfService');
    $rate->TypeOfClient = $request->input('TypeOfClient');
    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads/opinions'), $imageName);
        $rate->imagepath = 'uploads/opinions/' . $imageName;      
    }
    $rate->save();
    return redirect()->back()->with('success', 'تمت إضافة رأيك بنجاح!');
}
}