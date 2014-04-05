<?php

require_once 'ClassA.php';

$obj1 = new ClassA;

$obj1->myFunc1();

$obj2 = new ClassA();

$obj2->myFunc2();

$obj1->myFunc1();

$obj2->myFunc1();