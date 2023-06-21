<?php 
//los controladores deben ser en plural y con mayuscula 

 
class menus extends CI_Controller{
//constructor 
    function __construct(){   // funcion constructor 

        parent::__construct();//  invocamos a la clase padre esta es solo para invocar a la clase padre  cuando haya herencia hay q poner siempre 
    }
    //renderisacion de la vista desayunos 
    public function desayunos(){
        $this->load->view('header');
        $this->load->view('menus/desayunos'); //cuando invoque a la funcion se me va a presentar la vista
        $this->load->view('footer');
    }
    public function almuerzos(){
        $this->load->view('header');
        $this->load->view('menus/almuerzos'); // xfa codigneiter carca ruta 
        $this->load->view('footer');
    }
    public function menus(){
        $this->load->view('header');
        $this->load->view('menus/menus'); // xfa codigneiter carca ruta 
        $this->load->view('footer');
    }
    
    public function meriendas(){    
        $this->load->view('header');
        $this->load->view('menus/meriendas');
        $this->load->view('footer');
    }
    public function platosc(){    
        $this->load->view('header');
        $this->load->view('menus/platosc');
        $this->load->view('footer');
    }
    
}

?>
