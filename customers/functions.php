<?php

require_once '../connection.php';
require_once 'pojo_customers.php';
require_once 'dao_customers.php';

function insert() {
    if (!empty($_POST['name'])) {
        $customer = new PojoCustomer;
        $customer->setName($_POST['name']);
        $customer->setPhone($_POST['phone']);
        $customer->setCpf($_POST['cpf']);
        $customer->setAdress($_POST['adress']);
        $customer->setZip($_POST['zip']);
        $customer->setBill($_POST['bill']);
        
        $user = DaoCustomers::getInstance()->insert($customer);
    }
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

?>