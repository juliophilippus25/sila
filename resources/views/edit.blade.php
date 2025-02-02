<form action="{{ route('forms.update', $form->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- To send a PUT request for updating the form -->

    <label for="user_id">User ID:</label>
    <input type="text" name="user_id" id="user_id" value="{{ old('user_id', $form->user_id) }}" required>

    <label for="petugas_id">Petugas ID:</label>
    <input type="text" name="petugas_id" id="petugas_id" value="{{ old('petugas_id', $form->petugas_id) }}">

    <label for="type">Type:</label>
    <input type="text" name="type" id="type" value="{{ old('type', $form->type) }}">

    <label for="status">Status:</label>
    <input type="text" name="status" id="status" value="{{ old('status', $form->status) }}">

    <button type="submit">Update</button>
</form>
