<?php

define("DB_HOST","localhost");
define("DB_PORT",3306);
define("DB_NAME","tchat");
define("DB_LOGIN","root");
define("DB_PWD","");
define("DB_CHARSET","utf8");

$db = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
