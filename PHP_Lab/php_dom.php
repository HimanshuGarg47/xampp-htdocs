<?php
    $doc = new DOMDocument();
    $doc->load('3apract.xml');
    
    $movies = $doc->getElementsByTagName("movies");
    $i = 2;
    foreach($movies as $movie)
    {
        while($i != -1)
        {
            $titles = $movie->getElementsByTagName("title");
            $title = $titles->item($i)->nodeValue;

            $years = $movie->getElementsByTagName("year");
            $year = $years->item($i)->nodeValue;

            $genres = $movie->getElementsByTagName("genre");
            $genre = $genres->item($i)->nodeValue;
            $i--;

            echo "Title of movie is $title published in $year by $genre <br>";
            echo "<br>";
        }
    }

   
?>





















x