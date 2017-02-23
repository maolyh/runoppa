<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Status;

class Statuss extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statusList = DB::table('status')->paginate(5);
        //$statusList = Status::all();
        return view('home', ['isBasicView' => true, 'route' => 'status', 'title'=>'Estatus', 'tableList'=>$statusList]);
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
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
            ]);

        $status = new Status();
        $status->name = $request->name;
        $status->description = $request->description;
        $status->save();
        if ($status->save()) {
            return back()->with('aprovalMessage', 'Datos guardados correctamente');
        }
        else {
            return back()->with('errorMessage', 'Error al guardar los Datos'); 
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
    public function edit($id)
    {
        $statusListSelected  = Status::find($id);
        return view('home', ['route' => 'status', 'title' => 'Estatus', 'isBasicView' => true, 'isEditable' => true, 'rowSelected' => $statusListSelected]);
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
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
            ]);

        $status = Status::find($id);
        $status->name = $request->name;
        $status->description = $request->description;
        $status->save();
        if ($status->save()) {
            return redirect(url('/status'));
        }
        else {
            return back()->with('error_msg', 'Error al guardar los Datos'); 
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Status::destroy($id);
       return back();
    }
}
