<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostingPlan extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the projects that belong to the hosting plan.
     */
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
