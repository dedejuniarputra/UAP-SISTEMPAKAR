<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TemporaryFinal extends Model
{
    protected $guarded = [];

    // $queryTemporaryFinal = DB::table('rules')
    //         ->join('temporaries', 'rules.symptom_id', '=', 'temporaries.symptom_id')
    //         ->select('rules.disease_id', 'rules.symptom_id', 'rules.probability')
    //         ->orderBy('rules.symptom_id', 'asc')
    //         ->get();

    public function diagnosis()
    {
        return DB::select('SELECT DISTINCT `temporary_finals`.`disease_id`, `temporary_finals`.`results`, `diseases`.* FROM `temporary_finals` JOIN `diseases` ON `temporary_finals`.`disease_id` = `diseases`.`diseases_id` ORDER BY `temporary_finals`.`results` DESC LIMIT 3"');
    }
}
