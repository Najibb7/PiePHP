<?php
namespace Core;

Router::connect('/', ['controller' => 'app', 'action' => 'index']); 
Router::connect('/register', ['controller' => 'user', 'action' => 'register']);
Router::connect('/inscription', ['controller' => 'user', 'action' => 'inscription']);
?>