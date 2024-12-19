<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    protected $fillable = ['code', 'name', 'probability', 'appear', 'information', 'suggestion'];

    public function rules()
    {
        return $this->hasMany(Rule::class);
    }
}
