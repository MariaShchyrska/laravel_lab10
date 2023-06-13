<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        // Логіка для відображення адмінки
        return view('admin.index');
    }

    public function createAdmin()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'mariaadmin@gmail.com', // Вкажіть пошту адміна тут
            'password' => bcrypt('admin123'),
            'role' => 'admin', // Встановлюємо роль адміністратора
        ]);

        return 'Admin created successfully';
    }
}
