<tr>
    <td>{{$index}}</td>
    <td>{{$anggota->nama}}</td>
    <td>{{$anggota->pangkat}}</td>
    <td>{{$anggota->alamat}}</td>
    <td>{{$anggota->no_hp}}</td>
    <td>
        <button class="btn btn-sm btn-danger" wire:click="hapus">Hapus</button>
        <a href="{{route('anggota.edit', ['anggota' => $anggota])}}" class="btn btn-sm btn-warning">Edit</a>
    </td>
</tr>