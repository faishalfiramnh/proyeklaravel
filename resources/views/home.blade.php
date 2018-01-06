@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <head>
        <link href="{{ URL::asset('vendor/semantic/dist/semantic.min.css') }}" rel="stylesheet">
        <script src="{{ URL::asset('vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('vendor/semantic/dist/semantic.min.js') }}"></script>
        <style type="text/css">
            .spasi{
                margin-left: 20px;
            }
        </style>
        <link href="{{ URL('cssdatatables/css/datatables.bootstrap.css') }}" rel="stylesheet">
         <script src="{{ URL('cssdatatables/js/jquery.dataTables.min.js') }}"></script>
         <script src="{{ URL::asset('vendor/datatables/buttons.server-side.js') }}"></script>
    </head>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <i class="book icon"></i>
                <i class="calendar icon"></i> 
                <i class="building icon"></i> 
                <i class="rocket icon"></i>
                <i class="suitcase icon"></i> 
                <i class="hourglass full icon"></i>  
                </div>
                
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <body>
                    <div class="ui list">
                        @foreach($semuaData as $isi )
                        <div class="col-md-10 col-md-offset-2" margin-left>
                            <h3>Data</h3>  
                            <table class="table" id="tabel-kelas">
                                <thead>
                                    <tr>
                                        <td>mata kuliah <i class="book icon">|</i></td>
                                        <td>Raungan <i class="suitcase icon"></i></td>
                                        <td>Gedung <i class="building icon"></td>
                                        <td>lantai <i class="rocket icon"></i></td>
                                        <td>Ketua Kelas</td>
                                    </tr>
                                </thead>
                            </table>
                            <script type="text/javascript">
                                $(function() {
                                    var oTable = $('#tabel-kelas').DataTable({
                                        processing: true,
                                        serverSide: true,
                                        ajax: {
                                            url: '{{ url("data-kelas") }}'
                                        },
                                        columns: [
                                        {isi: 'mataKuliah', name: 'mataKuliah'},
                                        {isi: 'hari', name: 'hari'},
                                        {isi: 'gedung', name: 'gedung'},
                                        // {isi: 'status', name: 'status', orderable: false},
                                        // {isi: 'namaRuangan', name: 'namaRuangan', orderable: false, searchable: false},
                                    ],
                                    });
                                });
                            </script>
                        </div>
                        </div>
                        <div class="col-md-10 col-md-offset-2" margin-left> 
                            <table class="table" >
                                <thead class="col-md-13 col-md-offset-0">
                                    <tr>

                                        <td>{{$isi ->mataKuliah}}</td>
                                        <td>{{$isi ->namaRuangan}}</td>
                                        <td>{{$isi ->gedung}}</td>
                                        <td>{{$isi ->lantai}}</td>
                                        <td>{{$isi ->user}}</td>
                                    </tr>
                                </thead>
                            </table>  
                        </div>
                        
                        @endforeach

                    </div>
                    </body>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
        
        