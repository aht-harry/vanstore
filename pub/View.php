<?php 

class View{
    

    public function get_layout($file_name,$data)
    {
        ob_start();
        
        $default = "user.php";
        $file_name = admin_view . $file_name .".php";
        
        (file_exists($file_name) === false) ? require_once admin_view . $default : require_once $file_name;
        $layout = ob_get_clean();
        include_once 'view/admin/index.php';
    }
}