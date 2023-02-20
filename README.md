Etapas para instalação

Etapa 1:

Criar a base de dados no MySql com o nome cadastraUsuario;

Comando SQL para criação da base de Dados: CREATE DATABASE cadastraUsuario;

<<<<<<< HEAD
=======
---
>>>>>>> f628a636eabb8a5a7cec2693c4b1515c433c175b
Etapa 2:

Ao realizar o download do sistema, certifique-se se o nome do arquivo .env foi alterado para .env.exampl, se foi aterado, realize essa alteração: o nome do arquivo .env.example para .env

<<<<<<< HEAD
Etapa 3:
=======
---
Etapa 3: 
>>>>>>> f628a636eabb8a5a7cec2693c4b1515c433c175b

Informar o nome da base de dados no arquivo .env do laravel para conexão;

Modelo da configuração:

DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=3306 DB_DATABASE=cadastraUsuario DB_USERNAME=root DB_PASSWORD=

<<<<<<< HEAD
=======
---
>>>>>>> f628a636eabb8a5a7cec2693c4b1515c433c175b
Etapa 4:

Digite o comando: php artisan migrate;

Atraves desse comando as tabelas seram carregadas automaticamente;

<<<<<<< HEAD
=======
---
>>>>>>> f628a636eabb8a5a7cec2693c4b1515c433c175b
Etapa 5:

Digite o comando: php artisan serve;

Atraves desse comando o sistema vai disponibilizar uma url e assim poderá usar o sistema;
