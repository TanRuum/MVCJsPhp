<?php
class app{
    protected $Controllers='LayoutController';
    protected $action='index';
    protected $params = [];
    function __construct()
    {
        $url = '';
        if (isset($_GET['url'])) {
            $url = trim($_GET['url']);
            $url = explode('/',$_GET['url']);
        }
        if(isset($url[0])){
            if (file_exists('./mvc/Controllers/' . $url[0]).'Controller.php') {
                $this->Controllers = $url[0] . 'Controller';
                unset($url[0]);
            }
        }
        require_once('./mvc/Controllers/' . $this->Controllers.'.php');
        $this->Controllers = new $this->Controllers();
        if(isset($url[1])){
            if(method_exists($this->Controllers, $url[1])){
                $this->action = $url[1];
                unset($url[1]);
            }
        }
        if($url){
            $this->params = $url;
        }
        call_user_func_array([$this->Controllers, $this->action], $this->params);
        //echo $this->action;
    }
}
?>