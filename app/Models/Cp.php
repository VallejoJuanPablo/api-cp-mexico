<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cp extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $primaryKey = 'cp';
    public function federal_entity()
    {
        return $this->hasOne(Federal_entity::class);
    }
    
    public function settlements()
    {
        return $this->hasOne(Settlements::class);
    }
    
    public function municipality()
    {
        return $this->hasOne(Municipality::class);
    }
    
    public function locality()
    {
        return $this->hasOne(Locality::class);
    }
    
}
