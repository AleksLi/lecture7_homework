<?php
// Создаем новый класс Coor:
class A {
    function example() {
        echo "Это первоначальная функция A::example().<br>";
    }
}

class B extends A {
    function example() {
        echo "Это переопределенная функция B::example().<br>";
        A::example();
    }
}

// Не нужно создавать объект класса A.
// Выводит следующее:
// Это первоначальная функция A::example(). dwad
//   Это переопределенная функция B::example().
//   Это первоначальная функция A::example().
$b->example();