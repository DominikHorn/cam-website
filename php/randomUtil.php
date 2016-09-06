<?php
	// Seed random generator
	srand( microtime() * 1000000 );

	function getRandom() {
		return rand();
	}

	function getRandomBetween( $lower, $higher ) {
		return rand( $lower, $higher );
	}
?>