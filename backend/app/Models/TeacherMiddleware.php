<?php

namespace App\Models;

use Closure;
use Illuminate\Http\Request;

class TeacherMiddleware
{
    /**
     * Обработка запроса перед передачей его дальше по цепочке Middleware.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        // Проверяем, авторизован ли пользователь и имеет ли он роль "учитель"
        if ($request->user() && $request->user()->role !== 'teacher') {
            // Если нет, то возвращаем ошибку 403 (Доступ запрещен)
            abort(403, 'Unauthorized action.');
        }

        // Передаем запрос дальше по цепочке Middleware
        return $next($request);
    }
}
