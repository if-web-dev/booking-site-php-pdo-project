<?php

/*constante URL */

define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http").
"://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));

/*constante d'acces à la DB */

define("MYHOST","localhost");

define("MYDBNAME","booking");

define("PHPMYADMINID","root");

define("PHPMYADMINPASS","");