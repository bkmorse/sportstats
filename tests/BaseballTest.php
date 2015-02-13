<?php

use \bkmorse\sportstats\Baseball as Baseball;

class BaseballTest extends \PHPUnit_Framework_TestCase {

	private $baseball;

    	public function __construct()
    	{
        	$this->baseball = new Baseball();
    	}

	public function testBattingAverage()
	{
		$result = $this->baseball->battingAverage(50,100);
		$this->assertEquals(.500, $result);
	}

	public function testOnBasePercentage()
	{
		$result = $this->baseball->onBasePercentage(10,12);
		$this->assertEquals(.833, $this->baseball->onBasePercentage(10,12));
	}

	public function testSluggingPercentage()
	{
		$result = $this->baseball->sluggingPercentage(10,12);
		$this->assertEquals(.833, $result);
	}

	public function testERA()
	{
		$result = $this->baseball->era(19,84);
		$this->assertEquals(2.04, $result);
	}

	public function testformatStat()
    	{
		$result = $this->baseball->formatStat(.833333);
		$this->assertEquals(.833, $result);
    	}
}