# Social Microblogging Platform

## Description

This project is a social microblogging platform that allows users to share short posts, interact with other users through likes, comments, and follows, and customize their profiles. Designed to facilitate quick and engaging communication among its users, the platform emphasizes simplicity, user engagement, and privacy.

## Features

-   **User Authentication and Registration**

    -   Integrates Symfony Security for user authentication with email verification to ensure user legitimacy.
    -   Implements custom security voters for granular access control on post actions, ensuring actions like editing and viewing are appropriately restricted.

-   **Profile Customization and Management**

    -   Enables users to upload profile images, enhancing personalization.
    -   Provides user profile settings management, allowing users to update their profile details, including a dedicated section for profile image upload.

-   **Dynamic Content and User Interactions**

    -   Allows users to create, edit, and like posts, introducing a ManyToMany relationship for tracking likes.
    -   Implements commenting functionality on posts, adding depth to user interaction.
    -   Introduces a following system, enabling users to follow/unfollow others and filter posts from followed users for a tailored content feed.

-   **Enhanced Post Features**

    -   Adds an extra privacy feature for micro-posts, allowing users to restrict post visibility.
    -   Incorporates minimum likes criteria for filtering top liked posts, showcasing popular content.

-   **UI Enhancements and Accessibility**
    -   Utilizes TailwindCSS for styling, providing a responsive and aesthetically pleasing design.
    -   Implements dynamic tabs for improved navigation and content organization.

#### Technology Stack

-   Symfony Framework
-   Doctrine ORM
-   Twig for templating
-   TailwindCSS for styling
-   Symfony Security for authentication and authorization
-   Docker for environment setup

## Installation

### Prerequisites

-   Docker and Docker Compose
-   PHP 7.4 or higher
-   Composer

### Environment Setup

1. Clone the repository:

    ```bash
    git clone https://github.com/elvan/social-microblogging-app-symfony.git
    ```

2. Navigate into the project directory:

    ```bash
    cd social-microblogging-app-symfony
    ```

3. Start the Docker containers:

    ```bash
    docker-compose up -d
    ```

4. Install PHP dependencies:

    ```bash
    composer install
    ```

5. Set up the database:
    ```bash
    php bin/console doctrine:migrations:migrate
    ```

## Usage

After installation, you can start using the project by:

-   Accessing the project via http://localhost:8000 (or the configured port).
-   Registering a new account and verifying your email to interact with the platform.
-   Exploring the features such as creating posts, liking, commenting, following other users, and customizing your profile.

The platform is designed to be intuitive, facilitating seamless user interaction and content discovery.
