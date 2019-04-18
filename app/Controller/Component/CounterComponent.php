<?php

App::uses('Component', 'Controller');

class CounterComponent extends Component {

	var $twitterBaseUrl;
	var $facebookBaseUrl;

    public function initialize(Controller $controller) {

    	$this->twitterBaseUrl = 'http://urls.api.twitter.com/1/urls/count.json?url=';
    	$this->facebookBaseUrl = 'http://graph.facebook.com/fql?q=SELECT%20url,%20total_count%20FROM%20link_stat%20WHERE%20url=';

    }

/**
 * Get the twitter count for a specific url
 * @param  int $id the ID of the proposal
 * @return int the twitter count for that proposal
 */
    public function twitterCount($id) {

        // url of the proposal
        // $url = Router::url('/', true) . 'proposal/' . $id;
        $url = 'http://thebookproject.es/propuesta/' . $id;
        // $url = urlencode($url);

        // get twitter count
    	$contents = file_get_contents($this->twitterBaseUrl . $url);

		if($contents) {
            return json_decode($contents)->count;
        } else {
            return NULL;
        }

   }

/**
 * Get the facebook count for a specific url
 * @param  int $id the ID of the proposal
 * @return int the facebook count for that proposal
 */
   public function facebookCount($id) {

        // url of the proposal
        // $url = Router::url('/', true) . 'proposal/' . $id;
        $url = 'http://thebookproject.es/propuesta/' . $id;
        // $url = urlencode($url);

        // get facebook count
		$contents = file_get_contents($this->facebookBaseUrl . '"' . $url . '"');

        if($contents) {
            $json = json_decode($contents);
            return isset($json->data[0]->total_count) ? $json->data[0]->total_count : 0;
        } else {
            return NULL;
        }

   }

}

?>