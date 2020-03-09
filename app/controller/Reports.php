<?php

class Reports extends controller
{
    public function __construct()
    {
    }
    public function index()
    {
        $data = [];
        $this->view('reports/index', $data);
    }
    public function create()
    {
        $data = [
            'national_id' => '',
            'title' => '',
            'content' => '',
            'location' => '',
            'lost_personName' => '',
            'age' => '',
            'complexion' => '',
            'national_id_err' => '',
            'title_err' => '',
            'content_err' => '',
            'location_err' => '',
            'lost_personName_err' => '',
            'age_err' => '',
            'complexion_err' => '',


        ];
        $this->view('reports/create', $data);
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $data = [
                'national_id' => htmlspecialchars(trim($_POST['national_id'])),
                'title' => htmlspecialchars(trim($_POST['title'])),
                'content' => htmlspecialchars(trim($_POST['content'])),
                'location' => htmlspecialchars(trim($_POST['location'])),
                'name' => htmlspecialchars(trim($_POST['name'])),
                'age' => htmlspecialchars(trim($_POST['age'])),
                'complexion' => htmlspecialchars(trim($_POST['complexion'])),
                'national_id_err' => '',
                'title_err' => '',
                'content_err' => '',
                'location_err' => '',
                'lost_personName_err' => '',
                'age_err' => '',
                'complexion_err' => '',

            ];

            // var_dump($data);

            // var_dump($_FILES['photo']['name']);
            if (empty($data['national_id'])) {
                $data['national_id_err'] = 'Enter your national identity number';
            }
            if (empty($data['title'])) {
                $data['title_err'] = 'Enter title';
            }
            if (empty($data['content'])) {
                $data['content_err'] = 'Enter content';
            }
            if (empty($data['location'])) {
                $data['location_err'] = 'Locationn is required';
            }
            if (empty($data['lost_personName'])) {
                $data['lost_personName_err'] = 'Name of the lost is required';
            }
            if (empty($data['age'])) {
                $data['age_err'] = 'Age must be filled';
            }
            if (empty($data['complexion'])) {
                $data['complexion_err'] = ' complexion of the lost should be filled';
            }
            //making sure errors are empty
            if (
                empty('national_id_err') && empty('title_err') && empty('content_err') &&
                empty('location_err') && empty('lost_personName_err') && empty('age_err') && empty('complexion_err')
            ) {
                //proccedd
            } else {
                $this->view('reports/create', $data);
            }
        } else {
            // init data 
            $data = [
                'national_id' => '',
                'title' => '',
                'content' => '',
                'location' => '',
                'lost_personName' => '',
                'age' => '',
                'complexion' => '',
                'national_id_err' => '',
                'title_err' => '',
                'content_err' => '',
                'location_err' => '',
                'lost_personName_err' => '',
                'age_err' => '',
                'complexion_err' => '',


            ];
            // load view
            $this->view('reports/create', $data);
        }
    }
}
