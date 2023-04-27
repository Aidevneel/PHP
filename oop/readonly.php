<?php

class User {
    public readonly int $uid;           //important to declare type

    public function __construct(int $uid) {
        $this->uid = $uid;
        echo "you can initialize readonly property only one time and also you can not directly set a value.Readonly property must have typerefuses to modify a readonly property.<br>";
    }
}

$user = new User(42);

echo "incrementing it, change value, references, and array operations are not allowed.<br>unsetting initialized readonly property not allowed";
$user->uid = 88;        //error bcz it is already initialized
echo $user->uid;

unset($user->uid);      //error,unsetting initialized readonly property not allowed
?>