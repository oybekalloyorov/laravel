<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Bu narsalarni ro`yhati';
    }

    public function show($user){
        $user += 1000;
        // return 'Tanlangan user ' . $user;

        // return view('users.show', [
        //     'name' => 'Oybek',
        //     'id' => $user
        // ]);
        // yoki
        return view('users.show')
        ->with('name', 'Oybek')
        ->with('id', $user);
    }

    public function create(){
        return view('users.create');
    }

    public function edit($user_id){
        return $user_id . ' ni O \'zgartirish';
    }
}
