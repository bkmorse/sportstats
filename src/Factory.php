<?php

namespace bkmorse\sportstats;

class Factory
{
	/**
	 * Create new instance of class
     * @param string $class
	 */
	public static function create($class)
	{
	    if(!class_exists($class))
	    {
	    	throw new \Exception("Invalid class $class");
	    }
	    
		return new $class;
	}
}