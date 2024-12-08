# User Management API

## Overview

This project provides a RESTful API for managing users, roles, and permissions. It includes secure authentication using Laravel Passport and follows RESTful principles.

## Table of Contents

- [Setup and Installation](#setup-and-installation)
- [Running the Project](#running-the-project)
- [API Endpoints](#api-endpoints)
  - [Authentication](#authentication)
  - [User Management](#user-management)
  - [Role Management](#role-management)
  - [Permission Management](#permission-management)
- [Postman Collection](#postman-collection)

## Setup and Installation

### Prerequisites

- PHP >= 7.3
- Composer
- Node.js and npm
- MySQL or SQLite

### Installation Steps

1. **Clone the repository:**

    ```sh
    git clone https://github.com/your-username/user-management-api.git
    cd user-management-api
    ```

2. **Install PHP dependencies:**

    ```sh
    composer install
    ```

3. **Install Node.js dependencies:**

    ```sh
    npm install
    ```

4. **Copy the `.env.example` file to `.env` and configure your environment variables:**

    ```sh
    cp .env.example .env
    ```

5. **Generate an application key:**

    ```sh
    php artisan key:generate
    ```

6. **Run database migrations:**

    ```sh
    php artisan migrate
    ```

7. **Install Laravel Passport:**

    ```sh
    composer require laravel/passport
    ```

8. **Enable the `sodium` extension in `php.ini`:**

    ```sh
    php --ini
    ```

    This command will show you the path to your `php.ini` file. Open the file with a text editor (e.g., `nano`):

    ```sh
    sudo nano /usr/local/php/8.2.13/ini/php.ini
    ```

    Add or uncomment the following line:

    ```ini
    extension=sodium
    ```

9. **Install Passport:**

    ```sh
    php artisan passport:install
    ```

10. **Compile frontend assets:**

    ```sh
    npm run dev
    ```

## Running the Project

### Start the Laravel development server:

```sh
php artisan serve
