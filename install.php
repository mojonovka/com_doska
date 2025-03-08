<?php

defined('_JEXEC') or die('');

class com_DoskaInstallerScript {

    public function install($parent){
        echo "<br/>";
        echo "-->install extention";
        echo JText::_('COM_DOSKA_INSTALL_STRING');
        echo "<br/>";
    }

    public function update($parent){
        echo "<br/>";
        echo "-->update extention";
        echo JText::_('COM_DOSKA_UPDATE_STRING');
        echo "<br/>";
    }

    public function uninstall($parent){
        echo "<br/>";
        echo "-->uninstall extention";
        echo JText::_('COM_DOSKA_UNINSTALL_STRING');
        echo "<br/>";
    }

    public function preflight($type, $parent){
        echo "<br/>";
        echo "-->update extention";
        echo JText::_('COM_DOSKA_PRE_STRING');
        echo "<br/>";
    }

    public function postflight($type, $parent){
        echo "<br/>";
        echo "-->update extention";
        echo JText::_('COM_DOSKA_POST_STRING');
        echo "<br/>";
    }

}

?>