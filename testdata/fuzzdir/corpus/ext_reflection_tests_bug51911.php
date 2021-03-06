<?php

class Foo {
   const X = 1;
   public function x($x = array(1)) {}
}

$clazz = new ReflectionClass('Foo');
$method = $clazz->getMethod('x');
foreach ($method->getParameters() as $param) {
    if ( $param->isDefaultValueAvailable())
        echo '$', $param->getName(), ' : ', var_export($param->getDefaultValue(), 1), "\n";
}

?>
