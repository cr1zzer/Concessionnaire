# My PHP MVC Application

This is a simple PHP application structured using the MVC (Model-View-Controller) architecture. The application serves as a starting point for building web applications using PHP.

## Project Structure

```
my-php-mvc-app
├── app
│   ├── controllers
│   │   └── HomeController.php
│   ├── models
│   │   └── User.php
│   └── views
│       └── home.php
├── public
│   └── index.php
├── config
│   └── config.php
├── .htaccess
├── composer.json
└── README.md
```

## Installation

1. Clone the repository:
   ```
   git clone https://github.com/yourusername/my-php-mvc-app.git
   ```

2. Navigate to the project directory:
   ```
   cd my-php-mvc-app
   ```

3. Install dependencies using Composer:
   ```
   composer install
   ```

4. Configure your database settings in `config/config.php`.

## Usage

- Start a local server (e.g., using PHP's built-in server):
  ```
  php -S localhost:8000 -t public
  ```

- Open your browser and navigate to `http://localhost:8000` to see the application in action.

## Features

- MVC architecture for better separation of concerns.
- Basic user model with CRUD operations.
- Clean URL handling using `.htaccess`.

## Contributing

Feel free to submit issues or pull requests to improve the application. 

## License

This project is open-source and available under the [MIT License](LICENSE).