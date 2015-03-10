<?php

class Anagram
{


    function anagramCheck($main_word, $userlist_to_compare)
    {
        //create empty array; will be returned
        $results = array();

        //split main word into array of letters and sort
        $main_split_word = str_split(strtolower($main_word));

        //explode field data enter each word seperated by space into an array called $temp_user_list_array ;
        $temp_user_list_array = explode(" ", $userlist_to_compare);

        //compare each word in userlist to main word
        foreach ($temp_user_list_array as $compare) {
            //split each word in the exploded array and sort
            $temp_word = str_split(strtolower($compare));

            //get intersection of letters in main and temp words
            $intersection = array_intersect($main_split_word, $temp_word);

            if (count($intersection) == count($main_split_word)) {
                array_push($results, 'anagram');
            } else if ((count($intersection) > 0) AND (count($intersection) == count($temp_word))) {
                array_push($results, 'partial');
            } else {
                array_push($results, 'no');
            }
        }
        return $results;
   }
}

?>
