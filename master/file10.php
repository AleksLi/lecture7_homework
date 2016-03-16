<?php
/**
 * Created by PhpStorm.
 * User: Л
 * Date: 3/16/2016
 * Time: 11:42 PM
 */

class Base {
    function funct() {
        echo "<h2>Функция базового класса</h2>";
    }
    function base_funct() {
        $this->funct();
    }
}

class Derivative extends Base {
    function funct() {
        echo "<h3>Функция производного класса</h3>";
    }
}

$b = new Base();
$d = new Derivative();

$b->base_funct();
$d->funct();
$d->base_funct();