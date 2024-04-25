<table border="1">
    <tr>
        <td>id</td>
        <td>uuid</td>
        <td>nama</td>
        <td>id_mobil</td>
        <td>foto_mobil</td>
    </tr>

    @foreach ($userxcar as $datas)
    <tr>
        <td>{{ $datas->id }}</td>
        <td>{{ $datas->uuid }}</td>
        <td>{{ $datas->nama }}</td>
        <td>{{ $datas->kode_mobil }}</td>
        <td>{{ $datas->foto_mobil }}</td>

    </tr>

    @endforeach
</table>


