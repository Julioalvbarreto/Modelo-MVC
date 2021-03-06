<?php

namespace App;

use MF\Init\Bootstrap;

    class Route extends Bootstrap {

        public function initRoutes() 
        {
            $routes['home'] = array(
                'route' => '/',
                'controller' => 'IndexController',
                'action' => 'index'
            );

            $routes['sobreNos'] = array(
                'route' => '/sobre_nos',
                'controller' => 'IndexController',
                'action' => 'sobreNos'
            );

            $this->setRoutes($routes);
        }

    }

?>