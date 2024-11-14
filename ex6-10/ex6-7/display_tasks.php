<?php
include 'add_task.php';

/*
 Ex 6
 
 display_tasks.php: This script shows all the entries of the file.
 
 file operation
 https://www.w3schools.com/php/php_file_open.asp
 
 Ex 7
 display_tasks.php: This script shows all the entries of the file. If the script receives the flag --completed as a parameter, it should only display the completed tasks.
 */

    //ex 7
    function displayTaskFromFileCompleted(string $completedOrNot): void {
        $myfile = fopen("tasks.txt", "r") or die("Unable to open file!");
        $counter = 0;
        $infoSaved = array();
        //info = fread($myfile,filesize("webdictionary.txt"));
        while(!feof($myfile)) {
            $infoSaved[] = fgets($myfile);
            if(str_contains($completedOrNot,'--completed')){
                if($infoSaved[$counter]->getStatus() === '1'){
                    $txt = $infoSaved[counter]->getName . " " . $infoSaved[$counter]->getStatus . "\n";
                    echo $txt;
                }
            }else{
                $txt = $infoSaved[$counter]->getName . " " . $infoSaved[$counter]->getStatus . "\n";
                echo $txt;
            }
            $counter++;
        }
        fclose($myfile);
    }

    //ex 6
    function displayTaskFromFile(): void {
        $myfile = fopen("tasks.txt", "r") or die("Unable to open file!");
        //info = fread($myfile,filesize("webdictionary.txt"));
        while(!feof($myfile)) {
          echo fgets($myfile) . "<br>";
        }
        fclose($myfile);
    }

displayTaskFromFile();
displayTaskFromFileCompleted($argv[1]);
