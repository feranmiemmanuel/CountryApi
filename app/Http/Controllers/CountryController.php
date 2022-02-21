<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        return response()->json(['status'=>true, 'data'=>$countries], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'iso'=>'required',
            'name'=>'required'
        ]);
        $country= Country::create($request->all());
        return response()->json(['status'=>true, 'data'=>$country], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Country::find($id);
        return response()->json(['status'=>true, 'data'=>$show], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product= Country::find($id);
        $product->update($request->all());

        return response()->json(['status'=>true, 'data'=>$product], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Country::destroy($id);
        return response()->json(['status'=>true, 'action'=>$destroy], 200);
    }

    /**
     * Search specified resource from storage.
     *
     * @param  str  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        $search= Country::where('name', 'like', '%'.$name.'%')->get();
        return response()->json(['status'=>true, 'data'=>$search], 200);
    }
    
}
