<?php
namespace Rawane\Core;

class Database 
{
   private \PDO|null $pdo = null;

   public function connexionBD () : void
   {
        $servername = 'localhost:81';
        $dbname = 'Poo_MVC';
        $username = 'root@localhost';
        $password = 'root';
        $this->pdo = new \PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
   }
   public function closeConnexion () : void
   {
        $this->pdo = null;
   }
   public function executeSelect (string $sql, array $data = [], bool $single = false) : object | array | null
   {
        return null;
   }
   public function executeUpdate (string $sql, array $data = []) : int
   {
        return 0;
   }
}