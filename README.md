<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## instrucciones para correr el codigo 

1. Crear caprteta

En tu escritorio das click derecho y le precionas a nueva carpeta, le pones cualquier nombre.

entras a la carpeta y en la parte de arriba donde esta la ruta de la carpeta seleccionas y escribes CMD y das enter.

2. clonar el proyecto

una vez dentro de la consola de CMD copias el siguiente codigo git clone https://github.com/DfToroAnaya/Parcial.git esperas a que cargue.

una vez descargado cierras el cmd y vuelves a ingresar a la carpeta donde deberia esatr ya el proyecto clonado, ingresas a la carpeta del proyecto y ejecutas nuevamente en la ruta el cmd y precionas enter, una vez ya abierto el cmd escribes el codigo: code .

despues de eso te abrira el proyecto en visual studio code.

3. Instalacion de paquetes requeridos

ejecutas el comando ctrol + shift + ñ 

con esto se abrira la terminal dentro del visual studio code, ahora ejecutamos dentro de la consola el siguiente comando: 

- composer install: esta instala la carpeta vendor
- npm install : este instala el node.js

4. acomodar la carpeta env 

copias la carpeta llamada .env.example y la pegas dentro del proyecto, la carpeta copiada la renombramos como .env

5.creacion de base de datos

En el buscador de windows ponemos Xampp y le precionamos enter, una vez abierto el programa vamos a oprimir start en los modulos: Apache y mysql

despues de hacer esto nos vamos a google y en el buscador ponemos locallhost y precionamos enter este nos abrira la pagina de xampp y nos vamos en las opciones de arriba a la aprte donde dice phpmyadmin dentro de el vamnos acrear la base de datos llamada parcial luego de crearlo volvemos al proyecto en visual studio y vamos a la carpeta recien nombrada .env y acomodamos los datos de la base de datos asi:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=parcial
DB_USERNAME=root
DB_PASSWORD=

5. Ejecutando proyecto

Vamo a la terminal nuevamente y ejecutamos el comando php artisan migrate esto se hace para crear las tablas en la base de datos.

En la misma terminal ejecutamos el comando npm run dev que es el que corre el vite

 ya con esto ejecutamos el codigo php artisan serve, nos arrojara un  link que es el que nos permite  visualizar el proyecto 


