# curso_php_25

- abrir vscode na pasta /var/www/html
    - file-> open folder
- github vai em code copia o link para clonar
- vscode terminal-> novo terminal
    - git clone link_github (direito do mouse)
- abrir vscode na pasta do projeto|repo /var/www/html/php_curso_25
- Passo a Passo do GIT para salvar no GitHub:
    - `git add .` (. = * no linux significa todos os arquivos alterados)
    - `git commit -m "MENSAGEM_DESCRITIVA_DO_QUE_FOI_FEITO"`
    - `git push`
## Tema de casa


# Configurar MariaDB:

SHOW DATABASES;

CREATE DATABASE IF NOT EXISTS curso_php_25;

USE curso_php_25;

CREATE USER 'aluno'@localhost IDENTIFIED BY '1234';

GRANT ALL PRIVILEGES ON *.* TO 'aluno'@localhost IDENTIFIED BY '1234';

FLUSH PRIVILEGES;

SELECT User FROM mysql.user;


https://phoenixnap.com/kb/how-to-create-mariadb-user-grant-privileges#:~:text=To%20create%20a%20new%20MariaDB,to%20a%20local%20MySQL%20server.
