<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

# Niceplanet API

Api que busca informações de produtores e propriedades em um banco de dados, podendo também adicionar novos dados ao banco de dados.

## Pré-requisitos

- PHP >= 8.x
- Composer
- MySQL (ou outro banco de dados suportado pelo Laravel)

## Configuração

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/seu-usuario/nome-do-seu-projeto.git
   cd nome-do-seu-projeto
   ```

2. **Instale as dependências do Composer:**

   ```bash
   composer install
   ```

3. **Copie o arquivo de configuração `.env`:**

   ```bash
   cp .env.example .env
   ```

4. **Configure seu ambiente no arquivo `.env`:**

   - Configure o banco de dados (`DB_*`) com suas credenciais.

5. **Gere a chave de aplicação:**

   ```bash
   php artisan key:generate
   ```

6. **Execute as migrações do banco de dados:**

   ```bash
   php artisan migrate
   ```

## Executando a Aplicação

Para executar a aplicação localmente:

```bash
php artisan serve
```

Acesse a aplicação em `http://localhost:8000/api` no seu aplicativo de cliente de api's (Insomnia ou Postman).

---

Rotas se encontram no arquivo `routes/api.php`, mas também podem ser encontradas no arquivo `dumpRotas.txt` 
