<?php

namespace Psi\Libraries\HelloWorldProgramByLsolanki;

class CExample {

	/**
	 * Create a new Skeleton Instance
	 */
	public function __construct() {
		// constructor body
	}

	/**
	 * Friendly welcome
	 *
	 * @param string $phrase Phrase to return
	 *
	 * @return string Returns the phrase passed in
	 */
	public function hello( string $strPhrase ) : string {
		return $strPhrase;
	}
}