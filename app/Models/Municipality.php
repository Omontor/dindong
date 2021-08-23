<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Municipality extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'municipalities';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'state_id',
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function municipalityUserInfos()
    {
        return $this->hasMany(UserInfo::class, 'municipality_id', 'id');
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
