<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index (){

        $data['user'] = 'Imam Muslih';

        // ORM
        $data['modelUser'] = User::all();

        return view ('index', $data);
    }
}
