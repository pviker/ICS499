<?php

include ("../controllers/db.php");

$date = date("m/d/Y");
$date=date_create($date);
date_add($date,date_interval_create_from_date_string("14 days"));
$futureDate = date_format($date,"m/d/Y");












?>