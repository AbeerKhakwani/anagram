<?php

    require_once __DIR__ .'/../vendor/autoload.php';
    require_once __DIR__ .'/../src/Anagram.php';

    session_start();

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {

            return $app['twig']->render("form.twig");
    });



    $app->post('/words', function() use ($app) {

        $newAnagram= new Anagram();
        $array_of_list=array($_POST['list_word_1'],$_POST['list_word_2'],$_POST['list_word_3'],$_POST['list_word_4']);
        $return= $newAnagram->anagramCheck( $_POST['main_word'],$array_of_list);
        return $app['twig']->render("words.twig", array('result' => $return, 'user_words' => $array_of_list));
    });

    return $app;

?>
