<?php

namespace App\Users;

class User {

    private $data = [];

    /**
     * 
     * @param type $data
     */
    public function __construct($data = null) {
        if ($data) {
            $this->setData($data);
        } else {
            $this->data = [
                'name' => null,
                'last' => null,
                'email' => null,
                'password' => null,
            ];
        }
    }
    /**
     * Set all data to array
     * @param type $array
     */
    public function setData($array) {
        if (isset($array['id'])) {
            $this->setId($array['id']);
        } else {
            $this->data['id'] = null;
        }
        $this->setName($array['name'] ?? null);
        $this->setLast($array['last'] ?? null);
        $this->setEmail($array['email'] ?? null);
        $this->setPassword($array['password'] ?? null);
    }
    /**
     * Get all data as array
     * @return type
     */
    public function getData() {
        return [
            'name' => $this->getName(),
            'last' => $this->getLast(),
            'email' => $this->getEmail(),
            'password' => $this->getPassword(),
        ];
    }
    /**
     * Set name 
     * @param string $name
     */
    public function setName(string $name) {
        $this->data['name'] = $name;
    }
    /**
     * Get name
     * @return type
     */
    public function getName() {
        return $this->data['name'];
    }
    /**
     * Set last
     * @param type $last
     */
    public function setLast($last) {
        $this->data['last'] = $last;
    }
    /**
     * Get last name
     * @return type
     */
    public function getLast() {
        return $this->data['last'];
    }
    /**
     * Set email
     * @param string $email
     */
    public function setEmail(string $email) {
        $this->data['email'] = $email;
    }
    /**
     * Get email
     * @return type
     */
    public function getEmail() {
        return $this->data['email'];
    }
    /**
     * Set password
     * @param string $email
     */
    public function setPassword(string $email) {
        $this->data['password'] = $email;
    }
    /**
     * Get password
     * @return type
     */
    public function getPassword() {
        return $this->data['password'];
    }
    /**
     * Set id
     * @param int $id
     */
    public function setId(int $id) {
        $this->data['id'] = $id;
    }   
    /**
     * Get id
     * @return type
     */
    public function getId() {
        return $this->data['id'];
    }

}
