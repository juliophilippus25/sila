<!-- resources/views/forms/create.blade.php -->
<form action="{{ route('forms.store') }}" method="POST">
    @csrf
    <label for="user_id">User ID:</label>
    <input type="text" name="user_id" id="user_id">

    <label for="petugas_id">Petugas ID:</label>
    <input type="text" name="petugas_id" id="petugas_id">

    <label for="type">Type:</label>
    <input type="text" name="type" id="type">

    <label for="status">Status:</label>
    <input type="text" name="status" id="status">

    <button type="submit">Submit</button>
</form>
