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

    protected function authenticate()
    {
        if (!auth()->user() || !auth()->user()->can('admin.access')) {
            return redirect()->to('/');
        }
    }
    
    public function index()
    {
        $this->authenticate();
        $user = auth()->user();
        return view('admin', [
            'title' => $this->title,
            'content' => $this->content]);
    }

    public function addUserToGroup()
    {
        $this->authenticate();
        $user = auth()->user();
        $user->addGroup('admin', 'beta');
    }

    public function listUsers()
    {
        $this->authenticate();
        $userModel = new UserModel();
        $users = $userModel->findAll();
        return view('admin', [
            'users' => $users,
            'title' => 'List Users',
            'content' => $this->content]);
    }
}
