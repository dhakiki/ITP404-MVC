<?php

class Twitter_Controller extends Base_Controller {

	public function action_index() {

		$users= Twitteruser::all();
		//dd($users);

		$results = array(
			'users' => $users
		);
		return View::make('home.search', $results);
		//return View::make('home.search');
	}

	public function action_results() {
		$search_term = Input::get('search-term');
		$twitter = new Twitter();
		$twitter_search = $twitter->getTweetsFromJSON($search_term);
		//dd($twitter_search);	
		$data=array(
				'search_term' => $search_term,
				'tweets' => $twitter_search
			);
		return View::make('home.results', $data);
	}

	public function action_add() {
		return View::make('add');
	}

	public function action_add_user() {
		$username = Input::get('username');
		$realname = Input::get('realname');
		Twitteruser::save_user($username, $realname);

	}
}