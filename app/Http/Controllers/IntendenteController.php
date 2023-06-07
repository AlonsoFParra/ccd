<?php

namespace App\Http\Controllers;

use App\Models\Intendente;
use Illuminate\Http\Request;

class IntendenteController extends Controller
{
    public function index()
    {
       
        return view('intendente', ['intendente' => $Intendente]);
    }

}
