<?php 
require_once '../connection.php'; 
require_once ('pojo_customers.php');

class DaoCustomers {

    public static $instance;
 
    private function __construct() {
        //
    }
 
    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new DaoCustomers();
 
        return self::$instance;
    }
    
    public function read_id($cod) {
        try {
            $sql = "SELECT * FROM usuario WHERE cod_usuario = :cod";
            $p_sql = Connection::getInstance('../configdb.ini')->prepare($sql);
            $p_sql->bindValue(":cod", $cod);
            $p_sql->execute();
            return $this->setUsuario($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            $_SESSION['message'] = $e -> GetMessage();
            $_SESSION['type'] = 'danger';
        }
    } 

    public function read_all() {
        try {
            $sql = "SELECT * FROM customers;";
            $p_sql = Connection::getInstance('../configdb.ini')->prepare($sql);
            $p_sql->execute();
            
            foreach ($p_sql->fetchAll(PDO::FETCH_ASSOC) as $data) {
                $result[] = $this->setUsuario($data);
            }
            return $result;
        } catch (Exception $e) {
            print($e);
        }
    }

    private function setUsuario($row) {
        $pojo = new PojoCustomer;
        $pojo->setId($row['id']);
        $pojo->setName($row['name']);
        $pojo->setPhone($row['phone']);
        $pojo->setCpf($row['cpf']);
        $pojo->setAdress($row['adress']);
        $pojo->setZip($row['zip']);
        $pojo->setBill($row['bill']);
        return $pojo;
    }

    public function insert(PojoCustomer $customer) {
        try {
            $sql = "INSERT INTO customers (      
                name,
                phone,
                cpf,
                adress,
                zip,
                bill) 
                VALUES (
                :nome,
                :phone,
                :cpf,
                :adress,
                :zip,
                :bill)";

            $p_sql = connection::getInstance('../configdb.ini')->prepare($sql);

            $p_sql->bindValue(':nome', $customer->getName());
            $p_sql->bindValue(':phone', $customer->getPhone());
            $p_sql->bindValue(':cpf', $customer->getCpf());
            $p_sql->bindValue(':adress', $customer->getAdress());
            $p_sql->bindValue(':zip', $customer->getZip());
            $p_sql->bindValue(':bill', $customer->getBill());
            

            return $p_sql->execute();
        } catch (Exception $e) {
            print($e);
        }
    } 
}

