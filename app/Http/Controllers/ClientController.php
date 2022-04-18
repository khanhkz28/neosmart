<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class ClientController extends Controller
{ 
    public function index() 
    {
        return view('client.home');
    }
}
