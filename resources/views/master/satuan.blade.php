@extends('layouts.home_master')

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Satuan</h1>
    <a href="{{('/home/master/satuan/tambah')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        Tambah Satuan <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                           </svg></a>
</div>

<!-- Content Row -->
<div class="row">
    
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Satuan</div>

                <div class="card-body">
                    <div>
                     <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name</th>
                              <th scope="col">Handle</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($data as $key => $data)
                            <tr >
                                <th scope="row" name='id'>{{$data->id}}</th>
                                <td>{{$data->name}}</td>

                                <td>  
                                    <a href="{{('/home/master/barang/edit')}}" class="btn btn-primary btn-responsive">Edit</a>
                                    
                                    <form action="{{route('satuan.destroy', [$data->id])}}" method="POST">
                                        @csrf 
                                        @method('DELETE')
                                        <btn  class="btn btn-secondary btn-danger">
                                    
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                            </svg>
                                        </btn> 

                                    </form>
                                    
                                </td>
                            </tr>
                            @endforeach
                           
                          </tbody>
                        </table>
                       
                </div>

                </div>

            </div>
        </div>
    </div>
</div>
</div>


</div>

@endsection