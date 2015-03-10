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
        $list=$_POST['list_word'];
        $userword_array = explode(" ", $list);

        $return= $newAnagram->anagramCheck( $_POST['main_word'],$list);
        return $app['twig']->render("words.twig", array('result' => $return, 'user_words' => $userword_array));
    });

    return $app;

?>
