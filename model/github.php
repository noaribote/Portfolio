<?php
    function GetDescription($repo, $username = "noaribote") {
        $url = "https://api.github.com/repos/$username/$repo";
        $options = [
            "http" => ["header" => "User-Agent: PHP\r\n"]
        ];

        $context = stream_context_create($options);
        $response = file_get_contents($url, false, $context);

        if ($response === false) { return null; }

        $data = json_decode($response, true);
        return $data['description'] ?? null;
    }
?>