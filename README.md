# Laravel To-Do App

This is a simple To-Do application built using the Laravel framework. The app allows users to create, update, and delete tasks, offering a simple CRUD interface for managing to-do items.

## Features

- Add a new to-do item with a title and description
- Edit existing to-do items
- Delete a to-do item
- List all to-do items
- Built with Bootstrap for responsive styling

## Requirements

- PHP 8.0 or higher
- Composer
- Laravel 9.x
- MySQL (or any other database supported by Laravel)

## Installation

1. **Clone the repository**

   git clone https://github.com/bhabna01/ToDoApp.git

   cd ToDoApp

2. **Install dependencies**
    
    Make sure you have Composer installed. Then run:
    composer install

3. **Set up environment variables**
    Copy the .env.example file to .env:
              
        cp .env.example .env

    Configure your .env file to match your database settings:

        DB_CONNECTION=mysql

        DB_HOST=127.0.0.1

        DB_PORT=3306

        DB_DATABASE=your_database

        DB_USERNAME=your_username

        DB_PASSWORD=your_password

4. **Generate the application key**
     
     php artisan key:generate 

5. **Run migrations**
     
    To create the necessary database tables, run:
      
      php artisan migrate
    
6. **Run the application**
      
      Start the Laravel development server:

         php artisan serve
    
      The app will be available at http://localhost:8000.

## File Structure

- app/Http/Controllers/TodoController.php: Handles the main logic for managing to-dos.
- app/Models/Todo.php: The model representing a to-do item.
- resources/views/: Contains Blade views for displaying to-do items.
- routes/web.php: Defines the routes for the CRUD operations.

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License 
This project is open-sourced software licensed under the MIT license.
