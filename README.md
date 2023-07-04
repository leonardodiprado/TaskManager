<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<h2>
    Vídeo apresentando o projeto

</h2>

<a href="https://youtu.be/haohj4zzSJo">Video apresentando o projeto</a>

# Sistema de Gerenciamento de Tarefas (API) - Laravel

Este é um sistema de gerenciamento de tarefas baseado em uma API desenvolvido com Laravel. Ele permite que você crie, leia, atualize e delete tarefas, além de atribuir tarefas a usuários específicos.

## Recursos

O sistema de gerenciamento de tarefas oferece os seguintes recursos:

- Criação de tarefas
- Listagem de todas as tarefas
- Exibição de uma tarefa específica
- Atualização de uma tarefa existente
- Exclusão de uma tarefa
- Atribuição de uma tarefa a um usuário específico

## Tecnologias Utilizadas

O sistema de gerenciamento de tarefas foi desenvolvido utilizando as seguintes tecnologias:

- Laravel: framework PHP para desenvolvimento web
- MySQL: banco de dados relacional
- Eloquent ORM: mapeamento objeto-relacional para Laravel

## Configuração

Para configurar e executar o sistema de gerenciamento de tarefas, siga as etapas abaixo:

1. Certifique-se de ter o PHP e o Composer instalados em seu sistema.
2. Clone este repositório para o seu ambiente local.
3. Navegue até o diretório raiz do projeto.
4. Execute o comando `composer install` para instalar as dependências necessárias.
5. Crie um arquivo `.env` na raiz do projeto e configure as informações do banco de dados. Um exemplo de configuração está disponível no arquivo `.env.example`.
6. Execute o comando `php artisan key:generate` para gerar uma chave de aplicativo única.
7. Execute o comando `php artisan migrate` para criar as tabelas do banco de dados.
8. Execute o comando `php artisan serve` para iniciar o servidor.

## Uso

A API oferece endpoints para interagir com o sistema de gerenciamento de tarefas. Aqui estão alguns exemplos:

- `GET /api/tasks`: Retorna todas as tarefas cadastradas.
- `GET /api/tasks/{id}`: Retorna uma tarefa específica com base no ID fornecido.
- `POST /api/tasks`: Cria uma nova tarefa. Envie os dados da tarefa no corpo da solicitação.
- `PUT /api/tasks/{id}`: Atualiza uma tarefa existente com base no ID fornecido. Envie os dados atualizados no corpo da solicitação.
- `DELETE /api/tasks/{id}`: Exclui uma tarefa com base no ID fornecido.
- `POST /api/tasks/{id}/assign/{userId}`: Atribui uma tarefa a um usuário específico com base nos IDs fornecidos.

Certifique-se de fazer as solicitações HTTP corretas para cada endpoint, incluindo os parâmetros necessários.

## Considerações Finais

Este é um exemplo básico de um sistema de gerenciamento de tarefas baseado em uma API desenvolvido com Laravel. Você pode estender e personalizar o sistema de acordo com suas necessidades específicas.

Lembre-se de que esta é apenas a documentação do sistema de gerenciamento de tarefas. Certifique-se de implementar as rotas e a lógica de negócios correspondentes no seu projeto Laravel.

Divirta-se e aproveite o uso do Sistema de Gerenciamento de
