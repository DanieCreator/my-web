<?php
class Core
{
    protected $currentController = 'pages';

    protected $currentMethod = 'index';
    protected $params = [];
    public function __construct()
    {
        // print_r($this->getUrl());
        $url = $this->getUrl();
        if (file_exists('../app/controller/' . ucwords($url[0]) . '.php'))
            //if exist set as controller
            $this->currentController = ucwords($url[0]);
        //unset 0 index url
        unset($url[0]);
        //require controller
        require_once '../app/controller/' . $this->currentController . '.php';
        //instantiate the controller
        $this->currentController = new $this->currentController;

        //check the second part of url
        if (isset($url[1])) {
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                //unset url[1]
                unset($url[1]);
            }
        }
        //check the third part of url
        if (isset($url[2])) {
            if (method_exists($this->currentController, $url[2])) {
                $this->currentMethod = $url[2];
                //unset url[1]
                unset($url[2]);
            }
        }
        $this->params = $url ? array_values($url) : [];
        //call a callaback with aaray of param
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }
    public function getUrl()
    {
        // echo $_GET['url'];
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
