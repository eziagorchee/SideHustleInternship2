<?php
    /*-----variable scope------
    Varaible scope refers to the
    area in the code that the code
    can be reference.

     we have local and global
     variables.
     Global variable: example is declaring
     a variable name
     */   
    $name= "<h1>Chiagozie</h1>";
    //function will see name as
    //local until when declared/
    //defined as global
   "How to call a GlobalVariable";
    $age= 22;

    function getName_n_age(){
        global $name;
        global $age;
        echo $name;
        echo $age;
    }
    getName_n_age();

     "bye guys"

?>