<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
	public function start(){
		$content = $this->input->post();
		$data['SEQ_A'] = $content['SEQ_A'];
		$data['SEQ_B'] = $content['SEQ_B'];
		$data['SEQ_C'] = $content['SEQ_C'];
		$data['SEQ_D'] = $content['SEQ_D'];
		$data['GREEN_INTERVAL'] = $content['GREEN_TIMER'];
		$data['YELLOW_INTERVAL'] = $content['YELLOW_TIMER'];

		$this->db->where('ID',1);
		$this->db->update('signal_data',$data);

		echo json_encode(array('seq_a' => $data['SEQ_A'],'seq_b' => $data['SEQ_B'], 'seq_c' => $data['SEQ_C'], 'seq_d' => $data['SEQ_D'], 'interval_green' => $data['GREEN_INTERVAL']*1000, 'interval_yellow' => $data['YELLOW_INTERVAL']*1000 ));
	}
}
