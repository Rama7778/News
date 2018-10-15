<?php
require_once __DIR__ . '/../autoload.php';

use Yaurau\Models\{ChoiceController, Check};

Check::setFormConst();
ChoiceController::runController('CreateLogin');
