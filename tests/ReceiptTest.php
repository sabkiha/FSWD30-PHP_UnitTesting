<?php
namespace TDD\Test;
       // declare(strict_types=1);
       
use PHPUnit\Framework\TestCase; // imports PHPUnit core class called TestCase
use TDD\Receipt; // imports Receipt class
// Create Test Class

/*
* @covers TDD\Receipt
*/
class ReceiptTest extends TestCase {
   
   public function setUp() {
       $this->Receipt = new Receipt();// create new instance of the Receipt class
   }
   public function tearDown() {
       unset($this->Receipt); // unset the instance to ensure that PHP doesn't carry any over from one test to the next
   }

   public function testTotal() {

       $input = [0, 2, 5, 8]; // put the inputs in its own array
       $output = $this->Receipt->total($input); // store the sum of the array within a $output variable
       $this->assertEquals( // Built-in assertEquals() method for defining the test. It accepts three parameters
               14, // 1st param is expected value
               $output, // 2nd param is the $output variable
               'When summing the total should equal 15' // 3rd param is a message displayed in case of failure
               );
   }

           public function testTax() {
               $inputAmount = 5;
               $inputTax = 0.25;
               $output = $this->Receipt->tax($inputAmount, $inputTax);
               $this->assertEquals(1.25, $output, 
                   'Wrong tax calculation, expected: 1.25'   
                   );
       }
}