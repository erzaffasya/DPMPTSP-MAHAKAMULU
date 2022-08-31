<x-app-layout>
    <div class="card">
        <h5 class="card-header">Data Kategori Berita</h5>
        <div class=" ">
            <table id="myTable" class="table">
                <thead>
                    <tr class="">
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($KategoriBerita as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_kategori }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>
                                <div class="btn-group mb-1">
                                    <button type="button" class="btn btn-outline-success">Info</button>
                                    <button type="button"
                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        data-display="static">
                                        <span class="sr-only">Info</span>
                                    </button>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('KategoriBerita.edit', $item->id) }}">
                                            <box-icon name='trash' type='solid'></box-icon>
                                        </a>
                                        <a class="dropdown-item">
                                            <form action="{{ route('KategoriBerita.destroy', $item->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn show_confirm">Hapus</button>
                                            </form>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>
        <script>
            $('.show_confirm').click(function(event) {
                var form = $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                        title: `Hapus Data?`,
                        text: "Jika data terhapus, data akan hilang selamanya!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        }
                    });
            });
        </script>
    @endpush
</x-app-layout>
