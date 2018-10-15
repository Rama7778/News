<?php
require_once __DIR__ . '/../autoload.php';

use Yaurau\Models\{ChoiceController, Check, Values};

if(Check::checkCreateTables() == false){
    Check::setFormConst();
}
Check::setFormConst();
ChoiceController::runController('CreateLogin');
if(Check::setForm() == true){
    $form = new Values();
    $form->insert();
} else {
    ChoiceController::runController('CreateLogin');
}