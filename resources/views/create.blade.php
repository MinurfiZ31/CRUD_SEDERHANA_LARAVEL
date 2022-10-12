 @extends('layouts.default')

 @section('content')
     <section>
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-7 mt-2"><h1>FORM TAMBAH BUKU</h1>
                </div>
                <div class="col-lg-7 mt-2">
                    <form action="{{ url('/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group  mt-2">
                            <label for="judul" class="mb-1 ">Judul Buku</label>
                            <input class="form-control" placeholder ="inputkan Judul Bukunya!!" type="text" name="judul_buku" id="judul_buku">
                        </div>

                        <!--Validasi judul buku-->
                        @if($errors->any('judul_buku'))
                        <div class="alert-danger text-danger">
                            {{$errors->first('judul_buku')}}
                        </div>
                        @endif
                        
                        <div class="form-group mt-2 " >
                            <label for="pengarang" class="mb-1">Pengarang Buku</label>
                            <input class="form-control" placeholder="inputkan Pengarang Buku!!" type="text" name="pengarang" id="pengarang">
                        </div>

                        <!--Validasi pengarang buku-->
                        @if($errors->any('pengarang'))
                        <div class="alert-danger text-danger">
                            {{$errors->first('pengarang')}}
                        </div>
                        @endif
                        <div class="form-group mt-2">
                            <label for="penerbit" class="mb-1">Penerbit Buku</label>
                            <input class="form-control" type="text" placeholder="inputkan Penerbit Buku!!"  name="penerbit" id="penerbit">
                        </div>

                        <!--Validasi penerbit buku-->
                        @if($errors->any('penerbit'))
                        <div class="alert-danger text-danger">
                            {{$errors->first('penerbit')}}
                        </div>
                        @endif

<!--------------------------->
                         <div class="form-group mt-2">
                            <label for="harga" class="mb-1">Harga Buku</label>
                            <input class="form-control" type="text"   placeholder="inputkan harga Buku!!"  name="harga" id="harga">
                        </div>

                        <!--Validasi harga buku-->
                        @if($errors->any('harga'))
                        <div class="alert-danger text-danger">
                            {{$errors->first('harga')}}
                        </div>
                        @endif

                        <div class="form-group mt-2">
                            <label for="isbn" class="mb-1"> ISBN Buku</label>
                            <input class="form-control" Placeholder="inputkan Nomor ISBN Bukunya!!"  type="number" name="isbn" id="ISBN" ="10">
                        </div>
                        <!--Validasi ISBN-->
                        @if($errors->any('isbn'))
                        <div class="alert-danger text-danger">
                            {{$errors->first('isbn')}}
                        </div>
                        @endif
                    
                        <div class="form-group mt-2">
                            <label for="thterbit" class="mb-1">Tahun Terbit </label>
                            <select type="text" class="form-select" aria-label="default select example" id=thterbit" name="thterbit" >
                              <option value="">Pilih Tahun Terbitnya..!!</option>
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
                        <!--Validasi Tahun Terbit-->
                        @if($errors->any('thterbit'))
                        <div class="alert-danger text-danger">
                            {{$errors->first('thterbit')}}
                        </div>
                        @endif
                        <div class="form-group mt-3">
                            <a class="btn btn-outline-success  ml-2 mb-3"href="{{ url('/') }}" class="form-group mt-1 ml-1 font-weight-bold"><<-KEMBALI KE HALAMAN UTAMA</a>
                        
                            <button class="btn btn-primary ml-2 mb-3" type="submit"  >TAMBAHKAN DATA</button>
                            
                       </div>
                        
                    </form>
                    <br><br><br>
                </div>
            </div>
        </div>
     </section>

     

 @endsection