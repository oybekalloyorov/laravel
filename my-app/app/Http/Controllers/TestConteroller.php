<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestConteroller extends Controller
{
    public function testIndex($testuser){
        return view('test.learn')->with('name','Oybek')->with('id', $testuser);
    }
}
