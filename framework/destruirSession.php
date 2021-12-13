<?php
session_start();

unset($_SESSION['user']);

$_SESSION['user']="";
session_destroy();


ECHO json_encode(session_status());