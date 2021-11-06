@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="container">
    {{--  <div class="alert alert-success" role="alert">
                           Hello Admin
                        </div> --}}
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header "><b>GIÁ VÀNG THẾ GIỚI</b></div>

                <div class="card-body">
                 <iframe frameborder="0" width="100%" height="750px" src="https://webtygia.com/api/vang?bgheader=3e52b6&colorheader=ffffff&padding=5&fontsize=13&undefined"></iframe>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endsection
