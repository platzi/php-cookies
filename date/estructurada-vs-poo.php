<?php

// Por procedimientos / estructurada / funciones

/* $interval = date_interval_create_from_date_string("5 days");
$date = date_create();
date_add($date, $interval);
echo date_format($date, "Y-m-d"); */

// POO
$interval = DateInterval::createFromDateString("5 days");
$date = new DateTime();
$date->add($interval);
echo $date->format("Y-m-d");