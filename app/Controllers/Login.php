<?php

namespace App\Controllers;
use App\Models\UserModel;

class Login extends BaseController
{
    public function main()
    {
        return view('admin/masuk');
    }
    public function process()
    {
        $users = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $dataUser->username,
                    'password' => $dataUser->password,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('/admin'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
     
}}
  function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}