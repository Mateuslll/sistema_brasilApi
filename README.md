## Como rodar o projeto

Acessar o diretório do projeto no prompt de comando ou no terminal do editor

Instalar as dependências: composer install

Criar a base de dados '' no servidor MySQL

Alterar as credenciais do banco de dados no arquivo ".env":
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=root
DB_PASSWORD=

Executar as migration: php artisan migrate

Rodar o projeto criado com Laravel: php artisan serve


Executar no prompt de comando ou no terminal do editor.

Criar o projeto Laravel: composer create-project laravel/laravel agro-tech-agro-pop

Acessar o diretório: cd agro-tech-agro-pop

Rodar o projeto criado com Laravel: php artisan serve

Criar a base de dados 'celke' no servidor MySQL

Alterar as credenciais do banco de dados no arquivo ".env":
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=celke
DB_USERNAME=root
DB_PASSWORD=

Executar as migration que estão no projeto: php artisan migrate

Criar a migration "machines": php artisan make:migration create_machines_table

Acrescentar na migration "create_machines_table" "database/migrations/2022_10_16_143858_create_machines_table.php" a coluna "name": $table->string('name', 220);

Executar as migration: php artisan migrate


