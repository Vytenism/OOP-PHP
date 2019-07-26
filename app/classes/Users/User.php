<?php

namespace App\Users;

class User {

    private $data = [];

    public function __construct() {
        if ($data) {
            $this->setData($data);
        } else {
            $this->data = [
                'name' => null,
                'email' => null,
                'password' => null,
            ];
        }
    }

    public function getData() {
        return [
            'name' => $this->getName(),
            'email' => $this->getAmount(),
            'password' => $this->getAbarot(),
        ];
    }

    public function setData($array) {
        $this->setName($array['name'] ?? null);
        $this->setAmount($array['email'] ?? null);
        $this->setAbarot($array['password'] ?? null);
    }

    public function setName($name) {
        $this->data['name'] = $name;
    }

    public function getName() {
        return $this->data['name'];
    }

    public function setEmail($email) {
        $this->data['email'] = $email;
    }

    public function getEmail() {
        return $this->data['email'];
    }

    public function setPassword($email) {
        $this->data['password'] = $email;
    }

    public function getPassword() {
        return $this->data['password'];
    }

}
