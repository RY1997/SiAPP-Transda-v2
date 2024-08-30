<!-- Tahun Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('tahun', 'Tahun') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('tahun', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'disabled']) !!}
</div>

<!-- Nama Pemda Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('nama_pemda', 'Nama Pemda') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::text('nama_pemda', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'disabled']) !!}
</div>

<!-- Evaluasi Upp 1 Penerima Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('evaluasi_upp_1', 'Rerata Hasil Evaluasi UPP menurut Pedoman Permenpan RB Nomor 38 Tahun 2012') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('evaluasi_upp_1', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Evaluasi Upp 2 Penerima Field -->
<div class="form-group col-sm-3 mb-3">
    {!! Form::label('evaluasi_upp_2', 'Rerata Hasil Evaluasi UPP menurut Pedoman Menpan RB Nomor 3 Tahun 2023') !!}
</div>
<div class="form-group col-sm-9 mb-3">
    {!! Form::number('evaluasi_upp_2', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<div class="col-sm-12 mb-3">
    <h5>Rerata Hasil Evaluasi UPP menurut Pedoman Permendagri Nomor 59 Tahun 2021</h5>
</div>

<div class="form-group col-sm-12 mb-3">
    {!! Form::label('pendidikan1', 'Penerima Layanan Dasar Pendidikan') !!}
</div>
<div class="form-group col-sm-12 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiCapaian" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th width="100">Jenis Pelayanan Dasar</th>
                    <th width="200">Indikator</th>
                    <th width="100">Target</th>
                    <th width="150">Capaian</th>
                    <th width="200">Simpulan</th>
                </tr>
            </thead>
            <tbody>
                @if (str_contains($monitoringPp->nama_pemda, 'Provinsi'))
                <tr>
                    <td rowspan="2">Pendidikan Menengah</td>
                    <td>Jumlah Warga Negara usia 16-18 tahun yang berpartisipasi</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_prov_dikmen_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_prov_dikmen_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Rata-rata kemampuan literasi dan numerasi siswa berdasarkan hasil Asesmen Nasional</td>
                    <td>Meningkat dari hasil dua tahun sebelumnya</td>
                    <td>{!! Form::number('cap_spm_prov_dikmen_2_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_prov_dikmen_2_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td rowspan="2">Pendidikan Khusus</td>
                    <td>Jumlah Warga Negara usia 4-18 tahun yang termasuk dalam penduduk dalam penduduk disabilitas yang berpartisipasi dalam pendidikan khusus</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_prov_diksus_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_prov_diksus_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Rata-rata kemampuan literasi dan numerasi siswa berdasarkan hasil Asesmen Nasional</td>
                    <td>Meningkat dari hasil dua tahun sebelumnya</td>
                    <td>{!! Form::number('cap_spm_prov_diksus_2_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_prov_diksus_2_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                @else
                <tr>
                    <td rowspan="2">Pendidikan Dasar</td>
                    <td>Jumlah Warga Negara usia 7-15 tahun yang berpartisipasi dalam pendidikan dasar</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_kab_dikdas_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_dikdas_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Rata-rata kemampuan literasi dan numerasi siswa berdasarkan hasil Asesmen Nasional</td>
                    <td>Meningkat dari hasil dua tahun sebelumnya</td>
                    <td>{!! Form::number('cap_spm_kab_dikdas_2_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_dikdas_2_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td rowspan="2">Pendidikan Kesetaraan</td>
                    <td>Jumlah Warga Negara usia 7-18 tahun yang belum menyelesaikan pendidikan dasar dan atau menengah yang berpartisipasi dalam pendidikan kesetaraan</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_kab_dikset_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_dikset_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Rata-rata kemampuan literasi dan numerasi siswa berdasarkan hasil Asesmen Nasional</td>
                    <td>Meningkat dari hasil dua tahun sebelumnya</td>
                    <td>{!! Form::number('cap_spm_kab_dikset_2_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_dikset_2_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pendidikan Usia Dini</td>
                    <td>Jumlah Warga Negara usia 5-6 tahun yang berpartisipasi dalam pendidikan PAUD</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_kab_paud_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_paud_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

<div class="form-group col-sm-12 mb-3">
    {!! Form::label('pendidikan2', 'Mutu Minimal Layanan Dasar Pendidikan') !!}
</div>
<div class="form-group col-sm-12 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiCapaian" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th width="100">Jenis Pelayanan Dasar</th>
                    <th width="200">Indikator</th>
                    <th width="100">Target</th>
                    <th width="150">Capaian</th>
                    <th width="200">Simpulan</th>
                </tr>
            </thead>
            <tbody>
                @if (str_contains($monitoringPp->nama_pemda, 'Provinsi'))
                <tr>
                    <td>Pendidikan Menengah</td>
                    <td>Jumlah barang, jasa dan sumber daya manusia</td>
                    <td>100% (sesuai dengan jumlah anak usia 16-18 tahun yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_prov_dikmen_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_prov_dikmen_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pendidikan Khusus</td>
                    <td>Jumlah barang, jasa dan sumber daya manusia</td>
                    <td>100% (sesuai dengan jumlah anak usia 4-18 tahun yang termasuk dalan penduduk disabilitas yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_kab_dikdas_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_dikdas_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                @else
                <tr>
                    <td>Pendidikan Dasar</td>
                    <td>Jumlah barang, jasa dan sumber daya manusia</td>
                    <td>100% (sesuai dengan jumlah anak usia 4-18 tahun yang termasuk dalan penduduk disabilitas yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_prov_diksus_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_prov_diksus_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pendidikan Kesetaraan</td>
                    <td>Jumlah barang, jasa dan sumber daya manusia</td>
                    <td>100% (sesuai dengan jumlah anak usia 4-18 tahun yang termasuk dalan penduduk disabilitas yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_kab_dikset_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_dikset_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pendidikan Usia Dini</td>
                    <td>Jumlah barang, jasa dan sumber daya manusia</td>
                    <td>100% (sesuai dengan jumlah anak usia 4-18 tahun yang termasuk dalan penduduk disabilitas yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_kab_paud_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_paud_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

<div class="form-group col-sm-12 mb-3">
    {!! Form::label('kesehatan1', 'Penerima Layanan Dasar Kesehatan') !!}
</div>
<div class="form-group col-sm-12 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiCapaian" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th width="100">Jenis Pelayanan Dasar</th>
                    <th width="200">Indikator</th>
                    <th width="100">Target</th>
                    <th width="150">Capaian</th>
                    <th width="200">Simpulan</th>
                </tr>
            </thead>
            <tbody>
                @if (str_contains($monitoringPp->nama_pemda, 'Provinsi'))
                <tr>
                    <td>Pelayanan kesehatan bagi penduduk terdampak krisis kesehatan akibat bencana dan/atau berpotensi bencana provinsi</td>
                    <td>Jumlah penduduk yang terdampak krisis kesehatan akibat bencana dan/atau berpotensi bencana provinsi yang mendapatkan pelayanan kesehatan</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_prov_kesben_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_prov_kesben_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan kesehatan bagi penduduk pada kondisi kejadian luar biasa provinsi</td>
                    <td>Jumlah penduduk pada kondisi kejadian luar biasa provinsi yang mendapatkan pelayanan kesehatan</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_prov_kesklb_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_prov_kesklb_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                @else
                <tr>
                    <td>Pelayanan kesehatan ibu hamil</td>
                    <td>Jumlah ibu hamil yang mendapatkan layanan kesehatan</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_kab_kesbumil_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_kesbumil_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan kesehatan ibu bersalin</td>
                    <td>Jumlah ibu bersalin yang mendapatkan layanan kesehatan</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_kab_kesbulin_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_kesbulin_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan kesehatan bayi baru lahir</td>
                    <td>Jumlah bayi baru lahir yang mendapatkan layanan kesehatan</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_kab_kesbbl_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_kesbbl_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan kesehatan balita</td>
                    <td>Jumlah Balita yang mendapatkan layanan kesehatan</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_kab_kesblt_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_kesblt_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan kesehatan pada usia pendidikan dasar</td>
                    <td>Jumlah Warga negara usia pendidikan dasar yang mendapat layanan kesehatan</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_kab_kesdikdas_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_kesdikdas_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan kesehatan pada usia produktif</td>
                    <td>Jumlah warga negara usia produktif yang mendapatkan layanan kesehatan</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_kab_kesuprod_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_kesuprod_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan kesehatan pada usia lanjut</td>
                    <td>Jumlah Warga Negara usia lanjut yang mendapatkan layanan kesehatan</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_kab_keslansia_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_keslansia_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan kesehatan penderita hipertensi</td>
                    <td>Jumlah Warga Negara penderita hipertensi yang mendapatkan layanan kesehatan</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_kab_keshtn_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_keshtn_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan Kesehatan Penderita Diabetes Melitus</td>
                    <td>Jumlah Warga Negara Penderita Diabetes Melitus usia 15 tahun keatas yang mendapatkan layanan kesehatan</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_kab_kesdm_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_kesdm_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan Kesehatan Orang Dengan Gangguan Jiwa Berat</td>
                    <td>Jumlah Warga Negara Dengan Gangguan Jiwa Berat yang terlayani Kesehatan</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_kab_kesodgj_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_kesodgj_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan Kesehatan Orang Terduga Tuberkulosis</td>
                    <td>Jumlah Warga Negara terduga tubercolusis yang mendapatkan layanan kesehatan</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_kab_kestb_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_kestb_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan Kesehatan Orang Dengan Risiko Terinfeksi Virus yang Melemahkan Daya Tahan Tubuh Manusia (Human Immunodeficiency Virus)</td>
                    <td>Jumlah Warga Negara Dengan Risiko terinfeksi virus yang melemahkan daya tahan tubuh (Human Immunodeficiency Virus) yang mendapatkan Layanan Kesehatan</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_kab_keshiv_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_keshiv_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

<div class="form-group col-sm-12 mb-3">
    {!! Form::label('kesehatan2', 'Mutu Minimal Layanan Dasar Kesehatan') !!}
</div>
<div class="form-group col-sm-12 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiCapaian" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th width="100">Jenis Pelayanan Dasar</th>
                    <th width="200">Indikator</th>
                    <th width="100">Target</th>
                    <th width="150">Capaian</th>
                    <th width="200">Simpulan</th>
                </tr>
            </thead>
            <tbody>
                @if (str_contains($monitoringPp->nama_pemda, 'Provinsi'))
                <tr>
                    <td>Pelayanan kesehatan bagi penduduk terdampak krisis kesehatan akibat bencana dan/atau berpotensi bencana provinsi</td>
                    <td>Jumlah barang dan/atau jasa, sumber daya manusia dan tata cara pemenuhan</td>
                    <td>100% (sesuai dengan Jumlah penduduk yang terdampak krisis kesehatan akibat bencana dan/atau berpotensi bencana provinsi yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_prov_kesben_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_prov_kesben_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan kesehatan bagi penduduk pada kondisi kejadian luar biasa provinsi</td>
                    <td>Jumlah barang dan/atau jasa, sumber daya manusia dan tata cara pemenuhan</td>
                    <td>100% (sesuai dengan Jumlah penduduk yang terdampak dan berisiko pada kondisi KLB yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_prov_kesklb_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_prov_kesklb_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                @else
                <tr>
                    <td>Pelayanan kesehatan ibu hamil</td>
                    <td>Jumlah barang dan/atau jasa, sumber daya manusia dan tata cara pemenuhan</td>
                    <td>100% (sesuai dengan Jumlah ibu hamil yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_kab_kesbumil_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_kesbumil_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan kesehatan ibu bersalin</td>
                    <td>Jumlah barang dan/atau jasa, sumber daya manusia dan tata cara pemenuhan</td>
                    <td>100% (sesuai dengan Jumlah ibu bersalin yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_kab_kesbulin_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_kesbulin_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan kesehatan bayi baru lahir</td>
                    <td>Jumlah barang dan/atau jasa, sumber daya manusia dan tata cara pemenuhan</td>
                    <td>100% (sesuai dengan Jumlah bayi baru lahir yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_kab_kesbbl_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_kesbbl_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan kesehatan balita</td>
                    <td>Jumlah barang dan/atau jasa, sumber daya manusia dan tata cara pemenuhan</td>
                    <td>100% (sesuai dengan Jumlah balita yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_kab_kesblt_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_kesblt_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan kesehatan pada usia pendidikan dasar</td>
                    <td>Jumlah barang dan/atau jasa, sumber daya manusia dan tata cara pemenuhan</td>
                    <td>100% (sesuai dengan Jumlah anak usia pendidikan dasar yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_kab_kesdikdas_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_kesdikdas_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan kesehatan pada usia produktif</td>
                    <td>Jumlah barang dan/atau jasa, sumber daya manusia dan tata cara pemenuhan</td>
                    <td>100% (sesuai dengan Jumlah warga negara usia produktif yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_kab_kesuprod_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_kesuprod_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan kesehatan pada usia lanjut</td>
                    <td>Jumlah barang dan/atau jasa, sumber daya manusia dan tata cara pemenuhan</td>
                    <td>100% (sesuai dengan Jumlah Warga Negara usia lanjut yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_kab_keslansia_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_keslansia_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan kesehatan penderita hipertensi</td>
                    <td>Jumlah barang dan/atau jasa, sumber daya manusia dan tata cara pemenuhan</td>
                    <td>100% (sesuai dengan Jumlah Warga Negara penderita hipertensi yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_kab_keshtn_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_keshtn_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan Kesehatan Penderita Diabetes Melitus</td>
                    <td>Jumlah barang dan/atau jasa, sumber daya manusia dan tata cara pemenuhan</td>
                    <td>100% (sesuai dengan Jumlah Warga Negara Penderita Diabetes Melitus usia 15 tahun keatas yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_kab_kesdm_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_kesdm_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan Kesehatan Orang Dengan Gangguan Jiwa Berat</td>
                    <td>Jumlah barang dan/atau jasa, sumber daya manusia dan tata cara pemenuhan</td>
                    <td>100% (sesuai dengan Jumlah Warga Negara Dengan Gangguan Jiwa Berat yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_kab_kesodgj_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_kesodgj_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan Kesehatan Orang Terduga Tuberkulosis</td>
                    <td>Jumlah barang dan/atau jasa, sumber daya manusia dan tata cara pemenuhan</td>
                    <td>100% (sesuai dengan Jumlah Warga Negara terduga tubercolusis yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_kab_kestb_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_kestb_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Pelayanan Kesehatan Orang Dengan Risiko Terinfeksi Virus yang Melemahkan Daya Tahan Tubuh Manusia (Human Immunodeficiency Virus)</td>
                    <td>Jumlah barang dan/atau jasa, sumber daya manusia dan tata cara pemenuhan</td>
                    <td>100% (sesuai dengan Jumlah Warga Negara Dengan Risiko terinfeksi virus yang melemahkan daya tahan tubuh (Human Immunodeficiency Virus) yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_kab_keshiv_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_keshiv_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

<div class="form-group col-sm-12 mb-3">
    {!! Form::label('pu1', 'Penerima Layanan Dasar Pekerjaan Umum') !!}
</div>
<div class="form-group col-sm-12 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiCapaian" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th width="100">Jenis Pelayanan Dasar</th>
                    <th width="200">Indikator</th>
                    <th width="100">Target</th>
                    <th width="150">Capaian</th>
                    <th width="200">Simpulan</th>
                </tr>
            </thead>
            <tbody>
                @if (str_contains($monitoringPp->nama_pemda, 'Provinsi'))
                <tr>
                    <td>Pemenuhan kebutuhan air minum curah lintas kabupaten/kota</td>
                    <td>Jumlah Warga Negara yang memperoleh kebutuhan air minum curah lintas kabupaten/kota</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_prov_puam_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_prov_puam_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Penyediaan pelayanan pengolahan air limbah domestik regional lintas kabupaten/kota</td>
                    <td>Jumlah Warga Negara yang memperoleh layanan pengadaan air limbah domestik regional lintas kabupaten/kota</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_prov_pual_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_prov_pual_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                @else
                <tr>
                    <td>Penyediaan kebutuhan pokok air minum sehari-hari</td>
                    <td>Jumlah Warga Negara yang memperoleh kebutuhan pokok air minum sehari-hari</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_kab_puam_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_puam_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Penyediaan pelayanan pengolahan air limbah domestik</td>
                    <td>Jumlah Warga Negara yang memperoleh layanan pengolahan air limbah domestik</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_kab_pual_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_pual_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

<div class="form-group col-sm-12 mb-3">
    {!! Form::label('pu2', 'Mutu Minimal Layanan Dasar Pekerjaan Umum') !!}
</div>
<div class="form-group col-sm-12 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiCapaian" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th width="100">Jenis Pelayanan Dasar</th>
                    <th width="200">Indikator</th>
                    <th width="100">Target</th>
                    <th width="150">Capaian</th>
                    <th width="200">Simpulan</th>
                </tr>
            </thead>
            <tbody>
                @if (str_contains($monitoringPp->nama_pemda, 'Provinsi'))
                <tr>
                    <td>Pemenuhan kebutuhan air minum curah lintas kabupaten/kota</td>
                    <td>Jumlah barang dan jasa</td>
                    <td>100% (sesuai dengan Jumlah Warga Negara yang memperoleh kebutuhan air minum curah yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_prov_puam_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_prov_puam_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Penyediaan pelayanan pengolahan air limbah domestik regional lintas kabupaten/kota</td>
                    <td>Jumlah barang dan jasa</td>
                    <td>100% (sesuai dengan Jumlah Warga Negara yang memperoleh layanan pengadaan air limbah domestik regional yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_prov_pual_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_prov_pual_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                @else
                <tr>
                    <td>Penyediaan kebutuhan pokok air minum sehari-hari</td>
                    <td>Jumlah barang dan jasa</td>
                    <td>100% (sesuai dengan Jumlah Warga Negara yang memperoleh kebutuhan pokok air minum sehari-hari yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_kab_puam_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_puam_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Penyediaan pelayanan pengolahan air limbah domestik</td>
                    <td>Jumlah barang dan jasa</td>
                    <td>100% (sesuai dengan Jumlah Warga Negara yang memperoleh layanan pengolahan air limbah domestik yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_kab_pual_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_pual_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

<div class="form-group col-sm-12 mb-3">
    {!! Form::label('pr1', 'Penerima Layanan Dasar Perumahan Rakyat') !!}
</div>
<div class="form-group col-sm-12 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiCapaian" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th width="100">Jenis Pelayanan Dasar</th>
                    <th width="200">Indikator</th>
                    <th width="100">Target</th>
                    <th width="150">Capaian</th>
                    <th width="200">Simpulan</th>
                </tr>
            </thead>
            <tbody>
                @if (str_contains($monitoringPp->nama_pemda, 'Provinsi'))
                <tr>
                    <td>Penyediaan dan rehabilitasi rumah yang layak huni bagi korban bencana provinsi</td>
                    <td>Jumlah Warga Negara korban bencana yang memperoleh rumah layak huni</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_prov_prrehab_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_prov_prrehab_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Fasilitasi penyediaan rumah yang layak huni bagi masyarakat yang terkena relokasi program Pemerintah Daerah Provinsi</td>
                    <td>Jumlah Warga Negara yang terkena relokasi program Pemerintah Daerah Provinsi yang memperoleh fasilitasi penyediaan rumah yang layak huni</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_prov_prrelok_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_prov_prrelok_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                @else
                <tr>
                    <td>Penyediaan dan rehabilitasi rumah yang layak huni bagi korban bencana kabupaten/kota</td>
                    <td>Jumlah Warga Negara korban bencana yang memperoleh rumah layak huni</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_kab_prrehab_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_prrehab_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Fasilitasi penyediaan rumah yang layak huni bagi masyarakat yang terkena relokasi program Pemerintah Daerah kabupaten/kota</td>
                    <td>Jumlah Warga Negara yang terkena relokasi program Pemerintah Daerah Provinsi yang memperoleh fasilitasi penyediaan rumah yang layak huni</td>
                    <td>100%</td>
                    <td>{!! Form::number('cap_spm_kab_prrelok_1_akses', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_prrelok_1_akses', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

<div class="form-group col-sm-12 mb-3">
    {!! Form::label('pr2', 'Mutu Minimal Layanan Dasar Perumahan Rakyat') !!}
</div>
<div class="form-group col-sm-12 mb-3">
    <div class="table-responsive card mb-0">
        <table id="realisasiCapaian" class="table text-center m-0">
            <thead class="thead-light">
                <tr>
                    <th width="100">Jenis Pelayanan Dasar</th>
                    <th width="200">Indikator</th>
                    <th width="100">Target</th>
                    <th width="150">Capaian</th>
                    <th width="200">Simpulan</th>
                </tr>
            </thead>
            <tbody>
                @if (str_contains($monitoringPp->nama_pemda, 'Provinsi'))
                <tr>
                    <td>Penyediaan dan rehabilitasi rumah yang layak huni bagi korban bencana provinsi</td>
                    <td>Jumlah barang dan jasa</td>
                    <td>100% (sesuai dengan Jumlah Warga Negara korban bencana yang memperoleh rumah layak huni yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_prov_prrehab_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_prov_prrehab_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Fasilitasi penyediaan rumah yang layak huni bagi masyarakat yang terkena relokasi program Pemerintah Daerah Provinsi</td>
                    <td>Jumlah barang dan jasa</td>
                    <td>100% (sesuai denganJumlah Warga Negara yang terkena relokasi program Pemerintah Daerah Provinsi yang memperoleh fasilitasi penyediaan rumah yang layak huni yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_prov_prrelok_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_prov_prrelok_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                @else
                <tr>
                    <td>Penyediaan dan rehabilitasi rumah yang layak huni bagi korban bencana kabupaten/kota</td>
                    <td>Jumlah barang dan jasa</td>
                    <td>100% (sesuai dengan Jumlah Warga Negara korban bencana yang memperoleh rumah layak huni yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_kab_prrehab_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_prrehab_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                <tr>
                    <td>Fasilitasi penyediaan rumah yang layak huni bagi masyarakat yang terkena relokasi program Pemerintah Daerah kabupaten/kota</td>
                    <td>Jumlah barang dan jasa</td>
                    <td>100% (sesuai dengan Jumlah Warga Negara yang terkena relokasi program Pemerintah Daerah Kabupaten/Kota yang memperoleh fasilitasi penyediaan rumah yang layak huni yang akan dipenuhi)</td>
                    <td>{!! Form::number('cap_spm_kab_prrelok_1_mutu', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::select('simpulan_spm_kab_prrelok_1_mutu', ['' => 'Pilih', 'Memenuhi' => 'Memenuhi', 'Tidak Memenuhi' => 'Tidak Memenuhi'], null, ['class' => 'form-control custom-select']) !!}</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>