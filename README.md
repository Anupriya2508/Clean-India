# Clean India Initiative Website

The Clean India Initiative Website is a community-driven platform aimed at addressing and combatting pollution in our streets. This web application empowers users to actively participate in the cleanliness drive by reporting polluted areas and contributing to the overall improvement of their surroundings.

## Table of Contents

- [Project Overview](#project-overview)
- [Features](#features)
  - [Front-End Implementation](#front-end-implementation)
  - [Back-End Implementation](#back-end-implementation)
  - [Additional Features](#additional-features)
- [Tools and Technologies Used](#tools-and-technologies-used)
  - [Front-End Languages](#front-end-languages)
  - [Back-End Languages](#back-end-languages)
  - [Database](#database)
  - [Development Environment](#development-environment)
- [Usage](#usage)
- [Contributing](#contributing)

## Project Overview

The Clean India Initiative Web Application is a platform designed to empower users to report and address dirty areas in their vicinity by connecting with the local municipal corporation. The application encourages civic responsibility and contributes to the Swach Bharath Mission.

## Features

### Front-End Implementation

#### Initial Page (start.php)

Warm welcome and information about the Swach Bharath Mission.

#### SignUp Page

User registration with input for Email ID and password. Automatic generation of a unique username. Confirmation password for security. SignUp button to create an account.

#### Login Page

Username and password entry for registered users. Option to recover password if forgotten. Error page for incorrect credentials.

#### Index Page (After Login)

Welcomes the user after successful login. Provides options for reporting a dirty area.

#### Upload Image Page

Allows users to upload images of polluted areas. Requests location access for automatic geotagging.

#### Location Detection Popup

Asks for permission to access location for geotagging. Automatically captures latitude and longitude coordinates.

#### Upload Page (upload.php)

Prompts users to choose an image file for upload. Displays a sample image upload process. Thanks the user for contributing to the initiative.

#### Contact Us Page

Provides contact information for inquiries or feedback.

### Back-End Implementation

#### Database

MySQL relational database management system is used.

#### Tables

'users' for storing user details (Email, Username, Password) and 'upload' for storing uploaded images, latitude, longitude, and the associated username.

#### User Authentication

Secure user authentication with generated unique usernames.

#### Geotagging

Captures and stores latitude and longitude coordinates for each uploaded image.

#### Image Storage

Creates an 'upload' folder to store user-uploaded images.

#### Location Mapping

Utilizes coordinates to pinpoint the exact location on maps.



## Tools and Technologies Used

### Front-End Languages

- HTML5
- CSS3
- JavaScript
- jQuery

### Back-End Languages

- PHP
- JavaScript

### Database

- MySQL

### Development Environment

- Visual Studio Code (VS Code)
- XAMPP

## Usage

To use the Clean India Initiative Website locally, follow these steps:

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/your-username/clean-india-website.git

2. **Install XAMPP or any other local server environment:**
Import the SQL file provided in the database folder to set up the required tables.
Configure Database Connection:

3. **Open the config.php file:**
Update the database connection details (username, password, database name).
Run the Application:

4. **Start your local server.**
Visit http://localhost/clean-india-website/start.php in your browser.
Explore and Contribute:

5. **Create an account or log in if you already have one.**
Use the reporting features to contribute images and locations of polluted areas.

## Contributing

If you'd like to contribute to this project, please follow these guidelines:

1. Fork the repository.
2. Create a new branch for your feature: `git checkout -b feature-name`.
3. Commit your changes: `git commit -m 'Add some feature'`.
4. Push to the branch: `git push origin feature-name`.
5. Submit a pull request.
