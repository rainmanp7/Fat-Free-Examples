<?php
// Fat-Free Framework 3.7.1 Example.
// PHP as framework template
// Pulling html local file with debug set here.
// Tested on PHP 5.6.32, 5.6.38, 7.2.3, 7.3.3, 7.4.3

$f3=require('lib/base.php');
$f3->set('DEBUG',3);

$f3->route('GET /',
    function($f3) {
        $f3->set('name','world');
        $view=new View;
        echo $view->render('template.html');
    }
);
$f3->run();