<?php
Class prologTester{
	
	
	public function assertEquals($itemOne, $itemTwo, $unsuccessfulMessage, $successfulMessage){
		$success = false;
		$message = "";

		if($itemOne === $itemTwo){
			$message = $successfulMessage;
			$success = true;
		}
		else{
			$message = $unsuccessfulMessage;
			$success = false;
		}
		return array("success" => $success, "message" => $message);

	}

}

// this will host a test as a method.
Class prologTests extends prologTester{


	public function __construct(){
		// $this->setArray($ar_in);
	}

	// each method should give back a description, a solution description, the time it took to run. And the code to be displayed.
// TODO create scenarios for the code and test it there.
	public function problemOne($ar_in){
		// Find the last element of the list.
		// This may be overengineered.
		$title = "Problem One";
		$description = "Test: <br />?- my_last(X,[a,b,c,d]). <br /> X = d";
		$solutionDescription = "";
		$solutionCode = "";
		$expectedSolution = "d";
		$startTime = microtime(true);

		$output = $ar_in[count($ar_in) - 1];
		// TODO refactor this in OO form. So that we will not have to repeat it.

		$endTime = microtime(true);
		// We may want to consider something different.
		$successState = $this->assertEquals($expectedSolution, $output, "We are not returning the last element somehow", "We are returning the last element");

		$returned = array("title" => $title,
			"description" => $description, 
			"solution" => $solutionCode,
			"time" => $endTime - $startTime,
			"output" => $output,
			"message" => $successState["message"], 
			"success" => $successState["success"]);
		return $returned; 
	}
	public function problemTwo($ar_in){
				// Find the last element of the list.
		// This may be overengineered.
		$title = "Problem Two";
		$description = "Find the last but one element of a list.";
		$solutionDescription = "";
		$solutionCode = "";
		$expectedSolution = "c";
		$startTime = microtime(true);

		$output = $ar_in[count($ar_in) - 2];
		// TODO refactor this in OO form. So that we will not have to repeat it.

		$endTime = microtime(true);
		// We may want to consider something different.
		$successState = $this->assertEquals($expectedSolution, $output, "We are not returning the last element somehow", "We are returning the last element");

		$returned = array("title" => $title,
			"description" => $description, 
			"solution" => $solutionCode,
			"time" => $endTime - $startTime,
			"output" => $output,
			"message" => $successState["message"], 
			"success" => $successState["success"]);
		return $returned; 



	}

	public function problemThree($ar_in, $kthElement){
				// Find the last element of the list.
		// This may be overengineered.
		$title = "Problem Three";
		$description = " Find the K'th element of a list.";
		$solutionDescription = "";
		$solutionCode = "";
		$expectedSolution = "b";
		$startTime = microtime(true);

		$output = $ar_in[$kthElement - 1];
		// TODO refactor this in OO form. So that we will not have to repeat it.

		$endTime = microtime(true);
		// We may want to consider something different.
		$successState = $this->assertEquals($expectedSolution, $output, "We are not returning the last element somehow", "We are returning the last element");

		$returned = array("title" => $title,
			"description" => $description, 
			"solution" => $solutionCode,
			"time" => $endTime - $startTime,
			"output" => $output,
			"message" => $successState["message"], 
			"success" => $successState["success"]);
		return $returned; 



	}

	public function problemFour($ar_in){
				// Find the last element of the list.
		// This may be overengineered.
		$title = "Problem Four";
		$description = "Find the number of elements of a list.";
		$solutionDescription = "";
		$solutionCode = "";
		$expectedSolution = 4;
		$startTime = microtime(true);

		$output = count($ar_in);
		// TODO refactor this in OO form. So that we will not have to repeat it.

		$endTime = microtime(true);
		// We may want to consider something different.
		$successState = $this->assertEquals($expectedSolution, $output, "We are not returning the number of elements", "We are returning the number of elements correctly");

		$returned = array("title" => $title,
			"description" => $description, 
			"solution" => $solutionCode,
			"time" => $endTime - $startTime,
			"output" => $output,
			"message" => $successState["message"], 
			"success" => $successState["success"]);
		return $returned; 
	}

	public function problemFive($ar_in){
		// This may be overengineered.
		$title = "Problem Five";
		$description = "Reverse a list.";
		$solutionDescription = "";
		$solutionCode = "";
		$expectedSolution = array("d","c","b","a");
		$startTime = microtime(true);

		$output = array();
		$array_temp = array();
		for($i = 0; $i < count($ar_in); $i++){
			array_push($output, $ar_in[count($ar_in) - $i - 1] );
		}
		// TODO refactor this in OO form. So that we will not have to repeat it.

		$endTime = microtime(true);
		// We may want to consider something different.
		$successState = $this->assertEquals($expectedSolution, $output, "The array has not been reversed", "The array has been reversed!");

		$returned = array("title" => $title,
			"description" => $description, 
			"solution" => $solutionCode,
			"time" => $endTime - $startTime,
			"output" => $output,
			"message" => $successState["message"], 
			"success" => $successState["success"]);
		return $returned;
	}

	public function problemSix($ar_in){
		// This may be overengineered.
		$title = "Problem Five";
		$description = "Find out whether a list is a palindrome.";
		$solutionDescription = "";
		$solutionCode = "";
		$expectedSolution = true;
		$startTime = microtime(true);

		// odd or even
		// if odd we want to increase the 
		$odd = (count($ar_in) % 2 == 1 ? 1 : 0);
		for($i = 0; $i < (count($ar_in) - $odd) / 2; $i++){
			if($ar_in[$i] != $ar_in[count($ar_in) - 1 - $i])
				$output = false;
		}
		// TODO refactor this in OO form. So that we will not have to repeat it.

		$endTime = microtime(true);
		// We may want to consider something different.
		$successState = $this->assertEquals($expectedSolution, $output, "The array has not been reversed", "The array has been reversed!");

		$returned = array("title" => $title,
			"description" => $description, 
			"solution" => $solutionCode,
			"time" => $endTime - $startTime,
			"output" => $output,
			"message" => $successState["message"], 
			"success" => $successState["success"]);
		return $returned; 
	}

	public function problemSeven($ar_in){
				// This may be overengineered.
		$title = "Problem Five";
		$description = "Flatten out a list if there are multiple arrays within it.";
		$solutionDescription = "";
		$solutionCode = "";
		$expectedSolution = array("a","b","c","d","e","f");
		$startTime = microtime(true);

		$output = array();
		function flatten($ar_in){
			foreach($ar_in as $item){
				if(is_array($item)){
					flatten($ar_in);
					// may be problematic
					break;
				}
				else
					array_push($output, $item);
			}
		}
			


		$endTime = microtime(true);
		// We may want to consider something different.
		$successState = $this->assertEquals($expectedSolution, $output, "The array has not been reversed", "The array has been reversed!");

		$returned = array("title" => $title,
			"description" => $description, 
			"solution" => $solutionCode,
			"time" => $endTime - $startTime,
			"output" => $output,
			"message" => $successState["message"], 
			"success" => $successState["success"]);
		return $returned; 
	}

	public function problemEight($ar_in){
				// This may be overengineered.
		$title = "Problem Eight";
		$description = "Elimiminate Consecutive Duplicates in the array";
		$solutionDescription = "";
		$solutionCode = "";
		// different output. Please correct
		$expectedSolution = array("a","b","c","a","d","e");
		$startTime = microtime(true);

		$output = array();
		for($i = 0; $i < count($ar_in); $i++){
			if($i != 0 && $ar_in[$i] == $ar_in[$i -1])
				continue;
			else
				array_push($output, $ar_in[$i]);
		}
		
		$endTime = microtime(true);
		// We may want to consider something different.
		$successState = $this->assertEquals($expectedSolution, $output, "The array has not been reversed", "The array has been reversed!");

		$returned = array("title" => $title,
			"description" => $description, 
			"solution" => $solutionCode,
			"time" => $endTime - $startTime,
			"output" => $output,
			"message" => $successState["message"], 
			"success" => $successState["success"]);
		return $returned; 
	}

	public function problemNine($ar_in){
		// really we should be grabbing the title from the function name.
		$title = "Problem Nine";
		$description = "If a list contains repeated elements they should be placed in separate sublists.";
		$solutionDescription = "";
		$solutionCode = "";
		$expectedSolution = array(array("a","b","c","a","d","e"));
		$startTime = microtime(true);

		$output = array();
		for($i = 0; $i < count($ar_in); $i++){
			$packed_array = array();
			$packing = false;

			while($i != 0 && $ar_in[$i] == $ar_in[$i -1]){
				// somehow move this outside of the loop because we dont need to reset this.
				$packing = true;
				// pack into an array
				array_push($packed_array, $ar_in[$i]);
				++$i;
			}
			if($packing){
				array_push($output, $packed_array);
				$packing = false;
			}
			else
				array_push($output, $ar_in[$i]);
		}
		
		$endTime = microtime(true);
		// We may want to consider something different.
		$successState = $this->assertEquals($expectedSolution, $output, "The array has not been reversed", "The array has been reversed!");

		$returned = array("title" => $title,
			"description" => $description, 
			"solution" => $solutionCode,
			"time" => $endTime - $startTime,
			"output" => $output,
			"message" => $successState["message"], 
			"success" => $successState["success"]);
		return $returned;
	}

	public function problemTen($ar_in){
		// really we should be grabbing the title from the function name.
		$title = "Problem Ten";
		$description = "Use the result of problem P09 to implement the so-called run-length encoding data compression method. Consecutive duplicates of elements are encoded as terms [N,E] where N is the number of duplicates of the element E.";
		$solutionDescription = "";
		$solutionCode = "";
		$expectedSolution = array(array(4, "a"),array(1,"b"),array(2,"c"),array(2,"a"),array(1,"d"),array(4,"e"));
		$startTime = microtime(true);

		$output = array();

		// this does not take into consideration non consecutive elements.
		for($i = 0; $i < count($ar_in); $i++){
			$number_of_elements = 1;

			while($i != 0 && $ar_in[$i] == $ar_in[$i -1]){
				// pack into an array
				// we need to change this array.
				++$i;
				++$number_of_elements;
			}

			$packed_array = array($number_of_elements, $ar_in[$i]);
			// if($number_of_elements == 1){
			// 	array_push($output, $ar_in[$i];
			// }
			// else
			array_push($output, $packed_array);
		}
		
		$endTime = microtime(true);
		// We may want to consider something different.
		$successState = $this->assertEquals($expectedSolution, $output, "The array has not been reversed", "The array has been reversed!");

		$returned = array("title" => $title,
			"description" => $description, 
			"solution" => $solutionCode,
			"time" => $endTime - $startTime,
			"output" => $output,
			"message" => $successState["message"], 
			"success" => $successState["success"]);
		return $returned;
	}

	public function problemEleven($ar_in){
		// really we should be grabbing the title from the function name.
		$title = "Problem Eleven";
		$description = "Modify the result of problem P10 in such a way that if an element has no duplicates it is simply copied into the result list. Only elements with duplicates are transferred as [N,E] terms.";
		$solutionDescription = "";
		$solutionCode = "";
		$expectedSolution = array(array(4, "a"),"b",array(2,"c"),array(2,"a"),"d",array(4,"e"));
		$startTime = microtime(true);

		$output = array();

		// this does not take into consideration non consecutive elements.
		for($i = 0; $i < count($ar_in); $i++){
			$number_of_elements = 1;

			while($i != 0 && $ar_in[$i] == $ar_in[$i -1]){
				// pack into an array
				// we need to change this array.
				++$i;
				++$number_of_elements;
			}

			$packed_array = array($number_of_elements, $ar_in[$i]);
			if($number_of_elements == 1){
				array_push($output, $ar_in[$i]);
			}
			else
				array_push($output, $packed_array);
		}
		
		$endTime = microtime(true);
		// We may want to consider something different.
		$successState = $this->assertEquals($expectedSolution, $output, "The array has not been reversed", "The array has been reversed!");

		$returned = array("title" => $title,
			"description" => $description, 
			"solution" => $solutionCode,
			"time" => $endTime - $startTime,
			"output" => $output,
			"message" => $successState["message"], 
			"success" => $successState["success"]);
		return $returned;
	}


	public function problemTwelve($ar_in){
		// really we should be grabbing the title from the function name.
		$title = "Problem Twelve";
		$description = "Given a run-length code list generated as specified in problem P11. Construct its uncompressed version.";
		$solutionDescription = "";
		$solutionCode = "";
		$testInput = array("a","a","a","a","b","c","c","a","a","d","e","e","e","e");
		$startTime = microtime(true);

		$output = array();

		// this does not take into consideration non consecutive elements.
		for($i = 0; $i < count($ar_in); $i++){
			if(is_array($ar_in[$i])){
				for($j = 0; $j < $ar_in[$i][0]; $j++){
					array_push($output, $ar_in[$i][1]);
				}
			}
			else
				array_push($output, $ar_in[$i]);
		}
		
		$endTime = microtime(true);
		// We may want to consider something different.
		$successState = $this->assertEquals($expectedSolution, $output, "The array has not been reversed", "The array has been reversed!");

		$returned = array("title" => $title,
			"description" => $description, 
			"solution" => $solutionCode,
			"time" => $endTime - $startTime,
			"output" => $output,
			"message" => $successState["message"], 
			"success" => $successState["success"]);
		return $returned;
	}
	public function problemThirteen($ar_in){
		// really we should be grabbing the title from the function name.
		$title = "Problem Thirteen";
		$description = "Implement the so-called run-length encoding data compression method directly. I.e. don't explicitly create the sublists containing the duplicates, as in problem P09, but only count them. As in problem P11, simplify the result list by replacing the singleton terms [1,X] by X.";
		$solutionDescription = "";
		$solutionCode = "";
		$expectedSolution = array(array(4, "a"),"b",array(2,"c"),array(2,"a"),"d",array(4,"e"));
		$startTime = microtime(true);

		$output = array();

		for($i = 0; $i < count($ar_in); $i++){
			$number_of_elements = 1;

			while($i != 0 && $ar_in[$i] == $ar_in[$i -1]){
				// pack into an array
				// we need to change this array.
				++$i;
				++$number_of_elements;
			}

			$packed_array = array($number_of_elements, $ar_in[$i]);
			if($number_of_elements == 1){
				array_push($output, $ar_in[$i]);
			}
			else
				array_push($output, $packed_array);
		}
		
		$endTime = microtime(true);
		// We may want to consider something different.
		$successState = $this->assertEquals($expectedSolution, $output, "The array has not been reversed", "The array has been reversed!");

		$returned = array("title" => $title,
			"description" => $description, 
			"solution" => $solutionCode,
			"time" => $endTime - $startTime,
			"output" => $output,
			"message" => $successState["message"], 
			"success" => $successState["success"]);
		return $returned;
	}

		public function problemFourteen($ar_in){
		// really we should be grabbing the title from the function name.
		$title = "Problem Fourteen";
		$description = "Duplicate the elements of a list.";
		$solutionDescription = "";
		$solutionCode = "";
		$expectedSolution = array("a","a","b","b","c","c","c","c","d","d");
		$startTime = microtime(true);

		$output = array();

		// this does not take into consideration non consecutive elements.
		for($i = 0; $i < count($ar_in); $i++){
			array_push($output, $ar_in[$i]);
			array_push($output, $ar_in[$i]);
		}
		
		$endTime = microtime(true);
		// We may want to consider something different.
		$successState = $this->assertEquals($expectedSolution, $output, "The array has not been reversed", "The array has been reversed!");

		$returned = array("title" => $title,
			"description" => $description, 
			"solution" => $solutionCode,
			"time" => $endTime - $startTime,
			"output" => $output,
			"message" => $successState["message"], 
			"success" => $successState["success"]);
		return $returned;
	}

	public function problemFifteen($ar_in, $number_of_times){
		// really we should be grabbing the title from the function name.
		$title = "Problem Fifteen";
		$description = "Duplicate the elements of a list X number of times";
		$solutionDescription = "";
		$solutionCode = "";
		$expectedSolution = array("a","a","a","b","b","b","c","c","c");
		$startTime = microtime(true);

		$output = array();

		// this does not take into consideration non consecutive elements.
		for($i = 0; $i < count($ar_in); $i++){
			for($j = 0; $j < $number_of_times; $j++){
				array_push($output, $ar_in[$i]);
			}
		}
		
		$endTime = microtime(true);
		// We may want to consider something different.
		$successState = $this->assertEquals($expectedSolution, $output, "The array has not been reversed", "The array has been reversed!");

		$returned = array("title" => $title,
			"description" => $description, 
			"solution" => $solutionCode,
			"time" => $endTime - $startTime,
			"output" => $output,
			"message" => $successState["message"], 
			"success" => $successState["success"]);
		return $returned;
	}

	public function problemSixteen($ar_in, $iterative_removal){
		// really we should be grabbing the title from the function name.
		$title = "Problem Sixteen";
		$description = "Drop every N'th element from a list.";
		$solutionDescription = "";
		$solutionCode = "";
		$testInput = array("a","a","b","b","c","c");
		$startTime = microtime(true);

		$output = array();

		// this does not take into consideration non consecutive elements.
		for($i = 0; $i < count($ar_in); $i++){
			if($i + 1 % $iterative_removal == 0){
				continue;
			}
			else
				array_push($output, $ar_in[$i]);
		}
		
		$endTime = microtime(true);
		// We may want to consider something different.
		$successState = $this->assertEquals($expectedSolution, $output, "The array has not been reversed", "The array has been reversed!");

		$returned = array("title" => $title,
			"description" => $description, 
			"solution" => $solutionCode,
			"time" => $endTime - $startTime,
			"output" => $output,
			"message" => $successState["message"], 
			"success" => $successState["success"]);
		return $returned;
	}

	public function problemSeventeen($ar_in, $length){
		// really we should be grabbing the title from the function name.
		$title = "Problem Seventeen";
		$description = "Split a list into two parts; the length of the first part is given.";
		$solutionDescription = "";
		$solutionCode = "";
		$testInput = array(array("a","b","c"), array("d","e","f"));
		$startTime = microtime(true);

		$output = array();

		// this does not take into consideration non consecutive elements.
		$ar1 = array_slice($ar_in, 0, $length);
		$ar2 = array_slice($ar_in, $length - 1);
		array_push($output, $ar1);
		array_push($output, $ar2);
		
		$endTime = microtime(true);
		// We may want to consider something different.
		$successState = $this->assertEquals($expectedSolution, $output, "The array has not been reversed", "The array has been reversed!");

		$returned = array("title" => $title,
			"description" => $description, 
			"solution" => $solutionCode,
			"time" => $endTime - $startTime,
			"output" => $output,
			"message" => $successState["message"], 
			"success" => $successState["success"]);
		return $returned;
	}

	public function problemEighteen($ar_in, $indexOne, $indexTwo){
		// really we should be grabbing the title from the function name.
		$title = "Problem Eighteen";
		$description = "Extract a slice from a list.";
		$solutionDescription = "";
		$solutionCode = "";
		$testInput = array("c","d","e","f","g");
		$startTime = microtime(true);

		$output = array();

		// this does not take into consideration non consecutive elements.
		$output = array_slice($ar_in, $indexOne, $indexTwo - $indexOne);
		
		$endTime = microtime(true);
		// We may want to consider something different.
		$successState = $this->assertEquals($expectedSolution, $output, "The array has not been reversed", "The array has been reversed!");

		$returned = array("title" => $title,
			"description" => $description, 
			"solution" => $solutionCode,
			"time" => $endTime - $startTime,
			"output" => $output,
			"message" => $successState["message"], 
			"success" => $successState["success"]);
		return $returned;
	}

	public function problemNineteen($ar_in, $indexOne, $indexTwo){
		// really we should be grabbing the title from the function name.
		$title = "Problem Eighteen";
		$description = "Extract a slice from a list.";
		$solutionDescription = "";
		$solutionCode = "";
		$testInput = array("c","d","e","f","g");
		$startTime = microtime(true);

		$output = array();

		// this does not take into consideration non consecutive elements.
		// take the first slice and append it to the end.
		$output = array_slice($ar_in, $indexOne, $indexTwo - $indexOne);
		// microtime is not functioning right.
		$endTime = microtime(true);
		// We may want to consider something different.
		$successState = $this->assertEquals($expectedSolution, $output, "The array has not been reversed", "The array has been reversed!");

		$returned = array("title" => $title,
			"description" => $description, 
			"solution" => $solutionCode,
			"time" => $endTime - $startTime,
			"output" => $output,
			"message" => $successState["message"], 
			"success" => $successState["success"]);
		return $returned;
	}

}

