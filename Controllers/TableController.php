<?php

namespace App\Http\Controllers;

use App\Models\PointsModel;
use App\Models\PolygonsModel;
use App\Models\PolylinesModel;
use Illuminate\Http\Request;

class TableController extends Controller
{

    public function __construct()
    {
        $this->table = new PointsModel();
        $this->table = new PolylinesModel();
        $this->table = new PolygonsModel();
    }

    /**
     * Display a listing of the resource.
     */
public function index()
{


    $data = [
        'title' => 'Table',
        'points' => PointsModel::all(),
    ];

        return view('table', $data);

}
}
