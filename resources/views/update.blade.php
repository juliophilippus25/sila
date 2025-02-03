@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ isset($form) ? 'Edit Form' : 'Create Form' }}</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ isset($form) ? route('form.update', $form->id) : route('form.store') }}" method="POST">
        @csrf
        @if(isset($form))
            @method('PUT')
        @endif

        <h3>Data Suami</h3>
        <div class="row">
            <div class="col-md-6">
                <label>NIK:</label>
                <input type="text" name="ds_nik" class="form-control" value="{{ old('ds_nik', $form->dataSuami->nik ?? '') }}" required>
            </div>
            <div class="col-md-6">
                <label>Nama Lengkap:</label>
                <input type="text" name="ds_nama_lengkap" class="form-control" value="{{ old('ds_nama_lengkap', $form->dataSuami->nama_lengkap ?? '') }}" required>
            </div>
        </div>

        <h3>Data Istri</h3>
        <div class="row">
            <div class="col-md-6">
                <label>NIK:</label>
                <input type="text" name="di_nik" class="form-control" value="{{ old('di_nik', $form->dataIstri->nik ?? '') }}" required>
            </div>
            <div class="col-md-6">
                <label>Nama Lengkap:</label>
                <input type="text" name="di_nama_lengkap" class="form-control" value="{{ old('di_nama_lengkap', $form->dataIstri->nama_lengkap ?? '') }}" required>
            </div>
        </div>

        <h3>Data Saksi</h3>
        <div id="saksi-container">
            @php $saksiCount = 0; @endphp
            @foreach($form->dataSaksi ?? [] as $saksi)
                <div class="saksi-item">
                    <div class="row">
                        <div class="col-md-6">
                            <label>NIK:</label>
                            <input type="text" name="data_saksi[{{ $saksiCount }}][nik]" class="form-control" value="{{ old("data_saksi.$saksiCount.nik", $saksi->nik) }}">
                        </div>
                        <div class="col-md-6">
                            <label>Nama Lengkap:</label>
                            <input type="text" name="data_saksi[{{ $saksiCount }}][nama_lengkap]" class="form-control" value="{{ old("data_saksi.$saksiCount.nama_lengkap", $saksi->nama_lengkap) }}">
                        </div>
                    </div>
                </div>
                @php $saksiCount++; @endphp
            @endforeach
        </div>
        <button type="button" id="addSaksi" class="btn btn-info mt-2">Tambah Saksi</button>

        <button type="submit" class="btn btn-primary mt-3">{{ isset($form) ? 'Update' : 'Submit' }}</button>
    </form>
</div>

<script>
    let saksiCount = {{ $saksiCount }};
    document.getElementById('addSaksi').addEventListener('click', function () {
        let saksiContainer = document.getElementById('saksi-container');
        let newSaksi = `
            <div class="saksi-item mt-2">
                <div class="row">
                    <div class="col-md-6">
                        <label>NIK:</label>
                        <input type="text" name="data_saksi[${saksiCount}][nik]" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label>Nama Lengkap:</label>
                        <input type="text" name="data_saksi[${saksiCount}][nama_lengkap]" class="form-control">
                    </div>
                </div>
            </div>
        `;
        saksiContainer.insertAdjacentHTML('beforeend', newSaksi);
        saksiCount++;
    });
</script>

@endsection
