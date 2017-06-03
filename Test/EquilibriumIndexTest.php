<?php

namespace Booj\CodeTest;

require_once("EquilibriumIndex.php");

use PHPUnit\Framework\Exception;
use PHPUnit\Framework\TestCase;

class EquilibriumIndexTest extends TestCase
{
    /**
     *
     */
	public function testComputeEquilibrium()
	{
        // Booj litmus test
        $input = [-7, 1, 5, 2, -4, 3, 0];
		$this->assertEquals([3,6], getEquilibriums($input));

        // special case of empty array
        $input = [];
        $this->assertEquals([], getEquilibriums($input));

        // special case of [0, N] solution
        $input = [0, -3, -2, -1, 1, 2, 3, 0];
        $this->assertEquals([0, 7], getEquilibriums($input));

        // special case of null element
        $input = [1, 0, -1, null];
        $this->assertEquals([3], getEquilibriums($input));
    }

    /**
     * @expectedException Exception
     */
    public function testComputeEquilibriumExceptions()
	{
        // special case of array in an array
        $input = [1, 0, -1, [8, 9]];
        getEquilibriums($input);

        // special case of an array with an object
        $input = [1, 0, -1, new \StdClass];
        getEquilibriums($input);
    }
}
