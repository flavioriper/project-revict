<?php
/** caminho absoluto para a pasta do sistema */
if (!defined('ABSPATH')){
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** caminho no server para o sistema */
if (!defined('BASEURL')){
    define('BASEURL', '/p-revict/');
}

/** caminhos dos templates e footer */
define('HEADER_TEMPLATE', ABSPATH . 'misc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'misc/footer.php');

?>