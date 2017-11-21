<?php

class regis_empController extends Controller
{
	
	private $_index;
   	 public function __construct() {
        parent::__construct();
  	 $this->_index=$this->loadModel('regis_emp');	
      
    }

    public function index()
    {


			
			$this->_view->setJs(array('js'));
			$this->_view->setCss(array('css'));
        		$this->_view->titulo = 'registro';

        		$this->_view->_municipios=$this->_index->cargar_muni("18");





			$this->_view->renderizar('index');
							
			
	}
	public function traer_parroquia(){



		echo json_encode($this->_index->traer_parroquia($_GET['id']));

	}
	public function guardar_emp(){



		$this->_index->guardar_emp($_GET);

	}

    public function actualizar()
    {


			
			$this->_view->setJs(array('js','js-actializar'));
			$this->_view->setCss(array('css'));
        	$this->_view->titulo = 'actualizacion de registro';
			$this->_view->_municipios=$this->_index->cargar_muni("18");
			$this->_view->datos=$this->_index->info($_GET['id']);




			$this->_view->renderizar('actualizar');
							
			
	}


	  
}

?>