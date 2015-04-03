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

/**
 * Test_construct helper.
 */
class Test_constructHelper {

    /**
     * Configure the Linkbar.
     */
    public static function addSubmenu($vName = '') {
        		JHtmlSidebar::addEntry(
			JText::_('COM_TEST_CONSTRUCT_TITLE_CONSTRUCTS'),
			'index.php?option=com_test_construct&view=constructs',
			$vName == 'constructs'
		);

    }

    /**
     * Gets a list of the actions that can be performed.
     *
     * @return	JObject
     * @since	1.6
     */
    public static function getActions() {
        $user = JFactory::getUser();
        $result = new JObject;

        $assetName = 'com_test_construct';

        $actions = array(
            'core.admin', 'core.manage', 'core.create', 'core.edit', 'core.edit.own', 'core.edit.state', 'core.delete'
        );

        foreach ($actions as $action) {
            $result->set($action, $user->authorise($action, $assetName));
        }

        return $result;
    }


}
