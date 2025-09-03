<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return [
    'db' => [
        'driver'   => 'Pdo',
        'dsn'      => 'pgsql:host=postgres;port=5432;dbname=meu_banco',
        'username' => 'meu_usuario',
        'password' => 'minha_senha',
        'driver_options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],
    ],
    'service_manager' => [
        'factories' => [
            Zend\Db\Adapter\Adapter::class => Zend\Db\Adapter\AdapterServiceFactory::class,
        ],
    ],
];

