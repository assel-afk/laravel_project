<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MController extends Controller
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

  public function edit($id){
    $user = User::find($id);
    return view('admin.edit', ['user' => $user]);
  }

  public function update(Request $request, $id){
    $user = User::find($id);
    $user->fill($request->all());
    $user->save();
    return redirect()->route('admin.index');
  }

  public function show($id){
    $user = User::find($id);

    return view('admin.show', ['user'=>$user]);
  }

  public function destroy($id){
    User::find($id)->delete();
    return redirect()->route('admin.index');
  }
}
