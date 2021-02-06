<?php

namespace App\Components;

class Recusive{
    private $data;
    private $htmlSlelect = '';


    public function __construct($data) 
    {
        $this->data = $data;
    }
        public function categoryRecusive($parentId, $id = 0)
        {
           
            foreach ($this->data as $value){
                if ($value['parent_id'] == $id) {
                    if (!empty($parentId) && $parentId ==$value['id']){
                        $this->htmlSlelect .="<option selected value='". $value['id']. "'>" . $value['name']. "</option>";
                    }else{
                        $this->htmlSlelect .="<option value='". $value['id']. "'>" . $value['name']. "</option>";
                    }

                   $this->htmlSlelect .="<option value='". $value['id']. "'>" . $value['name']. "</option>";
                    $this->categoryRecusive($parentId, $value['id']);
                }
    
            }
                return $this->htmlSlelect;
    
        }
}