<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About Laravel

Aplicação feita usando o Laravel.

### Criar Banco MySQL no Docker

docker run -p 3306:3306 --name=seu-container -e MYSQL_USER=root -e MYSQL_PASSWORD=root -d mysql/mysql-server

### Comando para criar uma migration
-- [php artisan make:migration create_products_table]

### Verificar as migrations que já foram aplicadas
--[php artisan migration:status]

### Rodar as migrations (up)
--[php artisan migrate]

### Reinicia as migrations 
--[php artisan migrate::fresh]

### Alterar uma tabela ja criada
--[php artisan make::migration add_column_to_name_table]
Apos rodar o comando complete os funções down e up

### Para "voltar" uma migration (down)
--[php artisan migrate:rollback]

### Criar um Model
--[php artisan make:model Event]
