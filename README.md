# CoSpace Project

## Introduction

This project is major assignment in Software Engineering course at University of Padjadjaran. The project is to develop a web application that allows users to book a meeting room. The application is called CoSpace. The project is developed by a team of 4 students. The team members are:

1. [Varian Avila Faldi](140810210055)
2. [xxxxx](140810210xxx)
3. [xxxxx](140810210xxx)
4. [xxxxx](140810210xxx)

## Features

The application has the following features:

1. User registration
2. User login
3. User logout
4. User profile
5. Meeting room booking
6. Meeting room booking history
7. Meeting room booking cancellation
8. Payment

## Technologies

The application is developed using the following technologies:

1. Framework: Laravel
2. Database: MySQL
3. Frontend: HTML, Tailwind CSS, JavaScript
4. Payment: Midtrans
5. OAuth: Google, Github
6. UI Library: Tailwind CSS, Flowbite

## Design

The application design is available at [Figma](#TODO)

## Requirements

The application requires the following software to be installed:

1. PHP 8.2^
2. Composer
3. Node.js
4. NPM
5. MySQL
6. Git

## Installation

To install the application, you need to follow these steps:

1. Clone the repository
2. Install the dependencies using

```bash
composer install
```

3. Install the frontend dependencies

```bash
npm install
```

4. Create a new database
5. Copy the `.env.example` file to `.env` and update the database configuration

   > **Note**:
   >
   > - You need to create a new database and update the database configuration in the `.env` file
   > - You need to create a new Midtrans account and update the Midtrans configuration in the `.env` file
   > - You need to create a new Google and Github OAuth application and update the configuration in the `.env` file

6. Run the migration using `php artisan migrate`
7. Run the server using `php artisan serve`

## Notes

## Coding Standard

To fix code styling using prettier, you can run the following command:

```bash
npm run prettier
```

### Postman Documentation

The Postman documentation is available at [Postman](#TODO)
