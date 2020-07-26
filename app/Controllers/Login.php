<?php namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function __construct()
    {
        helper('url');
        helper(['form']);
    }

    public function index()
	{
        $data['title'] = 'Login';
        helper(['form']);
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required|validateUser[email,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => 'Email or Password don\'t match'
                ]
            ];

            if (! $this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                #STORE USER TO DB
                $model = new UserModel();

                $user = $model->where('email', $this->request->getVar('email'))->first();
                #SET SESSION
                $this->setUserMethod($user);
                return redirect()->to('home');
            }
        }

        echo view('layout/header', $data);
        echo view('pages/login');
        echo view('layout/footer');
	}

	public function setUserMethod($user) {
        $data = [
            'id' => $user['id'],
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
            'email' => $user['email'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }

	public function register() {
        $data['title'] = 'Register';

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'firstname' => 'required|min_length[3]max_length[20]',
                'lastname' => 'required|min_length[3]max_length[20]',
                'email' => 'required|min_length[6]max_length[50]|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[8]max_length[150]',
                'password_confirm' => 'matches[password]',
            ];

            if (! $this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                #STORE USER TO DB
                $model = new UserModel();
                $newData = [
                    'firstname' => $this->request->getVar('firstname'),
                    'lastname' => $this->request->getVar('lastname'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Successfully registered.');
                return redirect()->to('/');
            }
        }

        echo view('layout/header', $data);
        echo view('pages/register');
        echo view('layout/footer');
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('/');
    }

	//--------------------------------------------------------------------
}
