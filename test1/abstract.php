<?php
include_once "contracts.php";
abstract class onlineGetWay
{
    protected $options;
    public function __construct()
    {
        $this->options = array(
            'mellat' => array(
                'merchant' => 'something',
                'username' => 'asdasd',
                'password' => 'defghjk'
            ),

            'saman' => array(
                'api_key' => 'a5s16ad15ad156as1515sda',
            ),

            'parsian' => array(
                'username' => 'asdasd',
                'password' => 'defghjk'
            ),
        );
    }
    abstract public function sendRequest();
    abstract public function verifyRequest();
}
class mellat extends onlineGetWay
{
    private $gatewayname;
    private $mellatOptions;
    public function __construct()
    {
        $this->gatewayname = 'mellat';
        onlineGetWay::__construct();
        $this->mellatOptions = $this->options[$this->gatewayname];
    }
    public function sendRequest()
    {
        var_dump(($this->mellatOptions));
    }
    public function verifyRequest()
    {
        var_dump(($this->options));
    }
}
$gateway = Factory::make('mellat');
$gateway->sendRequest();

class Factory
{
    public static function make($class)
    {
        $className = ucfirst($class);
        if (!class_exists($className)) {
            return false;
        }
        return new $className;
    }
}
