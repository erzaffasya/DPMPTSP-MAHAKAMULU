<x-app-layout>
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Form Tambah Data</h5>
            <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
            <form action="{{ route('ProfileWebsite.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Logo</label>
                    <input class="form-control" type="file" name="logo" id="formFile">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Slogan</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $ProfileWebsite->slogan ?? null }}" name="slogan">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">visi</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $ProfileWebsite->visi ?? null }}" name="visi">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">misi</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $ProfileWebsite->misi ?? null }}" name="misi">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">deskripsi</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $ProfileWebsite->deskripsi ?? null }}" name="deskripsi">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">video</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $ProfileWebsite->video ?? null }}" name="video">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">nama kadis</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $ProfileWebsite->nama_kadis ?? null }}" name="nama_kadis">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">foto kadis</label>
                    <input class="form-control" type="file" name="foto_kadis" id="formFile">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">alamat</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $ProfileWebsite->alamat ?? null }}" name="alamat">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">email</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $ProfileWebsite->email ?? null }}" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">no_telp</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $ProfileWebsite->no_telp ?? null }}" name="no_telp">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">google maps</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $ProfileWebsite->google_maps ?? null }}" name="google_maps">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">instagram</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $ProfileWebsite->instagram ?? null }}" name="instagram">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">facebook</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $ProfileWebsite->facebook ?? null }}" name="facebook">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">youtube</label>
                    <input type="text" class="form-control" id="basic-default-fullname"
                        value="{{ $ProfileWebsite->youtube ?? null }}" name="youtube">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @push('scripts')
        <script>
            tinymce.init({
                selector: 'textarea',
                plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
                toolbar_mode: 'floating',
            });
        </script>
    @endpush
</x-app-layout>
