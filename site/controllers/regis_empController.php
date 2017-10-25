<?php


class regis_empController extends Controller
{
	
	private $_index;
   	 public function __construct() {
        parent::__construct();
  	// $this->_index=$this->loadModel('registo de personal');	
      
    }

    public function index()
    {


			
			$this->_view->setJs(array('js'));
			$this->_view->setCss(array('css'));
        		$this->_view->titulo = 'registro';
			$this->_view->renderizar('index');
							
			
	}

	  
}

?>