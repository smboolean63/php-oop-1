<?php

class Movie {
    public $title;
    public $director;
    public $duration;
    public $genre;
    public $releaseYear;
    public $country;
    public $actors;
    public $plot;
    
    /**
     * __construct
     *
     * @param  string $_title
     * @param  int $_duration
     * @param  int $_year
     * @param  string[] $_actors
     * @return void
     */
    public function __construct(string $_title, int $_duration, int $_release_year, array $_actors = [])
    {
        $this->title = $_title;
        $this->duration = $_duration;
        $this->releaseYear = $_release_year;
        $this->actors = $_actors;
    }
}