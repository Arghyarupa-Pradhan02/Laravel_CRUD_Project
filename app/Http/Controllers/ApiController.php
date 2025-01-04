<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
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
        $status = $Store ? 'success' : "faild";
        return json_encode(['status' => $status]);    }

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
        $status = $data ? 'success' : "faild";
        return json_encode(['status' => $status]);
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
        return json_encode(['status' => 'deleted']);

    }
}
