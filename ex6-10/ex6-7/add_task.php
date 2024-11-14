<?php

/*
 Ex 6
 
 add_task.php: This file is going to receive a task (string) as a parameter and it will store it in a txt file.
 
 file operation
 https://www.w3schools.com/php/php_file_open.asp
 
 Ex 7
 add_task.php: Add a new task to the list. Each line of the file must contain the task and its current status (0 by default and 1 for the completed tasks)
 */

    final class Task{
        private string $name;
        private int $status;
        
        public function __construct(string $name){
            $this->name = $name;
            $this->status = 0;
        }
        
        public function getName(){
            return $this->name;
            
        }
        
        public function getStatus(){
            return $this->status;
            
        }
        
        public function changeStatus(int $newStatus){
            $this->status = $newStatus;
        }
    }

    //ex 7
    //complete_task: Receives a task number as a parameter and marks the task as completed (set the value to 1)
    function completeTask(Task $taskChange): Task {
        return $taskChange->changeStatus(1);
    }


    //ex 7
    function writeTaskFile(Task $taskWrite): void {
        $myfile = fopen("tasks.txt", "a") or die("Unable to open file!");
        $txt = $taskWrite->getName . " " . $taskWrite->getStatus . "\n";
        fwrite($myfile, $txt);
        fclose($myfile);
    }

    //ex 6
    function writeStringFile(string $taskWrite): void {
        $myfile = fopen("tasks.txt", "a") or die("Unable to open file!");
        $txt = $taskWrite . "\n";
        fwrite($myfile, $txt);
        fclose($myfile);
    }

    
writeStringFile($argv[1]);
