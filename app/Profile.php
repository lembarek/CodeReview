<?php namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;


class Profile extends Model {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'profiles';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['user_id', 'country', 'language', 'sex', 'date_of_birth'];

        public function user()
        {
            return $this->belongsTo('User');
        }

        public static function getNull()
        {
             $profile =  Profile::where('user_id', '=',Auth::user()->id)->get()->toArray()[0];

             foreach ($profile as $key => $value) {
                 if(is_null($value)) return $key;
             }

        }


        public function getViews($type)
        {

                return true;
        }
}
