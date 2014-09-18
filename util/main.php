<?php
ini_set('display_errors', 0);

// Get the document root, absolute path
//relative --> include, header, ... forgot root --> file is not exist
$doc_root = $_SERVER['DOCUMENT_ROOT'];

// Get the application path
$uri = $_SERVER['REQUEST_URI'];
$dirs = explode('/', $uri);
$app_path = '/TestPJ/';

// Set the include path
set_include_path($doc_root . $app_path);

// Get common code
require_once('util/tags.php');
require_once('model/database.php');

// Define some common functions
function display_db_error($error_message) {
    global $app_path;
    include 'errors/db_error.php';
    exit;
}

function display_error($error_message) {
    global $app_path;
    include 'errors/error.php';
    exit;
}

function redirect($url) {
    session_write_close();
    header("Location: " . $url);
    exit;
}

// Start session to store user and cart data
session_start();
?>