<?php
/**
* File: application/Controller/Component/CtrlComponent.php
* Component rewritten, original from : http://cakebaker.42dh.com/2006/07/21/how-to-list-all-controllers/
*/
class CtrlComponent extends Component {

    /**
     * Return an array of user Controllers and their methods.
     * The function will exclude ApplicationController methods
     * @return array
     */
    public function get() {

        $aCtrlClasses = App::objects('controller');

        foreach ($aCtrlClasses as $controller) {
            if ($controller != 'AppController')
            {
                // Load the controller
                App::import('Controller', str_replace('Controller', '', $controller));

                // Load its methods / actions
                $aMethods = get_class_methods($controller);

                foreach ($aMethods as $idx => $method) {

                    if ($method{0} == '_') {
                        unset($aMethods[$idx]);
                    }
                }

                // Load the ApplicationController (if there is one)
                App::import('Controller', 'AppController');
                $parentActions = get_class_methods('AppController');
                $controllers[] = array(
                    'controller' => str_replace("Controller", '', $controller),
                    'actions' => array_diff($aMethods, $parentActions)
                );
            }
        }

        return $controllers;
    }

}

?>