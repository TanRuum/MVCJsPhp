<?php
    class userController extends baseController{
        private $userModel;
        function __construct()
        {
            // echo "constructor for userController";
            // echo "<br/>";
            // require('./Models/userModel.php');
            $this -> loadModels('userModel');
            $this->userModel = new userModel();
        }
        function index(){
            if(isset($_POST['submit'])){
                $search_temp=$_POST['search_temp'];
                $data = $this->userModel->searchUser($search_temp);
            }
            else{
                $data = $this->userModel->getAll();
            }
            if(isset($_POST['clear_search'])){
                $data = $this->userModel->getAll();
            }
            $file_main = "user/index";
                // require("Views/user/index.php");
            $this->loadViews('Admin2.index', $data, $file_main);
        }
        function add(){
            if(isset($_POST['adduser'])){
                $user = [
                    //key => keyvalue
                    'username' => $_POST['username'],
                    'password' => $_POST['password']
                ];
                $this->userModel->store($user);
                header('Location:index.php');
            }
            $file_main = "user/add";
            $this->loadViews('Admin2.index', [], $file_main);
        }
        public function delete($id){
            $this->userModel->destroy($id);
            header("Location:".URL."/user/index.php");
        }
        public function edit($id){
            if(isset($_POST['edituser'])){
            $user = [
                'username' => $_POST['username'],
                'password' => $_POST['password'],
                'lv' => $_POST['lv']
            ];
                $this->userModel->update($user,$id);
                header("location:".URL."/user/index");
            }
            $file_man = 'user/edit';
            $data=$this->userModel->findById($id);
        $this->loadViews('Admin2.index', $data, $file_man);
        }
        public function searchUser($id){
        
        }
    }
?>