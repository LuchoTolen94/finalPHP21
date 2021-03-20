<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $todist = Todist::all();
         return view('todists.index',compact('todists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['id'=>'required', 'descripción'=>'required', 'fecha'=>'required', 'estado'=>'required']);
        $todist = new Post(['id'=>  $request->get('id'),
                          'descripción'=>  $request->get('descripción'),
                          'fecha'=>  $request->get('fecha'),
                           'estado'=>  $request->get('estado')
                ]
                );
        $todist->save();
        return redirect('/todists')->with('success','Todist saved');
        
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
        $todist = Todist::find($id);        
        return view('todists.edit', compact('todist'));
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
        {
            $request->validate(['id'=>'required', 'descripción'=>'required', 'fecha vencimineto'=>'required','estado'=>'required']);
            
            $todist = Todist::find($id);
            $todist->id=$request->get('id');
            $todist->fecha_vencimiento=$request->get('fecha vencimineto');
            $todist->descriptión=$request->get('descriptión');
            $todist->estado=$request->get('estado');
            
            $todist->save();
            
            return redirect ('/todists')->with('succees','Todist updated');
            
            
            
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
        $todist = Post::find($id);        
        $todist->delete();        
        return redirect('/todists')->with('success', 'Todist deleted!');
    }
}
