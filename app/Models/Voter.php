<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    use HasFactory;
	Public function votes(){
		Return $this->hasMany(Vote::class, 'voter_id');
	}//endfunction
}