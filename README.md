clonar repositório
> gitclone https://github.com/higorbarbossa/eq-laravel.git*

instalar dependencias
>composer install

preparar aquivo de configuração de ambiente e ajustar dados para conexão com o banco de dados
>cp .env.example .env

>php artisan key:generate

crie um banco de dados com o nome "testeeqweb", caso não tenha alterado no arquivo .env, e depois rode o comando abaixo para criação de tabelas e preencher a tabela de Setor
>php artisan migrate --seed

para rodar a aplicação execute o comando:
>php artisan serve

acesse:
>localhost:8000/
