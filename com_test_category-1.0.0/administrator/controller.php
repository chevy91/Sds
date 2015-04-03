<?php

/**
 * @version     1.0.0
 * @package     com_test_category
 * @copyright   © 2015. Все права защищены.
 * @license     GNU General Public License 
 * @author      mrsiter <padlo@ex.ua> - http://mrsiter.com
 */
// No direct access
defined('_JEXEC') or die;

class Test_categoryController extends JControllerLegacy {

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
        require_once JPATH_COMPONENT . '/helpers/test_category.php';

        $view = JFactory::getApplication()->input->getCmd('view', '__test_category7089s');
        JFactory::getApplication()->input->set('view', $view);

        parent::display($cachable, $urlparams);

        return $this;
    }

}
