<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function index()
	{
         
                $this->load->model("crud_model");
		$this->load->view('pagina_principal/principal_view');
	}

	function paginaCarreras()
	{
		$this->data['query'] = $this->crud_model->getNombreCarr();
		$this->load->view('carreras/carreras_view', $this->data);
	}

	function crearCarrera()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('codigo', 'código', 'required');
		$this->form_validation->set_rules('nombre', 'nombre', 'required');
		$this->form_validation->set_rules('creditos', 'créditos', 'required');
		$data = array(	'codigoCarr' => $this->input->post('codigo'),
						'nombreCarr' => $this->input->post('nombre'),
						'creditosCarr' => $this->input->post('creditos') );

		if($this->form_validation->run() == true){
			$this->crud_model->createCarrera($data);
	        $this->data['query'] = $this->crud_model->getNombreCarr();
			$this->load->view('carreras/seccioncarreras_view', $this->data);
    	}elseif ($this->form_validation->run() == false) {
    		$this->data['query'] = $this->crud_model->getNombreCarr();
			$this->load->view('carreras/seccioncarreras_view', $this->data);	
    	}	
	}

	function actualizarCarrera()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('codigo', 'código', 'required');
		$this->form_validation->set_rules('nombre', 'nombre', 'required');
		$this->form_validation->set_rules('creditos', 'créditos', 'required');
		$data = array(
						'nombreCarr' => $this->input->post('nombre'),
						'creditosCarr' => $this->input->post('creditos') );
		$id = $this->input->post('codigo');

		if($this->form_validation->run() == true){
			$this->crud_model->updateCarrera($id, $data);
	        $this->data['query'] = $this->crud_model->getNombreCarr();
			$this->load->view('carreras/seccioncarreras_view', $this->data);
    	}elseif ($this->form_validation->run() == false) {
    		$this->data['query'] = $this->crud_model->getNombreCarr();
			$this->load->view('carreras/seccioncarreras_view', $this->data);	
    	}
	}

	function getCarrera()
	{
		$id = $this->input->post('id');
		$this->data['carrera'] = $this->crud_model->getCarrera($id);
		$this->load->view('carreras/seccioninfo_view', $this->data);
	}

	function editarCarrera()
	{
		$codigo = $this->input->post('codigo');
		$this->data['carrera'] = $this->crud_model->getCarrera($codigo);
		$this->load->view('carreras/seccionformedit_view', $this->data);
	}
	
	function eliminarCarrera()
	{
		$id = $this->input->post('id');
		$this->crud_model->delCarrera($id);
		$this->data['query'] = $this->crud_model->getNombreCarr();
		$this->load->view('carreras/seccioncarreras_view', $this->data);
	}
        //SECCIÓN DE EXPERIENCIAS EDUCATIVAS
        function paginaEE()
	{
		$this->data['query'] = $this->crud_model->getNombreEE();
                $this->data['query2'] = $this->crud_model->comboCarrera();
<<<<<<< HEAD
                $this->data['query3']= $this->crud_model->getNombreCarr();
=======
>>>>>>> 5cd6bfc06013ac884791a4a45d1b2fad0e31b069
		$this->load->view('EE/EE_view', $this->data);
	}
        function getEE()
	{
		$id = $this->input->post('id');
		$this->data['ee'] = $this->crud_model->getEE($id);
		$this->load->view('EE/seccioninfoEE_view', $this->data);
	}
        function getCarreraEE()
	{
		$id = $this->input->post('id');
		$this->data['carrera'] = $this->crud_model->getCarreraEE($id);
<<<<<<< HEAD
                $this->data['query']= $this->crud_model->getNombreCarrEE($id);
		$this->load->view('EE/seccionEE_view', $this->data);
	}

        function editarEE()
	{
		$id = $this->input->post('id');
		$this->data['ee'] = $this->crud_model->getEE($id);
                $this->data['query2'] = $this->crud_model->comboCarrera();
                $this->data['arreglo'] = array("Básica General", "Iniciación a la Diciplina", "Diciplinaria", "Terminal");
                $this->data['arreglo2'] = array("Obligatoria", "Optativa");
                 $this->data['arreglo3'] = array("FEB-JUL", "AGO-ENE");
		$this->load->view('EE/seccionformEE_view', $this->data);
               
	}

	function eliminarEE()
	{
		$id = $this->input->post('id');
		$this->crud_model->delCarrera($id);
		$this->data['query'] = $this->crud_model->getNombreEE();
		$this->load->view('EE/seccionEE_view', $this->data);
	}
        
=======
		$this->load->view('EE/seccionCarrera_EE_view', $this->data);
	}

<<<<<<< HEAD
        function editarEE()
	{
		$id = $this->input->post('id');
		$this->data['ee'] = $this->crud_model->getEE($id);
		$this->load->view('EE/seccionformEE_view', $this->data);
	}

	function eliminarEE()
	{
		$id = $this->input->post('id');
		$this->crud_model->delCarrera($id);
		$this->data['query'] = $this->crud_model->getNombreEE();
		$this->load->view('EE/seccionEE_view', $this->data);
	}
        
=======
	function formcrearcarrera()
	{
		$this->load->view('carreras/seccionformcrear_view');
	}

>>>>>>> bf619624d892f01a386415cff320cb5ed62c9ae1
>>>>>>> 5cd6bfc06013ac884791a4a45d1b2fad0e31b069
}
