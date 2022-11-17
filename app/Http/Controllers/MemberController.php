<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function card(){
        $user = Auth::user();
        return view("member.card", ["user" => $user]);
    }
}
