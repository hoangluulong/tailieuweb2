<?php

namespace App\Http\Controllers;

use App\Models\Trainers;

class TrainersController extends Controller
{
    public function trainers() {
        $obj = new Trainers();
        $trainers = $obj->paginate(15);
        return view('trainers', ['trainers' => $trainers]);
    }
}
