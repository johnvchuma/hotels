<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HotelController extends Controller
{
    function create(Request $request){
        $request->validate([
            'name'=>'required',
            'lprice'=>'required',
            'sprice'=>'required',
            'hprice'=>'required',
            'rooms'=>'required',
            'city'=>'required',
            'phone'=>'required',
            'main'=>'required',
            'others'=>'required',
        ]);

        $hotel = new Hotel();
        $hotel->name = $request['name'];
        $hotel->phone = $request['phone'];
        $hotel->rooms = $request['rooms'];
        $hotel->city = $request['city'];
        $hotel->lprice = $request['lprice'];
        $hotel->sprice = $request['sprice'];
        $hotel->hprice = $request['hprice'];
        if($request->hasfile('others'))

        {


            foreach($request->file('others') as $file)
            {
                $name = time().'.'.$file->extension();
                $file->move(public_path().'/hotels/', $name);
                $others[] = $name;
            }

         }

         if($request->hasfile('main'))
         {
                $name = time().'.'.$request->file('main')->extension();
                $request->file('main')->move(public_path().'/hotels/', $name);
                $main = $name;
         }
        $hotel->main = $main;
        $hotel->others = json_encode($others);
        $hotel->television = $request['television'];
        $hotel->wifi = $request['wifi'];
        $hotel->breakfast = $request['breakfast'];
        $hotel->save();

       return redirect('/');
    }

    function hotel($id){
        $hotels = Hotel::where('id',$id)->get()->first();
        $images = json_decode($hotels->others);

        return view('pages.hotel',['hotel'=>$hotels,'images'=>$images]);
    }

    function search(Request $request){
        $hotels = Hotel::where('name','LIKE',"%{$request['search']}%")->orWhere('city','LIKE',"%{$request['search']}%")->get();
        return view('pages.index',['hotels'=>$hotels]);
    }

}
