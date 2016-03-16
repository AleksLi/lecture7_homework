<?php
// Создаем новый класс Coor:
function Getname() {
    echo $this->name;
}
class Coor {
// данные (свойства):
    var $name;

// методы:


}

// Создаем объект класса Coor:
$object = new Coor;
// Теперь для изменения имени используем метод Setname():
$object->Setname("Nick");
// А для доступа, как и прежде, Getname():
$object->Getname();
// Сценарий выводит 'Nick'
?>