<?php

/*
 Ex 6
 
 remove_task.php: This script receive the number of task that needs to be removed as a paramter.
 
 */


    function deleteTaskFromFile(int $indexRemove): void {
        $myfile = fopen("tasks.txt", "r") or die("Unable to open file!");
        $counter = 0;
        $infoSaved = array();
        //info = fread($myfile,filesize("webdictionary.txt"));
        while(!feof($myfile)) {
            $infoSaved[] = fgets($myfile);
            $counter++;
        }
        fclose($myfile);
        
        $myfile = fopen("tasks.txt", "w") or die("Unable to open file!");
        for($n = 0; $n<$counter; $n++){
            if($n != $indexRemove){
                $txt = $infoSaved[$n] . "\n";
                fwrite($myfile, $txt);
            }
        }
        fclose($myfile);
    }

deleteTaskFromFile($argv[1]);
