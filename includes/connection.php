<?php
$db = mysqli_connect('localhost', 'root', '') or
       die('Unable to connect. Check your connection parameters.');
mysqli_select_db($db, 'dbms_project') or die(mysqli_error($db));
