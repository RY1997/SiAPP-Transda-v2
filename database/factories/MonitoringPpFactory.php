<?php

namespace Database\Factories;

use App\Models\MonitoringPp;
use Illuminate\Database\Eloquent\Factories\Factory;

class MonitoringPpFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MonitoringPp::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tahun' => $this->faker->word,
        'kode_pwk' => $this->faker->word,
        'nama_pemda' => $this->faker->word,
        'jenis_tkd' => $this->faker->word,
        'evaluasi_upp_1' => $this->faker->word,
        'evaluasi_upp_2' => $this->faker->word,
        'cap_spm_prov_dikmen_1_akses' => $this->faker->word,
        'simpulan_spm_prov_dikmen_1_akses' => $this->faker->word,
        'cap_spm_prov_dikmen_2_akses' => $this->faker->word,
        'simpulan_spm_prov_dikmen_2_akses' => $this->faker->word,
        'cap_spm_prov_dikmen_1_mutu' => $this->faker->word,
        'simpulan_spm_prov_dikmen_1_mutu' => $this->faker->word,
        'cap_spm_prov_diksus_1_akses' => $this->faker->word,
        'simpulan_spm_prov_diksus_1_akses' => $this->faker->word,
        'cap_spm_prov_diksus_2_akses' => $this->faker->word,
        'simpulan_spm_prov_diksus_2_akses' => $this->faker->word,
        'cap_spm_prov_diksus_1_mutu' => $this->faker->word,
        'simpulan_spm_prov_diksus_1_mutu' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'cap_spm_kab_dikdas_1_akses' => $this->faker->word,
        'simpulan_spm_kab_dikdas_1_akses' => $this->faker->word,
        'cap_spm_kab_dikdas_2_akses' => $this->faker->word,
        'simpulan_spm_kab_dikdas_2_akses' => $this->faker->word,
        'cap_spm_kab_dikdas_1_mutu' => $this->faker->word,
        'simpulan_spm_kab_dikdas_1_mutu' => $this->faker->word,
        'cap_spm_kab_dikset_1_akses' => $this->faker->word,
        'simpulan_spm_kab_dikset_1_akses' => $this->faker->word,
        'cap_spm_kab_dikset_2_akses' => $this->faker->word,
        'simpulan_spm_kab_dikset_2_akses' => $this->faker->word,
        'cap_spm_kab_dikset_1_mutu' => $this->faker->word,
        'simpulan_spm_kab_dikset_1_mutu' => $this->faker->word,
        'cap_spm_kab_paud_1_akses' => $this->faker->word,
        'simpulan_spm_kab_paud_1_akses' => $this->faker->word,
        'cap_spm_kab_paud_1_mutu' => $this->faker->word,
        'simpulan_spm_kab_paud_1_mutu' => $this->faker->word,
        'cap_spm_prov_kesben_1_akses' => $this->faker->word,
        'simpulan_spm_prov_kesben_1_akses' => $this->faker->word,
        'cap_spm_prov_kesben_1_mutu' => $this->faker->word,
        'simpulan_spm_prov_kesben_1_mutu' => $this->faker->word,
        'cap_spm_prov_kesklb_1_akses' => $this->faker->word,
        'simpulan_spm_prov_kesklb_1_akses' => $this->faker->word,
        'cap_spm_prov_kesklb_1_mutu' => $this->faker->word,
        'simpulan_spm_prov_kesklb_1_mutu' => $this->faker->word,
        'cap_spm_kab_kesbumil_1_akses' => $this->faker->word,
        'simpulan_spm_kab_kesbumil_1_akses' => $this->faker->word,
        'cap_spm_kab_kesbumil_1_mutu' => $this->faker->word,
        'simpulan_spm_kab_kesbumil_1_mutu' => $this->faker->word,
        'cap_spm_kab_kesbulin_1_akses' => $this->faker->word,
        'simpulan_spm_kab_kesbulin_1_akses' => $this->faker->word,
        'cap_spm_kab_kesbulin_1_mutu' => $this->faker->word,
        'simpulan_spm_kab_kesbulin_1_mutu' => $this->faker->word,
        'cap_spm_kab_kesbbl_1_akses' => $this->faker->word,
        'simpulan_spm_kab_kesbbl_1_akses' => $this->faker->word,
        'cap_spm_kab_kesbbl_1_mutu' => $this->faker->word,
        'simpulan_spm_kab_kesbbl_1_mutu' => $this->faker->word,
        'cap_spm_kab_kesblt_1_akses' => $this->faker->word,
        'simpulan_spm_kab_kesblt_1_akses' => $this->faker->word,
        'cap_spm_kab_kesblt_1_mutu' => $this->faker->word,
        'simpulan_spm_kab_kesblt_1_mutu' => $this->faker->word,
        'cap_spm_kab_kesdikdas_1_akses' => $this->faker->word,
        'simpulan_spm_kab_kesdikdas_1_akses' => $this->faker->word,
        'cap_spm_kab_kesdikdas_1_mutu' => $this->faker->word,
        'simpulan_spm_kab_kesdikdas_1_mutu' => $this->faker->word,
        'cap_spm_kab_kesuprod_1_akses' => $this->faker->word,
        'simpulan_spm_kab_kesuprod_1_akses' => $this->faker->word,
        'cap_spm_kab_kesuprod_1_mutu' => $this->faker->word,
        'simpulan_spm_kab_kesuprod_1_mutu' => $this->faker->word,
        'cap_spm_kab_keslansia_1_akses' => $this->faker->word,
        'simpulan_spm_kab_keslansia_1_akses' => $this->faker->word,
        'cap_spm_kab_keslansia_1_mutu' => $this->faker->word,
        'simpulan_spm_kab_keslansia_1_mutu' => $this->faker->word,
        'cap_spm_kab_keshtn_1_akses' => $this->faker->word,
        'simpulan_spm_kab_keshtn_1_akses' => $this->faker->word,
        'cap_spm_kab_keshtn_1_mutu' => $this->faker->word,
        'simpulan_spm_kab_keshtn_1_mutu' => $this->faker->word,
        'cap_spm_kab_kesdm_1_akses' => $this->faker->word,
        'simpulan_spm_kab_kesdm_1_akses' => $this->faker->word,
        'cap_spm_kab_kesdm_1_mutu' => $this->faker->word,
        'simpulan_spm_kab_kesdm_1_mutu' => $this->faker->word,
        'cap_spm_kab_kesodgj_1_akses' => $this->faker->word,
        'simpulan_spm_kab_kesodgj_1_akses' => $this->faker->word,
        'cap_spm_kab_kesodgj_1_mutu' => $this->faker->word,
        'simpulan_spm_kab_kesodgj_1_mutu' => $this->faker->word,
        'cap_spm_kab_kestb_1_akses' => $this->faker->word,
        'simpulan_spm_kab_kestb_1_akses' => $this->faker->word,
        'cap_spm_kab_kestb_1_mutu' => $this->faker->word,
        'simpulan_spm_kab_kestb_1_mutu' => $this->faker->word,
        'cap_spm_kab_keshiv_1_akses' => $this->faker->word,
        'simpulan_spm_kab_keshiv_1_akses' => $this->faker->word,
        'cap_spm_kab_keshiv_1_mutu' => $this->faker->word,
        'simpulan_spm_kab_keshiv_1_mutu' => $this->faker->word,
        'cap_spm_prov_puam_1_akses' => $this->faker->word,
        'simpulan_spm_prov_puam_1_akses' => $this->faker->word,
        'cap_spm_prov_puam_1_mutu' => $this->faker->word,
        'simpulan_spm_prov_puam_1_mutu' => $this->faker->word,
        'cap_spm_prov_pual_1_akses' => $this->faker->word,
        'simpulan_spm_prov_pual_1_akses' => $this->faker->word,
        'cap_spm_prov_pual_1_mutu' => $this->faker->word,
        'simpulan_spm_prov_pual_1_mutu' => $this->faker->word,
        'cap_spm_kab_puam_1_akses' => $this->faker->word,
        'simpulan_spm_kab_puam_1_akses' => $this->faker->word,
        'cap_spm_kab_puam_1_mutu' => $this->faker->word,
        'simpulan_spm_kab_puam_1_mutu' => $this->faker->word,
        'cap_spm_kab_pual_1_akses' => $this->faker->word,
        'simpulan_spm_kab_pual_1_akses' => $this->faker->word,
        'cap_spm_kab_pual_1_mutu' => $this->faker->word,
        'simpulan_spm_kab_pual_1_mutu' => $this->faker->word,
        'cap_spm_prov_prrehab_1_akses' => $this->faker->word,
        'simpulan_spm_prov_prrehab_1_akses' => $this->faker->word,
        'cap_spm_prov_prrehab_1_mutu' => $this->faker->word,
        'simpulan_spm_prov_prrehab_1_mutu' => $this->faker->word,
        'cap_spm_prov_prrelok_1_akses' => $this->faker->word,
        'simpulan_spm_prov_prrelok_1_akses' => $this->faker->word,
        'cap_spm_prov_prrelok_1_mutu' => $this->faker->word,
        'simpulan_spm_prov_prrelok_1_mutu' => $this->faker->word,
        'cap_spm_kab_prrehab_1_akses' => $this->faker->word,
        'simpulan_spm_kab_prrehab_1_akses' => $this->faker->word,
        'cap_spm_kab_prrehab_1_mutu' => $this->faker->word,
        'simpulan_spm_kab_prrehab_1_mutu' => $this->faker->word,
        'cap_spm_kab_prrelok_1_akses' => $this->faker->word,
        'simpulan_spm_kab_prrelok_1_akses' => $this->faker->word,
        'cap_spm_kab_prrelok_1_mutu' => $this->faker->word,
        'simpulan_spm_kab_prrelok_1_mutu' => $this->faker->word
        ];
    }
}