<?php

//namespace Booj\CodeTest\Tests;

require_once("EquilibriumIndex.php");

use Booj\CodeTest;
use PHPUnit\Framework\TestCase;

class EquilibriumIndexTest extends TestCase
{
	public function testComputeEquilibrium()
	{
		$input = [-7, 1, 5, 2, -4, 3, 0];
		$this->assertEquals(array(3,6), Booj\CodeTest\getEquilibriums($input));
	}
}
