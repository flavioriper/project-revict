<?php 
require_once ABSPATH . 'connection.php'; 
require_once ABSPATH . '/customers/pojo_customers.php';

//Class with the CRUD Methods to manipulate the Database
class DaoCustomers {

    public static $instance;
 
    private function __construct() {
        //
    }
    
    //Creates a self instance of the class checking if it hasn't be already create
    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new DaoCustomers();
 
        return self::$instance;
    }
    
    //Read only one register per time by ID
    public function read_id($id) {
        try {
            $sql = "SELECT * FROM customers WHERE id = :id";
            $p_sql = Connection::getInstance(ABSPATH . 'configdb.ini')->prepare($sql);
            $p_sql->bindValue(":id", $id);
            $p_sql->execute();
            return $this->setUser($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print($e);
        }
    } 

    //Return all the registers from the Database
    public function read_all() {
        try {
            $result = array();
            $sql = "SELECT * FROM customers;";
            $p_sql = Connection::getInstance(ABSPATH . 'configdb.ini')->prepare($sql);
            if ($p_sql->execute()) {
                foreach ($p_sql->fetchAll(PDO::FETCH_ASSOC) as $data) {
                    $result[] = $this->setUser($data);
                }
                return $result;
            } else {
                return 'No match found!';
            }
        } catch (Exception $e) {
            print($e);
        }
    }

    //Construct the model to add the user into Database
    private function setUser($row) {
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

    //Insert the data into Database
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
                :name,
                :phone,
                :cpf,
                :adress,
                :zip,
                :bill)";

            $p_sql = connection::getInstance(ABSPATH . 'configdb.ini')->prepare($sql);

            $p_sql->bindValue(':name', $customer->getName());
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


    //Update the data from Database
    public function update(PojoCustomer $customer) {
        try {
            $sql = "UPDATE customers SET
                name = :name,
                phone = :phone,
                cpf = :cpf,
                adress = :adress,
                zip = :zip,
                bill = :bill WHERE id=:id";
            
            $p_sql = connection::getInstance(ABSPATH . 'configdb.ini')->prepare($sql);

            $p_sql->bindValue(':id', $customer->getId(), PDO::PARAM_INT);
            $p_sql->bindValue(':name', $customer->getName(), PDO::PARAM_STR);
            $p_sql->bindValue(':phone', $customer->getPhone(), PDO::PARAM_STR);
            $p_sql->bindValue(':cpf', $customer->getCpf(), PDO::PARAM_STR);
            $p_sql->bindValue(':adress', $customer->getAdress(), PDO::PARAM_STR);
            $p_sql->bindValue(':zip', $customer->getZip(), PDO::PARAM_STR);
            $p_sql->bindValue(':bill', $customer->getBill(), PDO::PARAM_INT);

            return $p_sql->execute();

        } catch (Exception $e) {
            print($e);
        }
    }

    //Delete data from Database
    public function delete(PojoCustomer $customer) {
        try {
            $sql = "DELETE FROM customers WHERE id = :id";

            $p_sql = connection::getInstance(ABSPATH . 'configdb.ini')->prepare($sql);

            $p_sql->bindValue(':id', $customer->getId(), PDO::PARAM_INT);

            return $p_sql->execute();
        } catch (Exception $e) {
            print($e);
        }
    }
}

