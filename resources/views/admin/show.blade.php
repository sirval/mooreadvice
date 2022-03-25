@extends('layouts.app_master')

@section('content')
<div id="layoutSidenav_content">
    <main>
        @auth
        
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Total task</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Trending task</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">This Week Total</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Last Week Total</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        {{auth()->user()->name.' Task'}}
                    </div><br>
                    <div style="margin-left: 15px" class="col-xl-3 col-md-6">
                        <a class="btn btn-primary btn-sm" href="/admin/create/task">New task</a>
                    </div>
                    <div class="card-body">
                        <h4>{!! $task->title !!}</h4><br>
                        
                       <p style="text-align: justify">{!! $task->body !!}</p>
                        <div style="float: left">
                            <a class="btn btn-danger btn-sm" href="../../home">Back</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            @endauth

            @guest
            <h1>Homepage</h1>
            <p class="">Your viewing the home page. Please login to view the restricted data.</p>
            @endguest
        </div>
    </main>
</div>
</div>
@endsection
