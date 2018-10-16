<?php
require_once __DIR__ . '/../autoload.php';

use Yaurau\Models\{ChoiceController, Check, Maker};

if(Check::checkCreateConst() == false){
    Check::setFormConst();
}
ChoiceController::runController('CreateLogin');
if(Check::setForm() == true){
    Maker::runCreateTables();
} else {
    ChoiceController::runController('CreateLogin');
}

