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
      $nhanvien = new nhanvien;
      $nhanvien->name = $request->txtName;
      $nhanvien->email = $request->txtEmail;
      $nhanvien->gender = $request->txtGender;
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
        $nhanvien->name = $request->txtName;
        $nhanvien->email = $request->txtEmail;
        $nhanvien->gender = $request->txtGender;
        $nhanvien->save();

        return redirect()->route('home.index');
    }

    public function delete($id)
    {
        nhanvien::find($id)->delete();
        return redirect()->route('home.index');
    }
}
