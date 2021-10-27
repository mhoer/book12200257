<?php
class transaksisepatu extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-transaksi');
    }
    public function output()
    {
        $this->load->model('Model_transaksi');
        $data = [
            'nama' => $this->input->post('nama'),
            'no_hp' => $this->input->post('no_hp'),
            'merk' => $this->input->post('merk'),
            'ukuran' => $this->input->post('ukuran'),
            'harga' => $this->Model_transaksi->hasil($this->input->post('merk')),
        ];
            $this->load->view('view-data-transaksi', $data);
    }
}