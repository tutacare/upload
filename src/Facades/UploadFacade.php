<?php
namespace Tuta\Upload\Facades;

use Illuminate\Support\Facades\Facade;

class UploadFacade extends Facade {

	/**
	* Get the registered name of the component.
	*
	* @return string
	*/
	protected static function getFacadeAccessor()
	{
		return 'upload';
	}

}
