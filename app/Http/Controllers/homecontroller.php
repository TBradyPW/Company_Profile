<?php

namespace App\Http\Controllers;

use App\Models\movies;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Validator;

class homecontroller extends Controller
{

        // public function TampilkanData (){

        //     // $data = [
        //     //     'movie' => movies::get(),
        //     //     // 'company_id' => movies::get()
        //     // ];
        //     // $data = movies::select('company_id', 'title')->get();

        //     $data = movies::get();
        //     return response()->json($data);

        // }
    


    // public function dashboard(){
    //     return view ('dashboard');
    // }

    // public function GetData(){
    //     $data = User::get();
    //     // $data = User::where('name','dada')->orWhere('email', 'abc@gmail.com')->get();

    //     return view('index' , compact('data'));
    // }   

    // public function create(){
    //     return view('create');
    // }

    // public function store(Request $request){
    //     $Validator = validator::make($request->all(),[
    //         'Gmail'    => 'required|email',
    //         'username' => 'required',
    //         'password'  => 'required',
    //     ]);

    //     if ($Validator->fails()) return redirect()->back()->withInput()->withErrors($Validator);

    //     $data['email'] = $request->Gmail;
    //     $data['name'] = $request->username;
    //     $data['password'] = hash::make($request->password);

    //     User::create($data);


    //     return redirect()->route('index');
    // }

    // public function edit(Request $request,$id){
    //     $data = User::find($id);

    //     return view('edit' , compact('data'));
    // }
    
    // public function update(Request $request,$id){
    //     $Validator = validator::make($request->all(),[
    //         'email'     => 'required|email',
    //         'name'  => 'required',
    //     ]);

    //     if ($Validator->fails()) return redirect()->back()->withInput()->withErrors($Validator);

    //     $data = User::find($id);
    //     $updatedata = $request->all();
    //     $data->update($updatedata);

        // $data->name = $request->username;
        // $data->email = $request->Gmail;

        // $data->save();

        // $data['email'] = $request->Gmail;
        // $data['name'] = $request->username;

        // User::update($data);



        // return redirect()->route('index');
    // }
}
    


