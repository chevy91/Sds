<?php

/**
 * @version     1.0.0
 * @package     com_test_construct
 * @copyright   © 2015. Все права защищены.
 * @license     GNU General Public License версии 2 или более поздней; Смотрите LICENSE.txt
 * @author      mrsiter <padlo@ex.ua> - http://mrsiter.com
 */
// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

class Test_constructController extends JControllerLegacy {

    /**
     * Method to display a view.
     *
     * @param	boolean			$cachable	If true, the view output will be cached
     * @param	array			$urlparams	An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
     *
     * @return	JController		This object to support chaining.
     * @since	1.5
     */
    public function display($cachable = false, $urlparams = false) {
        require_once JPATH_COMPONENT . '/helpers/test_construct.php';

        $view = JFactory::getApplication()->input->getCmd('view', 'constructs');
        JFactory::getApplication()->input->set('view', $view);

        parent::display($cachable, $urlparams);

        return $this;
    }

}
