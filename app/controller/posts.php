<?php
class Posts extends controller
{
    public function index()
    {
        $data = [];

        $this->view('posts/index', $data);
    }
}
