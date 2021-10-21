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

    public function topFilm()
    {
        return $this->star > 9;
    }

}

$matrix = new Movie("Matrix", "Wachowski", 1999, 10, 136);
var_dump($matrix);
