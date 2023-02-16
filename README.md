Etapas para instalação

Etapa 1: 

Criar a base de dados no MySql com o nome cadastraUsuario;

Comando SQL para criação da base de Dados: CREATE DATABASE cadastraUsuario;

---
Etapa 2: 

Informar o nome da base de dados no arquivo .env do laravel para conexão;

Modelo da configuração:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cadastraUsuario
DB_USERNAME=root
DB_PASSWORD=

---
Etapa 3:

