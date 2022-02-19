<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pro;
use App\Models\product;

class ShopController extends Controller
{
   public function select()
   {
    $data = DB::table('product')->get();
    // $data = pro::all();
     return view('select',compact('data'));
    // return view('select')->with('data',$data);
   }

   public function insert()
   {
      return view('insert');
   }

   
   public function create(Request $request)
   {

    $res=  DB::table('product')->insert(["pro_name"=>$request->pro_name]);
    
    if($res)
    {
         return redirect()->action([ShopController::class,'select']);
    }
  
   //  $db = new pro();
   //  $db->pro_name = $request->pro_name;
   //  $db->create();
     
   }

   public function delete($id)
   {
     $result = DB::table('product')->where('pro_id',$id)->delete();

     if($result)
     {
         return redirect()->action([ShopController::class,'select']);
     }
     else
     {
        echo 'error';
     }
     
   }


   public function updatepage($id)
   {

      $data = DB::table('product')->where('pro_id',$id)->first();
return view('update',compact("data"));
   }

   
   public function savedata(Request $request,$id)
   {

      DB::table('product')->where('pro_id',$id)->update(["pro_name"=>$request->proname]);

      return redirect()->action([ShopController::class,'select']);
   }
}
