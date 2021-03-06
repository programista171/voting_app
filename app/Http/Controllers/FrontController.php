<?php

namespace App\Http\Controllers;
use App\Models\Journalist;
use App\Models\Voter;
use App\Models\Vote;
use App\Http\Controllers\JournalistsController;
use App\Http\Controllers\FrontController;


use Illuminate\Http\Request;

class FrontController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index(){
		$journalists = Journalist::paginate(5);;
		return view('front.index')->with('journalists', $journalists);
	}//endfunction


	Public function vote(Request $request){
		$journalists = Journalist::all();
		$voter = Voter::where('address', '=', $request->ip())->first();
		if(is_null($voter)){
			$voter = new Voter;			
			$voter->address = $request->ip();
			$voter->save();
		}//endif
		$wereVoted = $voter->votes->pluck('journalist_id')->toArray();
		return view('front.voting')->with('journalists', $journalists)->with('voter', $voter)->with('wereVoted', $wereVoted);
	}//endfunction

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function show(Journalist $journalist){
		Return view('front.show')->with('journalist', $journalist);
	}//endfunction

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function update(Request $request, Vote $vote){
		$vote = new Vote;
		$vote->voter_id = Voter::where('address', '=', $request->ip())->first()->id;
		$vote->journalist_id = $request->id;
		$vote->save();
		return redirect('vote')->with('successful', 'Głos został oddany');
	}//endfunction

	public function showResults(){
		$journalists = Journalist::all();
		return view('front.results')->with('journalists', $journalists);
	}//endfunction

}