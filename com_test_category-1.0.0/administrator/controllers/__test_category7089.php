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

jimport('joomla.application.component.controllerform');

/**
 * __test_category7089 controller class.
 */
class Test_categoryController__test_category7089 extends JControllerForm
{

    function __construct() {
        $this->view_list = '__test_category7089s';
        parent::__construct();
    }

}