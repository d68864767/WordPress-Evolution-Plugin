```php
<?php
require_once 'config.php';

class OpenAI_API {
    private $api_key;

    public function __construct() {
        $this->api_key = OPENAI_API_KEY;
    }

    private function generatePost($title, $length) {
        $url = "https://api.openai.com/v1/engines/davinci-codex/completions";
        $prompt = "Write a " . $length . " word blog post about " . $title;

        $postfields = json_encode(array(
            'prompt' => $prompt,
            'max_tokens' => $length * 5, // assuming an average of 5 tokens per word
            'temperature' => 0.7
        ));

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $this->api_key
        ));

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        $result = json_decode($result, true);
        return $result['choices'][0]['text'];
    }

    public function generatePosts($titles, $length) {
        $posts = array();
        foreach ($titles as $title) {
            $posts[] = $this->generatePost($title, $length);
        }
        return $posts;
    }
}
?>
```
