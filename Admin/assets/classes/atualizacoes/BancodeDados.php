<?php
class BancodeDados {
    private $user = "root";
    private $pwd = "";
    private $host = "localhost";
    private $db = "clinicaABC";
    
    protected $conexao;
    
    function __construct() {
        $this->conexao = new PDO(
                "mysql:host={$this->host};dbname={$this->db}", 
                $this->user, 
                $this->pwd);
    }
}
