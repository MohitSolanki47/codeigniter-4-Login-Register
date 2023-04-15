<?php

namespace App\Controllers;
use App\Models\Registration;
class Home extends BaseController
{

    // SELECT First_Name,about_us,COUNT(about_us) FROM `registrations` GROUP BY First_Name, about_us    
    public function index()
    {
        return view('registration');
    }

    public function Registration_data()
    {   
            $Registration = New Registration();
            $data = [
                'First_Name'=>$_POST['First_Name'],
                'Last_Name'=>$_POST['Last_Name'],
                'email'=>$_POST['email'],
                'password'=>$_POST['password'],
                'Re_type_password'=>$_POST['Re_type_password'],
                'Phone'=>$_POST['Phone'],
                'about_us'=>$_POST['about_us']
            ];

            $Registration->insert($data);
            return redirect('Login');             
    }

    public function Login()
    {       
        return view('login');
    }

    public function pass_verify()
    {
        $model = new Registration();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $model->where('email', $email)->first();
        if($data)
        {
            $pass = $data['password'];
            if($pass == $password)
            {

                $ses_data = [
                    'id'       => $data['id'],
                    'First_Name'       => $data['First_Name'],
                    'Last_Name'     => $data['Last_Name'],
                    'email'    => $data['email'],
                    'password'    => $data['password'],
                    'Re_type_password'    => $data['Re_type_password'],
                    'Phone'    => $data['Phone'],
                    'about_us'    => $data['about_us'],
                    'logged_in'     => TRUE
                ];
                session()->set($ses_data);

                return redirect('dashboard');    
                
            }
            else
            {
                session()->set('user_danger_alert',"Wrong Password!");
                return redirect('Login'); 
            }
        }
        else
        {
            session()->set('user_danger_alert',"Email Not Found !");
            return redirect('Login');
        }
    }

    public function Dashboard()
    {   
        $session = session();
        $name = $session->get('First_Name');
        if(isset($name))
        { 
            return view('dashboard');
        }
        else
        {
            // 
            session()->set('user_danger_alert',"Login First!");
            return redirect('Login');
        }
    }

    public function Logout()
    {
        $session = session();        
        $session->destroy();
		return redirect('Login'); 
    }
}
