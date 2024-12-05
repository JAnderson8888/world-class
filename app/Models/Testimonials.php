<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    public function importJsonData()
    {
        // Path to your JSON file in storage
        $path = './resources/json/testimonials.json';

        // Retrieve the contents of the JSON file
        if (Storage::exists($path)) {
            $jsonContents = Storage::get($path);

            // Decode the JSON data into an array
            $data = json_decode($jsonContents, true);

            // Return the data
            return $data;
        }
    }
}
