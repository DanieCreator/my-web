<?php
/*
*Base controller
*loads the model and view
*/
class controller
{
    // load model
    public function model($model)
    {
        //public model files
        require_once '../app/models/' . $model . '.php';

        //instantiate model

        return new $model();
    }
    public function view($view, $data = [])
    {

        // $_SESSION['data'] = $data;

        //check for view files
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            //view doesn't exists
            die('view does not exist');
        }
    }
}
