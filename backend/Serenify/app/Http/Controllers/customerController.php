<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use Illuminate\Support\Facades\Validator;

class customerController extends Controller
{
    function getcustomer(){
        $dt_customer = customer::get();
        return response()->json($dt_customer);
        }

    function addcustomer(Request $req){
        $validator = Validator::make($req->all(),[
            'name'=> 'required',
            'email' => 'required',
            'pass'=>'required',
            'addres'=>'required',
            'phone'=>'required',
            'TTL'=>'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson());
        }

        $save = customer::create([
            'name'=>$req->get('name'),
            'email'=>$req->get('email'),
            'pass'=>$req->get('pass'),
            'addres'=>$req->get('addres'),
            'phone'=>$req->get('phone'),
            'TTL'=>$req->get('TTL'),
        ]);

        if($save){
             return Response()->json(['status'=>true,'message' => 'sukses menambah customer']);
        } else {
             return Response()->json(['status'=>false,'message' => 'gagal menambah customer']);
        }
    }

    function updatecustomer(Request $req, $id){
        $validator = Validator::make($req->all(),[
            'name'=> 'required',
            'email' => 'required',
            'pass'=>'required',
            'addres'=>'required',
            'phone'=>'required',
            'TTL'=>'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson());
        }

        $ubah = customer::where('Id',$id)->update([
            'name'=>$req->get('name'),
            'email'=>$req->get('email'),
            'pass'=>$req->get('pass'),
            'addres'=>$req->get('addres'),
            'phone'=>$req->get('phone'),
            'TTL'=>$req->get('TTL'),
        ]);

        if($ubah){
             return Response()->json(['status'=>true,'message' => 'sukses mengubah customer']);
        } else {
             return Response()->json(['status'=>false,'message' => 'gagal mengubah customer']);
        }
    }

    function deletecustomer($id){
        $hapus=customer::where('Id',$id)->delete();
        if($hapus){
            return Response()->json(['status'=>true,'message' => 'sukses hapus customer']);
       } else {
            return Response()->json(['status'=>false,'message' => 'gagal hapus customer']);
       }
    }
    function getcustomerid($id){
        $dt_customer = customer::where('Id',$id)->first();
        return Response()->json($dt_customer);
        }
}




