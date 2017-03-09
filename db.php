<?php

function ConnectDB(){
    $connection = new mysqli('localhost','root','','calendar');

    if( ! $connection ) {
    	die('No connection: ' . mysqli_connect_error());
	}

    return $connection;
}

function GetBirthdays($connection){

}