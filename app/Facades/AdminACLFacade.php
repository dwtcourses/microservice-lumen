<?php
	/**
	 * Created by PhpStorm.
	 * User: fabrizio
	 * Date: 09/08/18
	 * Time: 17.42
	 */
	namespace App\Facades;

	use Illuminate\Support\Facades\Facade;

	class AdminACLFacade extends Facade
	{
		protected static function getFacadeAccessor()
		{
			return 'AdminACLService';
		}
	}