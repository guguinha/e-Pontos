<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public $nome;
//	public $email;
//	public $img;
	public $login;
	public $senha;

	public function __construct(){
		parent::__construct();
	}

	public function listar_autor($id){
		$this->db->select('id, nome');
		$this->db->from('usuario');
		$this->db->where('id ='.$id);
		return $this->db->get()->result();
	}

	public function listar_autores(){
		$this->db->select('id, nome');
		$this->db->from('usuario');
		$this->db->order_by('nome', 'ASC');		
		return $this->db->get()->result();
	}

	public function adicionar($nome,$login,$senha){
		$dados['nome'] = $nome;
		// $dados['email'] = $email;
		// $dados['historico'] = $historico;
		$dados['login'] = $login;
		$dados['senha'] = md5($senha);
		return $this->db->insert('usuario',$dados);
	}

	public function excluir($id){
		$this->db->where('md5(id)',$id);
		return $this->db->delete('usuario');
	}

	public function listar_usuario($id){
		$this->db->select('id, nome, login');
		$this->db->from('usuario');
		$this->db->where('md5(id)',$id);
		return $this->db->get()->result();
	}

	public function alterar($nome,$login,$id){
		$dados['nome'] = $nome;
		// $dados['email'] = $email;
		// $dados['historico'] = $historico;
		$dados['login'] = $login;
		//$dados['senha'] = md5($senha);
		$this->db->where('id',$id);
		return $this->db->update('usuario',$dados);
	}

	public function alterar_senha($senha,$id){
		$dados['senha'] = md5($senha);
		$this->db->where('id',$id);
		return $this->db->update('usuario',$dados);
	}

	public function retorne_login($id){
		$this->db->select('login');
		$this->db->from('usuario');
		$this->db->where('id',$id);
		return $this->db->get()->result();
	}

	public function alterar_img($id){
		$dados['img'] = 1;
		$this->db->where('md5(id)',$id);
		return $this->db->update('usuario',$dados);
	}


}
