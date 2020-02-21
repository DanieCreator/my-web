<?php
class Pages extends controller
{
    public function __construct()
    {
        // $this->postModel = $this->model('post');
    }
    public function index()
    {
        // $posts = $this->postModel->getPost();

        $data = [
            'title' => 'Lost and found persons',
            'description' => 'a simple prototype of lost and found persons\' website'
            // 'posts' => $posts

        ];
        $this->view('pages/index', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'ABOUT US',
            'description' => 'About the lost and found website'
        ];
        $this->view('pages/about', $data);
    }
}
