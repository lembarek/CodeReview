<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Input, Session, Redirect, Lang;

class LanguageController extends Controller {

    public function chooser()
    {

        Session::set('locale', Input::get('locale'));


        return Redirect::back();

    }

}
