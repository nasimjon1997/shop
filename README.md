# 📦 Требования

- PHP >= 8.1
- Composer
- MySQL (или PostgreSQL)
- Расширения PHP:
  - PDO
  - Mbstring
  - Tokenizer
  - XML
  - Ctype
  - BCMath
  - Fileinfo

## 🚀 Установка проекта

### 1. Клонировать репозиторий

```bash
git clone https://github.com/nasimjon1997/shop
cd  shop
```

## 2. Установить зависимости

```bash
composer install
```

## 3. Создать файл .env

```bash
cp .env.example .env
```
    
## 4. Настроить .env

```bash
APP_NAME=ShopApp
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=shop_app
DB_USERNAME=root
DB_PASSWORD=
```
    
## 5. Сгенерировать ключ приложения

```bash
php artisan key:generate
```
    
## 6. Запустить миграции

```bash
php artisan migrate:fresh --seed
```
    
## 7. Запустить локальный сервер

```bash
php artisan serve
```

##🔧 Полезные команды

```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
```