<?php
namespace ArrayArrangmentTechTest\Test;

use PHPUnit\Framework\TestCase;

require_once('../../src/Arraysorting.php');


//echo AlternateSort::run([1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11]);


class ArraySortingTest extends TestCase
{
	public function testProvidedInputOutput(){
		// Desired class is in namespace!
		//$controller = new ArraySorting\run();
		$x = new AlternateSort();
		$updatedArray = AlternateSort::run([1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11]);
		//()->run([1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11]);
		//$this->assertIsArray($updatedArray);
		//$this->assertEquals(1,count($updatedArray));
	
	

	//var_dump($result);
		
		//$condition = true;
		//$this->assertTrue($condition);
	}
}
