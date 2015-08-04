<?php namespace App\Http\Controllers;

use App\Profile;
use App\Column;
use App\Http\Requests;
use App\Http\Requests\EnumRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Input;

class ProfileController extends Controller {

	public function show()
	{
                    $column = Column::where('name' ,'=', Profile::getNull())->get(['name','type','values'])->first();
                    $type = $column['type'];
                    $view = Column::getView($type);
                    $name = $column['name'];
                    if($type == 'enum' ){
                        $values = $column['values'];
                        $values = explode(',', $values);
                        return view($view)->withName($name)->withType($type)->withValues($values);
                    }else{
                        return view($view)->withName($name)->withType($type);
                    }
	}

        public function storeColumn(EnumRequest $enumRequest)
        {
            dd(Input::get());
        }
}
