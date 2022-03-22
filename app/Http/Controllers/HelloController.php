<?php

namespace App\Http\Controllers;

// use App\MyClasses\MyService;
use App\MyClasses\MyServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Facades\MyService;
use Illuminate\Support\Facades\DB;


class HelloController extends Controller
{
  public function index()
  {
    $data = ['msg' => '', 'data' => []];
    $msg = 'get: ';
    $result = [];
    DB::table('people')
      ->chunkById(2, function ($items) use (&$msg, &$result) {
        foreach ($items as $item) {
          $msg .= $item->id . ' ';
          $result += array_merge($result, [$item]);
          break;
        }
        return true;
      });
    $data = [
      'msg' => $msg,
      'data' => $result,
    ];
    return view('hello.index', $data);
  }
}
