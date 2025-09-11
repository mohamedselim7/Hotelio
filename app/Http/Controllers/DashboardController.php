<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rate;
class DashboardController extends Controller
{
    public function DashboradPage(){
    return view('Dashboard.Admin');
}
    public function AddPhotosAndVideosPage() {
        return view('Dashboard.Addvideo&photo');
    }
    public function AddRoomPage() {
        return view('Dashboard.AddRoom');
    }
    public function AddServicePage() {
        return view('Dashboard.Services');
    }
    public function UsersPage() {
        $User = User::all();
        return view('Dashboard.Users',['User' => $User]);
    }
    public function OpininosPage() {
        $rate = Rate::all();
        return view('Dashboard.Opinions',['rate' => $rate]);
    }
}
