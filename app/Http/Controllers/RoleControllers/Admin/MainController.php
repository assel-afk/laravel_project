<?php

namespace App\Http\Controllers\RoleControllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class MainController extends AdminController
{
  public function index(){
    $user = User::all();
    return view('admin.index', ['users' => $user]);
  }

  public function create(){
    return view('admin.create');
  }

  public function store(Request $request){
    $user = new User();
    $user->fill($request->all());
    $user->save();
    return redirect()->route('admin.index');
  }
/*
  public function edit($id){
    $user = User::find($id);
    return view('admin.edit', ['user' => $user]);
  }

  public function update(Request $request, $id){
    $user = User::find($id);
    dd($request->all());
    dd($user);
    $user->fill($request->all());
    $user->save();
  }

  public function show($id){
    return redirect()->route('admin.index');
  }
*/
  public function destroy($id){
    User::find($id)->delete();
    return redirect()->route('index');
  }
}
