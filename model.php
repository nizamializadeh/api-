<?php
define("CONTROLLER_PATH","Application/controller");
define("PUBLIC_PATH","Application/public/");
define("VIEWS_PATH","Application/view");
define("MODELS_PATH","Application/models");
define("DB_HOST","localhost");
define("DB_NAME","api");
define("SITE_URL","http://localhost/code/Framework");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
class model
{
    public $db;
    public function __construct()
    {
        $this->db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8",DB_USERNAME,DB_PASSWORD);
//        $this->db = new PDO("mysql:host=localhost;dbname=test","root","");
    }


}