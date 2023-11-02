<?php

require_once 'repository.php';

class MysqlDB implements Repository {

     public function showUsers(): array {
        return ["Juan", "Salome", "Miguel"];
     }

}