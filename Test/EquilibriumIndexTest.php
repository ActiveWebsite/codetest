<?php

//namespace Booj\CodeTest\Tests;

use Booj\CodeTest;
use PHPUnit\Framework\TestCase;

require_once("./EquilibriumIndex.php");

class EquilibriumIndexTest extends TestCase
{
	public function testComputeEquilibrium()
	{
		$arr = array(-7, 1, 5, 2, -4, 3, 0);
		$this->assertEquals(array(3,6), Booj\CodeTest\getEquilibriums($arr));
	}
}
