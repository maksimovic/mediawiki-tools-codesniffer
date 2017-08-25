<?php

class FOO extends BAR {

	/**
	 * @return void
	 */
	function __construct() {
	}

	/**
	 * @param int $a Just for test.
	 * @return string
	 */
	function dirname( $a ) {
		return BAR::dirname( __FILE__ );
	}

	/**
	 * @param int $a Just for test.
	 * @return string
	 */
	function foo( $a ) {
		return BAR::foo( __FILE__ );
	}

	/**
	 * @param int $a Just for test.
	 * @return string
	 */
	function bar( $a ) {
		return BAR::bar( 0 );
	}
}

/**
 * Failed examples.
 * @return void
 */
function wfFailedExamples() {
	$tmp = dirname( __FILE__ );
}

/**
 * Passed examples.
 * @return void
 */
function wfPassedExamples() {
	$foo = FOO();

	$tmp = dirname( __FILE__ . "/.." );
	$tmp = dirname( joinpaths( __FILE__, ".." ) );
	$tmp = $foo->dirname( __FILE__ );

	$f = __FILE__;
	$tmp = dirname( $f );
	$tmp = dirname( $f . "/.." );
	$tmp = dirname( joinpaths( $f, ".." ) );
	$tmp = $foo->dirname( $f );
}
