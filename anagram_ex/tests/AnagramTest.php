<?php

    require_once "src/Anagram.php";


    class AnagramTest extends PHPUnit_Framework_TestCase
    {

        function test_Match_letters_true(){
            //Arrange
            $test_Anagram= new Anagram;
            $input1 = "a";
            $input2 = "a";

            //Act
            $result = $test_Anagram->anagramCheck($input1,$input2);

            //Assert
            $this->assertEquals(array(true), $result);
        }

        function test_matchLetters_false()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = "a";
            $input2 = "b";

            //Act
            $result = $test_Anagram->anagramCheck($input1, $input2);

            //Assert
            $this->assertEquals(array(false), $result);
        }

        function test_matchLetters_two_words()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = "a";
            $input2 = "a b";

            //Act
            $result = $test_Anagram->anagramCheck($input1, $input2);

            //Assert
            $this->assertEquals(array(true, false), $result);
        }

        function test_matchWords()
        {
            $test_Anagram = new Anagram;
            $input1 = "bread";
            $input2 = "beard";

            //Act
            $result = $test_Anagram->anagramCheck($input1, $input2);

            //Assert
            $this->assertEquals(array(true), $result);

        }

        function test_matchWordsFAIL()
        {
            $test_Anagram = new Anagram;
            $input1 = "bread";
            $input2 = "beord bread";

            //Act
            $result = $test_Anagram->anagramCheck($input1, $input2);

            //Assert
            $this->assertEquals(array(false, true), $result);

        }

        function test_checkIn_One_Feild()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = "bread";
            $input2 = "read beard";

            //Act
            $result = $test_Anagram->anagramCheck($input1, $input2);

            //Assert
            $this->assertEquals(array(false,true), $result);
        }
    }

?>
