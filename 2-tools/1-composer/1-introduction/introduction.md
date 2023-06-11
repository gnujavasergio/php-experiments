# Introducción
- Composer es un gestor de dependencias o manejador de paquetes para PHP que
proporciona un estandar para administrar, descargar e instalar dependencias
  y librerias.
    - npm de node.js
    - maven de java
    - gradle de android
    - pip de python

## Instalar
### isntalar en Windows
- Composer - https://getcomposer.org/download/

### Instalar en linux

- Español - https://www.digitalocean.com/community/tutorials/how-to-install-and-use-composer-on-ubuntu-20-04-es
- Ingles - https://www.digitalocean.com/community/tutorials/how-to-install-and-use-composer-on-ubuntu-20-04
- Ingles - https://www.digitalocean.com/community/tutorials/how-to-install-composer-on-ubuntu-20-04-quickstart

- Instalacion global
```bash
sudo apt install curl php-cli php-mbstring git unzip
sudo curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
```

## Archivo composer.json
- composer.json : Es la descripcion estandar
- composer.lock: Es la descipcion exacta el detalle de los componentes y paquetes

```json
{
  "name": "gnujavasergio/text",
  "description": "Formato de texto",
  "type": "library",
  "license": "MIT",
  "autoload": {
    "psr-4": {
      "Text\\": "src/Text"
    },
    "files": [
      "src/helpers/helpers.php"
    ]
  },
  "authors": [
    {
      "name": "Sergio Ochoa",
      "email": "sochoa@openkm.com"
    }
  ],
  "minimum-stability": "dev",
  "require": {}
}
```

## Gestión de paquetes
- Para añadir un paquete a producción
```bash
composer require nesbot/carbon
```
- Para añadir una paquete a desarrollo
```bash
composer require --dev phpunit/phpunit
```

## Autoload
- **files**: Sirve para cargar archivos de ayuda helérs
- **classmap**: Sirve para cargar clases que estan dentros de las carpetas que se declara.
- **psr-0**: Para reconocer todas las clases se tienen que añadir todas las rutas de
  las carpetas que existen
- **psr-4**: Carga todos las clases que estan en el namespace de la carpeta principal

## Comandos

 - require y remove: Añadir y remover paquetes de producción

```bash
# Añadir
composer require nesbot/carbon

# Eliminar
composer remove nesbot/carbon
```
