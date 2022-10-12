@extends('layouts.default')


@section('content')
<div class="container-fluid">
   <div class="row">
        <div class="text-center">
            <h1>CRUD LARAVEL SEDERHANA</h1>
            <h7 class="  text-success ">PT Kimia Farma Plant Banjaran</h7> 
            <h5 class="text-danger">2022</h5>

        </div>
        
        <div>
            <a href="{{ url('create') }}" class="btn btn-outline-primary ml-2 mb-3" >Tambah[+]</a>
            <table class="table table-dark table-striped table-bordered border-success">
                <tr class="text-center">
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th class="text-warning">Harga</th>
                    <th>ISBN</th>
                    <th width=150>Tahun Terbit</th>
                    <th width=210>Aksi</th>
                </tr>
                <?php $i=1; ?>
                @foreach ($data as $index => $d)
                <tr class="text-center">
                    <td>{{$index +$data -> firstitem()}}</td>
                  
                    <td>{{ $d->judul_buku }}</td>
                    <td>{{ $d->pengarang }}</td>
                    <td>{{ $d->penerbit }}</td>
                    <td class="text-warning">{{ $d->harga }}</td>
                    <td>{{ $d->isbn }}</td>
                    <td>{{ $d->thterbit }}</td>
                    <td>
                        <a href="{{ url('/show/'.$d->id) }}" class="btn btn-outline-warning">Edit</a>
                        <a href="{{ url('/destroy/'.$d->id) }}" class="btn btn-outline-danger" onclick= "return confirm('Apakah Anda Benar ingin MENGHAPUS data ini...???');">Delete</a>
                    </td>
                </tr>

                

                @php
                    $i++;
                @endphp
                @endforeach
            </table>
            <div class="d-flex justify-content-end"> {{$data ->links() }} </div>
        </div>
    </div> 
</div>
@endsection
