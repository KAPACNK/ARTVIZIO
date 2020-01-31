# Тестовое задание ArtVizio


Для развертывания проекта потребуется:
  - Установленный mysql сервер
  - Symfony
  - Composer
  - PHP >= 7.3

#### 1. Копируем проект из репозитория
`git clone https://github.com/KAPACNK/ARTVIZIO.git`

### 2. Переходим в директорию с проектом
`cd ARTVIZIO`
### 3. В файле .env в переменную DATABASE_URL прописываем реквизиты для доступа к базе данных
`DATABASE_URL=mysql://root:@127.0.0.1:3306/artvizio?serverVersion=5.7`
### 4. Запускаем mysql сервер
### 5. Создаем базу данных
` php bin/console doctrine:database:create`
### 6. Делаем миграцию
`php bin/console doctrine:migrations:migrate -q`
### 7. Запускаем сервер
`symfony server:start`

## Проект будет доступен по адрессу http://127.0.0.1:8000/