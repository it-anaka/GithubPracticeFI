<?php
/**
 * euc + lf
 */

 class HelloWorld
 {
     /**
      * @var PDO
      */
     private $pdo;
     public function __construct(PDO $pdo)
     {
         $this->pdo = $pdo;
     }
     public function hello($what = 'World')
     {
         $sql = "INSERT INTO hello VALUES (" . $this->pdo->quote($what) . ")";
         $this->pdo->query($sql);
         return "やあ $what";
     }
     /**
      * あれこれ日本語でコメントを入れてみる
      * このくらい日本語があればわかってくれるかな？
      */
     public function what()
     {
         $sql = "SELECT what FROM hello";
         $stmt = $this->pdo->query($sql);
         return $stmt->fetchColumn();
     }
 }
