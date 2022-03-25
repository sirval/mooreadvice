@extends('layouts.app_master')

@section('content')
<div id="layoutSidenav_content">
    <main>
        @auth
        
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard | New Task</li>
                </ol>
               
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Create New Task
                    </div>
                        
                    <div class="card-body">
                      @include('layouts.partials.messages')
                        <form class="was-validated" action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                              <label for="validationCustom01" class="form-label">Title</label>
                              <input type="text" class="form-control" name="title" id="validationCustom01" required>
                              <div class="invalid-feedback">
                                 New Task Title is Required!
                              </div>
                              <div class="valid-feedback">
                                Nice one! 👍
                             </div>
                            </div>
                            <div class="mb-3">
                              <label for="validationTextarea" class="form-label">Body</label>
                              <textarea class="form-control is-invalid" name="body" id="validationTextarea" placeholder="New Task Body" required></textarea>
                              <div class="invalid-feedback">
                                Please enter New Task in the textarea.
                              </div>
                              <div class="valid-feedback">
                                Nice one! 👍
                             </div>
                            </div>
                            <div style="float: right" class="mb-3">
                              <button class="btn btn-primary" type="submit">Upload New Task</button>
                            </div>
                            <div style="float: left" class="mb-3">
                              <a href="../../home" class="btn btn-danger" >Back</a>
                            </div>
                          </form>
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
