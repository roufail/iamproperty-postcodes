<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class FrontendController extends Controller
{
    public function address(){
        $users = [];
        return view("address",compact("users"));
    }

    public function address_post(Request $request){
        $users = [];
        if($request->address){
            $users = User::where('address', 'like', '%' . $request->address . '%')->paginate(10);
        }
        return view("address",compact("users"));
    }
}
