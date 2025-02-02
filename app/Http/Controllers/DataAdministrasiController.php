<?php

namespace App\Http\Controllers;
use App\Models\DataAdministrasi;
use App\Models\Form;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class DataAdministrasiController extends Controller
{
    public function index($id)
    {


        $form = Form::findOrFail($id);
        $administrasi = DataAdministrasi::where('form_id', $id)->firstOrFail();

        return response()->json([
            'message' => 'Form created successfully',
            'form' => $form,
            'administrasi' => $administrasi
        ], 200);
        // $form = Form::find($id);
        // $form = Form::find($id);

        // if (!$form) {
        //     return redirect()->route('forms.index')->with('error', 'Form not found.');
        // }

        // return view('create_administrasi', [
        //     'form_id' => $id,
        //     'form' => $form,
        // ]);
    }

    public function store(Request $request, $id)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'persyaratan' => 'required|array|min:1',
            'persyaratan.*.desc' => 'required|string',
            'persyaratan.*.checkbox' => 'required|boolean',
            'persyaratan.*.path_file' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => 'Validation failed',
                'messages' => $validator->errors()
            ], 422);
        }

        Log::info('Request Data:', $request->all());

        // Process persyaratan and handle file uploads
        $persyaratan = collect($request->persyaratan)->map(function ($item, $index) use ($request) {
            if ($request->hasFile("persyaratan.{$index}.path_file")) {
                $file = $request->file("persyaratan.{$index}.path_file");

                if ($file->isValid()) {
                    // Generate a unique file name
                    $uniqueFileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

                    // Store file in 'storage/app/public/persyaratan_files'
                    $path = $file->storeAs('persyaratan_files', $uniqueFileName, 'public');

                    return [
                        'desc' => $item['desc'],
                        'checkbox' => $item['checkbox'],
                        'path_file' => $path, // Store file path
                    ];
                }
            }

            return [
                'desc' => $item['desc'],
                'checkbox' => $item['checkbox'],
                'path_file' => null, // No file uploaded
            ];
        })->toArray();

        // Save to database
        $dataAdministrasi = DataAdministrasi::create([
            'form_id' => $id,
            'persyaratan' => json_encode($persyaratan), // Store as JSON
            'nomor_akta_perkawinan' => $request->nomor_akta_perkawinan,
            'tanggal_akta_perkawinan' => $request->tanggal_akta_perkawinan,
            'tanggal_cetak_kutipan_akta' => $request->tanggal_cetak_kutipan_akta,
            'nama_petugas_entri_data' => $request->nama_petugas_entri_data,
            'nip_petugas_entri_data' => $request->nip_petugas_entri_data,
            'tanggal_entri_data' => $request->tanggal_entri_data,
        ]);

        return response()->json([
            'message' => 'Data administrasi created successfully',
            'data_administrasi' => $dataAdministrasi
        ], 201);
    }


}
