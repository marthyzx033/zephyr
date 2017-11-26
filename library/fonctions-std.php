<?php
function getGet($var)
{
	$retour = (isset($_GET[$var]))?$_GET[$var]:'';
	return $retour;
}
function getPost($var)
{
	$retour = (isset($_POST[$var]))?$_POST[$var]:'';
	return $retour;
}