<?php

class Twitter_Controller extends Base_Controller {

	public function action_index() {
		return View::make('home.search');
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
}