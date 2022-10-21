<?php

namespace App\Http\Controllers;
use App\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	$admin = Admin::all();
    	return view('admins.index',compact('admin'));
    }

    public function tambah()
    {
    	return view('admins.tambah');
    }

    public function store(Request $request)
    {
        $user = \App\User::create([
            'name' => $request->nm_admin,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => str_random(60),
        ]);

        // insert ke table siswa
        // dd($request->request->add(['user_id' => $user->id ]));
        $admin = Admin::create([
            'nm_admin' => $request->nm_admin,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'user_id' => $user->id,
        ]);

        // Admin::create([
    	// 	'nm_admin' => $request->nm_admin,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password),
    	// ]);

        // User::create([
    	// 	'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password),
        // ]);

    	return redirect('/admins');
    }

    public function detail($id)
    {
        $admin = Admin::where('id_admin',$id)->first();
        return view('admins.detail',compact('admin'));
    }

    public function edit($id)
    {
        $admin = Admin::where('id_admin',$id)->first();
        return view('admins.edit',compact('admin'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
        'nm_admin' => 'required',
        'email' => 'required',
        'password' => 'required',

        ]);

    
        Admin::where('id_admin',$id)->update([
        'nm_admin' => $request->nm_admin,
        'email' => $request->email,
        'password' => $request->password,
        ]);

        return redirect('/admins');
    }

    public function delete($id)
    {
        Admin::where('id_admin',$id)->delete();
        return redirect('/admins');
    }
}
