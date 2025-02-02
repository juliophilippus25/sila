@extends('layouts.app')

@section('title', 'Dashboard')

@section('head')
    <!-- BS Stepper -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/bs-stepper/css/bs-stepper.min.css') }}">
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Akta Perkawinan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Akta Perkawinan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Form Akta Perkawinan</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="bs-stepper">
                            <div class="bs-stepper-header" role="tablist">
                                {{-- Data Suami --}}
                                <div class="step" data-target="#data-suami">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="data-suami"
                                        id="data-suami-trigger">
                                        <span class="bs-stepper-circle">1</span>
                                        <span class="bs-stepper-label">Data Suami</span>
                                    </button>
                                </div>

                                {{-- Data Ayah dari Suami --}}
                                <div class="line"></div>
                                <div class="step" data-target="#data-ayah-dari-suami">
                                    <button type="button" class="step-trigger" role="tab"
                                        aria-controls="data-ayah-dari-suami" id="data-ayah-dari-suami-trigger">
                                        <span class="bs-stepper-circle">2</span>
                                        <span class="bs-stepper-label">Data Ayah dari Suami</span>
                                    </button>
                                </div>

                                {{-- Data Ibu dari Suami --}}
                                <div class="line"></div>
                                <div class="step" data-target="#data-ibu-dari-suami">
                                    <button type="button" class="step-trigger" role="tab"
                                        aria-controls="data-ibu-dari-suami" id="data-ibu-dari-suami-trigger">
                                        <span class="bs-stepper-circle">3</span>
                                        <span class="bs-stepper-label">Data Ibu dari Suami</span>
                                    </button>
                                </div>

                                {{-- Data Istri --}}
                                <div class="line"></div>
                                <div class="step" data-target="#data-istri">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="data-istri"
                                        id="data-istri-trigger">
                                        <span class="bs-stepper-circle">4</span>
                                        <span class="bs-stepper-label">Data Istri</span>
                                    </button>
                                </div>

                                {{-- Data Ayah dari Istri --}}
                                <div class="line"></div>
                                <div class="step" data-target="#data-ayah-dari-istri">
                                    <button type="button" class="step-trigger" role="tab"
                                        aria-controls="data-ayah-dari-istri" id="data-ayah-dari-istri-trigger">
                                        <span class="bs-stepper-circle">5</span>
                                        <span class="bs-stepper-label">Data Ayah dari Istri</span>
                                    </button>
                                </div>

                            </div>

                            <div class="bs-stepper-header" role="tablist">
                                {{-- Data Ibu dari Istri --}}
                                <div class="step" data-target="#data-ibu-dari-istri">
                                    <button type="button" class="step-trigger" role="tab"
                                        aria-controls="data-ibu-dari-istri" id="data-ibu-dari-istri-trigger">
                                        <span class="bs-stepper-circle">6</span>
                                        <span class="bs-stepper-label">Data Ibu dari Istri</span>
                                    </button>
                                </div>

                                {{-- Data Saksi --}}
                                <div class="line"></div>
                                <div class="step" data-target="#data-saksi">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="data-saksi"
                                        id="data-saksi-trigger">
                                        <span class="bs-stepper-circle">7</span>
                                        <span class="bs-stepper-label">Data Saksi</span>
                                    </button>
                                </div>

                                {{-- Data Perkawinan --}}
                                <div class="line"></div>
                                <div class="step" data-target="#data-perkawinan">
                                    <button type="button" class="step-trigger" role="tab"
                                        aria-controls="data-perkawinan" id="data-perkawinan-trigger">
                                        <span class="bs-stepper-circle">8</span>
                                        <span class="bs-stepper-label">Data Perkawinan</span>
                                    </button>
                                </div>
                            </div>

                            {{-- Content Stepper --}}
                            <div class="bs-stepper-content">
                                <form action="#">
                                    {{-- Data Suami --}}
                                    <div id="data-suami" class="content" role="tabpanel"
                                        aria-labelledby="data-suami-trigger">

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ds_nik">Nomor Induk Kependudukan (NIK)</label>
                                                    <input type="text" class="form-control" id="ds_nik"
                                                        name="ds_nik" placeholder="Masukkan NIK" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ds_nomor_kk">Nomor Kartu Keluarga (Nomor KK)</label>
                                                    <input type="text" class="form-control" id="ds_nomor_kk"
                                                        name="ds_nomor_kk" placeholder="Masukkan Nomor Kartu Keluarga"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ds_nomor_paspor">Nomor Paspor</label>
                                                    <input type="text" class="form-control" id="ds_nomor_paspor"
                                                        name="ds_nomor_paspor" placeholder="Masukkan Nomor Paspor"
                                                        required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ds_nama_lengkap">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="ds_nama_lengkap"
                                                        name="ds_nama_lengkap" placeholder="Masukkan Nama Lengkap"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ds_tempat_lahir">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="ds_tempat_lahir"
                                                        name="ds_tempat_lahir" placeholder="Masukkan Tempat Lahir"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ds_tanggal_lahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="ds_tanggal_lahir"
                                                        name="ds_tanggal_lahir" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ds_alamat">Alamat</label>
                                                    <input type="text" class="form-control" id="ds_alamat"
                                                        name="ds_alamat" placeholder="Masukkan Alamat" required>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="ds_rt">RT</label>
                                                            <input type="text" class="form-control" id="ds_rt"
                                                                name="ds_rt" placeholder="RT" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="ds_rw">RW</label>
                                                            <input type="text" class="form-control" id="ds_rw"
                                                                name="ds_rw" placeholder="RW" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="ds_kode_pos">Kode Pos</label>
                                                            <input type="text" class="form-control" id="ds_kode_pos"
                                                                name="ds_kode_pos" placeholder="Kode Pos" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="ds_telepon">Telepon</label>
                                                            <input type="text" class="form-control" id="ds_telepon"
                                                                name="ds_telepon" placeholder="Masukkan Telepon" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="ds_desa_kelurahan">Desa/Kelurahan</label>
                                                    <input type="text" class="form-control" id="ds_desa_kelurahan"
                                                        name="ds_desa_kelurahan" placeholder="Masukkan Desa/Kelurahan"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="ds_kecamatan">Kecamatan</label>
                                                    <input type="text" class="form-control" id="ds_kecamatan"
                                                        name="ds_kecamatan" placeholder="Masukkan Kecamatan" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="ds_kabupaten_kota">Kabupaten/Kota</label>
                                                    <input type="text" class="form-control" id="ds_kabupaten_kota"
                                                        name="ds_kabupaten_kota" placeholder="Masukkan Kabupaten/Kota"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="ds_provinsi">Provinsi</label>
                                                    <input type="text" class="form-control" id="ds_provinsi"
                                                        name="ds_provinsi" placeholder="Masukkan Provinsi" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="ds_pendidikan_terakhir">Pendidikan Terakhir</label>
                                                    <select class="form-control" id="ds_pendidikan_terakhir"
                                                        name="ds_pendidikan_terakhir">
                                                        <option value="" disabled selected>Pilih Pendidikan Terakhir
                                                        </option>
                                                        <option value="Belum Sekolah">Belum Sekolah</option>
                                                        <option value="Belum Tamat SD">Belum Tamat SD</option>
                                                        <option value="SD/Sederajat">SD/Sederajat</option>
                                                        <option value="SLTP">SLTP</option>
                                                        <option value="SLTA">SLTA</option>
                                                        <option value="D1">D1</option>
                                                        <option value="D2">D2</option>
                                                        <option value="D3">D3</option>
                                                        <option value="S1">S1</option>
                                                        <option value="S2">S2</option>
                                                        <option value="S3">S3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="ds_agama">Agama</label>
                                                    <select class="form-control" id="ds_agama" name="ds_agama">
                                                        <option value="" disabled selected>Pilih Agama</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kriten">Kristen</option>
                                                        <option value="Katolik">Katolik</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                        <option value="Konghucu">Konghucu</option>
                                                        <option value="Penghayat Kepercayaan">Penghayat Kepercayaan
                                                        </option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ds_organisasi_penghayat">Nama Organisasi Penghayat
                                                        Kepercayaan</label>
                                                    <input type="text" class="form-control"
                                                        id="ds_organisasi_penghayat" name="ds_organisasi_penghayat"
                                                        placeholder="Masukkan Nama Organisasi Penghayat Kepercayaan">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ds_pekerjaan">Pekerjaan</label>
                                                    <select class="form-control" id="ds_pekerjaan" name="ds_pekerjaan">
                                                        <option value="" disabled selected>Pilih Pekerjaan</option>
                                                        <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                                                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                                                        <option value="Wiraswasta">Wiraswasta</option>
                                                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                                        <option value="Petani">Petani</option>
                                                        <option value="Nelayan">Nelayan</option>
                                                        <option value="Dokter">Dokter</option>
                                                        <option value="Guru">Guru</option>
                                                        <option value="Pekerja Lepas">Pekerja Lepas</option>
                                                        <option value="Pengusaha">Pengusaha</option>
                                                        <option value="Pengemudi">Pengemudi</option>
                                                        <option value="Artis">Artis</option>
                                                        <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="ds_anak_ke">Anak Ke</label>
                                                    <input type="text" class="form-control" id="ds_anak_ke"
                                                        name="ds_anak_ke" placeholder="Anak Ke" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ds_status_perkawinan">Status Perkawinan</label>
                                                    <select class="form-control" id="ds_status_perkawinan"
                                                        name="ds_status_perkawinan">
                                                        <option value="" disabled selected>
                                                            Pilih Status Perkawinan
                                                        </option>
                                                        <option value="Belum Kawin">Belum Kawin</option>
                                                        <option value="Kawin">Kawin</option>
                                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                                        <option value="Cerai Mati">Cerai Mati</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="ds_perkawinan_ke">Perkawinan Ke</label>
                                                    <input type="text" class="form-control" id="ds_perkawinan_ke"
                                                        name="ds_perkawinan_ke" placeholder="Perkawinan Ke" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="ds_istri_ke">Istri Yang Ke (bagi yang poligami)</label>
                                                    <input type="text" class="form-control" id="ds_istri_ke"
                                                        name="ds_istri_ke" placeholder="Istri Yang Ke" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ds_kewarganegaraan">Kewarganegaraan</label>
                                                    <select class="form-control" id="ds_kewarganegaraan"
                                                        name="ds_kewarganegaraan">
                                                        <option value="" disabled selected>
                                                            Pilih Kewarganegaraan
                                                        </option>
                                                        <option value="WNI">WNI</option>
                                                        <option value="WNA">WNA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="ds_kebangsaan">Kebangsaan (bagi WNA)</label>
                                                    <input type="text" class="form-control" id="ds_kebangsaan"
                                                        name="ds_kebangsaan" placeholder="Masukkan Kebangsaan" required>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-primary" onclick="stepper.next()">Selanjutnya</button>
                                    </div>

                                    {{-- Data Ayah Dari Suami --}}
                                    <div id="data-ayah-dari-suami" class="content" role="tabpanel"
                                        aria-labelledby="data-ayah-dari-suami-trigger">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="dads_nik">Nomor Induk Kependudukan (NIK)</label>
                                                    <input type="text" class="form-control" id="dads_nik"
                                                        name="dads_nik" placeholder="Masukkan NIK" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="dads_nama_lengkap">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="dads_nama_lengkap"
                                                        name="dads_nama_lengkap" placeholder="Masukkan Nama Lengkap"
                                                        required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dads_tempat_lahir">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="dads_tempat_lahir"
                                                        name="dads_tempat_lahir" placeholder="Masukkan Tempat Lahir"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dads_tanggal_lahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="dads_tanggal_lahir"
                                                        name="dads_tanggal_lahir" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dads_agama">Agama</label>
                                                    <select class="form-control" id="dads_agama" name="dads_agama">
                                                        <option value="" disabled selected>Pilih Agama</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kriten">Kristen</option>
                                                        <option value="Katolik">Katolik</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                        <option value="Konghucu">Konghucu</option>
                                                        <option value="Penghayat Kepercayaan">Penghayat Kepercayaan
                                                        </option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dads_organisasi_penghayat">Nama Organisasi Penghayat
                                                        Kepercayaan</label>
                                                    <input type="text" class="form-control"
                                                        id="dads_organisasi_penghayat" name="dads_organisasi_penghayat"
                                                        placeholder="Masukkan Nama Organisasi Penghayat Kepercayaan">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="dads_alamat">Alamat</label>
                                                    <input type="text" class="form-control" id="dads_alamat"
                                                        name="dads_alamat" placeholder="Masukkan Alamat" required>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="dads_rt">RT</label>
                                                            <input type="text" class="form-control" id="dads_rt"
                                                                name="dads_rt" placeholder="RT" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="dads_rw">RW</label>
                                                            <input type="text" class="form-control" id="dads_rw"
                                                                name="dads_rw" placeholder="RW" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="dads_kode_pos">Kode Pos</label>
                                                            <input type="text" class="form-control" id="dads_kode_pos"
                                                                name="dads_kode_pos" placeholder="Kode Pos" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="dads_telepon">Telepon</label>
                                                            <input type="text" class="form-control" id="dads_telepon"
                                                                name="dads_telepon" placeholder="Masukkan Telepon"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dads_desa_kelurahan">Desa/Kelurahan</label>
                                                    <input type="text" class="form-control" id="dads_desa_kelurahan"
                                                        name="dads_desa_kelurahan" placeholder="Masukkan Desa/Kelurahan"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dads_kecamatan">Kecamatan</label>
                                                    <input type="text" class="form-control" id="dads_kecamatan"
                                                        name="dads_kecamatan" placeholder="Masukkan Kecamatan" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dads_kabupaten_kota">Kabupaten/Kota</label>
                                                    <input type="text" class="form-control" id="dads_kabupaten_kota"
                                                        name="dads_kabupaten_kota" placeholder="Masukkan Kabupaten/Kota"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dads_provinsi">Provinsi</label>
                                                    <input type="text" class="form-control" id="dads_provinsi"
                                                        name="dads_provinsi" placeholder="Masukkan Provinsi" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="dads_pekerjaan">Pekerjaan</label>
                                                    <select class="form-control" id="dads_pekerjaan"
                                                        name="dads_pekerjaan">
                                                        <option value="" disabled selected>Pilih Pekerjaan</option>
                                                        <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                                                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                                                        <option value="Wiraswasta">Wiraswasta</option>
                                                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                                        <option value="Petani">Petani</option>
                                                        <option value="Nelayan">Nelayan</option>
                                                        <option value="Dokter">Dokter</option>
                                                        <option value="Guru">Guru</option>
                                                        <option value="Pekerja Lepas">Pekerja Lepas</option>
                                                        <option value="Pengusaha">Pengusaha</option>
                                                        <option value="Pengemudi">Pengemudi</option>
                                                        <option value="Artis">Artis</option>
                                                        <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-secondary"
                                                onclick="stepper.previous()">Sebelumnya</button>
                                            <button class="btn btn-primary" onclick="stepper.next()">Selanjutnya</button>
                                        </div>

                                    </div>

                                    {{-- Data Ibu Dari Suami --}}
                                    <div id="data-ibu-dari-suami" class="content" role="tabpanel"
                                        aria-labelledby="data-ibu-dari-suami-trigger">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="dids_nik">Nomor Induk Kependudukan (NIK)</label>
                                                    <input type="text" class="form-control" id="dids_nik"
                                                        name="dids_nik" placeholder="Masukkan NIK" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="dids_nama_lengkap">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="dids_nama_lengkap"
                                                        name="dids_nama_lengkap" placeholder="Masukkan Nama Lengkap"
                                                        required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dids_tempat_lahir">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="dids_tempat_lahir"
                                                        name="dids_tempat_lahir" placeholder="Masukkan Tempat Lahir"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dids_tanggal_lahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="dids_tanggal_lahir"
                                                        name="dids_tanggal_lahir" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dids_agama">Agama</label>
                                                    <select class="form-control" id="dids_agama" name="dids_agama">
                                                        <option value="" disabled selected>Pilih Agama</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kriten">Kristen</option>
                                                        <option value="Katolik">Katolik</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                        <option value="Konghucu">Konghucu</option>
                                                        <option value="Penghayat Kepercayaan">Penghayat Kepercayaan
                                                        </option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dids_organisasi_penghayat">Nama Organisasi Penghayat
                                                        Kepercayaan</label>
                                                    <input type="text" class="form-control"
                                                        id="dids_organisasi_penghayat" name="dids_organisasi_penghayat"
                                                        placeholder="Masukkan Nama Organisasi Penghayat Kepercayaan">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="dids_alamat">Alamat</label>
                                                    <input type="text" class="form-control" id="dids_alamat"
                                                        name="dids_alamat" placeholder="Masukkan Alamat" required>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="dids_rt">RT</label>
                                                            <input type="text" class="form-control" id="dids_rt"
                                                                name="dids_rt" placeholder="RT" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="dids_rw">RW</label>
                                                            <input type="text" class="form-control" id="dids_rw"
                                                                name="dids_rw" placeholder="RW" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="dids_kode_pos">Kode Pos</label>
                                                            <input type="text" class="form-control" id="dids_kode_pos"
                                                                name="dids_kode_pos" placeholder="Kode Pos" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="dids_telepon">Telepon</label>
                                                            <input type="text" class="form-control" id="dids_telepon"
                                                                name="dids_telepon" placeholder="Masukkan Telepon"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dids_desa_kelurahan">Desa/Kelurahan</label>
                                                    <input type="text" class="form-control" id="dids_desa_kelurahan"
                                                        name="dids_desa_kelurahan" placeholder="Masukkan Desa/Kelurahan"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dids_kecamatan">Kecamatan</label>
                                                    <input type="text" class="form-control" id="dids_kecamatan"
                                                        name="dids_kecamatan" placeholder="Masukkan Kecamatan" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dids_kabupaten_kota">Kabupaten/Kota</label>
                                                    <input type="text" class="form-control" id="dids_kabupaten_kota"
                                                        name="dids_kabupaten_kota" placeholder="Masukkan Kabupaten/Kota"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dids_provinsi">Provinsi</label>
                                                    <input type="text" class="form-control" id="dids_provinsi"
                                                        name="dids_provinsi" placeholder="Masukkan Provinsi" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="dids_pekerjaan">Pekerjaan</label>
                                                    <select class="form-control" id="dids_pekerjaan"
                                                        name="dids_pekerjaan">
                                                        <option value="" disabled selected>Pilih Pekerjaan</option>
                                                        <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                                                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                                                        <option value="Wiraswasta">Wiraswasta</option>
                                                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                                        <option value="Petani">Petani</option>
                                                        <option value="Nelayan">Nelayan</option>
                                                        <option value="Dokter">Dokter</option>
                                                        <option value="Guru">Guru</option>
                                                        <option value="Pekerja Lepas">Pekerja Lepas</option>
                                                        <option value="Pengusaha">Pengusaha</option>
                                                        <option value="Pengemudi">Pengemudi</option>
                                                        <option value="Artis">Artis</option>
                                                        <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-secondary"
                                                onclick="stepper.previous()">Sebelumnya</button>
                                            <button class="btn btn-primary" onclick="stepper.next()">Selanjutnya</button>
                                        </div>
                                    </div>

                                    {{-- Data Istri --}}
                                    <div id="data-istri" class="content" role="tabpanel"
                                        aria-labelledby="data-istri-trigger">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ds_nik">Nomor Induk Kependudukan (NIK)</label>
                                                    <input type="text" class="form-control" id="ds_nik"
                                                        name="ds_nik" placeholder="Masukkan NIK" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ds_nomor_kk">Nomor Kartu Keluarga (Nomor KK)</label>
                                                    <input type="text" class="form-control" id="ds_nomor_kk"
                                                        name="ds_nomor_kk" placeholder="Masukkan Nomor Kartu Keluarga"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ds_nomor_paspor">Nomor Paspor</label>
                                                    <input type="text" class="form-control" id="ds_nomor_paspor"
                                                        name="ds_nomor_paspor" placeholder="Masukkan Nomor Paspor"
                                                        required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ds_nama_lengkap">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="ds_nama_lengkap"
                                                        name="ds_nama_lengkap" placeholder="Masukkan Nama Lengkap"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ds_tempat_lahir">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="ds_tempat_lahir"
                                                        name="ds_tempat_lahir" placeholder="Masukkan Tempat Lahir"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ds_tanggal_lahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="ds_tanggal_lahir"
                                                        name="ds_tanggal_lahir" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ds_alamat">Alamat</label>
                                                    <input type="text" class="form-control" id="ds_alamat"
                                                        name="ds_alamat" placeholder="Masukkan Alamat" required>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="ds_rt">RT</label>
                                                            <input type="text" class="form-control" id="ds_rt"
                                                                name="ds_rt" placeholder="RT" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="ds_rw">RW</label>
                                                            <input type="text" class="form-control" id="ds_rw"
                                                                name="ds_rw" placeholder="RW" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="ds_kode_pos">Kode Pos</label>
                                                            <input type="text" class="form-control" id="ds_kode_pos"
                                                                name="ds_kode_pos" placeholder="Kode Pos" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="ds_telepon">Telepon</label>
                                                            <input type="text" class="form-control" id="ds_telepon"
                                                                name="ds_telepon" placeholder="Masukkan Telepon" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="ds_desa_kelurahan">Desa/Kelurahan</label>
                                                    <input type="text" class="form-control" id="ds_desa_kelurahan"
                                                        name="ds_desa_kelurahan" placeholder="Masukkan Desa/Kelurahan"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="ds_kecamatan">Kecamatan</label>
                                                    <input type="text" class="form-control" id="ds_kecamatan"
                                                        name="ds_kecamatan" placeholder="Masukkan Kecamatan" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="ds_kabupaten_kota">Kabupaten/Kota</label>
                                                    <input type="text" class="form-control" id="ds_kabupaten_kota"
                                                        name="ds_kabupaten_kota" placeholder="Masukkan Kabupaten/Kota"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="ds_provinsi">Provinsi</label>
                                                    <input type="text" class="form-control" id="ds_provinsi"
                                                        name="ds_provinsi" placeholder="Masukkan Provinsi" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="ds_pendidikan_terakhir">Pendidikan Terakhir</label>
                                                    <select class="form-control" id="ds_pendidikan_terakhir"
                                                        name="ds_pendidikan_terakhir">
                                                        <option value="" disabled selected>Pilih Pendidikan Terakhir
                                                        </option>
                                                        <option value="Belum Sekolah">Belum Sekolah</option>
                                                        <option value="Belum Tamat SD">Belum Tamat SD</option>
                                                        <option value="SD/Sederajat">SD/Sederajat</option>
                                                        <option value="SLTP">SLTP</option>
                                                        <option value="SLTA">SLTA</option>
                                                        <option value="D1">D1</option>
                                                        <option value="D2">D2</option>
                                                        <option value="D3">D3</option>
                                                        <option value="S1">S1</option>
                                                        <option value="S2">S2</option>
                                                        <option value="S3">S3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="ds_agama">Agama</label>
                                                    <select class="form-control" id="ds_agama" name="ds_agama">
                                                        <option value="" disabled selected>Pilih Agama</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kriten">Kristen</option>
                                                        <option value="Katolik">Katolik</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                        <option value="Konghucu">Konghucu</option>
                                                        <option value="Penghayat Kepercayaan">Penghayat Kepercayaan
                                                        </option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ds_organisasi_penghayat">Nama Organisasi Penghayat
                                                        Kepercayaan</label>
                                                    <input type="text" class="form-control"
                                                        id="ds_organisasi_penghayat" name="ds_organisasi_penghayat"
                                                        placeholder="Masukkan Nama Organisasi Penghayat Kepercayaan">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ds_pekerjaan">Pekerjaan</label>
                                                    <select class="form-control" id="ds_pekerjaan" name="ds_pekerjaan">
                                                        <option value="" disabled selected>Pilih Pekerjaan</option>
                                                        <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                                                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                                                        <option value="Wiraswasta">Wiraswasta</option>
                                                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                                        <option value="Petani">Petani</option>
                                                        <option value="Nelayan">Nelayan</option>
                                                        <option value="Dokter">Dokter</option>
                                                        <option value="Guru">Guru</option>
                                                        <option value="Pekerja Lepas">Pekerja Lepas</option>
                                                        <option value="Pengusaha">Pengusaha</option>
                                                        <option value="Pengemudi">Pengemudi</option>
                                                        <option value="Artis">Artis</option>
                                                        <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="ds_anak_ke">Anak Ke</label>
                                                    <input type="text" class="form-control" id="ds_anak_ke"
                                                        name="ds_anak_ke" placeholder="Anak Ke" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ds_status_perkawinan">Status Perkawinan</label>
                                                    <select class="form-control" id="ds_status_perkawinan"
                                                        name="ds_status_perkawinan">
                                                        <option value="" disabled selected>
                                                            Pilih Status Perkawinan
                                                        </option>
                                                        <option value="Belum Kawin">Belum Kawin</option>
                                                        <option value="Kawin">Kawin</option>
                                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                                        <option value="Cerai Mati">Cerai Mati</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="ds_perkawinan_ke">Perkawinan Ke</label>
                                                    <input type="text" class="form-control" id="ds_perkawinan_ke"
                                                        name="ds_perkawinan_ke" placeholder="Perkawinan Ke" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ds_kewarganegaraan">Kewarganegaraan</label>
                                                    <select class="form-control" id="ds_kewarganegaraan"
                                                        name="ds_kewarganegaraan">
                                                        <option value="" disabled selected>
                                                            Pilih Kewarganegaraan
                                                        </option>
                                                        <option value="WNI">WNI</option>
                                                        <option value="WNA">WNA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ds_kebangsaan">Kebangsaan (bagi WNA)</label>
                                                    <input type="text" class="form-control" id="ds_kebangsaan"
                                                        name="ds_kebangsaan" placeholder="Masukkan Kebangsaan" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-secondary"
                                                onclick="stepper.previous()">Sebelumnya</button>
                                            <button class="btn btn-primary" onclick="stepper.next()">Selanjutnya</button>
                                        </div>
                                    </div>

                                    {{-- Data Ayah dari Istri --}}
                                    <div id="data-ayah-dari-istri" class="content" role="tabpanel"
                                        aria-labelledby="data-ayah-dari-istri-trigger">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="dadi_nik">Nomor Induk Kependudukan (NIK)</label>
                                                    <input type="text" class="form-control" id="dadi_nik"
                                                        name="dadi_nik" placeholder="Masukkan NIK" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="dadi_nama_lengkap">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="dadi_nama_lengkap"
                                                        name="dadi_nama_lengkap" placeholder="Masukkan Nama Lengkap"
                                                        required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dadi_tempat_lahir">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="dadi_tempat_lahir"
                                                        name="dadi_tempat_lahir" placeholder="Masukkan Tempat Lahir"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dadi_tanggal_lahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="dadi_tanggal_lahir"
                                                        name="dadi_tanggal_lahir" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dadi_agama">Agama</label>
                                                    <select class="form-control" id="dadi_agama" name="dadi_agama">
                                                        <option value="" disabled selected>Pilih Agama</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kriten">Kristen</option>
                                                        <option value="Katolik">Katolik</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                        <option value="Konghucu">Konghucu</option>
                                                        <option value="Penghayat Kepercayaan">Penghayat Kepercayaan
                                                        </option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dadi_organisasi_penghayat">Nama Organisasi Penghayat
                                                        Kepercayaan</label>
                                                    <input type="text" class="form-control"
                                                        id="dadi_organisasi_penghayat" name="dadi_organisasi_penghayat"
                                                        placeholder="Masukkan Nama Organisasi Penghayat Kepercayaan">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="dadi_alamat">Alamat</label>
                                                    <input type="text" class="form-control" id="dadi_alamat"
                                                        name="dadi_alamat" placeholder="Masukkan Alamat" required>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="dadi_rt">RT</label>
                                                            <input type="text" class="form-control" id="dadi_rt"
                                                                name="dadi_rt" placeholder="RT" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="dadi_rw">RW</label>
                                                            <input type="text" class="form-control" id="dadi_rw"
                                                                name="dadi_rw" placeholder="RW" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="dadi_kode_pos">Kode Pos</label>
                                                            <input type="text" class="form-control"
                                                                id="dadi_kode_pos" name="dadi_kode_pos"
                                                                placeholder="Kode Pos" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="dadi_telepon">Telepon</label>
                                                            <input type="text" class="form-control"
                                                                id="dadi_telepon" name="dadi_telepon"
                                                                placeholder="Masukkan Telepon" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dadi_desa_kelurahan">Desa/Kelurahan</label>
                                                    <input type="text" class="form-control"
                                                        id="dadi_desa_kelurahan" name="dadi_desa_kelurahan"
                                                        placeholder="Masukkan Desa/Kelurahan" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dadi_kecamatan">Kecamatan</label>
                                                    <input type="text" class="form-control" id="dadi_kecamatan"
                                                        name="dadi_kecamatan" placeholder="Masukkan Kecamatan" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dadi_kabupaten_kota">Kabupaten/Kota</label>
                                                    <input type="text" class="form-control"
                                                        id="dadi_kabupaten_kota" name="dadi_kabupaten_kota"
                                                        placeholder="Masukkan Kabupaten/Kota" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dadi_provinsi">Provinsi</label>
                                                    <input type="text" class="form-control" id="dadi_provinsi"
                                                        name="dadi_provinsi" placeholder="Masukkan Provinsi" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="dadi_pekerjaan">Pekerjaan</label>
                                                    <select class="form-control" id="dadi_pekerjaan"
                                                        name="dadi_pekerjaan">
                                                        <option value="" disabled selected>Pilih Pekerjaan</option>
                                                        <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                                                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                                                        <option value="Wiraswasta">Wiraswasta</option>
                                                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                                        <option value="Petani">Petani</option>
                                                        <option value="Nelayan">Nelayan</option>
                                                        <option value="Dokter">Dokter</option>
                                                        <option value="Guru">Guru</option>
                                                        <option value="Pekerja Lepas">Pekerja Lepas</option>
                                                        <option value="Pengusaha">Pengusaha</option>
                                                        <option value="Pengemudi">Pengemudi</option>
                                                        <option value="Artis">Artis</option>
                                                        <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-secondary"
                                                onclick="stepper.previous()">Sebelumnya</button>
                                            <button class="btn btn-primary"
                                                onclick="stepper.next()">Selanjutnya</button>
                                        </div>
                                    </div>

                                    {{-- Data Ibu Dari Istri --}}
                                    <div id="data-ibu-dari-istri" class="content" role="tabpanel"
                                        aria-labelledby="data-ibu-dari-istri-trigger">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="didi_nik">Nomor Induk Kependudukan (NIK)</label>
                                                    <input type="text" class="form-control" id="didi_nik"
                                                        name="didi_nik" placeholder="Masukkan NIK" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="didi_nama_lengkap">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="didi_nama_lengkap"
                                                        name="didi_nama_lengkap" placeholder="Masukkan Nama Lengkap"
                                                        required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="didi_tempat_lahir">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="didi_tempat_lahir"
                                                        name="didi_tempat_lahir" placeholder="Masukkan Tempat Lahir"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="didi_tanggal_lahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="didi_tanggal_lahir"
                                                        name="didi_tanggal_lahir" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="didi_agama">Agama</label>
                                                    <select class="form-control" id="didi_agama" name="didi_agama">
                                                        <option value="" disabled selected>Pilih Agama</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kriten">Kristen</option>
                                                        <option value="Katolik">Katolik</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                        <option value="Konghucu">Konghucu</option>
                                                        <option value="Penghayat Kepercayaan">Penghayat Kepercayaan
                                                        </option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="didi_organisasi_penghayat">Nama Organisasi Penghayat
                                                        Kepercayaan</label>
                                                    <input type="text" class="form-control"
                                                        id="didi_organisasi_penghayat" name="didi_organisasi_penghayat"
                                                        placeholder="Masukkan Nama Organisasi Penghayat Kepercayaan">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="didi_alamat">Alamat</label>
                                                    <input type="text" class="form-control" id="didi_alamat"
                                                        name="didi_alamat" placeholder="Masukkan Alamat" required>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="didi_rt">RT</label>
                                                            <input type="text" class="form-control" id="didi_rt"
                                                                name="didi_rt" placeholder="RT" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="didi_rw">RW</label>
                                                            <input type="text" class="form-control" id="didi_rw"
                                                                name="didi_rw" placeholder="RW" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="didi_kode_pos">Kode Pos</label>
                                                            <input type="text" class="form-control"
                                                                id="didi_kode_pos" name="didi_kode_pos"
                                                                placeholder="Kode Pos" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="didi_telepon">Telepon</label>
                                                            <input type="text" class="form-control"
                                                                id="didi_telepon" name="didi_telepon"
                                                                placeholder="Masukkan Telepon" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="didi_desa_kelurahan">Desa/Kelurahan</label>
                                                    <input type="text" class="form-control"
                                                        id="didi_desa_kelurahan" name="didi_desa_kelurahan"
                                                        placeholder="Masukkan Desa/Kelurahan" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="didi_kecamatan">Kecamatan</label>
                                                    <input type="text" class="form-control" id="didi_kecamatan"
                                                        name="didi_kecamatan" placeholder="Masukkan Kecamatan" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="didi_kabupaten_kota">Kabupaten/Kota</label>
                                                    <input type="text" class="form-control"
                                                        id="didi_kabupaten_kota" name="didi_kabupaten_kota"
                                                        placeholder="Masukkan Kabupaten/Kota" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="didi_provinsi">Provinsi</label>
                                                    <input type="text" class="form-control" id="didi_provinsi"
                                                        name="didi_provinsi" placeholder="Masukkan Provinsi" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="didi_pekerjaan">Pekerjaan</label>
                                                    <select class="form-control" id="didi_pekerjaan"
                                                        name="didi_pekerjaan">
                                                        <option value="" disabled selected>Pilih Pekerjaan</option>
                                                        <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                                                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                                                        <option value="Wiraswasta">Wiraswasta</option>
                                                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                                        <option value="Petani">Petani</option>
                                                        <option value="Nelayan">Nelayan</option>
                                                        <option value="Dokter">Dokter</option>
                                                        <option value="Guru">Guru</option>
                                                        <option value="Pekerja Lepas">Pekerja Lepas</option>
                                                        <option value="Pengusaha">Pengusaha</option>
                                                        <option value="Pengemudi">Pengemudi</option>
                                                        <option value="Artis">Artis</option>
                                                        <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-secondary"
                                                onclick="stepper.previous()">Sebelumnya</button>
                                            <button class="btn btn-primary"
                                                onclick="stepper.next()">Selanjutnya</button>
                                        </div>
                                    </div>

                                    {{-- Data Saksi --}}
                                    <div id="data-saksi" class="content" role="tabpanel"
                                        aria-labelledby="data-saksi-trigger">
                                        <button type="button" id="btn-tambah-saksi" class="btn btn-success mb-3"
                                            onclick="tambahSaksi()">Tambah Data Saksi</button>

                                        <div id="form-saksi">
                                            <h3>Data Saksi I</h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="didi_nik">Nomor Induk Kependudukan (NIK)</label>
                                                        <input type="text" class="form-control" name="didi_nik[]"
                                                            placeholder="Masukkan NIK" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="didi_nama_lengkap">Nama Lengkap</label>
                                                        <input type="text" class="form-control"
                                                            name="didi_nama_lengkap[]"
                                                            placeholder="Masukkan Nama Lengkap" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="didi_tempat_lahir">Tempat Lahir</label>
                                                        <input type="text" class="form-control"
                                                            name="didi_tempat_lahir[]"
                                                            placeholder="Masukkan Tempat Lahir" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="didi_tanggal_lahir">Tanggal Lahir</label>
                                                        <input type="date" class="form-control"
                                                            name="didi_tanggal_lahir[]" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="didi_agama">Agama</label>
                                                        <select class="form-control" name="didi_agama[]">
                                                            <option value="" disabled selected>Pilih Agama</option>
                                                            <option value="Islam">Islam</option>
                                                            <option value="Kristen">Kristen</option>
                                                            <option value="Katolik">Katolik</option>
                                                            <option value="Hindu">Hindu</option>
                                                            <option value="Budha">Budha</option>
                                                            <option value="Konghucu">Konghucu</option>
                                                            <option value="Penghayat Kepercayaan">Penghayat Kepercayaan
                                                            </option>
                                                            <option value="Lainnya">Lainnya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="didi_organisasi_penghayat">Nama Organisasi Penghayat
                                                            Kepercayaan</label>
                                                        <input type="text" class="form-control"
                                                            name="didi_organisasi_penghayat[]"
                                                            placeholder="Masukkan Nama Organisasi Penghayat Kepercayaan">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="didi_alamat">Alamat</label>
                                                        <input type="text" class="form-control"
                                                            name="didi_alamat[]" placeholder="Masukkan Alamat" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="didi_rt">RT</label>
                                                                <input type="text" class="form-control"
                                                                    name="didi_rt[]" placeholder="RT" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="didi_rw">RW</label>
                                                                <input type="text" class="form-control"
                                                                    name="didi_rw[]" placeholder="RW" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="didi_kode_pos">Kode Pos</label>
                                                                <input type="text" class="form-control"
                                                                    name="didi_kode_pos[]" placeholder="Kode Pos"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="didi_telepon">Telepon</label>
                                                                <input type="text" class="form-control"
                                                                    name="didi_telepon[]" placeholder="Masukkan Telepon"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="didi_desa_kelurahan">Desa/Kelurahan</label>
                                                        <input type="text" class="form-control"
                                                            name="didi_desa_kelurahan[]"
                                                            placeholder="Masukkan Desa/Kelurahan" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="didi_kecamatan">Kecamatan</label>
                                                        <input type="text" class="form-control"
                                                            name="didi_kecamatan[]" placeholder="Masukkan Kecamatan"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="didi_kabupaten_kota">Kabupaten/Kota</label>
                                                        <input type="text" class="form-control"
                                                            name="didi_kabupaten_kota[]"
                                                            placeholder="Masukkan Kabupaten/Kota" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="didi_provinsi">Provinsi</label>
                                                        <input type="text" class="form-control"
                                                            name="didi_provinsi[]" placeholder="Masukkan Provinsi"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="didi_pekerjaan">Pekerjaan</label>
                                                        <select class="form-control" name="didi_pekerjaan[]">
                                                            <option value="" disabled selected>Pilih Pekerjaan
                                                            </option>
                                                            <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil
                                                            </option>
                                                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                                                            <option value="Wiraswasta">Wiraswasta</option>
                                                            <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                                            <option value="Petani">Petani</option>
                                                            <option value="Nelayan">Nelayan</option>
                                                            <option value="Dokter">Dokter</option>
                                                            <option value="Guru">Guru</option>
                                                            <option value="Pekerja Lepas">Pekerja Lepas</option>
                                                            <option value="Pengusaha">Pengusaha</option>
                                                            <option value="Pengemudi">Pengemudi</option>
                                                            <option value="Artis">Artis</option>
                                                            <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                                            <option value="Lainnya">Lainnya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-secondary"
                                                onclick="stepper.previous()">Sebelumnya</button>
                                            <button class="btn btn-primary"
                                                onclick="stepper.next()">Selanjutnya</button>
                                        </div>
                                    </div>

                                    {{-- Data Perkawinan --}}
                                    <div id="data-perkawinan" class="content" role="tabpanel"
                                        aria-labelledby="data-perkawinan-trigger">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="dp_tanggal_pemberkatan_perkawinan">Tanggal Pemberkatan
                                                        Perkawinan</label>
                                                    <input type="date" class="form-control"
                                                        id="dp_tanggal_pemberkatan_perkawinan"
                                                        name="dp_tanggal_pemberkatan_perkawinan" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="dp_tanggal_melapor">Tanggal Melapor</label>
                                                    <input type="date" class="form-control" id="dp_tanggal_melapor"
                                                        name="dp_tanggal_melapor" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="dp_pukul">Pukul</label>
                                                    <input type="time" class="form-control" id="dp_pukul"
                                                        name="dp_pukul" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="dids_agama">Agama</label>
                                                    <select class="form-control" id="dids_agama" name="dids_agama">
                                                        <option value="" disabled selected>Pilih Agama</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kriten">Kristen</option>
                                                        <option value="Katolik">Katolik</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                        <option value="Konghucu">Konghucu</option>
                                                        <option value="Penghayat Kepercayaan">Penghayat Kepercayaan
                                                        </option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="dids_organisasi_penghayat">Nama Organisasi Penghayat
                                                        Kepercayaan</label>
                                                    <input type="text" class="form-control"
                                                        id="dids_organisasi_penghayat" name="dids_organisasi_penghayat"
                                                        placeholder="Masukkan Nama Organisasi Penghayat Kepercayaan">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="dp_nama_pemuka_agama">Nama Pemuka Agama</label>
                                                    <input type="text" class="form-control"
                                                        id="dp_nama_pemuka_agama" name="dp_nama_pemuka_agama"
                                                        placeholder="Masukkan Nama Pemuka Agama">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dp_nama_badan_peradilan">Nama Badan Peradilan</label>
                                                    <input type="text" class="form-control"
                                                        id="dp_nama_badan_peradilan" name="dp_nama_badan_peradilan"
                                                        placeholder="Masukkan Nama Badan Peradilan">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dp_nomor_putusan_pengadilan">Nomor Putusan
                                                        Peradilan</label>
                                                    <input type="text" class="form-control"
                                                        id="dp_nomor_putusan_pengadilan"
                                                        name="dp_nomor_putusan_pengadilan"
                                                        placeholder="Masukkan Nama Organisasi Penghayat Kepercayaan">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dp_tanggal_putusan_pengadilan">Tanggal Putusan Penetapan
                                                        Pengadilan</label>
                                                    <input type="date" class="form-control"
                                                        id="dp_tanggal_putusan_pengadilan"
                                                        name="dp_tanggal_putusan_pengadilan" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dp_ijin_perwakilan_bagi_wna_nomor">Ijin Perwakilan bagi
                                                        WNA / Nomor</label>
                                                    <input type="text" class="form-control"
                                                        id="dp_ijin_perwakilan_bagi_wna_nomor"
                                                        name="dp_ijin_perwakilan_bagi_wna_nomor"
                                                        placeholder="Masukkan Ijin Perwakilan bagi
                                                        WNA / Nomor">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="dp_jumlah_anak_terakui">Jumlah Anak Diakui</label>
                                                    <input type="text" class="form-control"
                                                        id="dp_jumlah_anak_terakui" name="dp_jumlah_anak_terakui"
                                                        placeholder="Masukkan Jumlah Anak Diakui">
                                                </div>
                                            </div>
                                        </div>

                                        <div id="data-anak">
                                            <!-- Tombol untuk menambah anak -->
                                            <button type="button" class="btn btn-success mb-3" id="tambah_anak"
                                                onclick="tambahAnak()">Tambah Anak</button>

                                            <!-- Form pertama anak yang sudah ada -->
                                            <div class="row anak-form" id="form-anak-1">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="dp_nama_anak_1">Nama Anak 1</label>
                                                        <input type="text" class="form-control" id="dp_nama_anak_1"
                                                            name="dp_nama_anak[]" placeholder="Masukkan Nama Anak 1">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="dp_akta_kelahiran_1">No Tanggal Akta Kelahiran</label>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control"
                                                                    id="dp_akta_kelahiran_1"
                                                                    name="dp_no_akta_kelahiran[]"
                                                                    placeholder="Masukkan No Akta">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="date" class="form-control"
                                                                    id="dp_tanggal_akta_1"
                                                                    name="dp_tanggal_akta_kelahiran[]">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <!-- Tombol hapus hanya tampil untuk form selain yang pertama -->
                                                                <button type="button" class="btn btn-danger"
                                                                    id="hapus_anak_1" onclick="hapusAnak(1)"
                                                                    style="display:none;">Hapus Anak 1</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-secondary"
                                                onclick="stepper.previous()">Sebelumnya</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>

    </section>
    <!-- /.content -->

