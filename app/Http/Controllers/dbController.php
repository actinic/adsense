<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Carbon\Carbon;
use App\User;
//use DB;
//use App\Http\Requests;
//use App\Http\Controllers\Controller;
//use Request;

class dbController extends Controller
{
    public function dbresult()
    {
    	//$cards=\DB::table('clients')->get();
    	//$cards = \DB::table('clients')->pluck('password');
        //return view('dbresult',compact($result);
        $results = Client :: all();
    	return view('dbresult')->with('results',$results);
    }


    public function form(Request $request)
    {
        // $name = $request->all();
        // Client::create($name);
        // dd($request->file('image'));
        // $name = $request->input('image');
        // $input['image'] =$name;
        $image = $request->file('image');
        $imagename =$image->getClientOriginalName();
        $extention = $image->getClientOriginalExtension();
        $tmp_name = $_FILES['image']['tmp_name'];
        
        $newname = mt_rand(11111,999999).sha1($imagename).".".$extention;
        $dir = "uploads/";
        $dest_path = $dir.$newname;
        move_uploaded_file($tmp_name, $dest_path);

        Client::create([
            'name' =>$request->input('name'),
            'password' =>$request->input('password'),
            'image' =>$newname,
            ]);
        return "success";
    }

    public function dbinserttest()
    {
        $mytime = Carbon::now();
        $input['name'] ="asdfwg";
        $input['password'] ="sajflk";
        $input['created_at'] =$mytime;
        $input['updated_at'] =$mytime;
        Client::create($input);
    }

    public function loginform(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');
        //$hashedd = \DB::table('clients')->where('name', $name)->pluck('password');
        // $result = Client::where('name', '=', $name)
        //    ->select('password')
        //     ->get() ;
        $result = Client::where('name',$name)->get();
        // dd($result);
        foreach($result as $book)
            {
               $res= $book->password;
               $img=$book->image;
            }
        if ($password==$res) {
            return view('loginform')->with('img',$img)->with('name',$name);
        }else {
            return back()->withInput();
        }
    }

}

?>
