<?php
class database
{
    public $Host='localhost';
    public $dbname='db_name';
    public $user='root';
    public $pass='';
   public function __construct()
   {
       $this->dbconnect();
   }
   public function dbconnect()
   {

       try{
     $this->db = new PDO(sprintf("mysql:host=%s;dbname=%s",$this->Host,$this->dbname),$this->user,$this->pass);
  


       }
       catch(Exception $ex)
       {
           echo "Error:".$ex->getMessage();
           die();
       }
       catch(PDOException $ex)
       {
           echo "Error:".$ex->getMessage();
           die();
       }
     
   }

}
?>