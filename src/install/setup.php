<?php
require_once ('../config/environment.php');
require_once('includes/database_class.php');

/*
|--------------------------------------------------------------------------
| CHECK REQUIREMENTS
|--------------------------------------------------------------------------
 */
// echo phpinfo();

if (!(phpversion() >= 5.6)) {
    echo "Installation failed. A php version> = 5.6 is required\n";
    die();
}

if (!extension_loaded('curl')) {
    echo "Installation failed. The curl extension is required\n";
    die();
}
echo "1";
// if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
//     echo 'We don\'t have mysqli!!!\n';
// } else {
//     echo 'Phew we have it!';
// }

/*
|--------------------------------------------------------------------------
| CHECK FOLDER PERMISSION
|--------------------------------------------------------------------------
 */

if (!is_writable('../saved_qrcode')) {
    echo "Installation failed. The folder where you save the qrcodes must have write permissions";
    die();
}
echo "2";

/*
|--------------------------------------------------------------------------
| DATABASE CREATION
|--------------------------------------------------------------------------
 */

$database = new Database();
echo "3";

// define("DATABASE_HOST","localhost");
// define("DATABASE_USER","root");
// define("DATABASE_PASSWORD","root");
// define("DATABASE_NAME","qrcode");
// define("DATABASE_PORT","3306");

if (!$database->create_database(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME, DATABASE_PORT)) {
    echo "The database could not be created, please check your database credentials!";
    die();
}
else if (!$database->create_tables(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME, DATABASE_PORT, DATABASE_PREFIX)) {
    echo "The database tables could not be created, please check your database credentials!";
    die();
}
else{
    echo "4";
}

// If no errors, redirect to index
header("Refresh: 1; finish.php");
echo "5";
?>