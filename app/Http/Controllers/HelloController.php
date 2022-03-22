<?php

namespace App\Http\Controllers;

// use App\MyClasses\MyService;
use App\MyClasses\MyServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Facades\MyService;



class HelloController extends Controller
{
  public function index(Request $request)
  {
    $data = [
      'msg' => $request->hello,
      'data' => $request->alldata
    ];
    return view('hello.index', $data);
  }
}
