<?php

class listaController extends Controller
{
	
	private $_index;
   	 public function __construct() {
        parent::__construct();
  	 $this->_index=$this->loadModel('regis_per');
  	  $this->_index2=$this->loadModel('lista');	
      
    }

    public function index()
    {


			
			$this->_view->setJs(array('js'));
			$this->_view->setCss(array('css'));
        	$this->_view->titulo = 'lista de empresas';
        	$this->_view->lista=$this->_index->traer_emp();
        		

        	//$this->_index->prueba();



			$this->_view->renderizar('index');
							
			
	}

	public function eliminar()
    {


			$this->_index2->eliminar($_GET['id']);

			$this->index();
    	
			
	}
	
	


	  
}

?>