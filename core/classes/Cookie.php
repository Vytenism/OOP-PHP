
<?php

namespace Core;

class Cookie extends Abstracts\Cookie {

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function delete(): void {
        
    }

    public function exists(): bool {
        if (file_exists($this->name)) {
            $encoded_string = file_get_contents($this->file_name);

            if ($encoded_string !== false) {
                $this->data = json_decode($encoded_string, true);
            }
        }
    }

    public function read(): array {
        
    }

    public function save($data, $expires_in = 3600): void {
        
    }

}
