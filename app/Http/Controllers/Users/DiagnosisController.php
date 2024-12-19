<?php

namespace App\Http\Controllers\Users;

use App\Consultation;
use App\Disease;
use App\Http\Controllers\Controller;
use App\Symptom;
use App\Temporary;
use App\TemporaryFinal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DiagnosisController extends Controller
{
    public function index()
    {
        $symtoms = Symptom::all();
        return view('users.diagnosis.index', compact('symtoms'));
    }

    public function getProbGagalGinjal()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 1)->get() as $probKidney) {
            $total = $total * $probKidney->probability;
        }

        foreach (Disease::where('id', 1)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbKankerGinjal()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 2)->get() as $probKidney) {
            $total = $total * $probKidney->probability;
        }

        foreach (Disease::where('id', 2)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbInfeksiGinjal()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 3)->get() as $probKidney) {
            $total = $total * $probKidney->probability;
        }

        foreach (Disease::where('id', 3)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbSindromNefrotik()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 4)->get() as $probKidney) {
            $total = $total * $probKidney->probability;
        }

        foreach (Disease::where('id', 4)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbHidronefrosis()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 5)->get() as $probKidney) {
            $total = $total * $probKidney->probability;
        }

        foreach (Disease::where('id', 5)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbKankerKandungKemih()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 6)->get() as $probKidney) {
            $total = $total * $probKidney->probability;
        }

        foreach (Disease::where('id', 6)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbGinjalPolikistik()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 7)->get() as $probKidney) {
            $total = $total * $probKidney->probability;
        }

        foreach (Disease::where('id', 7)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbNefritisInterstisial()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 8)->get() as $probKidney) {
            $total = $total * $probKidney->probability;
        }

        foreach (Disease::where('id', 8)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbSistitisInterstisialis()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 9)->get() as $probKidney) {
            $total = $total * $probKidney->probability;
        }

        foreach (Disease::where('id', 9)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbInfeksiSaluranKemih()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 10)->get() as $probKidney) {
            $total = $total * $probKidney->probability;
        }

        foreach (Disease::where('id', 10)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbBatuGinjal()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 11)->get() as $probKidney) {
            $total = $total * $probKidney->probability;
        }

        foreach (Disease::where('id', 11)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }


    // hasil perhitungan probabilitas
    public function resultProbGagalGinjal($gagalGinjal)
    {
        TemporaryFinal::where('disease_id', 1)->update(['results' => $gagalGinjal]);
    }

    public function resultProbKankerGinjal($kankerGinjal)
    {
        TemporaryFinal::where('disease_id', 2)->update(['results' => $kankerGinjal]);
    }

    public function resultProbInfeksiGinjal($infeksiGinjal)
    {
        TemporaryFinal::where('disease_id', 3)->update(['results' => $infeksiGinjal]);
    }

    public function resultProbSindromNefrotik($sindromNefrotik)
    {
        TemporaryFinal::where('disease_id', 4)->update(['results' => $sindromNefrotik]);
    }

    public function resultProbHidronefrosis($hidronefrosis)
    {
        TemporaryFinal::where('disease_id', 5)->update(['results' => $hidronefrosis]);
    }

    public function resultProbKankerKandungKemih($kankerKandungKemih)
    {
        TemporaryFinal::where('disease_id', 6)->update(['results' => $kankerKandungKemih]);
    }

    public function resultProbGinjalPolikistik($ginjalPolikistik)
    {
        TemporaryFinal::where('disease_id', 7)->update(['results' => $ginjalPolikistik]);
    }

    public function resultProbNefritisInterstisial($nefritisInterstisial)
    {
        TemporaryFinal::where('disease_id', 8)->update(['results' => $nefritisInterstisial]);
    }

    public function resultProbSistitisInterstisialis($sistitisInterstisialis)
    {
        TemporaryFinal::where('disease_id', 9)->update(['results' => $sistitisInterstisialis]);
    }

    public function resultProbInfeksiSaluranKemih($infeksiSaluranKemih)
    {
        TemporaryFinal::where('disease_id', 10)->update(['results' => $infeksiSaluranKemih]);
    }

    public function resultProbBatuGinjal($batuGinjal)
    {
        TemporaryFinal::where('disease_id', 11)->update(['results' => $batuGinjal]);
    }
    // END:: hasil perhitungan probabilitas


    public function proccess(Request $request)
    {
        Temporary::query()->truncate();
        TemporaryFinal::query()->truncate();

        foreach ($request->symptom as $symptoms) {
            Temporary::create(['symptom_id' => $symptoms]);
        }

        // $query = DB::select("SELECT `rules`.`disease_id`,`rules`.`symptom_id`, `rules`.`probability` from `rules` JOIN `temporaries` ON `rules`.`symptom_id` = `temporaries`.`symptom_id` ORDER BY `rules`.`symptom_id` ASC");

        $queryTemporaryFinal = DB::table('rules')
            ->join('temporaries', 'rules.symptom_id', '=', 'temporaries.symptom_id')
            ->select('rules.disease_id', 'rules.symptom_id', 'rules.probability')
            ->orderBy('rules.symptom_id', 'asc')
            ->get();

        foreach ($queryTemporaryFinal as $qtf) {
            DB::table('temporary_finals')->insert([
                'disease_id' => $qtf->disease_id,
                'symptom_id' => $qtf->symptom_id,
                'probability' => $qtf->probability,
                'results' => 0
            ]);
        }

        $probGagalGinjal = $this->getProbGagalGinjal();
        $probKankerGinjal = $this->getProbKankerGinjal();
        $probInfeksiGinjal = $this->getProbInfeksiGinjal();
        $probSindromNefrotik = $this->getProbSindromNefrotik();
        $probHidronefrosis = $this->getProbHidronefrosis();
        $probKankerKandungKemih = $this->getProbKankerKandungKemih();
        $probGinjalPolikistik = $this->getProbGinjalPolikistik();
        $probNefritisInterstisial = $this->getProbNefritisInterstisial();
        $probSistitisInterstisialis = $this->getProbSistitisInterstisialis();
        $probInfeksiSaluranKemih = $this->getProbInfeksiGinjal();
        $probBatuGinjal = $this->getProbBatuGinjal();

        $data = [
            'gagalGinjal' => $probGagalGinjal,
            'kankerGinjal' => $probKankerGinjal,
            'infeksiGinjal' => $probInfeksiGinjal,
            'sindromNefrotik' => $probSindromNefrotik,
            'hidronefrosis' => $probHidronefrosis,
            'kankerKandungKemih' => $probKankerKandungKemih,
            'ginjalPolikistik' => $probGinjalPolikistik,
            'nefritisInterstisial' => $probNefritisInterstisial,
            'sistitisInterstisialis' => $probSistitisInterstisialis,
            'infeksiSaluranKemih' => $probInfeksiSaluranKemih,
            'batuGinjal' => $probBatuGinjal
        ];

        $totalProbability = array_sum($data);

        $gagalGinjal = ($probGagalGinjal / $totalProbability);
        $kankerGinjal = ($probKankerGinjal / $totalProbability);
        $infeksiGinjal = ($probInfeksiGinjal / $totalProbability);
        $sindromNefrotik = ($probSindromNefrotik / $totalProbability);
        $hidronefrosis = ($probHidronefrosis / $totalProbability);
        $kankerKandungKemih = ($probKankerKandungKemih / $totalProbability);
        $ginjalPolikistik = ($probGinjalPolikistik / $totalProbability);
        $nefritisInterstisial = ($probNefritisInterstisial / $totalProbability);
        $sistitisInterstisialis = ($probSistitisInterstisialis / $totalProbability);
        $infeksiSaluranKemih = ($probInfeksiSaluranKemih / $totalProbability);
        $batuGinjal = ($probBatuGinjal / $totalProbability);

        $this->resultProbGagalGinjal($gagalGinjal);
        $this->resultProbKankerGinjal($kankerGinjal);
        $this->resultProbInfeksiGinjal($infeksiGinjal);
        $this->resultProbSindromNefrotik($sindromNefrotik);
        $this->resultProbHidronefrosis($hidronefrosis);
        $this->resultProbKankerKandungKemih($kankerKandungKemih);
        $this->resultProbGinjalPolikistik($ginjalPolikistik);
        $this->resultProbNefritisInterstisial($nefritisInterstisial);
        $this->resultProbSistitisInterstisialis($sistitisInterstisialis);
        $this->resultProbInfeksiSaluranKemih($infeksiSaluranKemih);
        $this->resultProbBatuGinjal($batuGinjal);

        $diagnosisMax = DB::select("SELECT `temporary_finals`.`id`, MAX(results) as `results`, `diseases`.* FROM temporary_finals JOIN `diseases` ON `temporary_finals`.`disease_id` = `diseases`.`id` GROUP BY `diseases`.`id` ORDER BY `results` DESC LIMIT 1");

        foreach ($diagnosisMax as $diagnosaMax) {
            Consultation::create([
                'user_id' => Auth::user()->id,
                'disease' => $diagnosaMax->name,
                'score' => floor($diagnosaMax->results * 100),
                'information' => $diagnosaMax->information,
                'suggestion' => $diagnosaMax->suggestion
            ]);
        }

        return redirect('/users/diagnosis/results')->with('toast_success', Auth::user()->name . ' Berhasil Mendiagnosa');
    }

    public function results()
    {
        $diagnosis = DB::select("SELECT DISTINCT `temporary_finals`.`disease_id`, `temporary_finals`.`results`, `diseases`.* FROM `temporary_finals` JOIN `diseases` ON `temporary_finals`.`disease_id` = `diseases`.`id` ORDER BY `temporary_finals`.`results` DESC LIMIT 4");

        $diagnosisMax = DB::select("SELECT `temporary_finals`.`id`, MAX(results) as `results`, `diseases`.* FROM temporary_finals JOIN `diseases` ON `temporary_finals`.`disease_id` = `diseases`.`id` GROUP BY `diseases`.`id` ORDER BY `results` DESC LIMIT 1");

        return view('users.diagnosis.results', compact('diagnosis', 'diagnosisMax'));
    }
}
