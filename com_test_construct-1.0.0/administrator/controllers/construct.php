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

jimport('joomla.application.component.controllerform');

/**
 * Construct controller class.
 */
class Test_constructControllerConstruct extends JControllerForm
{

    function __construct() {
        $this->view_list = 'constructs';
        parent::__construct();
    }

}