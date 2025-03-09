<?php

defined("_JEXEC") or die();

class DoskaViewType extends jViewLegacy {

    protected $form;

    public function display($tmpl = null){

        $this->form = $this->get('Form');//getForm

        $this->addToolBar();
        $this->setDocument();

        parent::display($tmpl);

    }

    protected function addToolBar(){
        
        $isnew = ($this->item->id == 0);

        if($isnew){
            $title = _JText::_('COM_DOSKA_MANAGER_TYPE_NEW_MANEGER_TITLE');
        } else {
            $title = JText::_('COM_DOSKA_MANAGER_TYPE_EDIT_MANEGER_TITLE');
        }

        JToolbarHelper::title($title);
        JToolbarHelper::apply('type.apply');
        JToolbarHelper::save('type.save');
        JToolbarHelper::cancel('type.cancel');

    }

    protected function setDocument(){

        $document = JFactory::getDocument();
        $document->setTitle(JText::_('COM_DOSKA_MANAGER_TYPE_NEW_PAGE_TITLE'));
        $document->addStyleSheet(JUri::root(true).'/media/com_doska/css/style.css');




    }

}

?>