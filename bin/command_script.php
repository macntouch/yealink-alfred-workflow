<?php

namespace AndreasWeber;

// bootstrap
$config = require_once __DIR__ . '/../inc/bootstrap.php';

// script
$script = new CommandScriptInput($config);

/** @var string $query Input query */
$script->invoke($query);
