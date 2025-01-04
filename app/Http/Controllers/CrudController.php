<?php

namespace App\Http\Controllers;
use App\Models\Crudtable;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $index=Crudtable::get();
      return view('crudproject.index',compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crudproject.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $Store=new crudtable();
        $Store->first_name=$request->first_name;
        $Store->last_name=$request->last_name;
        $Store->gender=$request->gender;
        $Store->email=$request->email;
        $Store->qualification=$request->qualifications;

        if($request->hasFile('image')){
            $pathToupload=public_path().'/file-upload/';
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename='oasys-'.time().'.'.$ext;
            $file->move($pathToupload,$filename);
            $Store->image='/file-upload/'.$filename;
        }

        $Store->save();
        return redirect()->Route('crudproject.index');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Crudtable::find($id);
        return view('crudproject.view',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Crudtable::find($id);
        return view('crudproject.edit',compact('data'));
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
        $data=crudtable::find($id);
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->gender=$request->gender;
        $data->email=$request->email;
        $data->qualification=$request->qualifications;

        if($request->hasFile('image')){
            $pathToupload=public_path().'/file-upload/';
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename='oasys-'.time().'.'.$ext;
            $file->move($pathToupload,$filename);
            $data->image='/file-upload/'.$filename;
        }

        $data->save();
        return redirect()->Route('crudproject.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Crudtable::find($id);
        $data->delete();
        return redirect()->route('crudproject.index',compact('data'));

    }
}
