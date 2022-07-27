<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ZipCode extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $primaryKey = 'zip_code';
    
    public function federal_entity()
    {
        return $this->hasOne(Federal_entity::class,'key','federal_entity_id');
    }
    
    public function settlements()
    {
        return $this->hasOne(Settlements::class,'key','settlements_id');
    }
    
    public function municipality()
    {
        return $this->hasOne(Municipality::class,'key','municipalities_id');
    }
    
    public function locality()
    {
        return $this->hasOne(Locality::class,'key','localities_id');
    }
    
}
