<?php

use App\Exceptions\Handler;

require_once "htmlExport.php";
require_once "xmlExport.php";
require_once "jsonExport.php";

$export = "json";
$handler = $export . 'Export';
$handlerObject = new $handler;

class exportHandler
{
    public function doExport(canExport $handler)
    {
        $handler->export();
    }
}

$object = new exportHandler();
$object->doExport($handlerObject);
