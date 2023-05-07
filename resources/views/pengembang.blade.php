@extends('layouts.master')

@section('css')
  <link rel="stylesheet" type="text/css" href="{{asset('assets/extra-libs/prism/prism.css')}}">
@endsection


@section('content')

<div class="card-body analytics-info">
                                <h4 class="card-title text-center">Tim Pegembang Aplikasi</h4>
                            </div>
<div class="card-group">
     
    <div class="card">
        <img class="card-img-top img-responsive" src="https://account.kemenkeu.go.id/manage/uploads/060080900.jpg" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title">Rachman Sukri</h4>
                <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary">Project Manager</button>

        </div>
    </div>
    <div class="card">
        <img class="card-img-top img-responsive" src="https://account.kemenkeu.go.id/manage/uploads/199609102018011005.jpg" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title">Auliya Putra Azhari</h4>
                <button type="button" class="btn waves-effect waves-light btn-rounded btn-success">Programmer</button>

        </div>
    </div>
    <div class="card">
        <img class="card-img-top img-responsive" src="https://account.kemenkeu.go.id/manage/uploads/198504112010121002.jpg" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title">Yudha Pratama</h4>
                 <button type="button" class="btn waves-effect waves-light btn-rounded btn-warning">UI/UX</button>

        </div>
    </div>
</div>
@endsection


@section('script')
<script src="{{asset('assets/extra-libs/prism/prism.js')}}"></script>
@endsection
