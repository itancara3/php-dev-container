# Clases PHP

Entorno Dev Container con la imagen oficial `php:8.5-cli-bookworm`.
Incluye PHP CLI y su servidor web integrado.

## Archivos PHP y volumen

Guarda tus archivos dentro de `php/`:

```text
clases-php/
├── .devcontainer/
│   └── devcontainer.json
├── php/
│   └── index.php
└── README.md
```

Solo `php/` se monta como volumen de trabajo en `/workspace` dentro del
contenedor. La configuración de Dev Containers y este README quedan fuera
del volumen. VS Code abre directamente `/workspace` al conectarse.

## Abrir el entorno

1. Inicia Docker Desktop.
2. Abre esta carpeta en Visual Studio Code con la extensión **Dev Containers** instalada.
3. Ejecuta **Dev Containers: Reopen in Container** desde la paleta de comandos.
4. Espera a que termine la descarga de la imagen y se abra el contenedor.

Si ya habías abierto el contenedor con la configuración anterior, ejecuta
**Dev Containers: Rebuild and Reopen in Container** para aplicar el nuevo montaje.

## Ejecutar PHP

Desde la terminal de VS Code dentro del contenedor:

```sh
php -v
php index.php
```

## Servidor web de desarrollo

```sh
php -S 0.0.0.0:7001 -t .
```

Abre <http://localhost:7001>. El puerto 7001 se reenvía automáticamente.
Se eligió porque el 7000 estaba ocupado por Control Center de macOS.
Si el 7001 está ocupado al abrir el entorno, libera ese puerto o cambia el número
en `.devcontainer/devcontainer.json` y en el comando del servidor.
Detén el servidor con `Ctrl+C`.

Los cambios que hagas en `/workspace` se guardan en la carpeta local `php/`.
El servidor integrado es solo para desarrollo local.
