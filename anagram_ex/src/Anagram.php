<?php

    class Anagram
    {


        function anagramCheck($main_word, $array_to_compare)
        {
            $results = array();

            $main_split_word = str_split($main_word);
            sort($main_split_word);

            foreach($array_to_compare as $compare) {

                $temp_word = str_split($compare);
                sort($temp_word);

                if($main_split_word == $temp_word) {
                    array_push($results, true);
                } else {
                    array_push($results, false);
                }
            }
            return $results;
        }
    }

?>
