<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pontos_model extends CI_Model {

	public $id;
	public $titulo;
	public $subtitulo;
	public $conteudo;
	public $data;
	public $img;
	public $user;

	public function __construct(){
		parent::__construct();
	}

	public function pontos(){
		$this->db->order_by('data','DESC');
		return $this->db->get('ponto')->result();
	}

	public function ponto($id){
		$this->db->where('md5(id)',$id);
		return $this->db->get('ponto')->result();
	}

	public function pontoByData($data){
		$this->db->where('data like ',$data.'%');
		return $this->db->get('ponto')->result();
	}

	public function adicionar($user,$data,$tipo,$NSR,$observacao){
		$dados['user'] = $user;
		$dados['data'] = $data;
		$dados['tipo'] = $tipo;
		$dados['NSR'] = $NSR;
		$dados['observacao'] = $observacao;
		return $this->db->insert('ponto',$dados);
	}

	public function excluir($id){
		$this->db->where('md5(id)',$id);
		return $this->db->delete('ponto');
	}

		public function alterar($id,$user,$data,$tipo,$NSR,$observacao){
		$dados['user'] = $user;
		$dados['data'] = $data;
		$dados['tipo'] = $tipo;
		$dados['NSR'] = $NSR;
		$dados['observacao'] = $observacao;
		$this->db->where('id',$id);
		return $this->db->update('ponto',$dados);
	}

		public function alterar_img($id){
		$dados['img'] = 1;
		$this->db->where('md5(id)',$id);
		return $this->db->update('ponto',$dados);
	}

}
