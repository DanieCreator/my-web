<?php
class Posts extends controller
{
    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }
        $this->postModel = $this->model('Post');
        $this->userModel = $this->model('User');
    }
    public function index()
    {
        $posts = $this->postModel->getPosts();

        $data = [
            'posts' => $posts,
        ];

        $this->view('posts/index', $data);
    }
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $data = [
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'user_id' => $_SESSION['user_id'],
                'title_err' => '',
                'body_err' => ''
            ];
            // print_r($data);

            if (empty($data['title'])) {
                $data['title_err'] = 'please enter title';
            }
            if (empty($data['body'])) {
                $data['body_err'] = 'enter body text';
            }
            //make sure error are empty
            if (empty($data['title_err']) && empty($data['body_err'])) {
                if ($this->postModel->addPost($data)) {
                    flash('message', 'post added');
                    redirect('posts');
                } else {
                    die('something went wrong');
                }
                //post
            } else {

                $this->view('posts/add', $data);
            }
        } else {
            $data = [
                'title' => '',
                'body' => ''
            ];

            $this->view('posts/add', $data);
        }
    }
    public function show($id)
    {
        $post = $this->postModel->getPostById($id);
        $user = $this->userModel->getUserById($post->user_key);

        $data = [
            'post' => $post,
            'user' => $user

        ];

        $this->view('posts/show', $data);
    }
}
