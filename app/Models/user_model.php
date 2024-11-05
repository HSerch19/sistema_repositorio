<?php 
    namespace App\Models;

    use CodeIgniter\Model;

    class LoginModel extends Model {

        public function obtenerUsuario($data){
            $user = $this->db->table('users');
            $user->where($data);
            return $user->get()->getResultArray(); 
        }
    }