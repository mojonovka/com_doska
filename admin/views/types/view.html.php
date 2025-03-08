<?php

defined ("_JEXEC") or die();

class DoskaViewTypes extends jViewLegacy {

    public function display($tpl = null){

        $this->addToolBar();
        $this->setDocument();

        parent::display($tpl);

    }

    protected function addToolBar(){

        JToolbarHelper::title(JText::_("COM_DOSKA_MANEGER_TYPES"), 'doskatitle');
        JToolbarHelper::addNew('type.add', JText::_('COM_DOSKA_MANEGER_TYPES_ADD'));
        JToolbarHelper::editList('type.edit');
        JToolbarHelper::deleteList(JText::_("COM_DOSKA_MANEGER_TYPES_DELETE_MSG"), 'types.delete');
        JToolbarHelper::divider();        
        JToolbarHelper::publish('types.publish', 'JTOOLBAR_PUBLISH', TRUE);
        JToolbarHelper::unpublish('types.unpublish', 'JTOOLBAR_UNPUBLISH', TRUE);
        JToolbarHelper::divider();    

        JToolbatHelper::custom('type.create', 'doskabutton', 'doskabutton_hover', JText::_('COM_DOSKA_MANEGER_TYPES_CUSTOM'), false);
        JToolbarHelper::editHtml();
        JToolbarHelper::editCss();
        JToolbarHelper::preferences('com_doska');

        echo JUri::root()."<br />";
        echo JUri::base()."<br />";
        echo JUri::current()."<br />";

        print_r(JUri::getInstance()->getVar('view'));
 
    }

    protected function setDocument(){

        $document = JFactory::getDocument();
        $document->addStyleSheet(JUri::root(true)."/media/com_doska/css/style.css");


    }

}





?>