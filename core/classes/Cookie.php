
<?php

namespace Core;

class Cookie extends Abstracts\Cookie {

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function delete(): void {
        unset($_COOKIE[$this->name]);
        setcookie($this->name, -1);
        return true;
    }

    public function exists(): bool {
        if (isset($_COOKIE[$this->name])) {
            return true;
        }

        return false;
    }

    public function read(): array {
        if ($this->exists()) {
            $decoded = json_decode($_COOKIE[$this->name]);
            if ($decoded) {
                return $decoded;
            }
            trigger_error('Not succeeded to decode!', E_USER_WARNING);
        }
        return [];
    }

    public function save($data, $expires_in = 3600): void {
        $encoded = json_encode($data);
        setcookie($this->name, $encoded, $expires_in);
    }

}
