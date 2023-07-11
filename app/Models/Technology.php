<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tecnology extends Model
{
    use HasFactory;
    public function project()
    {
        return $this->belongsToMany(Project::class);
    }
}
