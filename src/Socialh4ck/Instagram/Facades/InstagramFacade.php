<?php namespace Socialh4ck\Instagram\Facades;

use Illuminate\Support\Facades\Facade;

class InstagramFacade extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'instagram'; }

}