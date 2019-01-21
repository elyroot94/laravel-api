<?php

namespace App\Http\Controllers\Api;

use App\Classe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClasseController extends Controller
{
    /**
     * ClasseController constructor.
     */
    public function __construct()
    {
       // $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Classe::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $classe=Classe::create($request->all());
      return response()->json($classe->with('groupes')->get()->where('id',$classe->id),200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $classe= Classe::findorfail($id);
        return response()->json($classe,200);

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
        $classe=Classe::findorfail($id);
        $classe->update($request->all());
        return response()->json($classe,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Classe::destroy($id);

        return response()->json(['message'=>'succes',200]);

    }
}
