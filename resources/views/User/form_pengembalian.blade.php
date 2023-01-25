@extends('user.layout.template-main')
@section('title', '{{ $title }}')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Pengembalian Buku</h4>
        </div>
        <div class="card-body" style="max-width: 40%">
            <form action="{{ route('kembalikan.buku') }}" method="POST" class="form-group">
                @csrf
                <div class="mb-3">
                    <label for="">Pilih Buku</label>
                    <select name="buku_id" id="" class="form-select">
                        <option disabled selected>--Pilih Opsi--</option>
                        @foreach ($bukus as $b)
                        <option value="{{ $b->id }}" {{ isset($buku_id) ?
                            $buku_id == $b->id ? "selected" : "" : "" }}>{{
                            $b->judul }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Tanggal Pengembalian</label>
                    <input type="date" name="tanggal_pengembalian" value="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Kondisi buku</label>
                    <select name="kondisi_buku_saat_dipinjam" id="" class="form-select"
                        name="kondisi_buku_saat_dipinjam">
                        <option value="" disabled selected>--Pilih Opsi--</option>
                        <option value="baik">Baik</option>
                        <option value="buruk">Buruk (20.000)</option>
                        <option value="hilang">Hilang (50.000)</option>
                    </select>
                </div>
                <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-outline-danger" onclick="window.location='{{ route('user.pengembalian') }}'">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection