<?php
/*
 * Sometime too hot the eye of heaven shines
 */

$app = require '../tadpole/bootstrap.php';

$tadpoleController = 'Tadpole\Controllers\tadpoleController';

$app->get('/home', \Tadpole\Controllers\tadpoleController::class.':home');



$app->run();