@extends('layouts.default')

@section('content')
    <section>
       <div class="container mt-5">
           <div class="row">
               <div class="col-lg-8 mt-3"><h1> FORM EDIT DATA BUKU</h1></div>
               <div class="col-lg-8 mt-3">
                   <form action="{{ url('/update/'.$data->id) }}" method="POST" enctype="multipart/form-data">
                       @csrf
                       <div class="form-group mt-3">
                           <label for="judul_buku">Judul Buku*</label>
                           <input class="form-control" type="text" name="judul_buku" id="judul_buku" maxlength="255" value="{{ $data->judul_buku }}" required>
                       </div>

                       <!--Validasi judul buku-->
                       @if($errors->any('judul_buku'))
                       <div class="alert-danger text-danger">
                           {{$errors->first('judul_buku')}}
                       </div>
                       @endif

                       <div class="form-group mt-3">
                           <label for="pengarang">Pengarang Buku*</label>
                           <input class="form-control" type="text" name="pengarang" id="pengarang" maxlength="255" value="{{ $data->pengarang }}" required>
                       </div>

                       <!--Validasi pengarang buku-->
                       @if($errors->any('pengarang'))
                       <div class="alert-danger text-danger">
                           {{$errors->first('pengarang')}}
                       </div>
                       @endif

                       <div class="form-group mt-3">
                           <label for="penerbit">Penerbit Buku*</label>
                           <input class="form-control" type="text" name="penerbit" id="penerbit" maxlength="255" value="{{ $data->penerbit }}" required>
                       </div>

                       <!--Validasi penerbit buku-->
                       @if($errors->any('penerbit'))
                       <div class="alert-danger text-danger">
                           {{$errors->first('penerbit')}}
                       </div>
                       @endif

                       <!------------------->

                       <div class="form-group mt-3">
                        <label for="harga">Harga Buku*</label>
                        <input class="form-control" type="number" min="1" step="any" placeholder="Inputkan Harga Buku" name="harga" id="harga" maxlength="20" value="{{ $data->harga }}" required>
                    </div>

                    <!--Validasi harga buku-->
                    @if($errors->any('harga'))
                    <div class="alert-danger text-danger">
                        {{$errors->first('harga')}}
                    </div>
                    @endif

                       <div class="form-group mt-3">
                           <label for="ISBN"> ISBN Buku*</label>
                           <input class="form-control" type="number" name="isbn" id="ISBN" maxlength="13" value="{{ $data->isbn }}" required>
                        </div>

                       
                       <!--Validasi ISBN buku-->
                       @if($errors->any('isbn'))
                       <div class="alert-danger text-danger">
                           {{$errors->first('isbn')}}
                       </div>
                       @endif

                       <div class="form-group mt-3">
                           <label for="thterbit">Tahun Terbit</label>
                           <select class="form-select" aria-label="default select example" id="thterbit" name="thterbit"  value="" required>
                             <option selected>{{ $data->thterbit }}</option>
                             <option value="2022">2022</option>
                             <option value="2021">2021</option>
                             <option value="2020">2020</option>
                             <option value="2019">2019</option>
                             <option value="2018">2018</option>
                             <option value="2017">2017</option>
                             <option value="2016">2016</option>
                             <option value="2015">2015</option>
                             <option value="2014">2014</option>
                             <option value="2013">2013</option>
                           </select>
                       </div>

                       <!--Validasi tahun terbit-->
                       @if($errors->any('thterbit'))
                       <div class="alert-danger text-danger">
                           {{$errors->first('thterbit')}}
                       </div>
                       @endif
                       <div class="form-group mt-3 ml-2 font-weight-bold">
                           
                        <a class="btn btn-outline-success  ml-2 mb-3"href="{{ url('/') }}" class="form-group mt-1 ml-1 font-weight-bold"><<-KEMBALI KE HALAMAN UTAMA</a>
                        
                        <button class="btn btn-warning font-weight-bold ml-2 mb-3" type="submit"  onclick= "return confirm('Apakah Anda Benar ingin MENGUBAH Data ini...???');">Ubah Data</button>
                       
                      
                       
                      </div>
                       
                   </form>
                   <br><br><br>
               </div>
           </div>
       </div>
    </section>
@endsection