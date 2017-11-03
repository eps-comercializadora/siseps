<?php


class principalController extends Controller
{
	
	private $_index;
    public function __construct() {
        parent::__construct();
  	 $this->_index=$this->loadModel('principal');	
      
    }

    public function index()
    {


			
			$this->_view->setJs(array('js'));
			$this->_view->setCss(array('css'));
        		$this->_view->titulo = 'principal';
        		$this->_view->numero_emp=$this->_index->count_emp();
        		$this->_view->numero_per=$this->_index->numero_per();
			$this->_view->renderizar('index');
							
			
	}

	  
}

?>