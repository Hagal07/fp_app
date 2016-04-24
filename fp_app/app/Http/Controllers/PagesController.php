<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
  public function about() {

      $data=[];
      $data["first_name"] = "teltel";
      $data["last_name"] = "ameame";

      return view('pages.about', $data);
  }
}
