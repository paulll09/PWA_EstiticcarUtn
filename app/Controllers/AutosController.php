<?php

namespace App\Controllers;
use App\Models\AutosModel;

class AutosController extends BaseController
{
  public function index(){
    $autos = model (AutosModel::class)->findAll();
    return view('stock/index',compact('autos'));

  }
}

