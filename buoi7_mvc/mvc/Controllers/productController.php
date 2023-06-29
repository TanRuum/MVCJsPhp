<?php
    class productController extends baseController{
        private $productModel;
        function __construct()
        {
            //require('./Models/productModel.php');
            $this -> loadModels('productModel');
            $this-> productModel = new productModel();
        }
        function index(){
            $data = $this->productModel->getAll();
            $file_main = "product/index";
            //require("Views/product/index.php");
            $this->loadViews('Admin2.index', $data, $file_main);
        }
        function add(){
            if(isset($_POST['themsp'])){
                $img=$_FILES['anh']['name'];
                if($img != null){
                    $tmp_name = $_FILES['anh']['tmp_name'];
                    move_uploaded_file($tmp_name, "./mvc/Views/images/".$img);
                }
                $product_data = [
                    'tensp' => $_POST['tensp'],
                    'soluong'   => $_POST['soluong'],
                    'xuatxu' => $_POST['xuatxu'],
                    'gia' => $_POST['gia'],
                    'img'=> $img
                ];
                $this->productModel->store($product_data);
                header('Location:index.php');
            }
            
            $file_main = "Product/add";
            $this->loadViews('Admin2.index', [], $file_main);
        }
        public function delete($id){
            $this->productModel->destroy($id);
            header("Location:".URL."/product/index.php");
        }
        public function edit($id){
            if(isset($_POST['editProduct'])){
                $img=$_FILES['anh']['name'];
                if($img != null){
                    $tmp_name = $_FILES['anh']['tmp_name'];
                    move_uploaded_file($tmp_name, "./mvc/Views/images/".$img);
                }
                $Product_EData = [
                    'tensp' => $_POST['tensp'],
                    'soluong'   => $_POST['soluong'],
                    'xuatxu' => $_POST['xuatxu'],
                    'gia' => $_POST['gia'],
                    'img'=> $img
                ];
                $this->productModel->update($Product_EData,$id);
                header("location:".URL."/product/index");
            }
                $file_main = "Product/edit";
                $data=$this->productModel->findById($id);
                $this->loadViews('Admin2.index', $data, $file_main);
        }
    }
?>