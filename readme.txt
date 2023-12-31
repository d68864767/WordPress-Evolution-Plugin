# WordPress Evolution Plugin

This plugin generates and posts 1000+ AI-written articles on WordPress with a single click using the OpenAI API key.

## Description

Given the OpenAI API key, and the desired topics for the blog posts, this plugin generates 1000+ unique, SEO-friendly blog posts. Each blog post is around 500 words, and is written in an engaging, informative style. After generating the blog posts, the plugin logs into the WordPress account, navigates to the 'Add New Post' page, and posts each blog post individually. It adds appropriate tags and categories to each post based on its topic. This process is repeated until all blog posts have been posted.

## Installation

1. Download the plugin files.
2. Upload the plugin files to your `/wp-content/plugins/` directory, or install the plugin through the WordPress plugins screen directly.
3. Activate the plugin through the 'Plugins' screen in WordPress.

## Configuration

1. Open `config.php` and replace `'your-openai-api-key'`, `'your-wordpress-username'`, `'your-wordpress-password'`, and `'your-wordpress-website-url'` with your actual OpenAI API key, WordPress username, WordPress password, and WordPress website URL respectively.
2. If needed, update the database configuration in `config.php`.
3. In `index.php`, replace the titles, tags, and categories arrays with your desired blog post titles, tags, and categories.

## Usage

1. Run `index.php` to generate and post the articles.

## Files

- `config.php`: Contains the configuration for the OpenAI API, WordPress account, post, and database.
- `openai_api.php`: Contains the OpenAI_API class that generates the blog posts using the OpenAI API.
- `wordpress_api.php`: Contains the WordPress_API class that posts the blog posts to WordPress.
- `post_generator.php`: Contains the Post_Generator class that uses the OpenAI_API and WordPress_API classes to generate and post the blog posts.
- `index.php`: The main file that you run to generate and post the articles.
- `style.css`: Contains the CSS for the plugin.

## Support

For support, please contact [your support email here].

## License

This project is licensed under the [your license here].
