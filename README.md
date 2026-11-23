# Clases PHP y Laravel

Entorno de desarrollo con dos contenedores:

- PHP 8.5 CLI con Composer, Node.js 24, npm, instalador de Laravel y Pint.
- PostgreSQL 17 con almacenamiento persistente en un volumen Docker.

Incluye las extensiones PHP para PostgreSQL, ZIP, internacionalización, BCMath y
procesos de consola. Usa imágenes oficiales y la terminal predeterminada.

## Abrir en VS Code

1. Inicia Docker Desktop.
2. Abre esta carpeta en VS Code con la extensión **Dev Containers** instalada.
3. Ejecuta **Dev Containers: Rebuild and Reopen in Container**.

La primera apertura construye la imagen y levanta PostgreSQL. VS Code abre
`php/` como `/workspace`. Los archivos que guardes ahí quedan en tu computadora.

Se instalan tres extensiones dentro del contenedor:

- **PHP Intelephense** para autocompletado y navegación.
- **Laravel Pint** para formatear PHP al guardar.
- **DotENV** para archivos `.env`.

Pint también está disponible en la terminal como `pint`.

## Crear y ejecutar Laravel

Desde la terminal de VS Code dentro del contenedor:

```sh
cd /workspace
laravel new mi-app --no-boost
cd mi-app
```

Configura PostgreSQL en el `.env` de la aplicación usando los valores de la
sección siguiente. Después ejecuta:

```sh
php artisan config:clear
php artisan migrate
php artisan serve --host=0.0.0.0 --port=8000
```

Abre <http://localhost:8000>. El proyecto se guarda en `php/mi-app`.

Para ejecutar Vite, abre otra terminal dentro de la misma aplicación:

```sh
npm install
npm run dev -- --host=0.0.0.0 --port=5173 --strictPort
```

Para instalar dependencias de un proyecto Laravel existente:

```sh
composer install
npm install
```

## PostgreSQL

El `.env` de la raíz de este repositorio configura Docker Compose. Las variables
`POSTGRES_USER`, `POSTGRES_PASSWORD` y `POSTGRES_DB` indican el usuario y la base
inicial que PostgreSQL crea al inicializar su volumen.

Cada aplicación Laravel define su conexión en su propio `.env`, por ejemplo
`php/mi-app/.env`:

```dotenv
DB_CONNECTION=pgsql
DB_HOST=postgres
DB_PORT=5432
DB_DATABASE=clases
DB_USERNAME=clases
DB_PASSWORD=clases
```

`DB_HOST=postgres` identifica al otro contenedor dentro de la red de Compose.
Dentro de esa red, PostgreSQL utiliza el puerto `5432`.

Laravel crea sus tablas con las migraciones. La base de datos elegida en
`DB_DATABASE` debe existir previamente en PostgreSQL. Para crear una base para
otro proyecto, ejecuta desde la raíz del repositorio en tu computadora:

```sh
docker compose exec postgres createdb -U clases mi_otro_proyecto
```

Después usa `DB_DATABASE=mi_otro_proyecto` en el `.env` de ese proyecto.

Desde una herramienta de base de datos en tu computadora, usa:

```text
Host: localhost
Puerto: 5433
Base de datos: clases
Usuario: clases
Contraseña: clases
```

Estas credenciales son para desarrollo local. Para personalizar puertos o
credenciales, copia `.env.example` a `.env` en la raíz de este repositorio y
edítalo antes del primer arranque. Si modificas credenciales después de crear
la base de datos, actualízalas también dentro de PostgreSQL.

Los registros se guardan en el volumen `postgres_data`, independiente del
contenedor PHP, y persisten al detener el entorno.

## Ejecutar archivos PHP de las clases

```sh
php index.php
php -S 0.0.0.0:7001 -t /workspace
```

El servidor PHP sencillo queda en <http://localhost:7001>.

## Usar desde la terminal de tu computadora

Ejecuta estos comandos desde la raíz del repositorio:

```sh
docker compose up -d --build
docker compose exec php bash
```

Para detener los contenedores:

```sh
docker compose down
```

Puertos predeterminados:

| Servicio | Puerto local |
| --- | --- |
| Laravel | 8000 |
| Vite | 5173 |
| PHP sencillo | 7001 |
| PostgreSQL | 5433 |
