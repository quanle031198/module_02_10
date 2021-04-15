<?php
include_once 'Dancer.php';
$person1 = new Dancer("Hung", "nam");
$person2 = new Dancer("Tu", "nam");
$person3 = new Dancer("Anh", "nam");
$person4 = new Dancer("Cuong", "nam");
$person5 = new Dancer("Hong", "nu");
$person6 = new Dancer("Mai", "nu");
$person7 = new Dancer("Cuc", "nu");
$person8 = new Dancer("Thuong", "nu");

//row1
$row1 = new SplQueue();
$row1->enqueue($person1);
$row1->enqueue($person2);
$row1->enqueue($person3);
$row1->enqueue($person4);
echo "<pre>";
print_r($row1);


//row2
$row2 = new SplQueue();
$row2->enqueue($person5);
$row2->enqueue($person6);
$row2->enqueue($person7);
$row2->enqueue($person7);

echo "<pre>";
print_r($row2);

echo "<br/>";
while ($row1->isEmpty() == false && $row2->isEmpty() == false) {
    echo $row1->dequeue()->name . " nhay cung " . $row2->dequeue()->name . "<br/>";
    if ($row2->isEmpty() && $row1->isEmpty()) {
        echo "het nguoi";
    } else if ($row1->isEmpty()) {
        echo "nu dung doi";
    } else if ($row2->isEmpty()) {
        echo "nam dung doi";
    }
}


