<?php

	/**
		A collective namespace for any array sorting functions
	*/
	namespace ArraySorting;

	/**
		Application requirments -  where array will be of minimum length 3, max length 20
	*/
	define("MIN_LENGTH", 3);
	define("MAX_LENGTH", 20);
	
	class AlternateSort{

		/**
		 * AlternateSort executor.
		 *
		 * @param array $array - The sorted array provided
		 * @return array - The alternatively sorted array
		 */
		public function run(array $array)
		{
			
			//create a new array that will be the result after the sorting of elements
			$transformedArray = [];
			
			foreach($array As &$arrayValue){
				
				//add front pointer element and add to new array
				$transformedArray[] = $arrayValue;
				
				//Pop last element and add to new array if applicable
				$arrayCount = count($array);
				
				if($arrayCount > 0 && arrayCount % 2){
					$transformedArray[] = array_pop($array);
				}
			}
			
			return $transformedArray;
		}
	}