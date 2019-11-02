<?php
require_once("./start.php");

App\Session::destroy();
header("Location: login.php");