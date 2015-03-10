<?php

    class Anagram
    {


        function anagramCheck($main_word, $array_to_compare)
        {
            $results = array();
            foreach($array_to_compare as $compare) {
                if($main_word == $compare) {
                    array_push($results, true);
                } else {
                    array_push($results, false);
                }
            }
            return $results;
        }
    }

?>
