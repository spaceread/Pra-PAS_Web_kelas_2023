<h1>Tabel Data Siswa</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($siswas as $siswa)
        <tr>
            <td>{{$siswa->name}}</td>
            <td>{{$siswa->age}}</td>
            <td>
                <a type="button" class="btn btn-primary" href="/data/{{$siswa->id}}">Detail</a>
            </td>
        </tr> 
        @endforeach
    </tbody>
</table>
@endsection