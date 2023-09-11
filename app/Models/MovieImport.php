<?php

namespace App\Models;

use App\Models\Movie;
use Maatwebsite\Excel\Concerns\ToModel;

class MovieImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        return new Movie([
           'name'     => $row[0],
           'email'    => $row[1],
           
        ]);
    }
}