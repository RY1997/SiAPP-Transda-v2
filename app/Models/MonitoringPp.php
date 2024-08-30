<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class MonitoringPp
 * @package App\Models
 * @version August 29, 2024, 11:02 pm WIB
 *
 * @property string $tahun
 * @property string $kode_pwk
 * @property string $nama_pemda
 * @property string $jenis_tkd
 * @property number $evaluasi_upp_1
 * @property number $evaluasi_upp_2
 * @property number $cap_spm_prov_dikmen_1_akses
 * @property number $simpulan_spm_prov_dikmen_1_akses
 * @property number $cap_spm_prov_dikmen_2_akses
 * @property number $simpulan_spm_prov_dikmen_2_akses
 * @property number $cap_spm_prov_dikmen_1_mutu
 * @property number $simpulan_spm_prov_dikmen_1_mutu
 * @property number $cap_spm_prov_diksus_1_akses
 * @property number $simpulan_spm_prov_diksus_1_akses
 * @property number $cap_spm_prov_diksus_2_akses
 * @property number $simpulan_spm_prov_diksus_2_akses
 * @property number $cap_spm_prov_diksus_1_mutu
 * @property number $simpulan_spm_prov_diksus_1_mutu
 * @property number $cap_spm_kab_dikdas_1_akses
 * @property string $simpulan_spm_kab_dikdas_1_akses
 * @property number $cap_spm_kab_dikdas_2_akses
 * @property string $simpulan_spm_kab_dikdas_2_akses
 * @property number $cap_spm_kab_dikdas_1_mutu
 * @property string $simpulan_spm_kab_dikdas_1_mutu
 * @property number $cap_spm_kab_dikset_1_akses
 * @property string $simpulan_spm_kab_dikset_1_akses
 * @property number $cap_spm_kab_dikset_2_akses
 * @property string $simpulan_spm_kab_dikset_2_akses
 * @property number $cap_spm_kab_dikset_1_mutu
 * @property string $simpulan_spm_kab_dikset_1_mutu
 * @property number $cap_spm_kab_paud_1_akses
 * @property string $simpulan_spm_kab_paud_1_akses
 * @property number $cap_spm_kab_paud_1_mutu
 * @property string $simpulan_spm_kab_paud_1_mutu
 * @property number $cap_spm_prov_kesben_1_akses
 * @property string $simpulan_spm_prov_kesben_1_akses
 * @property number $cap_spm_prov_kesben_1_mutu
 * @property string $simpulan_spm_prov_kesben_1_mutu
 * @property number $cap_spm_prov_kesklb_1_akses
 * @property string $simpulan_spm_prov_kesklb_1_akses
 * @property number $cap_spm_prov_kesklb_1_mutu
 * @property string $simpulan_spm_prov_kesklb_1_mutu
 * @property number $cap_spm_kab_kesbumil_1_akses
 * @property string $simpulan_spm_kab_kesbumil_1_akses
 * @property number $cap_spm_kab_kesbumil_1_mutu
 * @property string $simpulan_spm_kab_kesbumil_1_mutu
 * @property number $cap_spm_kab_kesbulin_1_akses
 * @property string $simpulan_spm_kab_kesbulin_1_akses
 * @property number $cap_spm_kab_kesbulin_1_mutu
 * @property string $simpulan_spm_kab_kesbulin_1_mutu
 * @property number $cap_spm_kab_kesbbl_1_akses
 * @property string $simpulan_spm_kab_kesbbl_1_akses
 * @property number $cap_spm_kab_kesbbl_1_mutu
 * @property string $simpulan_spm_kab_kesbbl_1_mutu
 * @property number $cap_spm_kab_kesblt_1_akses
 * @property string $simpulan_spm_kab_kesblt_1_akses
 * @property number $cap_spm_kab_kesblt_1_mutu
 * @property string $simpulan_spm_kab_kesblt_1_mutu
 * @property number $cap_spm_kab_kesdikdas_1_akses
 * @property string $simpulan_spm_kab_kesdikdas_1_akses
 * @property number $cap_spm_kab_kesdikdas_1_mutu
 * @property string $simpulan_spm_kab_kesdikdas_1_mutu
 * @property number $cap_spm_kab_kesuprod_1_akses
 * @property string $simpulan_spm_kab_kesuprod_1_akses
 * @property number $cap_spm_kab_kesuprod_1_mutu
 * @property string $simpulan_spm_kab_kesuprod_1_mutu
 * @property number $cap_spm_kab_keslansia_1_akses
 * @property string $simpulan_spm_kab_keslansia_1_akses
 * @property number $cap_spm_kab_keslansia_1_mutu
 * @property string $simpulan_spm_kab_keslansia_1_mutu
 * @property number $cap_spm_kab_keshtn_1_akses
 * @property string $simpulan_spm_kab_keshtn_1_akses
 * @property number $cap_spm_kab_keshtn_1_mutu
 * @property string $simpulan_spm_kab_keshtn_1_mutu
 * @property number $cap_spm_kab_kesdm_1_akses
 * @property string $simpulan_spm_kab_kesdm_1_akses
 * @property number $cap_spm_kab_kesdm_1_mutu
 * @property string $simpulan_spm_kab_kesdm_1_mutu
 * @property number $cap_spm_kab_kesodgj_1_akses
 * @property string $simpulan_spm_kab_kesodgj_1_akses
 * @property number $cap_spm_kab_kesodgj_1_mutu
 * @property string $simpulan_spm_kab_kesodgj_1_mutu
 * @property number $cap_spm_kab_kestb_1_akses
 * @property string $simpulan_spm_kab_kestb_1_akses
 * @property number $cap_spm_kab_kestb_1_mutu
 * @property string $simpulan_spm_kab_kestb_1_mutu
 * @property number $cap_spm_kab_keshiv_1_akses
 * @property string $simpulan_spm_kab_keshiv_1_akses
 * @property number $cap_spm_kab_keshiv_1_mutu
 * @property string $simpulan_spm_kab_keshiv_1_mutu
 * @property number $cap_spm_prov_puam_1_akses
 * @property string $simpulan_spm_prov_puam_1_akses
 * @property number $cap_spm_prov_puam_1_mutu
 * @property string $simpulan_spm_prov_puam_1_mutu
 * @property number $cap_spm_prov_pual_1_akses
 * @property string $simpulan_spm_prov_pual_1_akses
 * @property number $cap_spm_prov_pual_1_mutu
 * @property string $simpulan_spm_prov_pual_1_mutu
 * @property number $cap_spm_kab_puam_1_akses
 * @property string $simpulan_spm_kab_puam_1_akses
 * @property number $cap_spm_kab_puam_1_mutu
 * @property string $simpulan_spm_kab_puam_1_mutu
 * @property number $cap_spm_kab_pual_1_akses
 * @property string $simpulan_spm_kab_pual_1_akses
 * @property number $cap_spm_kab_pual_1_mutu
 * @property string $simpulan_spm_kab_pual_1_mutu
 * @property number $cap_spm_prov_prrehab_1_akses
 * @property string $simpulan_spm_prov_prrehab_1_akses
 * @property number $cap_spm_prov_prrehab_1_mutu
 * @property string $simpulan_spm_prov_prrehab_1_mutu
 * @property number $cap_spm_prov_prrelok_1_akses
 * @property string $simpulan_spm_prov_prrelok_1_akses
 * @property number $cap_spm_prov_prrelok_1_mutu
 * @property string $simpulan_spm_prov_prrelok_1_mutu
 * @property number $cap_spm_kab_prrehab_1_akses
 * @property string $simpulan_spm_kab_prrehab_1_akses
 * @property number $cap_spm_kab_prrehab_1_mutu
 * @property string $simpulan_spm_kab_prrehab_1_mutu
 * @property number $cap_spm_kab_prrelok_1_akses
 * @property string $simpulan_spm_kab_prrelok_1_akses
 * @property number $cap_spm_kab_prrelok_1_mutu
 * @property string $simpulan_spm_kab_prrelok_1_mutu
 */
