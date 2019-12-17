<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country'
    ];

    /**
     * @var array
     */
    protected $rules = [
        "required|string"
    ];

    /**
     * @return array
     */
    public function getrules(){
        return $this->rules;
    }

    /**
     * @return HasMany
     */
    public function users(){
        return $this->hasMany(User::class);
    }
}
