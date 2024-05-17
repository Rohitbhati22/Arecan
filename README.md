# Arecan

Arecan is an AI tool website built with Laravel that provides functionalities for image classification using ml5.js, background removal from images using TensorFlow.js, and text extraction using JavaScript. This project aims to offer powerful AI capabilities through an intuitive and user-friendly interface.

## Features

- **Image Classification**: Classify images using ml5.js.
- **Background Removal**: Remove backgrounds from images using TensorFlow.js.
- **Text Extraction**: Extract text from images using JavaScript.

## Technologies Used

- **Framework**: Laravel
- **Frontend**: HTML, CSS, JavaScript, Bootstrap
- **Machine Learning**: ml5.js, TensorFlow.js
- **Backend**: PHP
- **Database**: MySQL

## Requirements

- PHP >= 8.0
- Composer
- MySQL
- Node.js & npm

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/yourusername/Arecan.git
    cd Arecan
    ```

2. Install the dependencies:

    ```bash
    composer install
    npm install
    npm run dev
    ```

3. Copy the `.env.example` file to `.env`:

    ```bash
    cp .env.example .env
    ```

4. Generate the application key:

    ```bash
    php artisan key:generate
    ```

5. Configure your database settings in the `.env` file:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

6. Run the database migrations:

    ```bash
    php artisan migrate
    ```

7. Seed the
    database with initial data (optional):

    ```bash
    php artisan db:seed
    ```

8. Start the development server:

    ```bash
    php artisan serve
    ```

9. Visit `http://localhost:8000` in your browser to access Arecan.

## Usage

1. **Image Classification**:
   - Upload an image to classify using ml5.js.
   - View the classification results displayed on the screen.

2. **Background Removal**:
   - Upload an image to remove its background using TensorFlow.js.
   - Download the processed image with the background removed.

3. **Text Extraction**:
   - Upload an image to extract text using JavaScript.
   - View the extracted text displayed on the screen.

## Contributing

Contributions are welcome! Please fork the repository and create a pull request with your changes. Ensure your code follows the project's coding standards and includes appropriate tests.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Acknowledgements

- Laravel Framework
- ml5.js for image classification
- TensorFlow.js for background removal
- All contributors and community members
