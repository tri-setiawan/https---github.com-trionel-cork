<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mentor;

class MentorController extends Controller
{
    public function profile($id)
    {
        $mentor = Mentor::find($id);
        return view('mentor.profile',['mentor'=>$mentor]);
    }
}
