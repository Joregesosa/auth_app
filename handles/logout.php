<?php
session_start();
session_destroy();
header("location: /authentication_app/public/login.php");