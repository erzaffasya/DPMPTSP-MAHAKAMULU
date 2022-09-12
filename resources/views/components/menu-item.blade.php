<li class="menu-item-has-children">
    <a class="" href="#">{{ $menu->nama_menu }}</a> <!-- Bener -->

    @if ($menu->children->count() > 0)
        <ul class="sub-menu">
            @foreach ($menu->children as $child)
                <x-menu-item :menu="$child" />
            @endforeach
        </ul>
    @endif

</li>

{{-- <div>
    {{ $menu->nama_menu }} ({{ $menu->id }})

    @foreach ($menu->children as $child)
        <div style="margin-left: 20px;">
            <x-menu-item :menu="$child" />
        </div>
    @endforeach
</div> --}}

{{-- <li class="menu-item-has-children">
    <a class="active" href="#">Profil DPMPTSP</a>
    <ul class="sub-menu">
        <li><a class="active" href="index.html">Tugas dan Fungsi</a></li>
        <li><a href="index-2.html">Visi Misi dan Maklumat</a></li>
        <li><a href="index-3.html">Struktur Organisasi</a></li>
        <li><a href="index-3.html">Dasar Hukum</a></li>
        <li class="menu-item-has-children">
            <a href="#">Pejabat Struktural</a>
            <ul class="sub-menu">
                <li><a href="blog-single.html">Kepala Dinas</a></li>
                <li><a href="blog-single-left-sidebar.html">Sekretariat</a></li>
            </ul>
        </li>
        <li class="menu-item-has-children">
            <a href="#">Data Pegawai</a>
            <ul class="sub-menu">
                <li><a href="blog-single.html">Post details right sidebar</a></li>
                <li><a href="blog-single-left-sidebar.html">Front Office</a></li>
                <li><a href="blog-single-fullwidth.html">Bidang satu</a>
                </li>
            </ul>
        </li>
    </ul>
</li> --}}
