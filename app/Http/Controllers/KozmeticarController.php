<?php

namespace App\Http\Controllers;

use App\Models\Kozmeticar;

use Illuminate\Http\Request;

class KozmeticarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $r = Kozmeticar::all();
        return view('trepavice.index')->with('r',$r);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trepavice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'studio'=>'required',
            'ime'=>'required',
            'prezime'=>'required',
            'adresa'=>'required',
            'cena'=>'required',
            'telefon'=>'required',
            'brend'=>'required',
     ]);
        $r = new Kozmeticar();
        $r->studio = $request->input('studio');
        $r->ime = $request->input('ime');
        $r->prezime = $request->input('prezime');
        $r->adresa = $request->input('adresa');
        $r->cena = $request->input('cena');
        $r->telefon = $request->input('telefon');
        $r->brend = $request->input('brend');
        $r->save();
        return redirect('/kozmeticar')->with('success','Novi termin za nadogradnju trepavica je uspesno kreiran!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $r = Kozmeticar::find($id);
        return view('trepavice.show')->with('r',$r);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $r = Kozmeticar::find($id);
        return view('trepavice.edit')->with('r',$r);
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
        $r = Kozmeticar::find($id);
        $r->studio = $request->input('studio');
        $r->ime = $request->input('ime');
        $r->prezime = $request->input('prezime');
        $r->adresa = $request->input('adresa');
        $r->cena = $request->input('cena');
        $r->telefon = $request->input('telefon');
        $r->brend = $request->input('brend');
        $r->save();
        return redirect('/kozmeticar')->with('success','Termin za nadogradnju trepavica je uspesno izmenjen u bazi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $b = Kozmeticar::find($id);
        $b->delete();
        return redirect('/kozmeticar')->with('success','Termin za nadogradnju trepavica je uspesno izbrisan iz baze!');
    }
}
