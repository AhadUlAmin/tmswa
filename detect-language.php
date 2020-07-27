<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function guess_lang($str) {

        $str = str_replace(" ", "%20", $str);
    
        $content = file_get_contents("https://translation.googleapis.com/language/translate/v2/detect?key=YOUR_API_KEY&q=".$str);
    
        $lang = (json_decode($content, true));
    
        if(isset($lang))
            return $lang["data"]["detections"][0][0]["language"];
     }
     echo guess_lang("luxury apartments downtown montreal"); // returns "en"
    ?>
</body>
</html>