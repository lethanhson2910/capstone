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
      $Request = $request->all();
      $name = $Request['name'];
      $email = $Request['email'];
      $gender = $Request['gender'];

      $dataInsertToDatabase = array(
        'name' => $name,
        'email' => $email,
        'gender'=>$gender,
      );
      $nhanvien = new nhanvien();
      $nhanvien->insert($dataInsertToDatabase);
      return redirect()->action('HomeController@index');
    }




    public function edit($id)
    {
        $nhanvien = new nhanvien();
        $getnhanvienById = $nhanvien->find($id)->toArray();
        return view("Edit")->with('getnhanvienById', $getnhanvienById);
    }

    public function update(Request $request)
    {
        $Request = $request->all();
        $name        = $Request['name'];
        $email      = $Request['email'];
        $gender     = $Request['gender'];
        $id = $Request['id'];

        $nhanvien               = new nhanvien();
        $getnhanvienById           = $nhanvien->find($id);
        $getnhanvienById->name      = $name;
        $getnhanvienById->email    = $email;
        $getnhanvienById->gender   = $gender;
        $getnhanvienById->save();

        return redirect()->action('HomeController@index');
    }

    public function delete($id)
    {
        nhanvien::find($id)->delete();
        return redirect()->action('HomeController@index');
    }
}
