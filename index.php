<?php 
//https://kinsta.com/fr/blog/php-8/

spl_autoload_register(function($className) {
        $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
        $classPath = $_SERVER['DOCUMENT_ROOT'] . '/src/' . $className . '.php';    

        if (!file_exists($classPath)) {
            throw new \ErrorException("Can't load class $className");
        }

        include $classPath;
});

use \attributes\Attributes;
use \misc\SomeClass;

$attributes = new Attributes();

$reflector = new \ReflectionClass(Attributes::class);
foreach ($reflector->getAttributes() as $attrib) {
    echo $attrib->getName() . PHP_EOL;
    print_r($attrib->getArguments()) . PHP_EOL;
    //$attrib->newInstance() . PHP_EOL;
}

echo "<hr>";

echo match(10.2) { //match expression
    "10.2" => "Not good",
    10.2 => "Good..."
};

echo "<hr>";

$someClass = new SomeClass();
echo $someClass?->getNumber();
echo $someClass?->getStuff()?->getInfo();//null safe

echo "<hr>";

var_dump(0 == 'foobar');

echo "<hr>";

$array = array_fill(start_index:-3, count:6, value:true); //negative index, named params

var_dump($array);

echo "<hr>";

//$value = $test ?? throw new \InvalidArgumentException();//can throw here now

echo "<hr>";

$map = new \WeakMap();
$class = new stdClass();
$map[$class] = 42;
var_dump($map);
unset($class);
var_dump($map);

echo "<hr>";

if (str_contains("haystack here php 8", "php")) {
    echo "contains php";
} else {
    echo "does not contains php";
}

echo "<hr>";

if (str_starts_with("haystack here php 8", "haystack")) {
    echo "start with haystack";
} else {
    echo "does not start with haystack";
}

echo "<hr>";

if (str_ends_with("haystack here php 8", "php")) {
    echo "ends with php";
} else {
    echo "does not ends with php";
}

echo "<hr>";

if (!$map instanceof Attributes) {
    throw new TypeError('Expected ' . Attributes::class . ' got ' . get_debug_type($map));  
}