<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TemporaryFinal extends Model
{
    protected $guarded = [];

    public function diagnosis()
    {
        return DB::select('SELECT DISTINCT `temporary_finals`.`disease_id`, `temporary_finals`.`results`, `diseases`.* FROM `temporary_finals` JOIN `diseases` ON `temporary_finals`.`disease_id` = `diseases`.`diseases_id` ORDER BY `temporary_finals`.`results` DESC LIMIT 3"');
    }
}
