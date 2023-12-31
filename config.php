```php
<?php
// OpenAI API configuration
define('OPENAI_API_KEY', 'your-openai-api-key');

// WordPress account configuration
define('WORDPRESS_USERNAME', 'your-wordpress-username');
define('WORDPRESS_PASSWORD', 'your-wordpress-password');
define('WORDPRESS_WEBSITE', 'your-wordpress-website-url');

// Post configuration
define('POST_COUNT', 1000);
define('POST_LENGTH', 500); // in words

// Database configuration (if needed)
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'wordpress');

// Ensure errors are displayed
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
```
