<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\mydb;
use App\Models\Admin\mytbl;
use Carbon\Carbon;
use Illuminate\Http\Request;

class dashboardController extends Controller
{

    public $uploadPath = "uploads/admin";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = mytbl::get();
        return view("admin/dashboard", compact('db'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $db = new mytbl();

        $fileName = strtotime(Carbon::now());
        if($request->file('image')){
            $fileName = $fileName.".".$request->file('image')->extension();
            $uploadPath = (public_path($this->uploadPath."/".$fileName));
            // dd($uploadPath);
            move_uploaded_file($request->file('image'), $uploadPath);
            // $db['images'] = $fileName;
        }
        
        $db-> images = $fileName;
        $db-> product = $request->get('product_name');
        $db-> price = $request->get('price');
        $db-> category = $request->get('category');
        $db-> tags = $request->get('tags');

        

        if($db->save())
        {
            return redirect()->route('dashboard')->with(['msg'=>'department added successful']);
        }
        else
        {
            return redirect()->route('dashboard')->withErrors(['msg'=>'department not added']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = mytbl::find($id);
        $product->delete();
        return redirect()->route('dashboard');
    }
}
