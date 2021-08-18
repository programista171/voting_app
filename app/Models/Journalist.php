<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journalist extends Model
{
    use HasFactory;
Protected $fillable =[
'Name', 'description'
];
	Public function votes(){
		Return $this->hasMany(Vote::class, 'journalist_id');
	}//endfunction
}