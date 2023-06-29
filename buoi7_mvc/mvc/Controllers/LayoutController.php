<?php
class LayoutController extends baseController{
    private $productModel;
    function __construct(){
        $this->loadModels('productModel');
        $this->productModel = new productModel();
    }
    public  function index(){
        $file_main='Product/main';
        $data=$this->productModel->getAll();
        $this->loadViews('Layout.index',$data, $file_main);
    }
    public function add(){
        $this->loadViews('public.Product/add',[], []);
        echo __METHOD__;
    }
}
?>