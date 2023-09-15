# GabSalabat-store

GabSalabat-store is a simple online store designed to sell variations of a single product, "Salabat" (ginger tea), in different types. This application is built using PHP, Tailwind CSS, jQuery, and MySQL, and it offers essential e-commerce features like PayPal payments, order management, and more.

## Features

- **Product Variations**: Sell different types of Salabat products within the store.
- **PayPal Integration**: Allow customers to make payments using PayPal for a smooth checkout experience.
- **Order Management**: Manage customer orders, including order processing and fulfillment.

## Technologies

- PHP 8.1
- Tailwind CSS
- jQuery
- MySQL

## Getting Started

### Prerequisites

Before you begin, ensure you have the following prerequisites installed:

- PHP 8.1
- Composer (for managing PHP dependencies)
- MySQL

### Installation

1. Clone this repository to your local machine:

   ```bash
   git clone https://github.com/jaybayron9/GabSalabat-store.git
   
2. Navigate to the project directory:
   `cd GabSalabat-store`
3. Install PHP dependencies using Composer:
   `composer install`
4. Create a MySQL database for your project and configure the database connection in the .env file.
5. Run the database migrations to create the necessary tables:
   `php migrate.php`
6. Start the development server:
   `php -S localhost:8000 -t public`

Now, your GabSalabat-store application should be up and running. Access it in your web browser at http://localhost:8000.

### Usage

Describe how users can interact with your application. Include information on adding products, making purchases, and managing orders.

### Payment Integration

To integrate PayPal for payment processing, follow these steps:

1. Create a PayPal developer account and set up your application.
2. Obtain PayPal API credentials (Client ID and Secret).
3. Configure your PayPal credentials in the `.env` file.
4. Implement the PayPal payment flow in your checkout process.
