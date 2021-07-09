<?php



class A {
    


    function foo()
    {
        if (isset($this)) {
            echo '$this está definida (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this não está definida.\n";
        }
    }
}

class B
{
    function bar()
    {
        // Nota: a próxima linha pode lançar um warning E_STRICT.
        A::foo();
    }
}

$a = new A();
$r = new Conectar();
var_dump($r);

?>
