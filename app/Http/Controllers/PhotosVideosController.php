<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Photo;
class PhotosVideosController extends Controller
{
    public function PhotosAndVideosPage() {
        $videos = Video::all();
        $photos = Photo::all();
        return view('Hotel.PhotosVideos',['videos' => $videos,'photos' => $photos]);
    }
    public function AddPhotosAndVideosPage() {
        return view('AddPhoto&Video');
    }
public function Addvideo(Request $request) {
    $request->validate([
        'videospath' => 'required|mimes:mp4,mov,avi|max:20000',
        'description' => 'required|string',
    ]);

    $video = new Video();
    $video->description = $request->input('description');

    if ($request->hasFile('videospath')) {
        $videoName = time() . '.' . $request->file('videospath')->extension();
        $request->file('videospath')->move(public_path('uploads/videos'), $videoName);
        $video->videospath = 'uploads/videos/' . $videoName;
    }

    $video->save();

    return redirect()->back()->with('success', 'Video uploaded successfully!');
}

public function Addphoto(Request $request) {
    $request->validate([
        'imagepath' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        'description' => 'required|string',
    ]);

    $photo = new Photo();
    $photo->description = $request->input('description');

    if ($request->hasFile('imagepath')) {
        $imageName = time() . '.' . $request->file('imagepath')->extension();
        $request->file('imagepath')->move(public_path('uploads/photos'), $imageName);
        $photo->imagepath = 'uploads/photos/' . $imageName;
    }

    $photo->save();

    return redirect()->back()->with('success', 'Photo uploaded successfully!');
}     
}
