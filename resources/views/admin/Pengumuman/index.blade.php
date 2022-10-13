<x-app-layout>
    <div class="card">
        <h5 class="card-header">Responsive Table</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                        <th>#</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                        <th>File</th>
                        <th>Link</th>
                        <th>User</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Pengumuman as $item)
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $item->judul }} </td>
                            <td> <a href="{{ asset($item->file) }}" target="_blank"> Lihat File </a> </td>
                            <td> {!! $item->isi !!} </td>
                            <td> <a href="{{ asset($item->gambar) }}" target="_blank"> Lihat Gambar </a> </td>
                            <td> {{ $item->link }} </td>
                            <td> {{ $item->users_id }} </td>

                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow "
                                        data-bs-toggle="dropdown" aria-expanded="true">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu " data-popper-placement="bottom-start"
                                        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 27px);">
                                        <a class="dropdown-item" href="{{ route('Pengumuman.edit', $item->id) }}"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <form action="{{ route('Pengumuman.destroy', $item->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf

                                            <button class="dropdown-item" type="SUBMIT"><i
                                                    class="bx bx-trash me-1"></i> Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
