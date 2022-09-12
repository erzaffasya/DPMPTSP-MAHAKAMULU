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
                    <label class="form-label" for="basic-default-fullname">nama website</label>
                    <input type="text" class="form-control" id="basic-default-fullname" value="{{$ProfileWebsite->nama_website}}" name="nama_website">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">email</label>
                    <input type="text" class="form-control" id="basic-default-fullname" value="{{$ProfileWebsite->email}}" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">domain</label>
                    <input type="text" class="form-control" id="basic-default-fullname" value="{{$ProfileWebsite->domain}}" name="domain">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">nomor rekening</label>
                    <input type="text" class="form-control" id="basic-default-fullname" value="{{$ProfileWebsite->no_rekening}}" name="no_rekening">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">nomor telp</label>
                    <input type="text" class="form-control" id="basic-default-fullname" value="{{$ProfileWebsite->no_telp}}" name="no_telp">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">meta deskripsi</label>
                    <input type="text" class="form-control" id="basic-default-fullname" value="{{$ProfileWebsite->meta_deskripsi}}" name="meta_deskripsi">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">meta keyword</label>
                    <input type="text" class="form-control" id="basic-default-fullname" value="{{$ProfileWebsite->meta_keyword}}" name="meta_keyword">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">google maps</label>
                    <input type="text" class="form-control" id="basic-default-fullname" value="{{$ProfileWebsite->google_maps}}" name="google_maps">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">favicon</label>
                    <input class="form-control" type="file" name="favicon" id="formFile">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">background website</label>
                    <input class="form-control" type="file" name="background_website" id="formFile">
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
