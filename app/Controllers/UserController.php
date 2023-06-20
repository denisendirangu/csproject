<?php

namespace App\Controllers;

use \App\Models\UserModel;
use \App\Libraries\Hash;

    $db = \Config\Database::connect();


class UserController extends BaseController

{
    //protected $validation;
    public function __construct()
    {
        helper(['url', 'form']);
    }

    // public function profile()
    // {
    //     $data['pageTitle'] = 'Profile';
    //     return view('dashboard/profile',$data);
    // }

    public function login()
    {
        //echo view('same/header');
        $data['pageTitle'] = 'Login';
        return view('connectors/login', $data);
    }

    public function do_login()
    {
        $validation = $this->validate([
            'email'=>[
                'rules'=>'required|valid_email|is_not_unique[tbl_user.email]',
                'errors'=>[
                    'required'=>'Email is required!',
                    'valid_email'=>'Enter a valid email! ',
                    'is_not_unique'=>'This email does not exists!'
                ]
            ],
            'password'=>[
                'rules'=>'required|min_length[8]|max_length[12]',
                'errors'=>[
                    'required'=>'Password is required!',
                    'min_length'=>'Password should have a minimum of 8 characters.',
                    'max_length'=>'Password cannot exceed more than 12 characters.'
                ]
            ],    
        ]);


        if (!$validation) {
            return view('auth/d-login', ['validation' => $this->validator]);
        } else {
            //Let's check user

            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
    
            $userModel = new UserModel();
            $user_info = $userModel->where('email', $email)->first();
            $check_password = Hash::check($password, $user_info['password']);

            if (!$check_password) {
                session()->setFlashdata('fail', 'Incorrect password');
                return redirect()->to('/login')->withInput();
            } else {
                $user_id = $user_info['user_id'];
                session()->set('loggedUser', $user_id);
                return redirect()->to('/dashboard');
            }
        }

        
    }

    public function register()
    {
        //echo view('same/header');
        $data['pageTitle'] = 'Register';
        return view('connectors/register', $data);
    }

    public function do_register()
    {

        /*$validation = $this->validate([
            'fname' => 'required',
            'email' => 'required|valid_email|is_unique[tbl_user.email]',
            'password' => 'required|min_length[8]|max_length[15]',
            'c_password' => 'required|min_length[8]|max_length[15]|matches[password]'

        ]);*/

        $validation = $this->validate([
            'fname'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Full name is required!'
                ]
            ],
            'email'=>[
                'rules'=>'required|valid_email|is_unique[tbl_user.email]',
                'errors'=>[
                    'required'=>'Email is required!',
                    'valid_email'=>'Please enter valid email! ',
                    'is_unique'=>'This Email already exists!'
                ]
            ],
            'password'=>[
                'rules'=>'required|min_length[8]|max_length[12]',
                'errors'=>[
                    'required'=>'Password is required!',
                    'min_length'=>'Password should have a minimum of 8 characters.',
                    'max_length'=>'Password cannot exceed more than 12 characters.'
                ]
            ],
            'c_password'=>[
                'rules'=>'required|min_length[8]|max_length[12]|matches[password]',
                'errors'=>[
                    'required'=>'Confirm password field is required!',
                    'min_length'=>'Confirm Password should have minimum of 8 characters.',
                    'max_length'=>'Confirm Password cannot exceed more than 12 characters.',
                    'matches'=>'The confirm password does not match with the given password!'
                ]
            ]
        ]);

        if (!$validation) {
            return view('auth/d-register', ['validation' => $this->validator]);
        } else {
            //Let's register user into db

            $name = $this->request->getPost('fname');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cpassword = $this->request->getPost('c_password');

            $data = [
                'fname' => $name,
                'email' => $email,
                'password' => Hash::make($password),
                'c_password' => Hash::make($cpassword)
            ];

            $userModel = new UserModel();
            $query = $userModel->insert($data);

            if (!$query) {
                return redirect()->back()->with('fail', 'Something went wrong');
            } else {
                return redirect()->back()->with('success', 'You are now registered successfully');
            }
        }

    }

    public function forgotpass()
    {
        $data['pageTitle'] = 'Forgot Password Page';
        return view('connectors/forgotpass', $data);
    }

    public function recoverpass()
    {
        $data['pageTitle'] = 'Recover Password Page';
        return view('connectors/recoverpass', $data);
    }
}
