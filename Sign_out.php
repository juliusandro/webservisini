<?php
session_start();
session_regenerate_id();
session_destroy();
header('location:Login_form(basic).php');

?>