class MonitoringPp extends Model
{

    use HasFactory;

    public $table = 'mon_pp';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tahun' => 'string',
        'kode_pwk' => 'string',
        'nama_pemda' => 'string',
        'jenis_tkd' => 'string',
        'evaluasi_upp_1' => 'decimal:2',
        'evaluasi_upp_2' => 'decimal:2',
        'cap_spm_prov_dikmen_1_akses' => 'decimal:2',
        'simpulan_spm_prov_dikmen_1_akses' => 'decimal:2',
        'cap_spm_prov_dikmen_2_akses' => 'decimal:2',
        'simpulan_spm_prov_dikmen_2_akses' => 'decimal:2',
        'cap_spm_prov_dikmen_1_mutu' => 'decimal:2',
        'simpulan_spm_prov_dikmen_1_mutu' => 'decimal:2',
        'cap_spm_prov_diksus_1_akses' => 'decimal:2',
        'simpulan_spm_prov_diksus_1_akses' => 'decimal:2',
        'cap_spm_prov_diksus_2_akses' => 'decimal:2',
        'simpulan_spm_prov_diksus_2_akses' => 'decimal:2',
        'cap_spm_prov_diksus_1_mutu' => 'decimal:2',
        'simpulan_spm_prov_diksus_1_mutu' => 'decimal:2',
        'cap_spm_kab_dikdas_1_akses' => 'decimal:2',
        'simpulan_spm_kab_dikdas_1_akses' => 'string',
        'cap_spm_kab_dikdas_2_akses' => 'decimal:2',
        'simpulan_spm_kab_dikdas_2_akses' => 'string',
        'cap_spm_kab_dikdas_1_mutu' => 'decimal:2',
        'simpulan_spm_kab_dikdas_1_mutu' => 'string',
        'cap_spm_kab_dikset_1_akses' => 'decimal:2',
        'simpulan_spm_kab_dikset_1_akses' => 'string',
        'cap_spm_kab_dikset_2_akses' => 'decimal:2',
        'simpulan_spm_kab_dikset_2_akses' => 'string',
        'cap_spm_kab_dikset_1_mutu' => 'decimal:2',
        'simpulan_spm_kab_dikset_1_mutu' => 'string',
        'cap_spm_kab_paud_1_akses' => 'decimal:2',
        'simpulan_spm_kab_paud_1_akses' => 'string',
        'cap_spm_kab_paud_1_mutu' => 'decimal:2',
        'simpulan_spm_kab_paud_1_mutu' => 'string',
        'cap_spm_prov_kesben_1_akses' => 'decimal:2',
        'simpulan_spm_prov_kesben_1_akses' => 'string',
        'cap_spm_prov_kesben_1_mutu' => 'decimal:2',
        'simpulan_spm_prov_kesben_1_mutu' => 'string',
        'cap_spm_prov_kesklb_1_akses' => 'decimal:2',
        'simpulan_spm_prov_kesklb_1_akses' => 'string',
        'cap_spm_prov_kesklb_1_mutu' => 'decimal:2',
        'simpulan_spm_prov_kesklb_1_mutu' => 'string',
        'cap_spm_kab_kesbumil_1_akses' => 'decimal:2',
        'simpulan_spm_kab_kesbumil_1_akses' => 'string',
        'cap_spm_kab_kesbumil_1_mutu' => 'decimal:2',
        'simpulan_spm_kab_kesbumil_1_mutu' => 'string',
        'cap_spm_kab_kesbulin_1_akses' => 'decimal:2',
        'simpulan_spm_kab_kesbulin_1_akses' => 'string',
        'cap_spm_kab_kesbulin_1_mutu' => 'decimal:2',
        'simpulan_spm_kab_kesbulin_1_mutu' => 'string',
        'cap_spm_kab_kesbbl_1_akses' => 'decimal:2',
        'simpulan_spm_kab_kesbbl_1_akses' => 'string',
        'cap_spm_kab_kesbbl_1_mutu' => 'decimal:2',
        'simpulan_spm_kab_kesbbl_1_mutu' => 'string',
        'cap_spm_kab_kesblt_1_akses' => 'decimal:2',
        'simpulan_spm_kab_kesblt_1_akses' => 'string',
        'cap_spm_kab_kesblt_1_mutu' => 'decimal:2',
        'simpulan_spm_kab_kesblt_1_mutu' => 'string',
        'cap_spm_kab_kesdikdas_1_akses' => 'decimal:2',
        'simpulan_spm_kab_kesdikdas_1_akses' => 'string',
        'cap_spm_kab_kesdikdas_1_mutu' => 'decimal:2',
        'simpulan_spm_kab_kesdikdas_1_mutu' => 'string',
        'cap_spm_kab_kesuprod_1_akses' => 'decimal:2',
        'simpulan_spm_kab_kesuprod_1_akses' => 'string',
        'cap_spm_kab_kesuprod_1_mutu' => 'decimal:2',
        'simpulan_spm_kab_kesuprod_1_mutu' => 'string',
        'cap_spm_kab_keslansia_1_akses' => 'decimal:2',
        'simpulan_spm_kab_keslansia_1_akses' => 'string',
        'cap_spm_kab_keslansia_1_mutu' => 'decimal:2',
        'simpulan_spm_kab_keslansia_1_mutu' => 'string',
        'cap_spm_kab_keshtn_1_akses' => 'decimal:2',
        'simpulan_spm_kab_keshtn_1_akses' => 'string',
        'cap_spm_kab_keshtn_1_mutu' => 'decimal:2',
        'simpulan_spm_kab_keshtn_1_mutu' => 'string',
        'cap_spm_kab_kesdm_1_akses' => 'decimal:2',
        'simpulan_spm_kab_kesdm_1_akses' => 'string',
        'cap_spm_kab_kesdm_1_mutu' => 'decimal:2',
        'simpulan_spm_kab_kesdm_1_mutu' => 'string',
        'cap_spm_kab_kesodgj_1_akses' => 'decimal:2',
        'simpulan_spm_kab_kesodgj_1_akses' => 'string',
        'cap_spm_kab_kesodgj_1_mutu' => 'decimal:2',
        'simpulan_spm_kab_kesodgj_1_mutu' => 'string',
        'cap_spm_kab_kestb_1_akses' => 'decimal:2',
        'simpulan_spm_kab_kestb_1_akses' => 'string',
        'cap_spm_kab_kestb_1_mutu' => 'decimal:2',
        'simpulan_spm_kab_kestb_1_mutu' => 'string',
        'cap_spm_kab_keshiv_1_akses' => 'decimal:2',
        'simpulan_spm_kab_keshiv_1_akses' => 'string',
        'cap_spm_kab_keshiv_1_mutu' => 'decimal:2',
        'simpulan_spm_kab_keshiv_1_mutu' => 'string',
        'cap_spm_prov_puam_1_akses' => 'decimal:2',
        'simpulan_spm_prov_puam_1_akses' => 'string',
        'cap_spm_prov_puam_1_mutu' => 'decimal:2',
        'simpulan_spm_prov_puam_1_mutu' => 'string',
        'cap_spm_prov_pual_1_akses' => 'decimal:2',
        'simpulan_spm_prov_pual_1_akses' => 'string',
        'cap_spm_prov_pual_1_mutu' => 'decimal:2',
        'simpulan_spm_prov_pual_1_mutu' => 'string',
        'cap_spm_kab_puam_1_akses' => 'decimal:2',
        'simpulan_spm_kab_puam_1_akses' => 'string',
        'cap_spm_kab_puam_1_mutu' => 'decimal:2',
        'simpulan_spm_kab_puam_1_mutu' => 'string',
        'cap_spm_kab_pual_1_akses' => 'decimal:2',
        'simpulan_spm_kab_pual_1_akses' => 'string',
        'cap_spm_kab_pual_1_mutu' => 'decimal:2',
        'simpulan_spm_kab_pual_1_mutu' => 'string',
        'cap_spm_prov_prrehab_1_akses' => 'decimal:2',
        'simpulan_spm_prov_prrehab_1_akses' => 'string',
        'cap_spm_prov_prrehab_1_mutu' => 'decimal:2',
        'simpulan_spm_prov_prrehab_1_mutu' => 'string',
        'cap_spm_prov_prrelok_1_akses' => 'decimal:2',
        'simpulan_spm_prov_prrelok_1_akses' => 'string',
        'cap_spm_prov_prrelok_1_mutu' => 'decimal:2',
        'simpulan_spm_prov_prrelok_1_mutu' => 'string',
        'cap_spm_kab_prrehab_1_akses' => 'decimal:2',
        'simpulan_spm_kab_prrehab_1_akses' => 'string',
        'cap_spm_kab_prrehab_1_mutu' => 'decimal:2',
        'simpulan_spm_kab_prrehab_1_mutu' => 'string',
        'cap_spm_kab_prrelok_1_akses' => 'decimal:2',
        'simpulan_spm_kab_prrelok_1_akses' => 'string',
        'cap_spm_kab_prrelok_1_mutu' => 'decimal:2',
        'simpulan_spm_kab_prrelok_1_mutu' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tahun' => 'required|string|max:255',
        'kode_pwk' => 'nullable|string|max:255',
        'nama_pemda' => 'required|string|max:255',
        'jenis_tkd' => 'nullable|string|max:255',
        'evaluasi_upp_1' => 'required|numeric',
        'evaluasi_upp_2' => 'required|numeric',
        'cap_spm_prov_dikmen_1_akses' => 'required|numeric',
        'simpulan_spm_prov_dikmen_1_akses' => 'required|numeric',
        'cap_spm_prov_dikmen_2_akses' => 'required|numeric',
        'simpulan_spm_prov_dikmen_2_akses' => 'required|numeric',
        'cap_spm_prov_dikmen_1_mutu' => 'required|numeric',
        'simpulan_spm_prov_dikmen_1_mutu' => 'required|numeric',
        'cap_spm_prov_diksus_1_akses' => 'required|numeric',
        'simpulan_spm_prov_diksus_1_akses' => 'required|numeric',
        'cap_spm_prov_diksus_2_akses' => 'required|numeric',
        'simpulan_spm_prov_diksus_2_akses' => 'required|numeric',
        'cap_spm_prov_diksus_1_mutu' => 'required|numeric',
        'simpulan_spm_prov_diksus_1_mutu' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'cap_spm_kab_dikdas_1_akses' => 'nullable|numeric',
        'simpulan_spm_kab_dikdas_1_akses' => 'nullable|string|max:255',
        'cap_spm_kab_dikdas_2_akses' => 'nullable|numeric',
        'simpulan_spm_kab_dikdas_2_akses' => 'nullable|string|max:255',
        'cap_spm_kab_dikdas_1_mutu' => 'nullable|numeric',
        'simpulan_spm_kab_dikdas_1_mutu' => 'nullable|string|max:255',
        'cap_spm_kab_dikset_1_akses' => 'nullable|numeric',
        'simpulan_spm_kab_dikset_1_akses' => 'nullable|string|max:255',
        'cap_spm_kab_dikset_2_akses' => 'nullable|numeric',
        'simpulan_spm_kab_dikset_2_akses' => 'nullable|string|max:255',
        'cap_spm_kab_dikset_1_mutu' => 'nullable|numeric',
        'simpulan_spm_kab_dikset_1_mutu' => 'nullable|string|max:255',
        'cap_spm_kab_paud_1_akses' => 'nullable|numeric',
        'simpulan_spm_kab_paud_1_akses' => 'nullable|string|max:255',
        'cap_spm_kab_paud_1_mutu' => 'nullable|numeric',
        'simpulan_spm_kab_paud_1_mutu' => 'nullable|string|max:255',
        'cap_spm_prov_kesben_1_akses' => 'nullable|numeric',
        'simpulan_spm_prov_kesben_1_akses' => 'nullable|string|max:255',
        'cap_spm_prov_kesben_1_mutu' => 'nullable|numeric',
        'simpulan_spm_prov_kesben_1_mutu' => 'nullable|string|max:255',
        'cap_spm_prov_kesklb_1_akses' => 'nullable|numeric',
        'simpulan_spm_prov_kesklb_1_akses' => 'nullable|string|max:255',
        'cap_spm_prov_kesklb_1_mutu' => 'nullable|numeric',
        'simpulan_spm_prov_kesklb_1_mutu' => 'nullable|string|max:255',
        'cap_spm_kab_kesbumil_1_akses' => 'nullable|numeric',
        'simpulan_spm_kab_kesbumil_1_akses' => 'nullable|string|max:255',
        'cap_spm_kab_kesbumil_1_mutu' => 'nullable|numeric',
        'simpulan_spm_kab_kesbumil_1_mutu' => 'nullable|string|max:255',
        'cap_spm_kab_kesbulin_1_akses' => 'nullable|numeric',
        'simpulan_spm_kab_kesbulin_1_akses' => 'nullable|string|max:255',
        'cap_spm_kab_kesbulin_1_mutu' => 'nullable|numeric',
        'simpulan_spm_kab_kesbulin_1_mutu' => 'nullable|string|max:255',
        'cap_spm_kab_kesbbl_1_akses' => 'nullable|numeric',
        'simpulan_spm_kab_kesbbl_1_akses' => 'nullable|string|max:255',
        'cap_spm_kab_kesbbl_1_mutu' => 'nullable|numeric',
        'simpulan_spm_kab_kesbbl_1_mutu' => 'nullable|string|max:255',
        'cap_spm_kab_kesblt_1_akses' => 'nullable|numeric',
        'simpulan_spm_kab_kesblt_1_akses' => 'nullable|string|max:255',
        'cap_spm_kab_kesblt_1_mutu' => 'nullable|numeric',
        'simpulan_spm_kab_kesblt_1_mutu' => 'nullable|string|max:255',
        'cap_spm_kab_kesdikdas_1_akses' => 'nullable|numeric',
        'simpulan_spm_kab_kesdikdas_1_akses' => 'nullable|string|max:255',
        'cap_spm_kab_kesdikdas_1_mutu' => 'nullable|numeric',
        'simpulan_spm_kab_kesdikdas_1_mutu' => 'nullable|string|max:255',
        'cap_spm_kab_kesuprod_1_akses' => 'nullable|numeric',
        'simpulan_spm_kab_kesuprod_1_akses' => 'nullable|string|max:255',
        'cap_spm_kab_kesuprod_1_mutu' => 'nullable|numeric',
        'simpulan_spm_kab_kesuprod_1_mutu' => 'nullable|string|max:255',
        'cap_spm_kab_keslansia_1_akses' => 'nullable|numeric',
        'simpulan_spm_kab_keslansia_1_akses' => 'nullable|string|max:255',
        'cap_spm_kab_keslansia_1_mutu' => 'nullable|numeric',
        'simpulan_spm_kab_keslansia_1_mutu' => 'nullable|string|max:255',
        'cap_spm_kab_keshtn_1_akses' => 'nullable|numeric',
        'simpulan_spm_kab_keshtn_1_akses' => 'nullable|string|max:255',
        'cap_spm_kab_keshtn_1_mutu' => 'nullable|numeric',
        'simpulan_spm_kab_keshtn_1_mutu' => 'nullable|string|max:255',
        'cap_spm_kab_kesdm_1_akses' => 'nullable|numeric',
        'simpulan_spm_kab_kesdm_1_akses' => 'nullable|string|max:255',
        'cap_spm_kab_kesdm_1_mutu' => 'nullable|numeric',
        'simpulan_spm_kab_kesdm_1_mutu' => 'nullable|string|max:255',
        'cap_spm_kab_kesodgj_1_akses' => 'nullable|numeric',
        'simpulan_spm_kab_kesodgj_1_akses' => 'nullable|string|max:255',
        'cap_spm_kab_kesodgj_1_mutu' => 'nullable|numeric',
        'simpulan_spm_kab_kesodgj_1_mutu' => 'nullable|string|max:255',
        'cap_spm_kab_kestb_1_akses' => 'nullable|numeric',
        'simpulan_spm_kab_kestb_1_akses' => 'nullable|string|max:255',
        'cap_spm_kab_kestb_1_mutu' => 'nullable|numeric',
        'simpulan_spm_kab_kestb_1_mutu' => 'nullable|string|max:255',
        'cap_spm_kab_keshiv_1_akses' => 'nullable|numeric',
        'simpulan_spm_kab_keshiv_1_akses' => 'nullable|string|max:255',
        'cap_spm_kab_keshiv_1_mutu' => 'nullable|numeric',
        'simpulan_spm_kab_keshiv_1_mutu' => 'nullable|string|max:255',
        'cap_spm_prov_puam_1_akses' => 'nullable|numeric',
        'simpulan_spm_prov_puam_1_akses' => 'nullable|string|max:255',
        'cap_spm_prov_puam_1_mutu' => 'nullable|numeric',
        'simpulan_spm_prov_puam_1_mutu' => 'nullable|string|max:255',
        'cap_spm_prov_pual_1_akses' => 'nullable|numeric',
        'simpulan_spm_prov_pual_1_akses' => 'nullable|string|max:255',
        'cap_spm_prov_pual_1_mutu' => 'nullable|numeric',
        'simpulan_spm_prov_pual_1_mutu' => 'nullable|string|max:255',
        'cap_spm_kab_puam_1_akses' => 'nullable|numeric',
        'simpulan_spm_kab_puam_1_akses' => 'nullable|string|max:255',
        'cap_spm_kab_puam_1_mutu' => 'nullable|numeric',
        'simpulan_spm_kab_puam_1_mutu' => 'nullable|string|max:255',
        'cap_spm_kab_pual_1_akses' => 'nullable|numeric',
        'simpulan_spm_kab_pual_1_akses' => 'nullable|string|max:255',
        'cap_spm_kab_pual_1_mutu' => 'nullable|numeric',
        'simpulan_spm_kab_pual_1_mutu' => 'nullable|string|max:255',
        'cap_spm_prov_prrehab_1_akses' => 'nullable|numeric',
        'simpulan_spm_prov_prrehab_1_akses' => 'nullable|string|max:255',
        'cap_spm_prov_prrehab_1_mutu' => 'nullable|numeric',
        'simpulan_spm_prov_prrehab_1_mutu' => 'nullable|string|max:255',
        'cap_spm_prov_prrelok_1_akses' => 'nullable|numeric',
        'simpulan_spm_prov_prrelok_1_akses' => 'nullable|string|max:255',
        'cap_spm_prov_prrelok_1_mutu' => 'nullable|numeric',
        'simpulan_spm_prov_prrelok_1_mutu' => 'nullable|string|max:255',
        'cap_spm_kab_prrehab_1_akses' => 'nullable|numeric',
        'simpulan_spm_kab_prrehab_1_akses' => 'nullable|string|max:255',
        'cap_spm_kab_prrehab_1_mutu' => 'nullable|numeric',
        'simpulan_spm_kab_prrehab_1_mutu' => 'nullable|string|max:255',
        'cap_spm_kab_prrelok_1_akses' => 'nullable|numeric',
        'simpulan_spm_kab_prrelok_1_akses' => 'nullable|string|max:255',
        'cap_spm_kab_prrelok_1_mutu' => 'nullable|numeric',
        'simpulan_spm_kab_prrelok_1_mutu' => 'nullable|string|max:255'
    ];

    
}
