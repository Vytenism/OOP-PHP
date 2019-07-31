<?php 

namespace App\Drinks;

class LightDrink extends Drink {
    

    public function drink(){
        // su $this
        $this->setAmount($this->getAmount() - 100); 
        // su parent::
        //parent::setAmount(parent::getAmount() - 100);
    }
    
    public function getImage() {
        if (parent::getImage() == null) {
            return 'https://www.pepsi.com/en-us/uploads/images/can-pepsi-cherry.png?mtime=20180110134748';
        } else {
            return parent::getImage();
        }
    }

}


