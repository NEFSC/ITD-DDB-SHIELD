<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Shield\Auth;
use CodeIgniter\Shield\Models\UserModel;

class Admin extends Base
{
    protected $title = 'Admin';
    protected $content = 'Admin';
    
    public function index()
    {
        $user = auth()->user();
        return view('admin');
    }

    public function addUserToGroup()
    {
        
        $user = auth()->user();
        $user->addGroup('admin', 'beta');
    }

    public function listUsers()
    {
        if (!auth()->user() || !auth()->user()->can('admin.access')) {
            return redirect()->to('/');
        }
        $userModel = new UserModel();
        $users = $userModel->findAll();
        return view('admin', [
            'users' => $users,
            'title' => $this->title,
            'content' => $this->content]);
    }
}
