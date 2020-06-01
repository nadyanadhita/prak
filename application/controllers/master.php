<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master extends CI_Controller {

	public function login()
	{
		 
		$this->load->view('login');
	}

	public function index()
	{
		$data['isi'] = 'home';
		$data['class'] = 'home';
		$this->load->view('index',$data);
	}
/*item*/
	public function item()
	{
		$data['isi'] = 'item';
		$data['class'] = 'item';
		$data['data'] = $this->db->query("SELECT * FROM tbl_item ");
		$this->load->view('index',$data);
	}
	public function add_item()
	{
		$data['isi'] = 'add_item';
		$data['class'] = 'item';
		$this->load->view('index',$data);
	}
	public function proses_add_item(){

		$data = array('kode' => $this->input->post('kode'),
					  'nama' => $this->input->post('nama'),
					  'merek' => $this->input->post('merek')
		 );
		$this->db->insert('tbl_item',$data);
		redirect('master/item');
	}
	public function hapus_item($id_item){
		$this->db->query("DELETE FROM tbl_item where id_item='$id_item'");
		redirect('master/item');
	}

	/*Pembelian_*/
	public function pembelian()
	{
		$data['isi'] = 'pembelian';
		$data['class'] = 'pembelian';
		$data['data'] = $this->db->query("SELECT * FROM tbl_pembelian ");
		$this->load->view('index',$data);
	}
	public function add_pembelian()
	{
		$data['isi'] = 'add_pembelian';
		$data['class'] = 'item';
		$this->load->view('index',$data);
	}
	public function proses_add_pembelian(){

		$data = array('no_pembelian' => $this->input->post('no_pembelian'),
					  'tgl_pembelian' => $this->input->post('tgl_pembelian'),
					  'suplier' => $this->input->post('suplier'),
					  'total' => $this->input->post('total'),
					  'terbayar' => $this->input->post('terbayar'),
					  'sisa' => $this->input->post('sisa')
		 );
		$this->db->insert('tbl_pembelian',$data);
		redirect('master/pembelian');
	}
	public function hapus_pembelian($id_pembelian){
		$this->db->query("DELETE FROM tbl_pembelian where id_pembelian='$id_pembelian'");
		redirect('master/pembelian');
	}


	/*penjualan_*/
	public function penjualan()
	{
		$data['isi'] = 'penjualan';
		$data['class'] = 'penjualan';
		$data['data'] = $this->db->query("SELECT * FROM tbl_penjualan ");
		$this->load->view('index',$data);
	}
	public function add_penjualan()
	{
		$data['isi'] = 'add_penjualan';
		$data['class'] = 'penjualan';
		$this->load->view('index',$data);
	}
	public function proses_add_penjualan(){

		$data = array('no_penjualan' => $this->input->post('no_penjualan'),
					  'tgl_penjualan' => $this->input->post('tgl_penjualan'),
					  'costumer' => $this->input->post('costumer'),
					  'total' => $this->input->post('total'),
					  'berbayar' => $this->input->post('berbayar'),
					  'sisa' => $this->input->post('sisa')
		 );
		$this->db->insert('tbl_penjualan',$data);
		redirect('master/penjualan');
	}
	public function hapus_penjualan($id_penjualan){
		$this->db->query("DELETE FROM tbl_penjualan where id_penjualan='$id_penjualan'");
		redirect('master/penjualan');
	}



	/*stok_*/
	public function stok()
	{
		$data['isi'] = 'stok';
		$data['class'] = 'stok';
		$data['data'] = $this->db->query("SELECT * FROM tbl_stok left join tbl_item on tbl_stok.id_item=tbl_item.id_item ");
		$this->load->view('index',$data);
	}
	public function add_stok()
	{
		$data['isi'] = 'add_stok';
		$data['class'] = 'stok';
		$this->load->view('index',$data);
	}
	public function proses_add_stok(){

		$data = array('kode' => $this->input->post('kode'),
					  'id_item' => $this->input->post('id_item'),
					  'jumlah' => $this->input->post('jumlah') 
		 );
		$this->db->insert('tbl_stok',$data);
		redirect('master/stok');
	}
	public function hapus_stok($id_stok){
		$this->db->query("DELETE FROM tbl_stok where id_stok='$id_stok'");
		redirect('master/stok');
	}
/*laporan_*/
public function laporan()
	{
		$data['data'] = $this->db->query("SELECT * FROM tbl_penjualan ");
		$this->load->view('laporan',$data);
	}


 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('master/login'));
	}

	 
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */