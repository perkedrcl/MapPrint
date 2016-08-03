<?php

var_dump('Radi ruta');
$email = $_POST["email"];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  	var_dump('Neispravan email');
} else {
	var_dump('Ispravan email');
}