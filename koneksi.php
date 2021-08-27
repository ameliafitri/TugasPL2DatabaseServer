<?php

// Class database (koneksi database)
class Database{

// Property
var $host = "localhost";
var $username = "root";
var $password = "amalia123";
var $database = "mahasiswaAmalia14197075";
var $connection;

// Method koneksi kedalam database

function Connect(){
$this->connection=mysqli_connect($this->host, $this->username, $this->password,$this->database);
return $this->connection;

}
}

?>