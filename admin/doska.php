<?php

defined('_JEXEC') or die('');

$controller = JControllerLegacy::getInstance('Doska');//DoskaController

$controller->registerTask('hello','h');

$app = jFactory::getApplication();
$input = $app->input;
$controller->execute($input->getCmd('task','display'));
$controller->redirect();

?>