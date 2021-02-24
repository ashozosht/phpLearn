<?php
require_once "interface.php";
class jsonExport implements canExport
{
    public function export()
    {
        echo "data format : JSON";
    }
}
