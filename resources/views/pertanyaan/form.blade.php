@extends ('adminlte.master')

@section('content')
    <div class="ml-3">
        <form action="/pertanyaan" method="POST">
            @csrf
            <div class="form-group">
                <label for="judul">Judul :</label>
                <input type="text" name="judul" class="form-control" placeholder="Masukan judul" id="judul">
            </div>
            <div class="form-group">
                <label for="isi">Isi:</label>
                <input type="text" name="isi" class="form-control" placeholder="Masukan Isi" id="isi">
            </div>
            <input type="hidden" name="tanggal_dibuat" value="date()">

            <button type="submit" class="btn btn-primary">Submit</button>
        </form> 
    </div>
@endsection