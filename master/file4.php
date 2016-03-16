<?php
// Создаем новый класс Coor:
function Getname() {
    echo $this->name;
}
class Webpage {
    var $bgcolor;
    function Webpage($color) {
        $this->bgcolor = $color;
    }
}

// Вызвать конструктор класса Webpage
$page = new Webpage("brown");
?>
?>