<?php

namespace App\Http\Controllers;

use App\Models\Journalist;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJournalistRequest;


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
	public function store(\App\Http\Requests\JournalistStoreRequest $request){
		$validated = $request->validated();
		try{
			$journalist = Journalist::create($validated);
		} catch(Exception $exception){
			return redirect('journalists')->with('error', 'Dodanie dziennikarza nie powiodło się');
		}
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
	public function update(\App\Http\Requests\JournalistStoreRequest $request, Journalist $journalist){
		$validated = $request->validated();
		try{
			$journalist->update($validated);
		} catch(Exception $exception){
			return redirect('journalists')->with('error', 'Edycja nie powiodła się');
		}
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
		return redirect('journalists')->with('success', 'Dziennikarz został usunięty');
	}//endfunction

	public function showVotes(Journalist $journalist){
		Return view('admin.journalists.votes')->with('journalist', $journalist);
	}//endfunction
	}//endclass