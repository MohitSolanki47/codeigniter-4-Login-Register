<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Registration;

class MyProfile extends BaseController
{
    public function index()
    {
        $model = new Registration();
        $session = session();
        $id = $session->get('id');
        $name = $session->get('First_Name');

        $data['user'] = $model->where('id', $id)->first();
        return view('myprofile',$data);
    }

    public function Update_profile()
    {   
        $id = $_POST['User_id'];
        $data = [
            'First_Name'       => $_POST['First_Name'],
            'Last_Name'     => $_POST['Last_Name'],
            'email'    => $_POST['email'],
            'Phone'    => $_POST['Phone'].','.$_POST['Phone2'],
        ];
        $model = new Registration();
        $result  = $model->update($id,$data);
        if($result) 
        {
			session()->set('user_success',"User details are updated successfully.");
            return redirect('my_profile'); 
		} 
        else 
        {
            session()->set('user_danger_alert',"Something went wrong");
            return redirect('my_profile'); 
		}
    }
}
