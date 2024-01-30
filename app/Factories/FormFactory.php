<?php

namespace App\Factories;

class FormFactory
{
    public function save(array $data, string $destination): string
    {
        if ($destination === 'database') {
            // Логика сохранения данных в базе данных
            // Например: \App\Models\Form::create($data);
            return 'Сохранено в базе данных';
        } elseif ($destination === 'email') {
            // Логика отправки данных на почту
            // Например: Mail::to($email)->send(new DataEmail($data));
            return 'Отправлено на email';
        } else {
            return 'Недопустимый тип назначения';
        }
    }
}
