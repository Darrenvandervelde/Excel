<?php
session_start();

$timeout = 1800; // 30 minutes in seconds

if (isset($_SESSION['session_time']) && (time() - $_SESSION['session_time']) > $timeout) {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
}

// Update session time on activity
$_SESSION['session_time'] = time();

<DOCTYPE html>
<!-- INDEX FILE -->

<!-- Testing Device Media files ---> 

<!-- Testing For VPN | If VPN TRUE Divert to Take OFF VPN. --> 

<!-- Testing for IP Address if Banned for using this CRM. -->

</html>
