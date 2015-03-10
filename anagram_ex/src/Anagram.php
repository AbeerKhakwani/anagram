<?php

    class Anagram
    {


        function anagramCheck($main_word, $userlist_to_compare)
        {
            //create empty array; will be returned
            $results = array();

            //split main word into array of letters and sort
            $main_split_word = str_split(strtolower($main_word));
            sort($main_split_word);

            //explode field data enter each word seperated by space into an array called $temp_user_list_array ;
            $temp_user_list_array = explode(" ", $userlist_to_compare);

            //compare each word in userlist to main word
            foreach($temp_user_list_array as $compare) {


                //split each word in the exploded array and sort
                $temp_word = str_split(strtolower($compare));
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