Class prologAnswers{



}
// runtime
$solutions = array();

// loop through all of the functions.
$testSolutions = new prologTests();
$testInput = array("a","b","c","d");
array_push($solutions, $testSolutions->problemOne($testInput)); 
array_push($solutions, $testSolutions->problemTwo($testInput)); 
$k = 2;
array_push($solutions, $testSolutions->problemThree($testInput, $k)); 
array_push($solutions, $testSolutions->problemFour($testInput)); 
array_push($solutions, $testSolutions->problemFive($testInput));


array_push($solutions, $testSolutions->problemSix($testInput));

$testInput = array("a", array("b","c"), array(array("d", "e"), "f"));
array_push($solutions, $testSolutions->problemSeven($testInput));

$testInput = array("a","a","a","a","b","c","c","a","a","d","e","e","e","e");
array_push($solutions, $testSolutions->problemEight($testInput));

array_push($solutions, $testSolutions->problemNine($testInput));
array_push($solutions, $testSolutions->problemTen($testInput));
array_push($solutions, $testSolutions->problemEleven($testInput));

$testInput = array(array(4, "a"),"b",array(2,"c"),array(2,"a"),"d",array(4,"e"));
array_push($solutions, $testSolutions->problemTwelve($testInput));

$testInput = array("a","a","a","a","b","c","c","a","a","d","e","e","e","e");
array_push($solutions, $testSolutions->problemThirteen($testInput));

$testInput = array("a","b","c","c","d");
array_push($solutions, $testSolutions->problemFourteen($testInput));

$testInput = array("a","b","c");
array_push($solutions, $testSolutions->problemFifteen($testInput, 3));

$testInput = array("a","a","a","b","b","b","c","c","c");
array_push($solutions, $testSolutions->problemSixteen($testInput, 3));

$testInput = array("a","b","c","d","e","f");
array_push($solutions, $testSolutions->problemSeventeen($testInput, 3));

$testInput = array("a","b","c","d","e","f","g","h");
array_push($solutions, $testSolutions->problemEighteen($testInput, 3, 7));

$testInput = array("a","b","c","d","e","f","g","h");
array_push($solutions, $testSolutions->problemNineteen($testInput, 3, 7));








$palindromeList = array("a", "b", "b", "a");
$nonPalindromeList = array("a", "b", "c");
// when we give it two inputs we are creating problems.






?>