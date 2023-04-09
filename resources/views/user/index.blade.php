@push('title')
    <h4>Master Users</h4>
@endpush
<x-app-layout>
    <div class="col-sm-12">
        <div class="card">
            <div class="pb-0 card-header">
                <div class="text-end">
                    <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display" id="basic-1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->getRoleNames()[0] }}</td>
                                    <td>
                                        <div class="btn-group-wrapper">
                                            <div class="m-b-30">
                                                <div class="btn-group" role="group"
                                                    aria-label="Button group with nested dropdown">
                                                    <div class="btn-group" role="group">
                                                        <button class="btn btn-secondary dropdown-toggle"
                                                            id="btnGroupDrop1" type="button" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">Aksi</button>
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
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script>
            function delete_row(id) {
                Swal.fire({
                    title: 'Apakah Anda Yakin?',
                    text: "Data Anda Akan dihilangkan pada list!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: "Tidak",
                    confirmButtonText: 'Ya, Hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Deleted!',
                            'File anda Terhapus.',
                            'Berhasil'
                        )
                        $('#form-delete-' + id).submit();
                    }
                })
            }
        </script>
    @endpush
</x-app-layout>
