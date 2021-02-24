<?php
require_once "interface.php";
class xmlExport implements canExport
{
    public function export()
    {
        echo "data format : xml";
    }
}
