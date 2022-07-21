## Instalar PHP en Ubuntu, LinuxMint

## Paso 1: Instalar PHP 8
- Utilice los siguientes comandos para agregar PPA
  e instalar PHP 8.0 en el sistema Ubuntu 20.04.
1. **Enabled PPA**: Use el siguiente comando.
```bash
sudo add-apt-repository ppa:ondrej/php
```
2. **Update cache**: Después de habilitar el repositorio apt, actualice la caché en su sistema
```bash
sudo apt update
```
3. **Instalación de PHP**: a continuación, instale PHP 8.0 en el sistema Ubuntu.
```bash
sudo apt install php8.0
```
Presione `Y` para cualquier confirmación solicitada por el instalador.

4. Para poder saber que tenemos instalado de php
```bash
sudo dpkg --get-selections | grep php
libapache2-mod-php				install
libapache2-mod-php5.6				install
libapache2-mod-php7.0				install
libapache2-mod-php7.2				install
libapache2-mod-php7.3				install
libapache2-mod-php7.4				install
libapache2-mod-php8.0				install
libapache2-mod-php8.1				install
php						install
php-apcu					install
php-apcu-bc					install

.......
.......
```
## Paso 2
- Habilitar y desabilitar una version de php
```bash
# Desabilitar php8
sudo a2dismod php8.0
# habilitar php 7.4
sudo a2enmod php7.4
# Reiniciar apache para realizar los cambios
sudo systemctl restart apache2
```

## Paso 3: Instalación de módulos de PHP.
Ahora, instale los módulos de PHP necesario para su aplicación.
Algunos de los modulos mas comunes
```bash
sudo apt install php-common php-opcache php-mcrypt php-cli php-gd php-curl php-mysql
```
Utilice el siguiente comando para buscar todos los módulos de PHP 8.0.
```bash
sudo apt search php8.0-*
```
Lugo instale los modulos de PHP requeridos.
El siguiente comando instalara algunos módulos php de uso
```bash
sudo apt install libapache2-mod-php8 php8-cli php8.0-gd php8.0-xml php8.0-soap php8.0-mbstring php8.0-mysql php8-imagick php8-recode php8-tidy php8-xmlrpc
```
## Paso 3: Ver la versión de PHP
Ahora use el siguiente comando para verificar la versión de PHP instalada
en su sistema. También puede utilizar otros métodos para comprobar la versión de PHP.
```bash
php -v

PHP 8.0.1 (cli) (built: Jan 13 2021 08:22:35) ( NTS )
Copyright (c) The PHP Group
Zend Engine v4.0.1, Copyright (c) Zend Technologies
    with Zend OPcache v8.0.1, Copyright (c), by Zend Technologies
```
## Paso 4: Cambiar la versión predeterminada de php.
Puede cambiar fácilmente entre varias versiones de PHP instaladas en cualquier sistema.
Ejecute el siguiente comando en la terminal:
```bash
sudo update-alternatives --config php
```
Este sistema tiene PHP 8.0 y PHP 7.4 instalados. Seleccione una versión de PHP de nuestra elección.
```
here are 2 choices for the alternative php (providing /usr/bin/php).

  Selection    Path             Priority   Status
------------------------------------------------------------
* 0            /usr/bin/php8.0   80        auto mode
  1            /usr/bin/php7.4   74        manual mode
  2            /usr/bin/php8.0   80        manual mode

Press  to keep the current choice[*], or type selection number: [ENTER CHOICE HERE]
```

## Instalar php 7.4
```bash
sudo apt-get install software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt-get install -y php7.4
```
Ahora use el siguiente comando para verificar la versión de php instalada en su sistema.
```
php -v

PHP 7.4.5 (cli) (built: Apr 28 2020 14:49:23) ( NTS )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
    with Zend OPcache v7.4.5, Copyright (c), by Zend Technologies
```

## Instalar PHP 7.3
```bash
sudo apt-get install software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt-get install -y php7.3
```
Ahora use el siguiente comando para verificar la versión de php instalada en su sistema.
```bash
php -v

PHP 7.3.9-1+ubuntu16.04.1+deb.sury.org+1 (cli) (built: Sep  2 2019 12:54:04) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.3.9, Copyright (c) 1998-2018 Zend Technologies
    with Zend OPcache v7.3.9-1+ubuntu16.04.1+deb.sury.org+1, Copyright (c) 1999-2018, by Zend Technologies
```

## Instalar PHP 7.2
```bash
sudo apt-get install software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt-get install -y php7.2
```
Ahora use el siguiente comando para verificar la versión de php instalada en su sistema.
```bash
php -v

PHP 7.2.16-1+ubuntu18.04.1+deb.sury.org+1 (cli) (built: Mar  7 2019 20:23:29) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.2.0, Copyright (c) 1998-2018 Zend Technologies
    with Zend OPcache v7.2.16-1+ubuntu18.04.1+deb.sury.org+1, Copyright (c) 1999-2018, by Zend Technologies
```

## Instalar PHP 7.1
```bash
sudo apt-get install software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt-get install -y php7.1
```
Ahora use el siguiente comando para verificar la versión de php instalada en su sistema.
```bash
php -v
PHP 7.1.27-1+ubuntu18.04.1+deb.sury.org+1 (cli) (built: Mar  7 2019 20:02:25) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.1.0, Copyright (c) 1998-2018 Zend Technologies
    with Zend OPcache v7.1.27-1+ubuntu18.04.1+deb.sury.org+1, Copyright (c) 1999-2018, by Zend Technologies
```

## Instalar PHP 7.0
```bash
sudo apt-get install python-software-properties
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt-get install -y php7.0
```
Ahora use el siguiente comando para verificar la versión de php instalada en su sistema.
```bash
php -v

PHP 7.0.33-5+ubuntu18.04.1+deb.sury.org+1 (cli) (built: Mar  8 2019 09:49:15) ( NTS )
Copyright (c) 1997-2017 The PHP Group
Zend Engine v3.0.0, Copyright (c) 1998-2017 Zend Technologies
    with Zend OPcache v7.0.33-5+ubuntu18.04.1+deb.sury.org+1, Copyright (c) 1999-2017, by Zend Technologies
```


## Configurar errores en php
- Buscar display_errors
```bash
sudo nano /etc/php/8.0/apache2/php.ini
# Habilitar errores
display_errors=on
# Desabilitar errores
display_errors=off
```


