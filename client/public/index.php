<?php
if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}


require_once __DIR__ . '/../vendor/autoload.php';

if(!isset($_SESSION)) {
    session_start();
}

// Register middleware
require_once __DIR__ . '/../src/middleware.php';

// Instantiate the app
$settings = require_once __DIR__ . '/../src/settings.php';

$app = new \Slim\App($settings);
new \HospitalApi\BasicApplicationAbstract($app);

// Set up dependencies
require_once __DIR__ . '/../src/dependencies.php';


// Register routes
require_once __DIR__ . '/../src/routes.php';

if( $_SERVER['REMOTE_ADDR'] == IP_SERVER_IMAGE ) {
    preg_match_all('/^(?!\/login).*/m', $_SERVER['REQUEST_URI'], $match, PREG_SET_ORDER, 0);

    if($match) {
        header("Content-type: application/json");
        echo json_encode([
            'status' => 401,
            'message' => "You don't have permission to access this page"
        ]);
        die;
    }
}

// Run app
$app->run();