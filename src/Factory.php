<?php

namespace bkmorse\sportstats;

class Factory
{
	public static function create($class)
	{
	    if (class_exists($class))
		{
			return new $class();
		} else {
			throw new Exception("Invalid class {$class}");
		}
	}
}