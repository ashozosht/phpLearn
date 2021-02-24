<?php
require_once "interface.php";
class htmlExport implements canExport
{
    public function export()
    {
        echo "data format : xml";
    }
}
