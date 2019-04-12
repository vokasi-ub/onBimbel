@extends('master.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->



    <!-- Content Header (Page header) -->

    <!-- Content Header (Page header) -->

    <section class="content-header">

<h1>Tambah Siswa</h1>

<br>

      

    



          <div class="box box-info">

            <div class="box-header with-border">

              <h3 class="box-title">Horizontal Form</h3>

            </div>

            <!-- /.box-header -->

            <!-- form start -->


            <form class="form-horizontal" action="/tambahsiswa/tambah" method="post">

               {{ csrf_field() }}

               @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

              <div class="box-body">
                  <input type="hidden" name="idSiswa" > <br/>
                <div class="form-group">
                
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Siswa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="namaSiswa"  placeholder="Nama Siswa">
                  </div>

                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Alamat"  placeholder="Alamat">
                  </div>

                  <label for="inputEmail3" class="col-sm-2 control-label">No Telf</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="noTelf"  placeholder="No Telf/HP">
                  </div>

                  <label for="inputEmail3" class="col-sm-2 control-label">Kelas</label>
                  <div class="col-sm-10">
                    <select name="kelas" class="form-control" placeholder="Kelas">
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- /.box-body -->

              <div class="box-footer">

                <button type="submit" class="btn btn-default" data-dismiss="modal">Cancel</button>

                <button type="submit" class="btn btn-info pull-right">Submit</button>

              </div>

              <!-- /.box-footer -->

            </form>

          </div>

        </section>

        



    <!-- /.content -->

  

    <!-- /.content -->

@endsection