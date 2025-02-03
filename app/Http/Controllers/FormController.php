<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\DataSuami;
use App\Models\DataIstri;
use App\Models\DataAyahDariSuami;
use App\Models\DataIbuDariSuami;
use App\Models\DataAyahDariIstri;
use App\Models\DataIbuDariIstri;
use App\Models\DataSaksi;
use App\Models\DataPerkawinan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function index()
    {
        return view('create');

        // $forms = Form::all();
        // return response()->json($forms);
    }

    public function create()
    {
    }


    public function show($id)
    {
        $form = Form::findOrFail($id);
        $dataSuami = DataSuami::where('form_id', $id)->firstOrFail();
        $dataAyahDariSuami = DataAyahDariSuami::where('form_id', $id)->firstOrFail();
        $dataIbuDariSuami = DataIbuDariSuami::where('form_id', $id)->firstOrFail();
        $dataIstri = DataIstri::where('form_id', $id)->firstOrFail();
        $dataAyahDariIstri = DataAyahDariIstri::where('form_id', $id)->firstOrFail();
        $dataIbuDariIstri = DataIbuDariIstri::where('form_id', $id)->firstOrFail();
        $dataSaksi = DataSaksi::where('form_id', $id)->get();
        $dataPerkawinan = DataPerkawinan::where('form_id', $id)->firstOrFail();
        return response()->json([
            'message' => 'Form created successfully',
            'form' => $form,
            'data_suami' => $dataSuami,
            'data_ayah_dari_suami' => $dataAyahDariSuami,
            'data_ibu_dari_suami' => $dataIbuDariSuami,
            'data_istri' => $dataIstri,
            'data_ayah_dari_istri' => $dataAyahDariIstri,
            'data_ibu_dari_istri' => $dataIbuDariIstri,
            'data_saksi' => $dataSaksi,
            'data_perkawinan' => $dataPerkawinan,
        ], 200);
    }

    public function edit($id)
    {
        $form = Form::with(['dataSuami', 'dataIstri', 'dataAyahDariSuami','dataAyahDariIstri','dataIbuDariIstri','dataAyahDariIstri','dataSaksi'])->findOrFail($id);
        return view('update', compact('form'));
    }



    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'nullable|string',
            'status' => 'nullable|string',
            'data_saksi' => 'required|array'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $dataForm = $request->all();
        $form = Form::create($dataForm);

        $dataSuami = DataSuami::create([
            'form_id' => $form->id,
            'nik' => $request->ds_nik,
            'nomor_kk' => $request->ds_nomor_kk,
            'nomor_paspor' => $request->ds_nomor_paspor,
            'nama_lengkap' => $request->ds_nama_lengkap,
            'tempat_lahir' => $request->ds_tempat_lahir,
            'tanggal_lahir' => $request->ds_tanggal_lahir,
            'alamat' => $request->ds_alamat,
            'rt' => $request->ds_rt,
            'rw' => $request->ds_rw,
            'kode_pos' => $request->ds_kode_pos,
            'telepon' => $request->ds_telepon,
            'desa_kelurahan' => $request->ds_desa_kelurahan,
            'kecamatan' => $request->ds_kecamatan,
            'kabupaten_kota' => $request->ds_kabupaten_kota,
            'provinsi' => $request->ds_provinsi,
            'pendidikan_terakhir' => $request->ds_pendidikan_terakhir,
            'agama' => $request->ds_agama,
            'organisasi_penghayat' => $request->ds_organisasi_penghayat,
            'pekerjaan' => $request->ds_pekerjaan,
            'anak_ke' => $request->ds_anak_ke,
            'status_perkawinan' => $request->ds_status_perkawinan,
            'perkawinan_ke' => $request->ds_perkawinan_ke,
            'istri_ke' => $request->ds_istri_ke,
            'kewarganegaraan' => $request->ds_kewarganegaraan,
            'kebangsaan' => $request->ds_kebangsaan
        ]);

        $dataAyahDariSuami = DataAyahDariSuami::create([
            'form_id' => $form->id,
            'nik' => $request->dads_nik,
            'nama_lengkap' => $request->dads_nama_lengkap,
            'agama' => $request->dads_agama,
            'organisasi_penghayat' => $request->dads_organisasi_penghayat,
            'tanggal_lahir' => $request->dads_tanggal_lahir,
            'tempat_lahir' => $request->dads_tempat_lahir,
            'alamat' => $request->dads_alamat,
            'rt' => $request->dads_rt,
            'rw' => $request->dads_rw,
            'kode_pos' => $request->dads_kode_pos,
            'telepon' => $request->dads_telepon,
            'desa_kelurahan' => $request->dads_desa_kelurahan,
            'kecamatan' => $request->dads_kecamatan,
            'kabupaten_kota' => $request->dads_kabupaten_kota,
            'provinsi' => $request->dads_provinsi,
            'pekerjaan' => $request->dads_pekerjaan
        ]);

        $dataIbuDariSuami = DataIbuDariSuami::create([
            'form_id' => $form->id,
            'nik' => $request->dids_nik,
            'nama_lengkap' => $request->dids_nama_lengkap,
            'agama' => $request->dids_agama,
            'organisasi_penghayat' => $request->dids_organisasi_penghayat,
            'tanggal_lahir' => $request->dids_tanggal_lahir,
            'tempat_lahir' => $request->dids_tempat_lahir,
            'alamat' => $request->dids_alamat,
            'rt' => $request->dids_rt,
            'rw' => $request->dids_rw,
            'kode_pos' => $request->dids_kode_pos,
            'telepon' => $request->dids_telepon,
            'desa_kelurahan' => $request->dids_desa_kelurahan,
            'kecamatan' => $request->dids_kecamatan,
            'kabupaten_kota' => $request->dids_kabupaten_kota,
            'provinsi' => $request->dids_provinsi,
            'pekerjaan' => $request->dids_pekerjaan
        ]);

        $dataIstri = DataIstri::create([
            'form_id' => $form->id,
            'nik' => $request->di_nik,
            'nomor_kk' => $request->di_nomor_kk,
            'nomor_paspor' => $request->di_nomor_paspor,
            'nama_lengkap' => $request->di_nama_lengkap,
            'tempat_lahir' => $request->di_tempat_lahir,
            'tanggal_lahir' => $request->di_tanggal_lahir,
            'alamat' => $request->di_alamat,
            'rt' => $request->di_rt,
            'rw' => $request->di_rw,
            'kode_pos' => $request->di_kode_pos,
            'telepon' => $request->di_telepon,
            'desa_kelurahan' => $request->di_desa_kelurahan,
            'kecamatan' => $request->di_kecamatan,
            'kabupaten_kota' => $request->di_kabupaten_kota,
            'provinsi' => $request->di_provinsi,
            'pendidikan_terakhir' => $request->di_pendidikan_terakhir,
            'agama' => $request->di_agama,
            'organisasi_penghayat' => $request->di_organisasi_penghayat,
            'pekerjaan' => $request->di_pekerjaan,
            'anak_ke' => $request->di_anak_ke,
            'status_perkawinan' => $request->di_status_perkawinan,
            'perkawinan_ke' => $request->di_perkawinan_ke,
            'kewarganegaraan' => $request->di_kewarganegaraan,
            'kebangsaan' => $request->di_kebangsaan
        ]);


        $dataAyahDariIstri = DataAyahDariIstri::create([
            'form_id' => $form->id,
            'nik' => $request->dadi_nik,
            'nama_lengkap' => $request->dadi_nama_lengkap,
            'agama' => $request->dadi_agama,
            'organisasi_penghayat' => $request->dadi_organisasi_penghayat,
            'tanggal_lahir' => $request->dadi_tanggal_lahir,
            'tempat_lahir' => $request->dadi_tempat_lahir,
            'alamat' => $request->dadi_alamat,
            'rt' => $request->dadi_rt,
            'rw' => $request->dadi_rw,
            'kode_pos' => $request->dadi_kode_pos,
            'telepon' => $request->dadi_telepon,
            'desa_kelurahan' => $request->dadi_desa_kelurahan,
            'kecamatan' => $request->dadi_kecamatan,
            'kabupaten_kota' => $request->dadi_kabupaten_kota,
            'provinsi' => $request->dadi_provinsi,
            'pekerjaan' => $request->dadi_pekerjaan
        ]);

        $dataIbuDariIstri = DataIbuDariIstri::create([
            'form_id' => $form->id,
            'nik' => $request->didi_nik,
            'nama_lengkap' => $request->didi_nama_lengkap,
            'agama' => $request->didi_agama,
            'organisasi_penghayat' => $request->didi_organisasi_penghayat,
            'tanggal_lahir' => $request->didi_tanggal_lahir,
            'tempat_lahir' => $request->didi_tempat_lahir,
            'alamat' => $request->didi_alamat,
            'rt' => $request->didi_rt,
            'rw' => $request->didi_rw,
            'kode_pos' => $request->didi_kode_pos,
            'telepon' => $request->didi_telepon,
            'desa_kelurahan' => $request->didi_desa_kelurahan,
            'kecamatan' => $request->didi_kecamatan,
            'kabupaten_kota' => $request->didi_kabupaten_kota,
            'provinsi' => $request->didi_provinsi,
            'pekerjaan' => $request->didi_pekerjaan
        ]);

        $dataSaksi = collect($request->data_saksi)->map(function ($item) use ($form) {
            return DataSaksi::create([
                'form_id' => $form->id,
                'urutan' => $item['urutan'] ?? null,
                'nik' => $item['nik'] ?? null,
                'nama_lengkap' => $item['nama_lengkap'] ?? null,
                'pendidikan_terakhir' => $item['pendidikan_terakhir'] ?? null,
                'agama' => $item['agama'] ?? null,
                'organisasi_penghayat' => $item['organisasi_penghayat'] ?? null,
                'tanggal_lahir' => $item['tanggal_lahir'] ?? null,
                'alamat' => $item['alamat'] ?? null,
                'rt' => $item['rt'] ?? null,
                'rw' => $item['rw'] ?? null,
                'kode_pos' => $item['kode_pos'] ?? null,
                'telepon' => $item['telepon'] ?? null,
                'desa_kelurahan' => $item['desa_kelurahan'] ?? null,
                'kecamatan' => $item['kecamatan'] ?? null,
                'kabupaten_kota' => $item['kabupaten_kota'] ?? null,
                'pronvisi' => $item['pronvisi'] ?? null,
            ]);
        });

        $dataPerkawinan = DataPerkawinan::create([
            'form_id' => $form->id,
            'tanggal_pemberkatan_perkawinan' => $request->dp_tanggal_pemberkatan_perkawinan,
            'tanggal_melapor' => $request->dp_tanggal_melapor,
            'pukul' => $request->dp_pukul,
            'pendidikan_terakhir' => $request->dp_pendidikan_terakhir,
            'agama' => $request->dp_agama,
            'organisasi_penghayat' => $request->dp_organisasi_penghayat,
            'nama_badan_peradilan' => $request->dp_nama_badan_peradilan,
            'nomor_putusan_pengadilan' => $request->dp_nomor_putusan_pengadilan,
            'tanggal_putusan_pengadilan' => $request->dp_tanggal_putusan_pengadilan,
            'nama_pemuka_agama' => $request->dp_nama_pemuka_agama,
            'ijin_perwakilan_bagi_wna_nomor' => $request->dp_ijin_perwakilan_bagi_wna_nomor,
            'jumlah_anak_terakui' => $request->dp_jumlah_anak_terakui,
            'nama_anak' => json_encode($request->dp_nama_anak),
            'no_tgl_akta_kelahiran' => json_encode($request->dp_no_tgl_akta_kelahiran),
        ]);


        return response()->json([
            'message' => 'Form created successfully',
            'form' => $form,
            'data_suami' => $dataSuami,
            'data_ayah_dari_suami' => $dataAyahDariSuami,
            'data_ibu_dari_suami' => $dataIbuDariSuami,
            'data_istri' => $dataIstri,
            'data_ayah_dari_istri' => $dataAyahDariIstri,
            'data_ibu_dari_istri' => $dataIbuDariIstri,
            'data_saksi' => $dataSaksi,
            'data_perkawinan' => $dataPerkawinan,

        ], 201);
    }

    public function update(Request $request, $id)
    {
        $form = Form::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'type' => 'nullable|string',
            'status' => 'nullable|string',
            'data_saksi' => 'nullable|array'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Update form details
        $form->update($request->only(['type', 'status']));

        // Update Data Suami
        $dataSuami = DataSuami::updateOrCreate(
            ['form_id' => $form->id],
            [ 'nik' => $request->ds_nik,
            'nomor_kk' => $request->ds_nomor_kk,
            'nomor_paspor' => $request->ds_nomor_paspor,
            'nama_lengkap' => $request->ds_nama_lengkap,
            'tempat_lahir' => $request->ds_tempat_lahir,
            'tanggal_lahir' => $request->ds_tanggal_lahir,
            'alamat' => $request->ds_alamat,
            'rt' => $request->ds_rt,
            'rw' => $request->ds_rw,
            'kode_pos' => $request->ds_kode_pos,
            'telepon' => $request->ds_telepon,
            'desa_kelurahan' => $request->ds_desa_kelurahan,
            'kecamatan' => $request->ds_kecamatan,
            'kabupaten_kota' => $request->ds_kabupaten_kota,
            'provinsi' => $request->ds_provinsi,
            'pendidikan_terakhir' => $request->ds_pendidikan_terakhir,
            'agama' => $request->ds_agama,
            'organisasi_penghayat' => $request->ds_organisasi_penghayat,
            'pekerjaan' => $request->ds_pekerjaan,
            'anak_ke' => $request->ds_anak_ke,
            'status_perkawinan' => $request->ds_status_perkawinan,
            'perkawinan_ke' => $request->ds_perkawinan_ke,
            'istri_ke' => $request->ds_istri_ke,
            'kewarganegaraan' => $request->ds_kewarganegaraan,
            'kebangsaan' => $request->ds_kebangsaan
            ]
        );


        // Update Data Istri
        $dataIstri = DataIstri::updateOrCreate(
            ['form_id' => $form->id],
            [ 'nik' => $request->di_nik,
            'nomor_kk' => $request->di_nomor_kk,
            'nomor_paspor' => $request->di_nomor_paspor,
            'nama_lengkap' => $request->di_nama_lengkap,
            'tempat_lahir' => $request->di_tempat_lahir,
            'tanggal_lahir' => $request->di_tanggal_lahir,
            'alamat' => $request->di_alamat,
            'rt' => $request->di_rt,
            'rw' => $request->di_rw,
            'kode_pos' => $request->di_kode_pos,
            'telepon' => $request->di_telepon,
            'desa_kelurahan' => $request->di_desa_kelurahan,
            'kecamatan' => $request->di_kecamatan,
            'kabupaten_kota' => $request->di_kabupaten_kota,
            'provinsi' => $request->di_provinsi,
            'pendidikan_terakhir' => $request->di_pendidikan_terakhir,
            'agama' => $request->di_agama,
            'organisasi_penghayat' => $request->di_organisasi_penghayat,
            'pekerjaan' => $request->di_pekerjaan,
            'anak_ke' => $request->di_anak_ke,
            'status_perkawinan' => $request->di_status_perkawinan,
            'perkawinan_ke' => $request->di_perkawinan_ke,
            'istri_ke' => $request->di_istri_ke,
            'kewarganegaraan' => $request->di_kewarganegaraan,
            'kebangsaan' => $request->di_kebangsaan]
        );


        // Update Data Ayah & Ibu from Suami
        DataAyahDariSuami::updateOrCreate(
            ['form_id' => $form->id],
            ['nik' => $request->dads_nik,
            'nama_lengkap' => $request->dads_nama_lengkap,
            'agama' => $request->dads_agama,
            'organisasi_penghayat' => $request->dads_organisasi_penghayat,
            'tanggal_lahir' => $request->dads_tanggal_lahir,
            'tempat_lahir' => $request->dads_tempat_lahir,
            'alamat' => $request->dads_alamat,
            'rt' => $request->dads_rt,
            'rw' => $request->dads_rw,
            'kode_pos' => $request->dads_kode_pos,
            'telepon' => $request->dads_telepon,
            'desa_kelurahan' => $request->dads_desa_kelurahan,
            'kecamatan' => $request->dads_kecamatan,
            'kabupaten_kota' => $request->dads_kabupaten_kota,
            'provinsi' => $request->dads_provinsi,
            'pekerjaan' => $request->dads_pekerjaan]
        );


        DataIbuDariSuami::updateOrCreate(
            ['form_id' => $form->id],
            ['nik' => $request->dids_nik,
            'nama_lengkap' => $request->dids_nama_lengkap,
            'agama' => $request->dids_agama,
            'organisasi_penghayat' => $request->dids_organisasi_penghayat,
            'tanggal_lahir' => $request->dids_tanggal_lahir,
            'tempat_lahir' => $request->dids_tempat_lahir,
            'alamat' => $request->dids_alamat,
            'rt' => $request->dids_rt,
            'rw' => $request->dids_rw,
            'kode_pos' => $request->dids_kode_pos,
            'telepon' => $request->dids_telepon,
            'desa_kelurahan' => $request->dids_desa_kelurahan,
            'kecamatan' => $request->dids_kecamatan,
            'kabupaten_kota' => $request->dids_kabupaten_kota,
            'provinsi' => $request->dids_provinsi,
            'pekerjaan' => $request->dids_pekerjaan]
        );



        DataAyahDariIstri::updateOrCreate(
            ['form_id' => $form->id],
            ['nik' => $request->dadi_nik,
            'nama_lengkap' => $request->dadi_nama_lengkap,
            'agama' => $request->dadi_agama,
            'organisasi_penghayat' => $request->dadi_organisasi_penghayat,
            'tanggal_lahir' => $request->dadi_tanggal_lahir,
            'tempat_lahir' => $request->dadi_tempat_lahir,
            'alamat' => $request->dadi_alamat,
            'rt' => $request->dadi_rt,
            'rw' => $request->dadi_rw,
            'kode_pos' => $request->dadi_kode_pos,
            'telepon' => $request->dadi_telepon,
            'desa_kelurahan' => $request->dadi_desa_kelurahan,
            'kecamatan' => $request->dadi_kecamatan,
            'kabupaten_kota' => $request->dadi_kabupaten_kota,
            'provinsi' => $request->dadi_provinsi,
            'pekerjaan' => $request->dadi_pekerjaan]
        );

        DataIbuDariIstri::updateOrCreate(
            ['form_id' => $form->id],
            ['nik' => $request->didi_nik,
            'nama_lengkap' => $request->didi_nama_lengkap,
            'agama' => $request->didi_agama,
            'organisasi_penghayat' => $request->didi_organisasi_penghayat,
            'tanggal_lahir' => $request->didi_tanggal_lahir,
            'tempat_lahir' => $request->didi_tempat_lahir,
            'alamat' => $request->didi_alamat,
            'rt' => $request->didi_rt,
            'rw' => $request->didi_rw,
            'kode_pos' => $request->didi_kode_pos,
            'telepon' => $request->didi_telepon,
            'desa_kelurahan' => $request->didi_desa_kelurahan,
            'kecamatan' => $request->didi_kecamatan,
            'kabupaten_kota' => $request->didi_kabupaten_kota,
            'provinsi' => $request->didi_provinsi,
            'pekerjaan' => $request->didi_pekerjaan]
        );


        // Update Data Saksi
        if ($request->has('data_saksi')) {
            foreach ($request->data_saksi as $item) {
                DataSaksi::updateOrCreate(
                    ['form_id' => $form->id, 'nik' => $item['nik'] ?? null],
                    [
                        'urutan' => $item['urutan'] ?? null,
                        'nama_lengkap' => $item['nama_lengkap'] ?? null,
                        'pendidikan_terakhir' => $item['pendidikan_terakhir'] ?? null,
                        'agama' => $item['agama'] ?? null,
                        'organisasi_penghayat' => $item['organisasi_penghayat'] ?? null,
                        'tanggal_lahir' => $item['tanggal_lahir'] ?? null,
                        'alamat' => $item['alamat'] ?? null,
                        'rt' => $item['rt'] ?? null,
                        'rw' => $item['rw'] ?? null,
                        'kode_pos' => $item['kode_pos'] ?? null,
                        'telepon' => $item['telepon'] ?? null,
                        'desa_kelurahan' => $item['desa_kelurahan'] ?? null,
                        'kecamatan' => $item['kecamatan'] ?? null,
                        'kabupaten_kota' => $item['kabupaten_kota'] ?? null,
                        'provinsi' => $item['provinsi'] ?? null,
                    ]
                );
            }
        }

        return response()->json([
            'message' => 'Form updated successfully',
            'form' => $form,
            'data_suami' => $dataSuami ?? null,
            'data_istri' => $dataIstri ?? null,
            'data_ayah_dari_suami' => $dataAyahDariSuami ?? null,
            'data_ibu_dari_suami' => $dataIbuDariSuami ?? null,
            'data_ayah_dari_istri' => $dataAyahDariIstri ?? null,
            'data_ibu_dari_istri' => $dataIbuDariIstri ?? null,
            'data_saksi' => $request->has('data_saksi') ? $request->data_saksi : null,
        ], 200);
    }

    public function destroy($id)
    {
        $form = Form::findOrFail($id);

        $form->delete();

        return response()->json(['message' => 'Form deleted successfully']);
    }
}

