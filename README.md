Etapas para instalação

Etapa 1:

Criar a base de dados no MySql com o nome cadastraUsuario;

Comando SQL para criação da base de Dados: CREATE DATABASE cadastraUsuario;

---
Etapa 2:

Informar o nome da base de dados no arquivo .env do laravel para conexão;

Modelo da configuração:

DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=3306 DB_DATABASE=cadastraUsuario DB_USERNAME=root DB_PASSWORD=


----
Etapa 3:

Digite o comando: php artisan migrate;

Atraves desse comando as tabelas seram carregadas automaticamente;

---
Etapa 4:

Digite o comando: php artisan serve;

Atraves desse comando o sistema vai disponibilizar uma url e assim poderá usar o sistema;

---
Observação: Certifique que esteja dentro do arquivo do projeto, pois, os comando php artisan só funcionam dentro do projeto laravel
