<?php 

class Danli
{

//保存类实例的静态成员变量
    private static $_instance;

//private标记的构造方法
    private function __construct()
    {
        echo 'This is a Constructed method;';
    }

//创建__clone方法防止对象被复制克隆
    public function __clone()
    {
        trigger_error('Clone is not allow!', E_USER_ERROR);
    }

//单例方法,用于访问实例的公共的静态方法
    public static function getInstance()
    {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    public function test()
    {
        echo '调用方法成功';
    }

}

/*用new实例化private标记构造函数的类会报错
$danli = new Danli();

复制(克隆)对象将导致一个E_USER_ERROR
$danli_clone = clone $danli;
*/


//正确方法,用双冒号::操作符访问静态方法获取实例
$danli = Danli::getInstance();
$danli->test();

?>