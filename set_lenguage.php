<?php
session_start();

if (isset($_POST['lang'])) {
    $_SESSION['lang'] = $_POST['lang'];
}

header("Location: index.php"); // Redirect back to homepage
exit();
?>
