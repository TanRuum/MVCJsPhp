<?php
class cartController extends baseController{
    private $productModel;
    function __construct(){
        $this->loadModels('productModel');
        $this->productModel = new productModel();
    }
    public  function index(){
        $file_main='Layout/cart';
        if(!isset($_SESSION['cart'])){
            $_SESSION['cart']=[];
        }
        $this->loadViews('Layout.cart',$_SESSION['cart'], '');
    }
    public function add(){
        $this->loadViews('public.Product/add',[], []);
        echo __METHOD__;
    }
    public function store($id){
        $product=$this->productModel->findById($id);
        if(empty($_SESSION['cart'])||!array_key_exists($id,$_SESSION['cart'])){
            $product['num']=1;
            $_SESSION['cart'][$id] = $product;
            }
            else{
                $_SESSION['cart'][$id]['num']+=1;

            }
            echo "THEM THANH CONG";
    }
    public function tang($id){
        $_SESSION['cart'][$id]['num']+=1;
        header("Location:".URL."/cart");
    }
    public function giam($id){
        $_SESSION['cart'][$id]['num']-=1;
        header("Location:".URL."/cart");
        
    }
    public function delete($id){
        unset($_SESSION['cart'][$id]);
        // header("Location:".URL."/cart");
        echo " XOA THANH CONG";
    }
}