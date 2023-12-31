```php
<?php
require_once 'config.php';

class WordPress_API {
    private $username;
    private $password;
    private $website;

    public function __construct() {
        $this->username = WORDPRESS_USERNAME;
        $this->password = WORDPRESS_PASSWORD;
        $this->website = WORDPRESS_WEBSITE;
    }

    private function postArticle($title, $content, $tags, $categories) {
        $url = $this->website . "/wp-json/wp/v2/posts";

        $postfields = array(
            'title' => $title,
            'content' => $content,
            'status' => 'publish',
            'tags' => $tags,
            'categories' => $categories
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postfields));
        curl_setopt($ch, CURLOPT_USERPWD, $this->username . ':' . $this->password);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        return $result;
    }

    public function postArticles($articles, $tags, $categories) {
        foreach ($articles as $article) {
            $this->postArticle($article['title'], $article['content'], $tags, $categories);
        }
    }
}
?>
```
