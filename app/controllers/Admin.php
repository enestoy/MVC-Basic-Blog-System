<?php

class Admin extends Controller{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->login();
    }
    
    public function login(){
        // Oturum Kontrolü
        Session::init();
        if(Session::get("login") == true){
            header("Location: ". SITE_URL ."/panel/home");
        }
        $this->load->view("admin/loginForm");
    }
    
    public function runLogin(){
        $data = array(
            ":kadi" => $_POST["username"],
            ":parola" => $_POST["password"]
        );
        // Veri tabanı işlemleri
        $admin_model = $this->load->model("admin_model");
        $result = $admin_model->userControl($data);
        if($result == false){
            // Yanlış bilgiler girildi.
            header("Location:". SITE_URL ."/admin/login");
        }else{
            Session::init();
            Session::set("login", true);
            Session::set("username", $result[0]["kadi"]);
            Session::set("userId", $result[0]["id"]);
        
            header("Location:". SITE_URL ."/panel/home");
        }
    }
    
    public function logout(){
        Session::init();
        Session::destroy();
        header("Location:". SITE_URL ."/admin/login");
    }
}

?>