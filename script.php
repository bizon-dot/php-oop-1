<?php
class Movie
{
    public $_title;
    public $_director;
    public $_year;
    public $_stars;
    public $_duration;

    public function __construct($_title, $_director, $_year, $_stars, $_duration)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->stars = $_stars;
        $this->duration = $_duration;
    }

    public function get_title()
    {

        return $this->title;

    }

    public function get_director()
    {

        return $this->director;
    }

    public function get_year()
    {

        return $this->year;

    }

    public function get_stars()
    {

        return $this->stars;

    }

    public function get_duration()
    {

        return $this->duration;
    }

    public function topFilm()
    {
        return $this->stars > 9;
    }

}

$matrix = new Movie("Matrix", "Wachowski", 1999, 10, 136);
$ghostInTheShell = new Movie("Ghost in the shell", "Masamune Shirow", 1997, 10, 116);

echo $matrix->get_title();
echo "<br>";
echo $matrix->get_director();
echo "<br>";
echo $matrix->get_year();
echo "<br>";
echo $matrix->get_stars();
echo "<br>";
echo $matrix->get_duration();
echo "<br>";
echo "<br>";
echo $ghostInTheShell->get_title();
echo "<br>";
echo $ghostInTheShell->get_director();
echo "<br>";
echo $ghostInTheShell->get_year();
echo "<br>";
echo $ghostInTheShell->get_stars();
echo "<br>";
echo $ghostInTheShell->get_duration();
// var_dump($ghostInTheShell);
