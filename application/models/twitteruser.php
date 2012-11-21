<?php

class Twitteruser 
{
	public static function save_user ($un, $rn) {
		DB::table('users')->insert(array(
			'username' => $un, 
			'realname' => $rn
		));
	
	}

	public static function all()
	{
		$results = DB::table('users')->get(array(
			'username',
			'realname'
			));
		return $results;
	}

};