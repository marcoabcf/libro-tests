
# Projeto - Plataforma de Ensino Online

Este é um serviço backend simples para uma plataforma de ensino online, desenvolvido em Laravel 11.

## Requisitos

Antes de rodar o projeto, verifique se você possui as seguintes dependências instaladas:

- PHP 8.2 ou superior
- Composer
- Banco de dados PostgreSQL (ou outro de sua preferência, caso seja alterado a configuração)
- Laravel 11 ou versão compatível

## Instalação

1. Clone o repositório:

    ```bash
    git clone https://github.com/seu-usuario/plataforma-de-ensino.git
    cd plataforma-de-ensino
    ```

2. Instale as dependências via Composer:

    ```bash
    composer install
    ```

3. Configure o arquivo `.env`:

    Copie o arquivo `.env.example` para `.env`:

    ```bash
    cp .env.example .env
    ```

    Edite o arquivo `.env` para configurar as credenciais do banco de dados:

    ```env
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=nome_do_banco
    DB_USERNAME=seu_usuario
    DB_PASSWORD=sua_senha
    ```

## Criação do Banco de Dados

O banco de dados será criado automaticamente com o comando `migrate`. Para isso, execute o seguinte:

1. Gere a chave de aplicativo Laravel:

    ```bash
    php artisan key:generate
    ```

2. Execute a migração do banco de dados:

    ```bash
    php artisan migrate
    ```

    Esse comando irá criar todas as tabelas necessárias para o funcionamento do sistema.

## Utilização

Após a instalação e criação do banco, você pode rodar o servidor de desenvolvimento do Laravel:

```bash
php artisan serve
```

Isso irá iniciar o servidor na URL `http://localhost:8000`.

## Testes

Se você deseja rodar os testes unitários, pode executar o seguinte comando:

```bash
php artisan test
```

Ou, para rodar testes específicos:

```bash
php artisan test --filter NomeDoTeste
```

## Utilização do Insomnia

Se você deseja testar as rotas da API de maneira prática, sugerimos o uso do **Insomnia**, uma ferramenta de teste de APIs.

1. **Importação de Coleções**:
   - Para importar a coleção, basta abrir o Insomnia, clicar em **"Import"**, e selecionar o arquivo JSON que se encontra no root do LibroLearn com o nome "Insomnia_Export.json". Nele que contém todas as rotas de API pré-configuradas.

2. **Configuração das Requisições**:
   - As requisições do Insomnia já estarão configuradas com os **endpoints** de exemplo. Você só precisa garantir que o servidor Laravel esteja rodando corretamente antes de executar as requisições.
   - Utilize o arquivo JSON exportado para carregar as configurações e começar a testar as APIs sem precisar configurar tudo manualmente.

