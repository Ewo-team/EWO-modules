<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function controllers_autoload($class){
    $class = strtolower($class);
    $controllers = array('nav_controller');
    if(in_array($class, $controllers)){
        require('application/modules/custom_core/controllers/'.$class.'.php');
    }
}

function models_autoload($class){
    $class = strtolower($class);
    $models = array('sync_model');
    if(in_array($class, $models)){
        require('application/modules/custom_core/models/'.$class.'.php');
    }
}

function index(){
    spl_autoload_register('controllers_autoload');
    spl_autoload_register('models_autoload');
}

/**
 * End of file
 */