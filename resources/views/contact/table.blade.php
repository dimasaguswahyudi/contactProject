<div class="table-responsive">
    <table class="table mt-10 table-bordered table-hover table-checkable display nowrap responsive">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No Telpon</th>
                <th>Dibuat Oleh</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->no_telp }}</td>
                    <td>{{ $item->user->name }}</td>
                    <td>
                        <div class="btn-group-wrapper">
                            <div class="m-b-30">
                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-secondary dropdown-toggle" id="btnGroupDrop1"
                                            type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Aksi</button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a
                                                class="dropdown-item"
                                                href="{{ route('user.edit', $item->id) }}">Edit</a>
                                            <form action="{{ route('user.destroy', $item->id) }}"
                                                id="form-delete-{{ $item->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item" type="button"
                                                    onclick="delete_row({{ $item->id }})">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->appends($_GET)->links() }}
</div>
