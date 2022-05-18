<?php
namespace Rawane\Core;

class Database 
{
     private \PDO | null $pdo = null;

     public function connexionDB() : void
     {
          try 
          {
               $this->pdo = new \PDO("mysql:dbname=Poo_MVC;host=localhost:3307","root","");
          } 
          catch (\Exception $th) 
          {
               die('Connexion refusée');
          }
     }
     public function closeConnexion () : void
     {
          $this->pdo = null;
     }
     public function executeSelect (string $sql, array $data = [], bool $single = false) : object | array | null
     {
          $query = $this->pdo->prepare ($sql);
          $query->execute ($data);
        
          if($single)
          {
               if($query->rowCount() == 0)
               {
                    return null;
               }
               else
               {
                    $result = $query->fetch(\PDO::FETCH_OBJ );
               }
          }
          else
          {
               if($query->rowCount() == 0)
               {
                    return null;
               }
               else
               {
                    $result = $query->fetchAll(\PDO::FETCH_OBJ );
               }
          }
          return $result;
     }
     public function executeUpdate (string $sql, array $data = []) : int
     {
          $query = $this->pdo->prepare ($sql);
          $query->execute ($data);
          return $query->rowCount();
     }
}