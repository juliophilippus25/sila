<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($dataAdministrasi) ? 'Edit' : 'Create' }} Data Administrasi</title>
</head>
<body>

    <h1>{{ isset($dataAdministrasi) ? 'Edit' : 'Create' }} Data Administrasi</h1>

    <form action="{{ isset($dataAdministrasi) ? route('administrasi.update', ['id' => $id]) : route('administrasi.store', ['id' => $id]) }}"
          method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($dataAdministrasi))
            @method('PUT')
        @endif

        <!-- Persyaratan (Dynamic fields) -->
        <h3>Persyaratan</h3>
        <div id="persyaratan-container">
            @php $persyaratan = isset($dataAdministrasi) ? json_decode($dataAdministrasi->persyaratan, true) : []; @endphp
            @foreach ($persyaratan as $index => $item)
                <div class="persyaratan-item">
                    <label>Description</label>
                    <input type="text" name="persyaratan[{{ $index }}][desc]" value="{{ $item['desc'] }}" required>

                    <label>Checkbox</label>
                    <input type="checkbox" name="persyaratan[{{ $index }}][checkbox]" value="1" {{ $item['checkbox'] ? 'checked' : '' }}>

                    <label>Upload File</label>
                    <input type="file" name="persyaratan[{{ $index }}][path_file]" accept="file/*">

                    @if(isset($item['path_file']))
                        <p>Existing File: <a href="{{ asset('storage/' . $item['path_file']) }}" target="_blank">View File</a></p>
                    @endif
                </div>
            @endforeach
        </div>
        <button type="button" id="add-persyaratan">Add Another Persyaratan</button>
        <br><br>

        <!-- Nomor Akta Perkawinan -->
        <label for="nomor_akta_perkawinan">Nomor Akta Perkawinan</label>
        <input type="text" name="nomor_akta_perkawinan" id="nomor_akta_perkawinan"
               value="{{ old('nomor_akta_perkawinan', $dataAdministrasi->nomor_akta_perkawinan ?? '') }}">
        <br>

        <!-- Tanggal Akta Perkawinan -->
        <label for="tanggal_akta_perkawinan">Tanggal Akta Perkawinan</label>
        <input type="date" name="tanggal_akta_perkawinan" id="tanggal_akta_perkawinan"
               value="{{ old('tanggal_akta_perkawinan', $dataAdministrasi->tanggal_akta_perkawinan ?? '') }}">
        <br>

        <!-- Tanggal Cetak Kutipan Akta -->
        <label for="tanggal_cetak_kutipan_akta">Tanggal Cetak Kutipan Akta</label>
        <input type="date" name="tanggal_cetak_kutipan_akta" id="tanggal_cetak_kutipan_akta"
               value="{{ old('tanggal_cetak_kutipan_akta', $dataAdministrasi->tanggal_cetak_kutipan_akta ?? '') }}">
        <br>

        <!-- Nama Petugas Entri Data -->
        <label for="nama_petugas_entri_data">Nama Petugas Entri Data</label>
        <input type="text" name="nama_petugas_entri_data" id="nama_petugas_entri_data"
               value="{{ old('nama_petugas_entri_data', $dataAdministrasi->nama_petugas_entri_data ?? '') }}">
        <br>

        <!-- NIP Petugas Entri Data -->
        <label for="nip_petugas_entri_data">NIP Petugas Entri Data</label>
        <input type="text" name="nip_petugas_entri_data" id="nip_petugas_entri_data"
               value="{{ old('nip_petugas_entri_data', $dataAdministrasi->nip_petugas_entri_data ?? '') }}">
        <br>

        <!-- Tanggal Entri Data -->
        <label for="tanggal_entri_data">Tanggal Entri Data</label>
        <input type="date" name="tanggal_entri_data" id="tanggal_entri_data"
               value="{{ old('tanggal_entri_data', $dataAdministrasi->tanggal_entri_data ?? '') }}">
        <br>

        <button type="submit">{{ isset($dataAdministrasi) ? 'Update' : 'Submit' }}</button>
    </form>

    <script>
        let counter = {{ count($persyaratan) }};

        document.getElementById('add-persyaratan').addEventListener('click', function () {
            let container = document.getElementById('persyaratan-container');
            let newItem = document.createElement('div');
            newItem.classList.add('persyaratan-item');

            newItem.innerHTML = `
                <label>Description</label>
                <input type="text" name="persyaratan[${counter}][desc]" required>

                <label>Checkbox</label>
                <input type="checkbox" name="persyaratan[${counter}][checkbox]" value="1">

                <label>Upload File</label>
                <input type="file" name="persyaratan[${counter}][path_file]" accept="file/*">
            `;
            container.appendChild(newItem);
            counter++;
        });
    </script>

</body>
</html>
