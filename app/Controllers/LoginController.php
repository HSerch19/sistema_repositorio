<?php

namespace App\Controllers;
use App\Models\LoginModel;
use CodeIgniter\HTTP\ResponseInterface;

class LoginController extends BaseController
{
    public function verificarUsuario()
    {
        $userEmail = $this->request->getPost('email_login');
        $userPass = $this->request->getPost('password_login');

        $userModel = new LoginModel();

        $datosUser = $userModel->obtenerUsuario(['email' => $userEmail]);

        if(count($datosUser) > 0 && password_verify($userPass, $datosUser[0]['password'])) {

            $session = session();
            return view('user/home');
        }else {
            echo '<script>alert("Datos Incorrectos");</script>';
            return redirect()->to(base_url('LoginView'));
        }
    }
}