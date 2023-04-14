<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the hosting plan for the project.
     */
    public function hostingPlan()
    {
        return $this->hasOne(HostingPlan::class);
    }
}
