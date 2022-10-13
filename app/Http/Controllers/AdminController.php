<?php

namespace App\Http\Controllers;
use App\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	$admin = Admin::all();
    	return view('admin.index',compact('admin'));
    }

    public function tambah()
    {
    	return view('admin.tambah');
    }

    public function store(Request $request)
    {
        Admin::create([
    		'id_admin' => $request->id_admin,
    		'nm_admin' => $request->nm_admin,
            'email' => $request->email,
            'password' => $request->password,
    	]);
 
    	return redirect('/admin');
    }

    public function detail($id)
    {
        $admin = Admin::where('id_admin',$id)->first();
        return view('admin.detail',compact('admin'));
    }

    public function edit($id)
    {
        $admin = Admin::where('id_admin',$id)->first();
        return view('admin.edit',compact('admin'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
        'id_admin' => 'required',
        'nm_admin' => 'required',
        'email' => 'required',
        'password' => 'required',

        ]);

    
        Admin::where('id_admin',$id)->update([
        'id_admin' => $request->id_admin,
        'nm_admin' => $request->nm_admin,
        'email' => $request->email,
        'password' => $request->password,
        ]);

        return redirect('/admin');
    }

    public function delete($id)
    {
        Admin::where('id_admin',$id)->delete();
        return redirect('/admin');
    }
}
