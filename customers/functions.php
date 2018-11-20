<?php
//It's a extend of Dao_Customers, preparing the data to fit the method's requisites

require_once ABSPATH . 'connection.php';
require_once ABSPATH . '/customers/pojo_customers.php';
require_once ABSPATH . '/customers/dao_customers.php';

//Get the data from POST and send it to dao_customer's insert method.
function insert() {
    if (!empty($_POST['customer'])) {
        $data = $_POST['customer'];
        print_r($data);
        $customer = new PojoCustomer;
        $customer->setName($data["'name'"]);
        $customer->setPhone($data["'phone'"]);
        $customer->setCpf($data["'cpf'"]);
        $customer->setAdress($data["'adress'"]);
        $customer->setZip($data["'zip'"]);
        $customer->setBill($data["'bill'"]);
        
        $user = DaoCustomers::getInstance()->insert($customer);
    }
}

//Get the data from Database for ID and return the result match as an array
function viewListUpdate($id) {
    $user = DaoCustomers::getInstance()->read_id($id);
    if (!empty($user->getId())) {
        $user = $user;
    } else {
        $user->setId("0");
    }
    return $user;
}

//Check if the ID exist in Database
function test_id($id) {
    try {
        $user = DaoCustomers::getInstance()->read_id($id);
        if ($user->getId() == $id){
            return true;
        } else {
            return false;
        }
    } catch (Exception $e) {
        print($e);
        return false;
    }
}

//Get the data from POST and send it to dao_customer's update method.
function edit() {
    if (!empty($_POST['customer'])) {
        try{
            $data = $_POST['customer'];
            $customer = new PojoCustomer;
            $customer->setId($data["'id'"]);
            $customer->setName($data["'name'"]);
            $customer->setPhone($data["'phone'"]);
            $customer->setCpf($data["'cpf'"]);
            $customer->setAdress($data["'adress'"]);
            $customer->setZip($data["'zip'"]);
            $customer->setBill($data["'bill'"]);
            
            $customer = DaoCustomers::getInstance()->update($customer);
        } catch (Exception $e) {
            print($e);
        }
    }
}

//Get the data from POST and send it to dao_customer's delete method.
function delete() {
    if (!empty($_POST['id-delete'])) {
        try {
            $customer = new PojoCustomer;
            $customer->setId($_POST['id-delete']);
            $user = DaoCustomers::getInstance()->delete($customer);
        } catch (Exception $e) {
            print($e);
        }
    }
}

//Show the length of database registers 
function totalCount() {
    try {
        $user = DaoCustomers::getInstance()->read_all();
        if (count($user) > 0){ 
            return count($user);
        } else {
            return '0';
        }
    } catch (Exception $e) {
        print($e);
    }
}

//Return all the database matchs
function readAll() {
    $user = DaoCustomers::getInstance()->read_all();
    return $user;
}

?>