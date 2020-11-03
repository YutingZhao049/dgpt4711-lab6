<?php
namespace App\Models;

use App\Models\Simple\CSVModel;

class Places extends CSVModel {
    protected $origin = WRITEPATH . 'data/placesData.csv';
    protected $keyField = 'id';
    protected $validationRules = [];
}
