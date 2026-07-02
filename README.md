<p align="center"><img src="public/car-svgrepo-com.svg" width="200" alt="Car Logo"></p>

<h1 align="center">Oil Change Challenge</h1>

## Getting Started

This project was created using Laravel version 12.56 via the Laravel installer.
To get the installer and php intalled run the folowing command (Mac): `/bin/bash -c "$(curl -fsSL https://php.new/install/mac/8.4)"`

Then once the installer is installed run `npm install ` to make sure you have all the latest dependencies

### Migrations/Database setup
In order to get things setup on the backend here are some things you'll have to do:
- Create an .env file (can just copy the example one) ```cp .env.example .env.```

- Generate an app key: to have your own API in your newly created .env file run this command ```php artisan key:generate```

- Now to actually make the database, you can make the SQLite file with the following command: ```touch database/database.sqlite```

- Finally run the migration to get all of the necessary tables into your new SQLite file: ```php artisan migrate```.

- To run the project you can use ```composer run dev```. 

<h2>Happy Testing! ☺️</h2>
<h3>-Andrew Pitblado</h3>
