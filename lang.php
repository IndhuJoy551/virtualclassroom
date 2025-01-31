<?php
session_start();

function loadLanguage($lang = "en") {
    $file = __DIR__ . "/languages/" . $lang . ".php";
    if (file_exists($file)) {
        return include($file);
    } else {
        return include(__DIR__ . "/languages/en.php"); // Default to English
    }
}

// Set language from session or default to English
$language = isset($_SESSION['lang']) ? $_SESSION['lang'] : "en";
$translations = loadLanguage($language);
?>
