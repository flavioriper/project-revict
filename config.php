<?php
// Absolute path to local system app
if (!defined('ABSPATH')){
    define('ABSPATH', dirname(__FILE__) . '/');
}

// Path to the server files
if (!defined('BASEURL')){
    define('BASEURL', '/p-revict/'); // Change the BASEURL to fit your enviroment configuration 
}

// Templates path 
define('HEADER_TEMPLATE', ABSPATH . 'misc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'misc/footer.php');

?>