<?php

namespace App\Http\Controllers;

// use App\MyClasses\MyService;
use App\MyClasses\MyServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Facades\MyService;
use App\Jobs\MyJob;
use Faker\Provider\Person;
use Illuminate\Support\Facades\DB;


class HelloController extends Controller
{
  public function index()
  {
    MyJob::dispatch(); //☆
    $msg = 'show people record.';
    $result = Person::get();
    $data = [
        'input' => '',
        'msg' => $msg,
        'data' => $result,
    ];
    return view('hello.index', $data);

  }
}
