# Laravel Project - Toronto Attractions

## Introduction

This project is a web application built using Laravel, designed to manage and display various attractions in Toronto. It features role-based access control, with distinct functionalities for administrators and regular users. The application allows administrators to perform CRUD operations on attractions and addresses, while regular users can view details about these attractions and addresses.

## Features and Database Schema

### Features

-   **Role-Based Authentication:** Distinguishes between administrators and regular users, providing different access levels and functionalities.
-   **Admin Dashboard:** Allows administrators to manage attractions and addresses through CRUD operations.
-   **User Dashboard:** Provides a read-only view of attractions and addresses for regular users.

### Database Schema

-   **Users Table:** Stores user details including `id`, `name`, `email`, `password`, and `is_admin` (boolean) to determine user roles.
-   **Addresses Table:** Contains `id`, `street`, `city`, and `postal_code` to store address details.
-   **Attractions Table:** Includes `id`, `name`, `description`, and a foreign key `address_id` linking to the `Addresses` table.

## Incomplete Tasks

I encountered an issue with the admin functionality that prevented me from completing it. Specifically, I received a `BindingResolutionException` indicating that the `admin` class does not exist. This error occurred because the `AdminMiddleware` was not properly registered or was misconfigured. As a result, I was unable to fully implement the admin routes and dashboard functionalities as intended.

## Thoughts on Laravel

Working with Laravel has been an insightful experience. The framework’s built-in functionalities and elegant syntax make it a powerful tool for web development. I would have liked to explore additional Laravel features such as event broadcasting and advanced query optimization to further enhance my skills. Despite the challenges faced with middleware and route bindings, the project provided valuable hands-on experience with role-based access control and CRUD operations.
