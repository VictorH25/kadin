<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\internal_configuration;

class PointCreateInternalSettings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $keys = [
            0 => 'company_name',
            1 => 'logo',
            2 => 'monitor',
            3 => 'logo_phi',
            4 => 'desk',
            5 => 'command_footer',
            6 => 'command_title',
            7 => 'credit_interest',
            8 => 'debt_interest',
            9 => 'paid_interest',
            10 => 'money_interest',
            11 => 'number_of_tables',
            12 => 'coil_size',
            13 => 'pix_interest'
        ];
        $values = [
            'Point da Gastronomia',
            '/img/logo_principal.png',
            1,
            '/img/phi.jpg',
            1,
            'Obrigado pela preferência, volte sempre!',
            'Instagram: @point_da_gastronomia_ - Numero: (82) 99980-1207',
            4.39,
            0,
            0,
            0,
            10,
            80,
            0
        ];
        $merged = collect($keys)->zip($values)->transform(function ($data) {
            return [
                'key' => $data[0],
                'value' => $data[1],
            ];
        });
        foreach($merged as $internal) {
            internal_configuration::create(['key' => $internal['key'], 'value' => $internal['value']]);
        }
    }
}
