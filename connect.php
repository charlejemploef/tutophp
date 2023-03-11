<?php

    class DBConnect {
        private $user= "root";
        private $password = "";
        private $db = "tutophp";
        private $server = "localhost";
        private $conn;

        public function DoConnect () {
            $this->conn = mysqli_connect ($this->server, $this->user, $this->password, $this->db);
            if (mysqli_connect_errno()){
              echo "SIN CONEXION: ".mysqli_error($this->conn);
              exit ();  
            }
            return $this->conn;

        }
    }
?>
