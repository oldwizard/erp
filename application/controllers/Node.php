<?phpdefined('BASEPATH') OR exit('No direct script access allowed');class Node extends MY_Controller {    public function index() {        $this->data = $this->tmp();        $this->load->view('header',$this->data);        $this->load->view('index');        $this->load->view('footer');    }         } 