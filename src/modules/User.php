<?php
    class User{
        public $id = "";
        public $username = "";
        public $prename = "";
        public $name = "";
        public $avatar = "";
        public $right = "";

        private function connectdb(){
            try{
                $db = new PDO('mysql:host=localhost;dbname=thala-admin;charset=utf8', 'root', '');
                return $db;
            }
            catch(PDOException $e){
                print "Erreur ! : ".$e->getMessage();
                die();
            }
        }

        public function login($username, $password){
            $db = $this->connectdb();

            $query = $db->prepare("SELECT id FROM team WHERE username = '$username'");
            $query->execute();
            $count = $query->RowCount($query);
            if($count == 1){
                $query = $db->prepare("SELECT password FROM team WHERE username = '$username'");
                $query->execute();
                $result = $query->fetch(PDO::FETCH_OBJ);
                $pass = $result->password;
                if(password_verify($password, $pass)){
                    $query = $db->prepare("SELECT * FROM team WHERE username = '$username'");
                    $query->execute();
                    $result = $query->fetch(PDO::FETCH_OBJ);
                    $this->id = $result->id;
                    $this->username = $result->username;
                }
                else{
                    die("Mot de passe incorrect");
                }
            }else{
                die("Utilisateur inexistant");
            }
        }

    }
?>