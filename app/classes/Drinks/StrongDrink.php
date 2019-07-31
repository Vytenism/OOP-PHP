<?php

namespace App\Drinks;

class StrongDrink extends Drink {

    public function drink() {
        // su $this
        $this->setAmount($this->getAmount() - 50);
        // su parent::
        //parent::setAmount(parent::getAmount() - 50);
    }

    public function getImage() {
        if (parent::getImage() == null) {
            return 'https://products3.imgix.drizly.com/ci-jack-daniels-old-no-7-92707d5e737cf4ac.jpeg?auto=format%2Ccompress&dpr=2&fm=jpeg&h=240&q=20';
        } else {
            return parent::getImage();
        }
    }

}
