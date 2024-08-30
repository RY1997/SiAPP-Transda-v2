<?php

namespace App\Repositories;

use App\Models\MonitoringPp;
use App\Repositories\BaseRepository;

/**
 * Class MonitoringPpRepository
 * @package App\Repositories
 * @version August 29, 2024, 11:02 pm WIB
*/

class MonitoringPpRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tahun',
        'kode_pwk',
        'nama_pemda',
        'jenis_tkd',
        'evaluasi_upp_1',
        'evaluasi_upp_2',
        'cap_spm_prov_dikmen_1_akses',
        'simpulan_spm_prov_dikmen_1_akses',
        'cap_spm_prov_dikmen_2_akses',
        'simpulan_spm_prov_dikmen_2_akses',
        'cap_spm_prov_dikmen_1_mutu',
        'simpulan_spm_prov_dikmen_1_mutu',
        'cap_spm_prov_diksus_1_akses',
        'simpulan_spm_prov_diksus_1_akses',
        'cap_spm_prov_diksus_2_akses',
        'simpulan_spm_prov_diksus_2_akses',
        'cap_spm_prov_diksus_1_mutu',
        'simpulan_spm_prov_diksus_1_mutu',
        'cap_spm_kab_dikdas_1_akses',
        'simpulan_spm_kab_dikdas_1_akses',
        'cap_spm_kab_dikdas_2_akses',
        'simpulan_spm_kab_dikdas_2_akses',
        'cap_spm_kab_dikdas_1_mutu',
        'simpulan_spm_kab_dikdas_1_mutu',
        'cap_spm_kab_dikset_1_akses',
        'simpulan_spm_kab_dikset_1_akses',
        'cap_spm_kab_dikset_2_akses',
        'simpulan_spm_kab_dikset_2_akses',
        'cap_spm_kab_dikset_1_mutu',
        'simpulan_spm_kab_dikset_1_mutu',
        'cap_spm_kab_paud_1_akses',
        'simpulan_spm_kab_paud_1_akses',
        'cap_spm_kab_paud_1_mutu',
        'simpulan_spm_kab_paud_1_mutu',
        'cap_spm_prov_kesben_1_akses',
        'simpulan_spm_prov_kesben_1_akses',
        'cap_spm_prov_kesben_1_mutu',
        'simpulan_spm_prov_kesben_1_mutu',
        'cap_spm_prov_kesklb_1_akses',
        'simpulan_spm_prov_kesklb_1_akses',
        'cap_spm_prov_kesklb_1_mutu',
        'simpulan_spm_prov_kesklb_1_mutu',
        'cap_spm_kab_kesbumil_1_akses',
        'simpulan_spm_kab_kesbumil_1_akses',
        'cap_spm_kab_kesbumil_1_mutu',
        'simpulan_spm_kab_kesbumil_1_mutu',
        'cap_spm_kab_kesbulin_1_akses',
        'simpulan_spm_kab_kesbulin_1_akses',
        'cap_spm_kab_kesbulin_1_mutu',
        'simpulan_spm_kab_kesbulin_1_mutu',
        'cap_spm_kab_kesbbl_1_akses',
        'simpulan_spm_kab_kesbbl_1_akses',
        'cap_spm_kab_kesbbl_1_mutu',
        'simpulan_spm_kab_kesbbl_1_mutu',
        'cap_spm_kab_kesblt_1_akses',
        'simpulan_spm_kab_kesblt_1_akses',
        'cap_spm_kab_kesblt_1_mutu',
        'simpulan_spm_kab_kesblt_1_mutu',
        'cap_spm_kab_kesdikdas_1_akses',
        'simpulan_spm_kab_kesdikdas_1_akses',
        'cap_spm_kab_kesdikdas_1_mutu',
        'simpulan_spm_kab_kesdikdas_1_mutu',
        'cap_spm_kab_kesuprod_1_akses',
        'simpulan_spm_kab_kesuprod_1_akses',
        'cap_spm_kab_kesuprod_1_mutu',
        'simpulan_spm_kab_kesuprod_1_mutu',
        'cap_spm_kab_keslansia_1_akses',
        'simpulan_spm_kab_keslansia_1_akses',
        'cap_spm_kab_keslansia_1_mutu',
        'simpulan_spm_kab_keslansia_1_mutu',
        'cap_spm_kab_keshtn_1_akses',
        'simpulan_spm_kab_keshtn_1_akses',
        'cap_spm_kab_keshtn_1_mutu',
        'simpulan_spm_kab_keshtn_1_mutu',
        'cap_spm_kab_kesdm_1_akses',
        'simpulan_spm_kab_kesdm_1_akses',
        'cap_spm_kab_kesdm_1_mutu',
        'simpulan_spm_kab_kesdm_1_mutu',
        'cap_spm_kab_kesodgj_1_akses',
        'simpulan_spm_kab_kesodgj_1_akses',
        'cap_spm_kab_kesodgj_1_mutu',
        'simpulan_spm_kab_kesodgj_1_mutu',
        'cap_spm_kab_kestb_1_akses',
        'simpulan_spm_kab_kestb_1_akses',
        'cap_spm_kab_kestb_1_mutu',
        'simpulan_spm_kab_kestb_1_mutu',
        'cap_spm_kab_keshiv_1_akses',
        'simpulan_spm_kab_keshiv_1_akses',
        'cap_spm_kab_keshiv_1_mutu',
        'simpulan_spm_kab_keshiv_1_mutu',
        'cap_spm_prov_puam_1_akses',
        'simpulan_spm_prov_puam_1_akses',
        'cap_spm_prov_puam_1_mutu',
        'simpulan_spm_prov_puam_1_mutu',
        'cap_spm_prov_pual_1_akses',
        'simpulan_spm_prov_pual_1_akses',
        'cap_spm_prov_pual_1_mutu',
        'simpulan_spm_prov_pual_1_mutu',
        'cap_spm_kab_puam_1_akses',
        'simpulan_spm_kab_puam_1_akses',
        'cap_spm_kab_puam_1_mutu',
        'simpulan_spm_kab_puam_1_mutu',
        'cap_spm_kab_pual_1_akses',
        'simpulan_spm_kab_pual_1_akses',
        'cap_spm_kab_pual_1_mutu',
        'simpulan_spm_kab_pual_1_mutu',
        'cap_spm_prov_prrehab_1_akses',
        'simpulan_spm_prov_prrehab_1_akses',
        'cap_spm_prov_prrehab_1_mutu',
        'simpulan_spm_prov_prrehab_1_mutu',
        'cap_spm_prov_prrelok_1_akses',
        'simpulan_spm_prov_prrelok_1_akses',
        'cap_spm_prov_prrelok_1_mutu',
        'simpulan_spm_prov_prrelok_1_mutu',
        'cap_spm_kab_prrehab_1_akses',
        'simpulan_spm_kab_prrehab_1_akses',
        'cap_spm_kab_prrehab_1_mutu',
        'simpulan_spm_kab_prrehab_1_mutu',
        'cap_spm_kab_prrelok_1_akses',
        'simpulan_spm_kab_prrelok_1_akses',
        'cap_spm_kab_prrelok_1_mutu',
        'simpulan_spm_kab_prrelok_1_mutu'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MonitoringPp::class;
    }
}
