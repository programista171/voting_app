<?php

namespace App\Http\Controllers;

use App\Models\Journalist;
use Illuminate\Http\Request;

class JournalistsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index(){
		$journalists = Journalist::all();
		return view('admin.journalists.index')->with('journalists', $journalists);
	}//endfunction

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function create(){
		return view('admin.journalists.create');
	}//endfunction

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	public function store(Request $request){
		$journalist = new Journalist;
		$journalist->name = $request->name;
		$journalist->description = $request->description;
		$journalist->save();
		return redirect('journalists')->with('success', 'Dziennikarz został dodany');
	}//endfunction

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Journalist  $journalist
     * @return \Illuminate\Http\Response
     */
	public function show(Journalist $journalist){
		Return view('/admin.journalists.show')->with('journalist', $journalist);
	}//endfunction

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Journalist  $journalist
     * @return \Illuminate\Http\Response
     */
	public function edit(Journalist $journalist){
		return view('admin.journalists.edit')->with('journalist', $journalist);
	}//endfunction

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Journalist  $journalist
     * @return \Illuminate\Http\Response
     */
	public function update(Request $request, Journalist $journalist){
		$request->validate([
			'title' => 'required',
			'description' => 'required'
		]);

		$journalist->update($request->all());

		return redirect('journalists')->with('success', 'Edytowano');
	}//endfunction

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Journalist  $journalist
     * @return \Illuminate\Http\Response
     */
	public function destroy(Journalist $journalist){
		$journalist->delete();


		return redirect('journalists')->with('success', 'Dziennikarz został usunięty');    }
	}//endclass