<?php
include_once 'Dancer.php';

$queueMale = new SplQueue();

$queueFemale = new SplQueue();

$male1 = new Dancer('man1','male');
$male2 = new Dancer('man2','male');
$male3 = new Dancer('man3','male');
$male4 = new Dancer('man4','male');

$female1 = new Dancer('girl1' , 'female');
$female2 = new Dancer('girl2' , 'female');
$female3 = new Dancer('girl3' , 'female');

$queueMale->enqueue($male1);
$queueMale->enqueue($male2);
$queueMale->enqueue($male3);
$queueMale->enqueue($male4);

$queueFemale->enqueue($female1);
$queueFemale->enqueue($female2);
$queueFemale->enqueue($female3);

daceCouple($queueMale, $queueFemale);
daceCouple($queueMale, $queueFemale);
daceCouple($queueMale, $queueFemale);
daceCouple($queueMale, $queueFemale);

$female4 = new Dancer('girl4' , 'female');
$female5 = new Dancer('girl5' , 'female');
$female6 = new Dancer('girl6' , 'female');

$queueFemale->enqueue($female4);
$queueFemale->enqueue($female5);
$queueFemale->enqueue($female6);

daceCouple($queueMale, $queueFemale);
daceCouple($queueMale, $queueFemale);

$waite = $queueFemale->count() + $queueMale->count();
echo ("Số người đang đợi là: " . $waite);

function daceCouple($queueMale, $queueFemale)
{
    if ($queueFemale->isEmpty() || $queueMale->isEmpty()) {
        echo "Không đủ nam (nữ) !" . "<br>";
    }else {
        $male = $queueMale->dequeue();
        $female = $queueFemale->dequeue();
        echo ("Cặp đôi: " . $male->getName() . " vs " . $female->getName() . "<br>");
    }
}

