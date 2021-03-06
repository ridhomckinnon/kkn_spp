<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classes extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function scopeFilter($query, $request)
    {
        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }
        return $query;
    }

    /**
     * Get the student that owns the Classes
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function student(): BelongsTo
    // {
    //     return $this->belongsTo(Student::class);
    // }

    public function student()
    {
        return $this->hasMany(Student::class, 'id_classes', 'id');
    }

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class,'id_school','id');
    }
}
