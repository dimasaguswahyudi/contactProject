<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Kontak') }}
        </h2>
    </x-slot>
    <div class="col-sm-12">
        <div class="card">
            <div class="pb-0 card-header">
                <div class="text-end">
                    <a href="{{ route('contact.create') }}" class="btn btn-primary">Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <div class="mb-3 col-3">
                    <div class="row">
                        <div class="col-2 d-flex justify-content-center">
                            <label for="">Search</label>
                        </div>
                        <div class="col">
                            <input type="text" name="txtSearch" id="txtSearch" class="form-control">
                        </div>
                    </div>
                </div>
                <div id="table_data">
                    @include('contact.table')
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script>
            $(document).ready(function() {
                $(document).on('click', '.pagination a', function(event) {
                    event.preventDefault();
                    let text = $('#txtSearch').val();
                    var page = $(this).attr('href').split('page=')[1];
                    fetch_data(page, text);
                });

                $('#txtSearch').on('keyup', function() {
                    var text = $('#txtSearch').val();
                    $.ajax({
                        url: "{{ route('contact.table') }}",
                        data: {
                            text: $('#txtSearch').val()
                        },
                        success: function(data) {
                            $('#table_data').html('');
                            $('#table_data').html(data);
                        }
                    });
                });
            });
            function fetch_data(page, text) {
                $.ajax({
                    url: "{{ url('contact/table') }}?page=" + page + "&cari=" + text,
                    success: function(data) {
                        $('#table_data').empty();
                        $('#table_data').html(data);
                    }
                });
            }
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
