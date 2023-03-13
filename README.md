Este é um projeto de um app de envio de currículos.

## Tecnologias utilizadas

- Docker
- PHP v8.1
- MySQL

## Como testar em sua máquina

- Para baixar as dependências do projeto, execute o comando `composer install`
- Execute o comando a seguir para subir os containers `docker compose up -d`
- Assim que subir os containers, será criado o banco de dados `form-app`. Agora acesse o container do phpmyadmin e utilize o arquivo `scripts.sql` na raíz do projeto para criar as tabelas. 
- Entre na URL `http://localhost`