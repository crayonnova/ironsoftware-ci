# Project Description

This project is a static webpage implemented using CodeIgniter 4 with PHP 8.2.3, without SQL. The project was developed by cloning the official CodeIgniter 4 app starter repository.

## Server Requirements

To run the project, ensure that your server meets the following requirements:

- PHP version 8.2.3 or higher is required, with the following extensions installed:
  - [intl](http://php.net/manual/en/intl.requirements.php)
  - [mbstring](http://php.net/manual/en/mbstring.installation.php)
- Composer 2.5

## Development Setup

To set up the development environment for the project, follow the instructions below:

1. Clone the repository: git clone [repo](https://github.com/crayonnova/ironsoftware-ci)
2. Install dependencies using Composer: `composer install`
3. Start the development server: `php spark serve --port 8000`
4. Access the webpage in your browser at `http://localhost:8000` or the appropriate URL provided by the development server.

## Docker Setup
### Requrirement 
  Please ensure that Docker is installed and running on your system before executing these commands. [Docker](https://docs.docker.com/engine/install/)
  
To run the project using Docker, follow the instructions below:

1. Pull the Docker image from the repository: `docker pull ghcr.io/crayonnova/ironsoftware-ci:latest`
2. Run the Docker container and expose it on a specific port (e.g., 8000): `docker run -d -p 8000:80 ghcr.io/crayonnova/ironsoftware-ci:latest`
3. Replace `8000` with the desired port number.
4. Access the webpage in your browser at `http://localhost:8000` or the appropriate URL based on the port you specified.
(or)

You can also run using docker-compose `docker-compose up -d`


