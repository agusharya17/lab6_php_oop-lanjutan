<?php

require("class/database.php");
require_once("template/header.php");
require_once("class/form.php");

 class Tugas{
    private $config = [];
    public function __construct($variabel)
    {
        $this->config=$variabel;
    }
    public function x($tugas){
        if (array_key_exists($tugas,$this->config)){
            require($this->config[$tugas]);
        }
        else{
            require($this->config["home"]);
        }
    }
}

$url=[
    "home"=>"module/home.php",
    "about"=>"module/about.php",
    "contact"=>"module/contact.php",
    "add"=>"module/artikel/add.php",
    "update"=>"module/artikel/update.php",
    "hapus"=>"module/artikel/hapus.php"
];
$bagus = new tugas($url);
$bagus->x(@$_REQUEST["mod"]);
require_once("template/footer.php");