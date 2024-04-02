<?php

namespace App\Controllers;

use App\Models\AkunModel;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            'isi' => 'login'
        ];

        return view('layouts/layout_login', $data);
    }

    public function Login()
    {
        $data = [];
        //$akun = new AkunModel();

        if ($this->request->getMethod() == 'post') {

            $rules = [
                'username' => 'required|min_length[6]|max_length[50]|',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[username,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => "Username or Password didn't match",
                ],
            ];

            if (!$this->validate($rules, $errors)) {

                $data = [
                    'isi' => 'login'
                ];

                return view('layouts/layout_login', [
                    "validation" => $this->validator,
                    'isi' => 'login'

                ]);

            } else {
                $model = new AkunModel();

                $user = $model->where('username', $this->request->getVar('username'))
                ->first();

                // Stroing session values
                $this->setUserSession($user);

                // Redirecting to dashboard after login
                if($user['role'] == "Admin"){
                    return redirect()->to(base_url('Admin'));
                }
                elseif($user['role'] == "Customer"){
                    return redirect()->to(base_url('Customer'));
                }
            }
        }
        return view('login');
        
    }

    public function Logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/Auth');
    }

    private function setUserSession($user)
    {
        $data = [
            'userid' => $user['userid'],
            'username' => $user['username'],
            'nama' => $user['nama'],
            'isLoggedIn' => true,
            "role" => $user['role'],
        ];

        session()->set($data);
        return true;
    }
}