@section('script')
    <!-- BS-Stepper -->
    <script src="{{ asset('adminLTE/plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })
    </script>
    <script>
        let saksiCount = 1;

        function tambahSaksi() {
            saksiCount++;

            const formContainer = document.getElementById('form-saksi');

            const saksiForm = document.createElement('div');
            saksiForm.classList.add('form-saksi');

            saksiForm.innerHTML = `
            <h3>Data Saksi ${saksiCount}</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="didi_nik">Nomor Induk Kependudukan (NIK)</label>
                        <input type="text" class="form-control" name="didi_nik[]" placeholder="Masukkan NIK" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="didi_nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" name="didi_nama_lengkap[]" placeholder="Masukkan Nama Lengkap" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="didi_tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" name="didi_tempat_lahir[]" placeholder="Masukkan Tempat Lahir" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="didi_tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="didi_tanggal_lahir[]" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="didi_agama">Agama</label>
                        <select class="form-control" name="didi_agama[]">
                            <option value="" disabled selected>Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                            <option value="Penghayat Kepercayaan">Penghayat Kepercayaan</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="didi_organisasi_penghayat">Nama Organisasi Penghayat Kepercayaan</label>
                        <input type="text" class="form-control" name="didi_organisasi_penghayat[]" placeholder="Masukkan Nama Organisasi Penghayat Kepercayaan">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="didi_alamat">Alamat</label>
                        <input type="text" class="form-control" name="didi_alamat[]" placeholder="Masukkan Alamat" required>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="didi_rt">RT</label>
                                <input type="text" class="form-control" name="didi_rt[]" placeholder="RT" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="didi_rw">RW</label>
                                <input type="text" class="form-control" name="didi_rw[]" placeholder="RW" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="didi_kode_pos">Kode Pos</label>
                                <input type="text" class="form-control" name="didi_kode_pos[]" placeholder="Kode Pos" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="didi_telepon">Telepon</label>
                                <input type="text" class="form-control" name="didi_telepon[]" placeholder="Masukkan Telepon" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="didi_desa_kelurahan">Desa/Kelurahan</label>
                        <input type="text" class="form-control" name="didi_desa_kelurahan[]" placeholder="Masukkan Desa/Kelurahan" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="didi_kecamatan">Kecamatan</label>
                        <input type="text" class="form-control" name="didi_kecamatan[]" placeholder="Masukkan Kecamatan" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="didi_kabupaten_kota">Kabupaten/Kota</label>
                        <input type="text" class="form-control" name="didi_kabupaten_kota[]" placeholder="Masukkan Kabupaten/Kota" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="didi_provinsi">Provinsi</label>
                        <input type="text" class="form-control" name="didi_provinsi[]" placeholder="Masukkan Provinsi" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="didi_pekerjaan">Pekerjaan</label>
                        <select class="form-control" name="didi_pekerjaan[]">
                            <option value="" disabled selected>Pilih Pekerjaan</option>
                            <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                            <option value="Petani">Petani</option>
                            <option value="Nelayan">Nelayan</option>
                            <option value="Dokter">Dokter</option>
                            <option value="Guru">Guru</option>
                            <option value="Pekerja Lepas">Pekerja Lepas</option>
                            <option value="Pengusaha">Pengusaha</option>
                            <option value="Pengemudi">Pengemudi</option>
                            <option value="Artis">Artis</option>
                            <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
            </div>

             <button type="button" class="btn btn-danger mt-3 mb-3" onclick="hapusSaksi(this)">Hapus Data Saksi ${saksiCount}</button>
        `;

            formContainer.appendChild(saksiForm);
        }

        function hapusSaksi(button) {
            if (saksiCount > 1) {
                const saksiForm = button.closest('.form-saksi');
                saksiForm.remove();
                saksiCount--;
            }
        }
    </script>

    <script>
        let anakCount = 1;

        function tambahAnak() {
            anakCount++;

            const formId = `form-anak-${anakCount}`;
            const namaAnakId = `dp_nama_anak_${anakCount}`;
            const noAktaId = `dp_akta_kelahiran_${anakCount}`;
            const tanggalAktaId = `dp_tanggal_akta_${anakCount}`;
            const hapusButtonId = `hapus_anak_${anakCount}`;

            const newForm = `
            <div class="row anak-form" id="${formId}">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="${namaAnakId}">Nama Anak ${anakCount}</label>
                        <input type="text" class="form-control" id="${namaAnakId}" name="dp_nama_anak[]" placeholder="Masukkan Nama Anak ${anakCount}">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="${noAktaId}">No Tanggal Akta Kelahiran</label>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="${noAktaId}" name="dp_no_akta_kelahiran[]" placeholder="Masukkan No Akta">
                            </div>
                            <div class="col-md-4">
                                <input type="date" class="form-control" id="${tanggalAktaId}" name="dp_tanggal_akta_kelahiran[]">
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-danger" id="${hapusButtonId}" onclick="hapusAnak(${anakCount})">Hapus Anak ${anakCount}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;

            document.getElementById('data-anak').insertAdjacentHTML('beforeend', newForm);
        }

        function hapusAnak(anakIndex) {
            const formId = `form-anak-${anakIndex}`;
            const form = document.getElementById(formId);

            if (formId !== 'form-anak-1') {
                form.remove();
            }
        }
    </script>
@endsection

@endsection
