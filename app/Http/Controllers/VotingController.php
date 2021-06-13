<?php

namespace App\Http\Controllers;
Use App\Models\Journalist;
Use App\Models\Voter;
Use App\Models\Vote;

use Illuminate\Http\Request;

class VotingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
$journalists = Journalist::all();
//Echo $request->ip();
$voter = Voter::where('address', '=', $request->ip())->first();
//jeśli odwiedzamy stronę po raz pierwszy, zapisujemy IP do bazy danych
if(is_null($voter)){
$voter = new Voter;
$voter->address = $request->ip();
$voter->save();
}//endif
$wereVoted = $voter->votes->pluck('journalist_id')->toArray();
return view('front.index')->with('journalists', $journalists)->with('voter', $voter)->with('wereVoted', $wereVoted);
}//endfunction

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

}//endfunction

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

}//endfunction

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
    public function edit($id){

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
$vote->voter_id =
 Voter::where('address', '=', $request->ip())->first()->id;
$vote->journalist_id = $request->id;
$vote->save();
Return 'Well done!';
}//endfunction

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}