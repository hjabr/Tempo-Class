<?php

// include Tempo class
require_once "tempo.class.php";


/**
 * 
 *      Example
 * 
 */

try {
        
        $name = "Hesham Jabr";
        // $name1 = "Hesham Jabr";
        // $name2 = "Hesham Jabr";
        // $name3 = "Hesham Jabr";

        
        // ./tempo - folder path
        // home - 'home.tempo' file in 'tempo' folder path
        
        $temp = new Tempo("./tempo","home");
        $temp->set("name", $name);
        // $temp->set("name1", $name1);
        // $temp->set("name2", $name2);
        // $temp->set("name3", $name3);
        $temp->end();

        
} catch (Exception $e) {
        echo $e->getMessage();
}
