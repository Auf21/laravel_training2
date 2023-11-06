<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
  public  function index () {
    return view('Home');
}
  public  function about () {
    return view('about');
}
  public  function contact () {
    return view('contatct');
}
}
