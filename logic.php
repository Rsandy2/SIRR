<?php

    $questions = file_get_contents("QNA.txt");
    $content = [];
    foreach(explode("\n", $questions) as $line){
        $content[] = explode("|", $line);
    }

    function addUser($name){

        $username = $name;
    
        $file = "acct.txt";
        $tuples = file_get_contents($file);
        $tuples .= "\n" . $username ;
        file_put_contents($file, $tuples);
    
    }

    function login($name){
        $file = file_get_contents("acct.txt");
        $users = explode("\n", $file);
        
        $result = array_search($name, $users, true);
        //if name is not found
        if($result === false){
            addUser($name);
            echo "Good Luck " . $name . "!";
        }
        //if found
        else{
            echo "Good Luck " . $name . "!";
        }
    }
    ?>