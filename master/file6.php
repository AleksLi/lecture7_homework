<?php
// Создаем новый класс Coor:
class Coor {
// данные (свойства):
    var $name;
    var $city;

// Инициализирующий метод:
    function Init($name) {
        $this->name = $name;
        $this->city = "London";
    }

}

echo "My man";