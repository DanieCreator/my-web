<?php
require_once 'config/config.php';

// require_once 'lib/Controller.php';
// require_once 'lib/Core.php';
// require_once 'lib/Database.php';

/*******autoload core libraries**** */

//load helpers
require_once 'helpers/url_redirect.php';
require_once 'helpers/session_helper.php';

spl_autoload_register(function ($class) {
    require_once 'lib/' . $class . '.php';
});
