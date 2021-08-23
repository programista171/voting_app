<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journalist extends Model
{
    use HasFactory;
	protected $fillable =[
		'Name', 'description'
	];
	public function votes(){
		return $this->hasMany(Vote::class, 'journalist_id');
	}//endfunction
	public function voters(){
		return $this->hasMany(Vote::class, 'journalist_id');
	}//endfunction
}