<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\computadoras;


class ComputadorasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $computadoras = computadoras::get();
        return view('pc.index', compact ('pc'));


         //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pc.create");
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
       computadoras::create($request->all());
        return view('index');


        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $computadoras = computadoras::find($id);
        return view('pc.show' , compact('pc'));


        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $computadoras = computadoras::find($id);
        return view('pc.edit' , compact('pc'));


        //
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
        computadoras::find($id)->update($request->all());
            $this->validate($request,[ 'marca'=>'required', 'modelo'=>'required']);
            $pc = pc::all();
            return view('index');


        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
