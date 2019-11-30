# Learn Lumen 5.8
The purpose of the project is to develop a CRUD application in Lumen. It will be a office directory application. 

## Getting Started

These instructions will get you a copy of the project up and running on your local machine.

### Prerequisites

PHP 7.2

### Installing
Create a copy of the .env file based on the .env.example example file. Enter your database credentails.

Run the command below to create the necessary tables

```
php artisan migrate
```

Then copy the SQL code in database > seeds > MOCK_DATA.sql to your database tool to add the mock data.

To reset the tables run the command

```
php artisan migrate:reset
```

## Built With

* [Lumen Framework](https://lumen.laravel.com/) - The web framework used
* [Bootstrap](https://getbootstrap.com/) - CSS Framework


## Authors

* **Javier Lona** - *Initial work* - [Personal Website](https://javierlona.com/)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details