<?php
class Movie
{
    public $name;
    public $genres_list = [];
    public $vote;
    public $description;

    function __construct($_name)
    {
        $this->name = $_name;
    }

    public function addGenre($genre)
    {
        $this->genres_list[] = $genre;
    }

    public function printData()
    {
        return "Film: {$this->name}; Generi: {$this->genres_list}; Voto: {$this->vote}";
    }
}

$array_movie = [
    [
        $superman = new Movie("Superman"),
        $superman->vote = 4,
        $superman->genres_list = ["action", "advenure", "science fiction"]
    ],
    [
        $pulp_fiction = new Movie("Pulp Fiction"),
        $pulp_fiction->vote = 5,
        $pulp_fiction->genres_list = ["thriller", "noir"]
    ]

];




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php foreach ($array_movie as $movie) {
        foreach ($movie as $key => $movieinfo) {
            if ($key == 0) {
                var_dump($movieinfo);
            };
        };
    };
    ?>
</body>

</html>