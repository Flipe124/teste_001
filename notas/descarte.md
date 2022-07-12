```
<?php
class bdconnection {
    private $_bdHostname = "localhost";
    private $_bdName = "wdevel";
    private $_dbUsername = "root";
    private $_dbPassword = "";
    private $_con;

    public function __construct(){
        try {
            $this->_con = new PDO("mysql:host=$this->_bdHostname;bdname$this->bdName", $this->_bdUsername, $this->_bdPassword);
            $this->_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conectado com sucesso.";            
        } catch (PDOException $e) {
            echo "<h1>Ops, algo deu errado: " . $e->getMessage()."</h1>";
            echo "<pre>";
            echo print_r($e);
        }       
    }
    public function returnConnection(){
        return $this->_con;
    }
    public function init(){
        
    }
}    
?>
```