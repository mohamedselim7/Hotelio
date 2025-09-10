<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Photo;
class PhotosVideosController extends Controller
{
    public function PhotosAndVideosPage() {
        return view('Hotel.PhotosVideos');
    }
    public function AddPhotosAndVideosPage() {
        return view('AddPhoto&Video');
    }
    public function Addvideo(Request $request) {
        $request->validate([
            'videos' => 'required|mimes:mp4,mov,avi|max:20000',
            'description' => 'required|string',
        ]);
        $video = new Video();
        $video->videospath = $request->input('videos');
        $video->description = $request->input('description');
        $video->save();
        return redirect()->back();
    }
    public function Addphoto(Request $request) {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'description' => 'required|string',
        ]);
        $photo = new Photo();
        $photo->imagepath = $request->input('photo');
        $photo->description = $request->input('description');
        $photo->save();
        return redirect()->back();
    }       
}
