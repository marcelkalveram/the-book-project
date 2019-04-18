<?php

App::uses('AppHelper', 'View/Helper');

class RatingHelper extends AppHelper {

	public $helpers = array('Form');

/**
 * Returns the social count for Facebook and Twitter
 * @param  int $facebookCount the facebook like count
 * @param  int $twitterCount the Twitter share count
 * @return string the DOM for the share count elements
 */
	public function socialCount($facebookCount = 0, $twitterCount = 0) {

		$output = '<div class="social-count">';
		$output.= '<p class="count-facebook"><i></i><span>' . $facebookCount . '</span></p>';
		$output.= '<p class="count-twitter"><i></i><span>' . $twitterCount . '</span></p>';
		$output.= '</div>';

		return $output;

	}

/**
 * Return the social buttons for Facebook and Twitter
 * @param  int $url the URL to be shared / liked
 * @return string the DOM for the share and like buttons
 */
    public function displayButtons($id, $shareText) {

    	// $url = Router::url('/', true) . 'proposal/' . $id;
    	$url = 'http://thebookproject.es/propuesta/' . $id;
		$output = '<ul class="socialcount" data-via="thebookproject_" data-url="' . $url . '" data-id="' . $id . '" data-share-text="' . $shareText . ' ' . $url .'">';

		$output .= '<li class="facebook"><a href="https://www.facebook.com/sharer/sharer.php?u=' . $url . '" title="Comparte en Facebook"><span class="social-icon icon-facebook"></span><span class="count">Like</span></a></li>';
		$output .= '<li class="twitter"><a href="https://twitter.com/intent/tweet?url=' . $url . '" title="Comparte en Twitter"><span class="social-icon icon-twitter"></span><span class="count">Tweet</span></a></li>';

		$output .= '</ul>';

		return $output;

    }

}

?>