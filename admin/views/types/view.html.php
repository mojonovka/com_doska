<?php

defined ("_JEXEC") or die();

class DoskaViewTypes extends jViewLegacy {

    public function display($tpl = null){

        $this->addToolBar();

        parent::display($tpl);

    }

    protected function addToolBar(){

        JToolbarHelper::title(JText::_("COM_DOSKA_MANEGER_TYPES"));
        JToolbarHelper::addNew('type.add', JText::_('COM_DOSKA_MANEGER_TYPES_ADD'));
        JToolbarHelper::editList('type.edit');
        JToolbarHelper::divider();        
        JToolbarHelper::publish('types.publish', 'JTOOLBAR_PUBLISH', TRUE);
        JToolbarHelper::unpublish('types.unpublish', 'JTOOLBAR_UNPUBLISH', TRUE);
        JToolbarHelper::divider();        
        JToolbarHelper::preferences('com_doska');

    }

}





?>