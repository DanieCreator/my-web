<?php

class Admin extends controller
{
    public function __construct()
    {
    }
    public function index()
    {
        $data = [];
        $this->view('admin/index', $data);
    }
    public function register()
    {
        $data = [];
        $this->view('administrator/register', $data);
    }
    public function login()
    {
        $data = [];
        $this->view('administrator/login', $data);
    }
}
