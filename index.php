<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Quota Generate</title>
    <style>
        .container{
            width: 800px;
            margin: 100px auto;
            border: 2px solid #ddd;
            border-radius:5px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php
    $quotes = [
        [
            'quote_details' => 'Coding is not just about instructions,its about crafting a digital symphony',
            'writer' => 'Jonathon'
        ],
        [
            'quote_details' => '"In the realm of algorithms, every line of code tells a story waiting to be unfolded."',
            'writer' => 'Jaminson'
        ],
        [
            'quote_details' => '"Debugging is like solving a mystery; the only clues are the error messages."',
            'writer' => 'Me'
        ],
        
    ];

    function getRandomQuote($quotes){
       $len = count($quotes)-1;
       $random = rand(0,$len);
       echo '<h2>“'.$quotes[$random]["quote_details"].'”</h2>';
       echo '<h5>-'.$quotes[$random]["writer"].'</h5>';
    }
    ?>
    <div class="container">
        <?php
            getRandomQuote($quotes);
        ?>
    </div>
</body>
</html>