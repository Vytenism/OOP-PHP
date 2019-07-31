<?php 

namespace App\Drinks;

class StrongDrink extends Drink {
    

    public function drink(){
        // su $this
        $this->setAmount($this->getAmount() - 50); 
        // su parent::
        //parent::setAmount(parent::getAmount() - 50);
    }
}


