<?php 

namespace App\Drinks;

use \App\App;

class Model{
    
    private $db;
    private $table_name = 'drinks';
    /**
     * First call of event
     */
    public function __construct() {       
        App::$db->createTable($this->table_name);
    }
    /**
     * 
     * @param \App\Drinks\Drink $drink
     * @return type
     */
    public function insert(Drink $drink){      
        return App::$db->insertRow($this->table_name, $drink->getData());
    }
    /**
     * Get array from DB under given conditions
     * @param type $conditions
     * @return type
     */
    public function get($conditions = []){
        $drinks = [];
        $rows = App::$db->getRowsWhere($this->table_name, $conditions);
        foreach ($rows as $row_id => $row_data){
            $row_data['id'] = $row_id;
            $drinks[] = new Drink($row_data);
        }
        return $drinks;
    }
    /**
     * updates a row in DB
     * @param \App\Drinks\Drink $drink
     * @return type
     */
    public function update(Drink $drink){
        return App::$db->updateRow($this->table_name, $drink->getId(), $drink->getData());
    }
    /**
     * delete a row from DB
     * @param \App\Drinks\Drink $drink
     * @return type
     */
    public function delete(Drink $drink){
        return App::$db->deleteRow($this->table_name, $drink->getId());
    }
    /**
     * last call for this method
     */
        public function __destruct() {
        App::$db->save();
    }
}
