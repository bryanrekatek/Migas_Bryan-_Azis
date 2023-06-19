@extends('layouts.blackand.app')
@section('content')
<div class="row">
    <div class="col-sm-6 col-lg-4">
        <div class="card border-end">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium">{{ $sarana }}</h2>
                        </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Data Sarana Prasarana
                        </h6>
                    </div>
                    <div class="ms-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card border-end ">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium">{{ $buku }}</h2>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Data Buku
                        </h6>
                    </div>
                    <div class="ms-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="card border-end ">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium">{{ $user }}</h2>
                        </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Data User
                        </h6>
                    </div>
                    <div class="ms-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
