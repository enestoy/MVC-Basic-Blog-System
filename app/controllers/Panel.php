<?php
class Panel extends Controller
{
    public function __construct()
    {
        parent::__construct();

        // Oturum Kontrolü
       Session::checkSession();
    }
    public function index()
    {
        $this->home();
    }

    public function home()
    {
        $this->load->view("panel/header");
        $this->load->view("panel/left");
        $this->load->view("panel/home");
        $this->load->view("panel/footer");
    }

    public function addNewContent()
    {
        $this->load->view("panel/header");
        $this->load->view("panel/left");
        $this->load->view("panel/addNewContent");
        $this->load->view("panel/footer");
    }

    public function addNewContentRun(){
        $form = $this->load->otherClasses('Form');

        $form   ->post('etiket')
                ->isEmpty()
                ->length(0,100);
        
        $form   ->post('title')
                ->isEmpty()
                ->length(0,100);
        
        $form   ->post('content')
                ->isEmpty();
        
        if($form->submit()){
            $data = array(
                'etiket' => $form->values['etiket'],
                'title' => $form->values['title'],
                'content' => $form->values['content']
            );
            
            $model = $this->load->model("panel_model");
            $result = $model->addNewContentRun($data);
            if($result){
                header("Location: ". SITE_URL ."/panel");
            }else{
                echo "sorun var";
            }
        }else{
            $data["formErrors"] = $form->errors;
            
            $this->load->view("panel/header");
            $this->load->view("panel/left");
            $this->load->view("panel/addNewContent",$data);
            $this->load->view("panel/footer");
        }
    }
}
