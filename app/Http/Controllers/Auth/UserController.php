<?php

namespace app\http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use app\Http\Requests;


class UserController extends Controller
{
    public function users(User $user){
        $users =$user->all();
        return response()->json($users);
    }

 }
