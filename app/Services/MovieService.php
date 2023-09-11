<?php
namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Repositories\MovieRepository;

class MovieService
{
    protected $movieRepository;
    public function __construct(MovieRepository $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }

    public function getMovies() 
    {
        return response()->json($this->movieRepository->getAll(), Response::HTTP_OK);
    }

    public function create($data)
    {
        return $this->movieRepository->create($data);
    }

    public function getMovieById($id) {
        return $this->movieRepository->find($id);
    }
}

