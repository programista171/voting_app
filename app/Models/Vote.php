<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;
	Public function voter(){
		Return $this->belongsTo(Voter::class);
	}//endfunction

	Public function journalist(){
		Return $this->belongsTo(Journalist::class);
	}//endfunction
}