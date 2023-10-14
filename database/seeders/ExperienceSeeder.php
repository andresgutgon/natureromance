<?php

namespace Database\Seeders;

use App\Enums\ExperienceStatusEnum;
use App\Models\Experience;
use App\Models\Organization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function () {
            $organization = Organization::where('slug', 'paco-s-organization')->first();
            $experience = Experience::create([
                'organization_id' => $organization->id,
                'title' => 'Caminata por el Parque Natural del Montseny',
                'status' => ExperienceStatusEnum::ACTIVE->value,
                'description' => 'Bonito paseo por el Montseny',
                'date' => '2024-10-10',
                'time' => '9:30',
                'location_id' => $organization->location->id,
                'price_in_cents' => 20_00,
                'participants_limit' => 20,
                'age_range_start' => 35,
                'age_range_end' => 45,
            ]);
            Experience::create([
                'organization_id' => $organization->id,
                'title' => 'Caminata por el Parque Natural del Montseny',
                'status' => ExperienceStatusEnum::ACTIVE->value,
                'description' => 'Bonito paseo por el Montseny',
                'date' => '2024-10-10',
                'time' => '9:30',
                'location_id' => $organization->location->id,
                'price_in_cents' => 20_00,
                'participants_limit' => 20,
                'age_range_start' => 46,
                'age_range_end' => 55,
            ]);
        });
    }
}
