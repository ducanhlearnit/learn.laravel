<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function contact($name, $email, $phone) {
        return view('pages/contact', compact('name', 'email','phone'));
    }
}
