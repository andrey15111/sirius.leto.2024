<?php

namespace App\Http\Controllers;


class ClassController extends Controller
{

    public function info(): array
    {
        return [
            ['id' => 1, 'subject' => 'Математика', 'grade' => '6Г'],
            ['id' => 2, 'subject' => 'Геометрия', 'grade' => '8А'],
            ['id' => 3, 'subject' => 'Алгебра', 'grade' => '9Б'],
            ['id' => 4, 'subject' => 'Информатика', 'grade' => '10В'],
        ];
    }
}
