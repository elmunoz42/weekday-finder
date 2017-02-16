<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Date.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    session_start();

    if (empty($_SESSION['scores'])) {
        $_SESSION['scores'] = array();
    }

    $app = new Silex\Application();

    $app['debug']=true;


    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig',array('result'=>array()));
    });
    $app->post("/", function() use ($app) {
        $newDate = new Date();
        $result = $newDate->DayFinder($_POST['userInput']);
        return $app['twig']->render('form.html.twig',array("result"=>$result));

    });

    $app->post("/delete", function() use ($app) {
        Date::deleteAll();

        return $app['twig']->render('form.html.twig',array());
    });

    return $app;
?>
