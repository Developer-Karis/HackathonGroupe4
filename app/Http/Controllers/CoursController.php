<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\User;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('ligneDuTemps.page1', compact('users'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function show(Cours $cours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function edit(Cours $cours)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cours $cours, $id)
    {
        $user = User::find($id);
        $user->Html_css = $request->flexRadio;
        $user->save();
        return redirect('/page2');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cours $cours)
    {
        //
    }

    public function page2(Cours $cours)
    {
        return view('ligneDuTemps.page2');
    }

    public function page3(Cours $cours)
    {
        return view('ligneDuTemps.page3');
    }

    public function page4(Cours $cours)
    {
        return view('ligneDuTemps.page4');
    }

    public function storePage2(Request $request, Cours $cours, $id) 
    {
        $user = User::find($id);
        $user->Javascript = $request->flexRadio2;
        $user->save();
        return redirect('/page3');
    }

    public function storePage3(Request $request, Cours $cours, $id) 
    {
        $user = User::find($id);
        $user->React_JS = $request->flexRadio3;
        $user->save();
        return redirect('/page4');
    }

    public function storePage4(Request $request, Cours $cours, $id) 
    {
        $user = User::find($id);
        $user->Laravel = $request->flexRadio4;
        $user->save();
        return redirect('/message');
    }
}
