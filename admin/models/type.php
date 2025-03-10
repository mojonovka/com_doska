<?php

defined('_JEXEC') or die();

class DoskaModelType extends JModelAdmin {

    public function getForm($data = array(), $loadData = true){

        $form = $this->loadForm($this->option.'type', 'type', array('control'=>'jform','load_data'=>$loadData));

        if(empty($form)){
            return false;
        }

        return $form;

    }


}




?>