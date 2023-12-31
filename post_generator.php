```php
<?php
require_once 'config.php';
require_once 'openai_api.php';
require_once 'wordpress_api.php';

class Post_Generator {
    private $openai_api;
    private $wordpress_api;

    public function __construct() {
        $this->openai_api = new OpenAI_API();
        $this->wordpress_api = new WordPress_API();
    }

    public function generateAndPostArticles($titles, $length, $tags, $categories) {
        // Generate articles using OpenAI API
        $articles = $this->openai_api->generatePosts($titles, $length);

        // Prepare articles for posting
        $articles_for_posting = array();
        foreach ($articles as $index => $content) {
            $articles_for_posting[] = array(
                'title' => $titles[$index],
                'content' => $content
            );
        }

        // Post articles using WordPress API
        $this->wordpress_api->postArticles($articles_for_posting, $tags, $categories);
    }
}

// Usage
$post_generator = new Post_Generator();
$titles = array('Title 1', 'Title 2', 'Title 3'); // Replace with your titles
$length = POST_LENGTH;
$tags = array('Tag 1', 'Tag 2', 'Tag 3'); // Replace with your tags
$categories = array('Category 1', 'Category 2', 'Category 3'); // Replace with your categories
$post_generator->generateAndPostArticles($titles, $length, $tags, $categories);
?>
```
