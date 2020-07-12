<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Psi\Libraries\HelloWorldProgramByLsolankinew\CExample;

$instance = new CExample();

echo $instance->hello("Hello World!");
