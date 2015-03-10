<?php

    class Anagram
    {


        function anagramCheck($main_word, $array_to_compare)
        {

            foreach($array_to_compare as $compare)
            if($main_word == $compare){

                return true;

            }
        }
    }

?>
