<?php

# Models ===================

# Crear un modelo
php artisan make:model Producto

# Crear modelo y migración juntos
php artisan make:model Producto -m


# Migrations ===================

# Crear una migración para una tabla nueva
php artisan make:migration create_productos_table

# Crear una migración para modificar una tabla
php artisan make:migration add_stock_to_productos_table --table=productos

# Ejecutar las migraciones pendientes
php artisan migrate

# Consultar el estado de las migraciones
php artisan migrate:status

# Revertir el último grupo de migraciones; puede eliminar datos
php artisan migrate:rollback


# Controllers ===================

# Crear un controlador vacío
php artisan make:controller ProductoController

# Crear un controlador con métodos para una API REST
php artisan make:controller ProductoController --api

# Crear un controlador para API asociado al modelo
php artisan make:controller ProductoController --api --model=Producto


# Requests ===================

# Crear validaciones para registrar un producto
php artisan make:request StoreProductoRequest

# Crear validaciones para actualizar un producto
php artisan make:request UpdateProductoRequest


# Resources ===================

# Crear un recurso para definir la respuesta JSON
php artisan make:resource ProductoResource


# Seeders ===================

# Crear un seeder
php artisan make:seeder ProductoSeeder

# Ejecutar DatabaseSeeder
php artisan db:seed

# Ejecutar un seeder específico
php artisan db:seed --class=ProductoSeeder


# Factories ===================

# Crear una factory para generar datos de prueba
php artisan make:factory ProductoFactory --model=Producto


# Middleware ===================

# Crear un middleware
php artisan make:middleware VerificarUsuarioActivo


# Policies ===================

# Crear una policy asociada al modelo
php artisan make:policy ProductoPolicy --model=Producto


# Tests ===================

# Crear una prueba de funcionalidad
php artisan make:test ProductoTest

# Ejecutar las pruebas
php artisan test


# Rutas ===================

# Listar todas las rutas
php artisan route:list

# Listar las rutas de la API
php artisan route:list --path=api


# Servidor ===================

# Iniciar el servidor de desarrollo
php artisan serve

# Iniciar el servidor para acceder desde fuera del contenedor
php artisan serve --host=0.0.0.0 --port=8000


# Consola interactiva ===================

# Abrir la consola de Laravel
php artisan tinker


# Caché ===================

# Limpiar la caché de configuración
php artisan config:clear


# Ayuda ===================

# Listar los comandos disponibles
php artisan list

# Consultar las opciones de un comando
php artisan help make:model