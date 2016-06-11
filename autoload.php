<?php
function my_autoloader($class) {
    include '/Classes/' .
        strtolower($class) . '.class.php';
}
 
spl_autoload_register('my_autoloader');

/*
https://www.facebook.com/groups/WebDevPk/

 */