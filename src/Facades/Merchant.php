<?php

namespace Dmogiovanni\LaravelIfood\Facades;

use Illuminate\Support\Facades\Facade;

class Merchant extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'merchant';
	}
}
