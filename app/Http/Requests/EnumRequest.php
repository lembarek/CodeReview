<?php namespace App\Http\Requests;

use App\Column;
use App\Http\Requests\Request;



class EnumRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{

                $enums = Column::whereType('enum')->get()->toArray();
		return [
		    'enum' => "required"
		];
	}

}
