<?php

namespace App\Http\Controllers\RoleControllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\RoleControllers\BasicControl as MainBasicControl;

abstract class AdminController extends MainBasicControl
{
    public function __construct(){
      $this->middleware('auth');
      $this->middleware('status');
    }
}
