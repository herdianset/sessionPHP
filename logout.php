<?php

session_start();
session_destroy();

echo "<script>alert('Sampai jumpa lagi');window.location='login.php';</script>";
