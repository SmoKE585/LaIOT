<?php

namespace App\Traits;

trait ValidationAttributes
{
    protected $validationAttributes = [
        'data.title' => '"Название"',
        'data.description' => '"Описание"',
        'data.allow_external' => '"Доступ из интернета"',
        'data.active' => '"Статус"',
        'data.cron' => '"CRON"',
        'code' => '"PHP код"',
        'data.parent_id' => '"ID родителя"',
        'data.system_class_id' => '"ID класса"',
        'data.system_object_id' => '"ID объекта"',
        'props.validation' => '"Регулярное выражение"',
        'props.keep_history' => '"Время хранения"',
        'data.email' => '"E-MAIL"',
        'data.password' => '"Пароль"',
        'data.password_confirmation' => '"Подтверждение пароля"',
        'data.realname' => '"ФИО"',
        'data.login' => '"Логин"',
        'data.id' => '"ID"',
        'basicSettings.timezone' => '"Временная зона"',
        'basicSettings.place_to_save_code' => '"Место хранения"',
        'basicSettings.base_dir' => '"Путь"',
        'basicSettings.path_to_php' => '"Путь"',
        'dbdata.db_connection' => '"Драйвер"',
        'dbdata.db_host' => '"IP"',
        'dbdata.db_port' => '"Порт"',
        'dbdata.db_database' => '"БД"',
        'dbdata.db_username' => '"Пользователь"',
        'dbdata.db_password' => '"Пароль"',
    ];
}
