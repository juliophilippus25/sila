<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Data Administrasi</title>
</head>
<body>

    <h1>Create Data Administrasi</h1>

    <form action="{{ route('administrasi.store', ['id' => $form_id]) }}" method="POST" enctype="multipart/form-data">
        @csrf


        <!-- Persyaratan (Dynamic fields) -->
        <h3>Persyaratan</h3>
        <div id="persyaratan">
            <label for="persyaratan[0][desc]">Description</label>
            <input type="text" name="persyaratan[0][desc]" required>

            <label for="persyaratan[0][checkbox]">Checkbox</label>
            <input type="checkbox" name="persyaratan[0][checkbox]" value="1">

            <label for="persyaratan[0][path_file]">Upload File</label>
            <input type="file" name="persyaratan[0][path_file]" accept="file/*">
        </div>

        <button type="button" id="add-persyaratan">Add Another Persyaratan</button>
        <br><br>

        <!-- Nomor Akta Perkawinan -->
        <label for="nomor_akta_perkawinan">Nomor Akta Perkawinan</label>
        <input type="text" name="nomor_akta_perkawinan" id="nomor_akta_perkawinan">
        <br>

        <!-- Tanggal Akta Perkawinan -->
        <label for="tanggal_akta_perkawinan">Tanggal Akta Perkawinan</label>
        <input type="date" name="tanggal_akta_perkawinan" id="tanggal_akta_perkawinan">
        <br>

        <!-- Tanggal Cetak Kutipan Akta -->
        <label for="tanggal_cetak_kutipan_akta">Tanggal Cetak Kutipan Akta</label>
        <input type="date" name="tanggal_cetak_kutipan_akta" id="tanggal_cetak_kutipan_akta">
        <br>

        <!-- Nama Petugas Entri Data -->
        <label for="nama_petugas_entri_data">Nama Petugas Entri Data</label>
        <input type="text" name="nama_petugas_entri_data" id="nama_petugas_entri_data">
        <br>

        <!-- NIP Petugas Entri Data -->
        <label for="nip_petugas_entri_data">NIP Petugas Entri Data</label>
        <input type="text" name="nip_petugas_entri_data" id="nip_petugas_entri_data">
        <br>

        <!-- Tanggal Entri Data -->
        <label for="tanggal_entri_data">Tanggal Entri Data</label>
        <input type="date" name="tanggal_entri_data" id="tanggal_entri_data">
        <br>

        <button type="submit">Submit</button>
    </form>

    <script>
        let counter = 1;

        document.getElementById('add-persyaratan').addEventListener('click', function () {
            const container = document.getElementById('persyaratan-container');
            const newItem = document.createElement('div');
            newItem.classList.add('persyaratan-item');

            newItem.innerHTML = `
                <label for="desc">Description</label>
                <input type="text" name="persyaratan[${counter}][desc]" required>
                <br>

                <label for="checkbox">Checkbox</label>
                <input type="checkbox" name="persyaratan[${counter}][checkbox]" value="1">
                <br>

                <label for="path_file">File Path</label>
                <input type="text" name="persyaratan[${counter}][path_file]">
                <br><br>
            `;
            container.appendChild(newItem);
            counter++;
        });
    </script>

</body>
</html>
