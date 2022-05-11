<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserUpdate extends Controller
{
        public function updatepicture(Request $request)
        {

            $username = Auth::user()->name;
            $userid = Auth::user()->id;
            $pictureid = Auth::user()->picture;

            unlink('user_pictures/'.$pictureid);

            $picture = $request->picture;

            $picture_name = $username.date("y-m-d").'.'.$picture->getClientOriginalExtension();

            $request->picture->move('user_pictures',$picture_name);

            DB::update("update users set picture = '$picture_name' where id = ?", [$userid]);

            return redirect('/home')->with('mssg','Profile Photo Updated');
        }
}
