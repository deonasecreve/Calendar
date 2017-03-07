<?php
    // maak een verbinding met MySQL
    $connection = mysqli_connect('localhost', 'root');
    // geef aan welke database we willen gebruiken
    mysqli_select_db($connection, 'calendar');
