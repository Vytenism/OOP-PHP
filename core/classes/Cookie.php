
<?php

namespace Core;

class Cookie extends Abstracts\Cookie {

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function delete(): void {
        
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
            if ($decoded === NULL) {
                trigger_error('Not succeeded to decode!', E_USER_WARNING);
                $decoded = [];
                return $decoded;
            } else {
                return $decoded;
            }
        } else {
            $decoded = [];
            return $decoded;
        }
    }

    public function save($data, $expires_in = 3600): void {
        
    }

}
