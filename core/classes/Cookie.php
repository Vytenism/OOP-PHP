
<?php

namespace Core;

class Cookie extends Abstracts\Cookie {
    /**
     * Constructor will set a name
     * @param string $name
     */
    public function __construct(string $name) {
        $this->name = $name;
    }
    /**
     * 
     * @return void
     */
    public function delete(): void {
        unset($_COOKIE[$this->name]);
        setcookie($this->name, -1);
        return true;
    }
    /**
     * 
     * @return bool
     */
    public function exists(): bool {
        if (isset($_COOKIE[$this->name])) {
            return true;
        }

        return false;
    }
    /**
     * 
     * @return array
     */
    public function read(): array {
        if ($this->exists()) {
            $decoded = json_decode($_COOKIE[$this->name], true);
            if ($decoded) {
                return $decoded;
            }
            trigger_error('Not succeeded to decode!', E_USER_WARNING);
        }
        return [];
    }
    /**
     * 
     * @param type $data
     * @param type $expires_in
     */
    public function save($data, $expires_in = 3600): void {
        $encoded = json_encode($data);
        setcookie($this->name, $encoded, time() + $expires_in);
    }

}
