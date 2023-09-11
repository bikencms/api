<?php
namespace App\Repositories;
use App\Models\Movie;

class MovieRepository
{
    protected $movie;

    public function __construct(Movie $movie)
    {
        $this->movie = $movie;
    }

    public function getAll() {
        return $this->movie->all();
    }

    public function create($attributes)
    {
        return $this->movie->create($attributes);
    }

    public function findByTitle(array $title)
    {
        return $this->movie->whereIn('title', $title)->get();
    }

    public function find($id) {
        return $this->movie->find($id);
    }
}