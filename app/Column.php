<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Column extends Model {


    public static function getView ($type)
    {
        return "column.".$type;
    }


}
