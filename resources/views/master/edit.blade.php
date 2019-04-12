@extends('master.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->



    <!-- Content Header (Page header) -->

    <!-- Content Header (Page header) -->

    <section class="content-header">

<h1>Edit Siswa</h1>

<br>

      

    



          <div class="box box-info">

            <div class="box-header with-border">

              <h3 class="box-title">Horizontal Form</h3>

            </div>

            <!-- /.box-header -->

            <!-- form start -->

            @foreach($bimblesiswa as $li)

            <form class="form-horizontal" action="/datasiswa/update" method="post">

               {{ csrf_field() }}

              <div class="box-body">
                  <input type="hidden" name="idSiswa" value="{{ $li->idSiswa }}"> <br/>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Siswa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="namaSiswa" value="{{ $li->namaSiswa }}" placeholder="Nama Siswa">
                  </div>

                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Alamat" value="{{ $li->Alamat }}" placeholder="Tanggal kembali">
                  </div>

                  <label for="inputEmail3" class="col-sm-2 control-label">No Telf</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="noTelf" value="{{ $li->noTelf }}" placeholder="ID Mobil">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Kelas</label>
                  <div class="col-sm-10">
                    <select name="kelas" class="form-control" placeholder="Kelas" value="{{$li->kelas}}">
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- /.box-body -->

              <div class="box-footer">

                <button type="submit" class="btn btn-default" ><a href="/datasiswa/index">kembali</a></button>

                <button type="submit" class="btn btn-info pull-right">Submit</button>

              </div>

              <!-- /.box-footer -->

            </form>

          </div>

        </section>

        @endforeach



    <!-- /.content -->

  

    <!-- /.content -->

@endsection