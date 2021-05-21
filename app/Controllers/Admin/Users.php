<?php
namespace App\Controllers\Admin;

class Users extends AdminController{
    function index(){
        $session = session();
        if( $session->has("success_created") )
            $this->data["success_message"] = $session->getFlashdata('success_created');
        $userm = new \App\Models\User();
        $this->data["users"] = $userm->findAll();
        return $this->display("admin/users.php");
    }
    function profile(int $user_id){
        $session = session();
        $request = \Config\Services::request();
        $userm = new \App\Models\User();
        $this->data["user"] = $userm->find($user_id);
        if( !$this->data["user"] )
            return redirect()->to("/admin/users"); 
        if( $request->getMethod() == "post" ){
            $userm->update_user( $user_id, $request->getPost() );
            $session->setFlashdata('success_updated', 'Данные успешно обновлены');
            return redirect()->to("/admin/users/profile/".$user_id); 
        }
        if( $session->has("success_updated") )
            $this->data["success_message"] = $session->getFlashdata('success_updated');
        return $this->display("admin/profile.php");
    }
    function create_user(){
        $request = \Config\Services::request();
        if( $request->getMethod() == "post" ){
            $userm = new \App\Models\User();
            $user_id = $userm->create_user( $request->getPost("phone"),$request->getPost("password") );
            $session = session();
            $session->setFlashdata('success_created', 'Успешно создали нового пользователя, для редактирования перейдите в <a href="/admin/users/profile/'.$user_id.'">его профиль</a>');
            return redirect()->to("/admin/users");
        }
        return view("admin/create_user.php");
    }
}
