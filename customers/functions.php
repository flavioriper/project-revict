<?php

require_once ABSPATH . 'connection.php';
require_once ABSPATH . '/customers/pojo_customers.php';
require_once ABSPATH . '/customers/dao_customers.php';

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

function viewListUpdate($id) {
    $user = DaoCustomers::getInstance()->read_id($id);
    return $user;
}

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

function edit() {
    if (!empty($_POST['up-name'])) {
        try{
            $customer = new PojoCustomer;
            $customer->setId($_POST['id']);
            $customer->setName($_POST['up-name']);
            $customer->setPhone($_POST['phone']);
            $customer->setCpf($_POST['cpf']);
            $customer->setAdress($_POST['adress']);
            $customer->setZip($_POST['zip']);
            $customer->setBill($_POST['bill']);
            print_r($customer);
            
            $customer = DaoCustomers::getInstance()->update($customer);
        } catch (Exception $e) {
            print($e);
        }
    }
}

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

?>