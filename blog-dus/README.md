# 🛠️ Instalação

Siga os passos abaixo para rodar o projeto localmente:

### 1. Clone o repositório
```bash
git clone https://github.com/seuusuario/dundies-of-us.git
```
### 2. Instale as depedências
```
composer install 
npm install
npm run dev
```
### 3. Configure o ambiente
```
cp .env.example .env
```
### 4. Gere a chave da aplicação
```
php artisan key:generate
```
### 5. Execute as migrações do banco
```
php artisan migrate
```
