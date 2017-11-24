<?php

namespace Tienda;

session_start();
$_SESSION['cart'] = null;

header('location: tienda.php');

