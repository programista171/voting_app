<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;
	public function voter(){
		return $this->belongsTo(Voter::class);
	}//endfunction

	public function journalist(){
		return $this->belongsTo(Journalist::class);
	}//endfunction
}