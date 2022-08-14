<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kwpillars extends Model
{
    protected $fillable = ['plan_number','name', 'location', 'size', 'pillar_number', 'eastings', 'northings', 'origin', 'height', 'remarks'];
 
}