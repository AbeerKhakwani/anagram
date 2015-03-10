<?php

    require_once "src/Anagram.php";


    class AnagramTest extends PHPUnit_Framework_TestCase
    {

        function test_Match_letters_true(){
            //Arrange
            $test_Anagram= new Anagram;
            $input1 = "a";
            $input2 = array("a");

            //Act
            $result = $test_Anagram->anagramCheck($input1,$input2);

            //Assert
            $this->assertEquals(true , $result);
        }

        function test_matchLetters_false()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = "a";
            $input2 = array("b");

            //Act
            $result = $test_Anagram->anagramCheck($input1, $input2);

            //Assert
            $this->assertEquals(false, $result);
        }
    }

?>
