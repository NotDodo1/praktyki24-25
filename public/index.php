<?php

use App\Controllers\UserManagementController;
use App\Kernel;

require_once __DIR__ . '/../vendor/autoload.php';

$_GET['id'] = 1;

$kernel = Kernel::getInstance();

$kernel->run();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formularz rejestracji</title>
</head>
<body>

</body>
</html>




