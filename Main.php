<?php

/**
 * @package Zadarma
 * @author Iurii Makukh <gplcart.software@gmail.com>
 * @copyright Copyright (c) 2017, Iurii Makukh <gplcart.software@gmail.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html GNU General Public License 3.0
 */

namespace gplcart\modules\zadarma;

use gplcart\core\controllers\frontend\Controller;
use gplcart\core\Module;

/**
 * Main class for Zadarma module
 */
class Main
{

    /**
     * Module class instance
     * @var \gplcart\core\Module $module
     */
    protected $module;

    /**
     * @param Module $module
     */
    public function __construct(Module $module)
    {
        $this->module = $module;
    }

    /**
     * Implements hook "route.list"
     * @param array $routes
     */
    public function hookRouteList(array &$routes)
    {
        $routes['admin/module/settings/zadarma'] = array(
            'access' => 'module_edit',
            'handlers' => array(
                'controller' => array('gplcart\\modules\\zadarma\\controllers\\Settings', 'editSettings')
            )
        );
    }

    /**
     * Implements hook "construct.controller.frontend"
     * @param Controller $controller
     */
    public function hookConstructControllerFrontend(Controller $controller)
    {
        $this->setModuleAssets($controller);
    }

    /**
     * Sets module specific assets
     * @param Controller $controller
     */
    protected function setModuleAssets(Controller $controller)
    {
        if (!$controller->isInternalRoute()) {

            $settings = $this->module->getSettings('zadarma');

            if (!empty($settings['code']) && (empty($settings['trigger_id']) || $controller->isTriggered($settings['trigger_id']))) {
                $controller->setJs($settings['code'], array('position' => 'bottom'));
            }
        }
    }

}
