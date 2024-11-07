<?php 
    namespace App\Models;

    use CodeIgniter\Model;

    class LoginModel extends Model {

        public function obtenerUsuario($data){


            $user = $this->db->table('user');
            $user->where($data);
            return $user->get()->getResultArray(); 

        }
    }