<?php
// array_push($myArr, 5, 8);
	function fibonacci($number){
		if ($number == 0) {
			return $fibonacci_numbers = [0];
		}
		elseif ($number == 1) {
			return $fibonacci_numbers = [0, 1, 1];
		}
		else{
			$fibonacci_numbers = [0, 1];
			$past_number = 0;
			$next_number = 1;
			for ($i=0; $i < $number; $i++) {
				$i = $past_number + $next_number;
				if ($i != $number) {
					array_push($fibonacci_numbers, $i);
				}
				$past_number = $next_number;
				$next_number = $i;
			}
			return $fibonacci_numbers;
		}
	}
	echo "fibonacci_numbers: ";
	print_r(fibonacci(5));
	echo "<br>";


	function reverse($number){
		$reverse = "";
		$devider = 10;
		while ($number != 0) {
			$reverse .= strval($number % $devider);
			$number = ($number - $number % $devider) / $devider;
		}

		return $reverse;
	}

	echo "reversed number: ";
	echo reverse(12345);
	echo "<br>";

	function ProgressionChecker($array){
		sort($array);
		$difference = $array[1] - $array[0];
		for ($i=2; $i < count($array); $i++) { 
			if ($array[$i] - $array[$i - 1] != $difference) {
				return "false";
			}
		}
		return "true";
	}

	// false-ზე browser-ში არ წერდა არაფერს, ამიტომ ვაბრუნებინებ სტრინგს, ისე სწორია რომ პირდაპირ
	// boolean ტიპი დავაბრუნებინოთ.

	$pro_array = [1, 5, 4, 3, 2, 6];
	$not_pro_array = [1, 5, 2, 8];

	echo ProgressionChecker($pro_array); echo "<br>";
	echo ProgressionChecker($not_pro_array); echo "<br>";

	function ContainsZero($number){
		if ($number == 0) {
			return true;
		}
		while (!$number == 0) {
			if ($number % 10 == 0) {
				return true;
			}
			$number = ($number - $number % 10) / 10;
		}
		return false;
	}

	function SortZerosLast($array){
		$tempArray = [];
		for ($i=0; $i < count($array); $i++) { 
			if (!ContainsZero($array[$i])) {
				array_push($tempArray, $array[$i]);
			}
		}

		for ($i=0; $i < count($array); $i++) { 
			if (ContainsZero($array[$i])) {
				array_push($tempArray, $array[$i]);
			}
		}

		return $tempArray;
	}

	echo "Sorted: Numbers which contains 0 are last: "."<br>";
	print_r(SortZerosLast([1, 0, 30, 1, 0, 9])); echo "<br>";

	function MostCommon($array){
		sort($array);
		print_r($array);
		$max = 1;
		$curr = 1;
		$common = $array[0];
		for ($i=1; $i < count($array); $i++) { 
			if($array[$i] == $array[$i - 1]){
				$curr ++;
			}
			elseif ($curr > $max) {
			 	$max = $curr;
			 	$curr = 1;
			 	$common = $array[$i - 1];
			}
			else{
				$curr = 1;
			}

		}

		return $common;
	}

	echo MostCommon([0, 1, 6, 1, 1, 1, 9]);

?>
