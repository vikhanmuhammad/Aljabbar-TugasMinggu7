<table id="dataDriver" class="display table" width="100%">
  <thead class="table-dark">
      <tr>
          <th>No</th>
          <th>Nama Driver</th>
          <th>NIK</th>
          <th>Nomor SIM</th>
          <th>Action</th>
      </tr>
  </thead>
  <tbody>
    @foreach ($dataDrv as $num => $d)
      <tr>
          <td>{{ $num + 1 }}</td>
          <td>{{ $d->nama_driver }}</td>
          <td>{{ $d->nik }}</td>
          <td>{{ $d->nomor_sim }}</td>
          <td>
              <div class="dropdown">
                  <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #47a992">
                    Details
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/admin/driver/{{$d->id_driver}}/detail"><i class="fa-regular fa-eye"></i> Lihat</a></li>
                    <li><a class="dropdown-item" href="/admin/driver/{{$d->id_driver}}/edit"><i class="fa-regular fa-pen-to-square"></i> Edit</a></li>
                    <li>
                      <form id="form-hapus-driver-{{ $d->id_driver }}" class="form-valid" action="/admin/driver/delete/{{ $d->id_driver }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="dropdown-item" type="submit" id="id_driver" onclick="hapusDriver('{{ $d->id_driver }}')"><i class="fa-solid fa-trash"></i> Hapus</button>
                      </form>

                </li>
                  </ul>
              </div>
          </td>
      </tr>
      @endforeach
  </tbody>
</table>
