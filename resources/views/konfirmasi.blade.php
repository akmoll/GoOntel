@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">
            <div>
                            <h4 class="mb-0 text-sm">Halaman Konfirmasi Peminjaman</h4>
                          </div>
                          <table class="table table-bordered table-striped">
                            <tr>
                             <th width="10%">Nama Lengkap</th>
                             <th width="10%">NRP</th>
                             <th width="20%">Fakultas</th>
                             <th width="10%">Departemen</th>
                             <th width="20%">Alamat Rumah</th>
                             <th width="10%">Alamat Surabaya</th>
                             <th width="10%">No HP</th>
                             <th width="20%">Email</th>
                             <th width="10%">Tanggal Pinjam</th>
                             <th width="10%">Tanggal Kembali</th>
                             <th width="30%">Aksi</th>
                           </tr>
                           @foreach($data as $row)
                           <tr>
                            <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
                            <td>{{ $row->nama_peminjam }}</td>
                            <td>{{ $row->nrp }}</td>
                            <td>{{ $row->fakultas }}</td>
                            <td>{{ $row->departemen }}</td>
                            <td>{{ $row->alamat_rumah }}</td>
                            <td>{{ $row->alamat_sby }}</td>
                            <td>{{ $row->nohp }}</td>
                            <td>{{ $row->email}}</td>
                            <td>{{ $row->tanggal_pinjam }}</td>
                            <td>{{ $row->tanggal_kembali }}</td>
                            <td>
                             <form action="{{ route('konfirmasi_pembayaran.destroy', $row->id_form) }}" method="post">
                               <a href="{{ route('konfirmasi_pembayaran.show', $row->id) }}" class="btn btn-primary">Terima</a>
                               <a href="{{ route('konfirmasi_pembayaran.edit', $row->id) }}" class="btn btn-warning">Tolak</a>
                               @csrf
                             </form>
                           </td>
                           </tr>
                           @endforeach
                           </table>
                           {!! $data->links() !!}

                </div>
            </div>
        </div>


    </div>
@endsection
