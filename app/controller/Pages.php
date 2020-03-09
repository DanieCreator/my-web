<?php
class Pages extends controller
{
    public function __construct()
    {
    }
    public function index()
    {
        // if (isLoggedIn()) {
        //     redirect('posts');
        // }

        $data = [
            'title' => 'Lost and found persons',
            'description' => 'a simple prototype of lost and found persons\' website'


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
