<?php 

/**
 * psd-0 autoloader
 */
require 'autoload.php';

$post = new stdClass();
$post->title = '我的标题';


/*$dedug = new Dedug();
$dedug->dump($post);*/

Debug::dump($post);
echo '<br>';
echo Debug::$foo;
echo '<br>';

$dumper = new Debug();
$dumper::$wrapperStart = 'new value';
echo $dumper::$wrapperStart;

$anotherdumper = new Debug();
echo $anotherdumper::$wrapperStart;


class Debug{

	static $wrapperStart = '<pre>';
	static $wrapperEnd = '</pre>';
	static $foo = 'bar';

	static public function dump($var){
		echo self::$wrapperStart;
		var_dump($var);
		echo self::$wrapperEnd;
	}
}



 ?>