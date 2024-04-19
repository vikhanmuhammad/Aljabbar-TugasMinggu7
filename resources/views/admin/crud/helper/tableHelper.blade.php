<table id="dataHelper" class="display table" width="100%">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama Helper</th>
            <th>NIK</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataHlp as $num => $d)
        <tr>
            <td>{{ $num + 1 }}</td>
            <td>{{ $d->nama_helper }}</td>
            <td>{{ $d->nik }}</td>
            <td>
                <div class="dropdown">
                    <button class="btn dropdown-toggle text-light" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #47a992">
                      Details
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/admin/helper/{{$d->id_helper}}/detail"><i class="fa-regular fa-eye"></i> Lihat</a></li>
                      <li><a class="dropdown-item" href="/admin/helper/{{$d->id_helper}}/edit"><i class="fa-regular fa-pen-to-square"></i> Edit</a></li>
                      <li>
                            <form class="form-valid" action="/admin/helper/delete/{{ $d->id_helper }}" method="POST" id="formDeleteHlp-{{$d->id_helper}}">
                                @csrf
                                @method('DELETE')
                                <button class="dropdown-item" type="submit" id="id_helper" onclick="hapusHelper('{{ $d->id_helper }}')"><i class="fa-solid fa-trash"></i> Hapus</button>
                            </form>

                      </li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


