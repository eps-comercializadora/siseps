<?php


class regis_perController extends Controller
{
	
	private $_index;
   	 public function __construct() {
        parent::__construct();
  	 $this->_index=$this->loadModel('regis_per');	
  
    }

    public function index()
    {


			
			$this->_view->setJs(array('js'));
			$this->_view->setCss(array('css'));
        		$this->_view->titulo = 'registro';
        		$this->_view->_empresas=$this->_index->traer_emp();
        		$this->_view->renderizar('index');
			
			
	}

	public function guardar_per(){



		$this->_index->guardar_per($_GET);

	}

	public function buscar(){


	echo json_encode($this->_index->buscar($_GET));
		

	}

	  
}

?>