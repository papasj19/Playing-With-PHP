<?php

/*
 
 documentation for date in php
 https://www.php.net/manual/en/function.date.php
 
*/

final class User
{
    private int $id;
    private string $name;
    private string $email;
    private string $password;
    private string $created_at;
    private string $updated_at;

    /*
    public function __construct(int $id,string $name,string $email,string $password, string $creat, string $updat){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->created_at = $creat;
        $this->updated_at = $updat;
    }
    */


    public function __construct(string $email,string $password){
        $this->email = $email;
        $this->password = $password;
    }
    
    public function setNewUser(User $toChange){
        $toChange->created_at = date("Y-m-d H:i:s");
    }
    
    public function setName(string $newName, User $toChange){
        $toChange->name = $newName;
        $toChange->updated_at = date("Y-m-d H:i:s");
    }
    
    public function setPass(string $newPass, User $toChange){
        $toChange->password = $newPass;
        $toChange->updated_at = date("Y-m-d H:i:s");
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public function setCreatedAt(string $created_at): void
    {
        $this->created_at = $created_at;
    }

    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(string $updated_at): void
    {
        $this->updated_at = $updated_at;
    }


    
    
 
}

    
    ?>
