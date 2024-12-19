<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    protected $fillable = ['code', 'symptom'];

    public function rules()
    {
        return $this->hasMany(Rule::class);
    }
}
