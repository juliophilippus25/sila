<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Form</title>
</head>
<body>
    <h2>Create Form</h2>

    <!-- Suami & Istri Form -->
    <form id="suamiIstriForm" action="{{ route('forms.store') }}" method="POST">
        @csrf
        <h3>Suami (Husband) Information</h3>
        <label for="ds_nik">NIK (Suami):</label>
        <input type="text" name="ds_nik" required><br><br>

        <label for="ds_nama_lengkap">Nama Lengkap (Suami):</label>
        <input type="text" name="ds_nama_lengkap" required><br><br>

        <h3>Istri (Wife) Information</h3>
        <label for="di_nik">NIK (Istri):</label>
        <input type="text" name="di_nik" required><br><br>

        <label for="di_nama_lengkap">Nama Lengkap (Istri):</label>
        <input type="text" name="di_nama_lengkap" required><br><br>

        <hr>

        <!-- Ayah Dari Suami (Father of Husband) -->
        <h3>Ayah Dari Suami (Father of Husband)</h3>
        <label for="dads_nik">NIK (Ayah Suami):</label>
        <input type="text" name="dads_nik" required><br><br>

        <label for="dads_nama_lengkap">Nama Lengkap (Ayah Suami):</label>
        <input type="text" name="dads_nama_lengkap" required><br><br>

        <!-- Ibu Dari Suami (Mother of Husband) -->
        <h3>Ibu Dari Suami (Mother of Husband)</h3>
        <label for="dids_nik">NIK (Ibu Suami):</label>
        <input type="text" name="dids_nik" required><br><br>

        <label for="dids_nama_lengkap">Nama Lengkap (Ibu Suami):</label>
        <input type="text" name="dids_nama_lengkap" required><br><br>

        <hr>

        <!-- Ayah Dari Istri (Father of Wife) -->
        <h3>Ayah Dari Istri (Father of Wife)</h3>
        <label for="dadi_nik">NIK (Ayah Istri):</label>
        <input type="text" name="dadi_nik" required><br><br>

        <label for="dadi_nama_lengkap">Nama Lengkap (Ayah Istri):</label>
        <input type="text" name="dadi_nama_lengkap" required><br><br>

        <!-- Ibu Dari Istri (Mother of Wife) -->
        <h3>Ibu Dari Istri (Mother of Wife)</h3>
        <label for="didi_nik">NIK (Ibu Istri):</label>
        <input type="text" name="didi_nik" required><br><br>

        <label for="didi_nama_lengkap">Nama Lengkap (Ibu Istri):</label>
        <input type="text" name="didi_nama_lengkap" required><br><br>

        <hr>

        <!-- Saksi Form -->
        <h3>Data Saksi (Witness)</h3>
        <label for="data_saksi[0][nik]">NIK (Witness 1):</label>
        <input type="text" name="data_saksi[0][nik]" required><br><br>

        <label for="data_saksi[0][nama_lengkap]">Nama Lengkap (Witness 1):</label>
        <input type="text" name="data_saksi[0][nama_lengkap]" required><br><br>

        <hr>

        <!-- Perkawinan Form -->
        <h3>Data Perkawinan (Marriage Data)</h3>
        <label for="dp_tanggal_pemberkatan_perkawinan">Tanggal Pemberkatan Perkawinan:</label>
        <input type="date" name="dp_tanggal_pemberkatan_perkawinan" required><br><br>

        <label for="dp_nama_pemuka_agama">Nama Pemuka Agama:</label>
        <input type="text" name="dp_nama_pemuka_agama" required><br><br>

        <hr>

        <!-- Submit Button -->
        <button type="submit">Submit</button>
    </form>

</body>
</html>
