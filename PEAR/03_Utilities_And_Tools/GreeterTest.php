<?php
// Call GreeterTest::main() if this source file is executed directly.
if (!defined("PHPUnit2_MAIN_METHOD")) {
	define("PHPUnit2_MAIN_METHOD", "GreeterTest::main");
}

require_once "PHPUnit2/Framework/TestCase.php";
require_once "PHPUnit2/Framework/TestSuite.php";

require_once "phpunit2_ex01.php";

/**
 * Test class for Greeter.
 * Generated by PHPUnit2_Util_Skeleton
 */
class GreeterTest extends PHPUnit2_Framework_TestCase {
	/**
	 * Runs the test methods of this class.
	 *
	 * @access public
	 * @static
	 */
	public static function main() {
		require_once "PHPUnit2/TextUI/TestRunner.php";

		$suite  = new PHPUnit2_Framework_TestSuite("GreeterTest");
		$result = PHPUnit2_TextUI_TestRunner::run($suite);
	}

	/**
	 * Sets up the fixture, for example, open a network connection.
	 * This method is called before a test is executed.
	 *
	 * @access protected
	 */
	protected function setUp() {
		/* Put setup code here... */
	}

	/**
	 * Tears down the fixture, for example, close a network connection.
	 * This method is called after a test is executed.
	 *
	 * @access protected
	 */
	protected function tearDown() {
		/* Put code to tear down tests here... */
	}

	/**
	 * @todo Implement testSayHello().
	 */
	public function testSayHello() {
		// Remove the following line when you implement this test.
		$greeter = new Greeter();
		$this->assertEquals('Hello, Nate!', $greeter->sayHello('Nate'));
	}
}

// Call GreeterTest::main() if this source file is executed directly.
if (PHPUnit2_MAIN_METHOD == "GreeterTest::main") {
	GreeterTest::main();
}
?>