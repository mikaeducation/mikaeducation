<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class AsessmentRecapStat extends Command
{
    protected $signature = 'rekap:asessment';
    protected $description = 'Rekap jumlah pengerjaan dan rata-rata nilai untuk asessment_id 1 dan 2';

    public function handle()
    {
        $targetAsessments = [1, 2];

        foreach ($targetAsessments as $asessmentId) {
            $data = DB::table('user_asessment')
                ->where('asessment_id', $asessmentId)
                ->selectRaw('COUNT(*) as total, AVG(high_score) as average')
                ->first();

            DB::table('module_asessment')
                ->where('asessment_id', $asessmentId)
                ->update([
                    'asessment_workout' => $data->total ?? 0,
                    'asessment_average' => $data->average ?? 0,
                ]);

            $this->info("Asessment ID $asessmentId berhasil diperbarui.");
        }
    }
}
