<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JournalistStoreRequest extends FormRequest{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
	public function authorize(){
		return true;
	}

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

	public function rules(){
		return [
			'name' => 'required',
			'description' => 'required'
		];
	}//endfunction

	public function messages(){
		return [
			'name.required' => 'Należy podać imię i nazwisko dziennikarza',
			'description.required' => 'Należy podać opis dziennikarza'
		];
	}//endfunction
}