<?php

class cards {	
	// store list of cards already alloted 
	public static  $cards_allocated;

	function init() {
		self::$cards_allocated = array();
	}

	function getCardsForPlayer() {
		$ret_array = array();

		while (count($ret_array)<13) {
			$new_card = mt_rand(101,152);
			if (!(in_array($new_card, self::$cards_allocated))) {
				array_push($ret_array, $new_card);
				array_push(self::$cards_allocated, $new_card);
				//commented debugging code
				/*echo "<html>
					<body>
					<p>
					added".$new_card."to the allocated cards</p>";*/
			}
		}
		return $ret_array;
	}
	function getSpades($arr) {
		$ret_array = array();
		foreach ($arr as $temp) {
			if ($temp >= 140 && $temp<=155) {
				array_push($ret_array, $temp);
			}
		}
		return $ret_array;
	}

	function getHearts($arr) {
		$ret_array = array();
		foreach ($arr as $temp) {
			if ($temp >= 127 && $temp<=139) {
				array_push($ret_array, $temp);
			}
		}
		return $ret_array;
	}

	function getClubs($arr) {
		$ret_array = array();
		foreach ($arr as $temp) {
			if ($temp >= 114 && $temp<=126) {
				array_push($ret_array, $temp);
			}
		}
		return $ret_array;
	}

	function getDiamonds($arr) {
		$ret_array = array();
		foreach ($arr as $temp) {
			if ($temp >= 101 && $temp<=113) {
				array_push($ret_array, $temp);
			}
		}
		return $ret_array;
	}
}// end of class
?>