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
```
 <?php

            $search = isset($_GET["search"]) ? $_GET["search"] : "";

            $sql = "SELECT * FROM `user` WHERE  1 = 1";

            if($search) {
                $sql .= " AND `name` LIKE " . "'%" . $search . "%'";
            }

            $users = Database::connection()->query($sql)->fetchAll(PDO::FETCH_ASSOC);;
            ?>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <th scope="row"><?php echo $user['id']; ?></th>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo date("d/m/Y", strtotime(($user['date_of_birth']))); ?></td>
                    <td><?php echo $user['email']; ?>
                
                    </td>
                    <td>
                        <a href="edit.php?......" class="btn btn-primary">EDITAR</a>
                    </td>
                </tr>
            <?php } ?>
```
```
<?php echo $user['email']; ?>
```