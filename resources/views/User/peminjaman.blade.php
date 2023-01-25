@extends('user.layout.template-main')
@section('title', '{{ $title }}')
@section('content')
    <div class="row">
        <div class="col-lg-11 mx-auto">
            @if (session('status'))
                <div class="alert alert-{{ session('status') }}">
                    {{ session('message') }}
                </div>
            @endif
            <div class="row text-center">
                <div class="col-9">
                    <h1>Buku yang sedang dipinjam</h1>
                </div>
                <div class="col-3">
                    <button type="button" class="btn btn-outline-primary btn-sm col-lg-5 mt-3 px-0" onclick="window.location='{{ route('user.pinjam') }}'">
                <svg class="icon mr-2">
                    <use xlink:href="{{ asset('storage/vendors/@coreui/icons/svg/free.svg#cil-plus') }}"></use>
                </svg>
                Pinjam
            </button>
                </div>
            </div>
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul Buku</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Kondisi Buku</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peminjamans as $key => $peminjaman)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $peminjaman->buku->judul }}</td>
                                <td>{{ $peminjaman->tanggal_peminjaman }}</td>
                                <td>{{ $peminjaman->tanggal_pengembalian }}</td>
                                <td>{{ $peminjaman->kondisi_buku_saat_dipinjam }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection