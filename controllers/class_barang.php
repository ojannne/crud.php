<?php 
   class barang{
   private $dbh;
           public function __construct($dbh){
               $this->dbh = $dbh;
           }
   
           public function dataBarang(){
               $sql="SELECT * FROM Barang";
               $rs = $this->dbh->query($sql);
               return $rs;
           }
           
           public function getAllJenis(){
               $sql = "SELECT * FROM jenis_barang";
               // fungsi query, eksekusi query dan ambil datanya
               $rs = $this->dbh->query($sql); 
               return $rs;
           }
        }
?>