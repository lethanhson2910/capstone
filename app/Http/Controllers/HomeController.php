<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nhanvien;

class HomeController extends Controller
{



    public function index()
    {
        $nhanvien = Nhanvien::all();

        return view('List', compact('nhanvien'));
    }
    public function create()
    {
      return view('Add');
    }
    public function store( Request $request)
    {
      $request-> validate([
        'name'=> 'required|string|min:6',
        'email'=> 'required|email|max:255|unique:nhanvien'
      ],
      [
        'name.required' =>'ten khong duoc bo trong',
        'name.string' =>'ten phai la chu',
        'name.min' =>'ten phai lon hon 6 ki tu',
        'email.required' =>'email khong duoc bo trong',
        'email.email' =>'email sai dinh dang',
        'email.unique' =>'email da duoc su dung'
      ]
    );
      $nhanvien = new nhanvien;
      $nhanvien->name = $request->name;
      $nhanvien->email = $request->email;
      $nhanvien->gender = $request->gender;
      $nhanvien->save();
      return redirect()->route('home.index');
    }




    public function edit($id)
    {
        $nhanvien = nhanvien::find($id);

        return view("Edit",compact('nhanvien'));
    }

    public function update(Request $request,$id)
    {

          $nhanvien = nhanvien::find($id);
      $request-> validate([
        'name'=> 'required|string|min:6',
        'email'=> 'required|email|max:255|unique:nhanvien,email,'.$nhanvien->id
      ],
      [
        'name.required' =>'ten khong duoc bo trong',
        'name.string' =>'ten phai la chu',
        'name.min' =>'ten phai lon hon 6 ki tu',
        'email.required' =>'email khong duoc bo trong',
        'email.email' =>'email sai dinh dang',
        'email.unique' =>'email da duoc su dung'
      ]
    );
        $nhanvien->name = $request->name;
        $nhanvien->email = $request->email;
        $nhanvien->gender = $request->gender;
        $nhanvien->save();

        return redirect()->route('home.index');
    }

    public function delete($id)
    {
        nhanvien::find($id)->delete();
        return redirect()->route('home.index');
    }
}
