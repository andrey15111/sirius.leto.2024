<?php

namespace App\Http\Controllers;

class TeacherController extends Controller
{
    public function info(): array
    {
        return [
            'name' => "Иванова Татьяна Николаевна",
            'subject' => "Математика, Информатика",
            'email' => "tatnick@example.com",
            'avatar' => "https://via.placeholder.com/150"
        ];
    }
}
