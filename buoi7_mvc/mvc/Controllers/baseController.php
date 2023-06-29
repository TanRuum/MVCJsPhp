<?php
    class baseController{
    protected function loadViews($path,$data,$file_main){
        require './mvc/Views/'.str_replace('.','/',$path).'.php';
    }
    protected function loadModels($path){
        require './mvc/Models/'.$path.'.php';
    }
    }

?>