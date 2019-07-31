<?php 

namespace App\Drinks;

class LightDrink extends Drink {
    

    public function drink(){
        // su $this
        $this->setAmount($this->getAmount() - 100); 
        // su parent::
        //parent::setAmount(parent::getAmount() - 50);
    }
}


