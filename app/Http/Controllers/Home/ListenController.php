<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListenController extends Controller
{
    public function index(){
        return view('Home/listen');
    }
    //播放器
    public function player(){
        return view('Home/player');
    }
}
