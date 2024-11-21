@extends('dashboard.dashlayout.layout')

@section('content')

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home">
                </i>
            </span>
            Category
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span>
                    </span>
                    Overview
                    <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle">
                    </i>
                </li>
            </ul>
        </nav>
    </div>
    
   
    <div class="row">
        <div class="col-12 grid-margin">
            
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        Udate Category
                    </h4>
                    

                    @session('success')

                        <div class="alert alert-success">{{ session('success')  }}</div>

                    @endsession

                    <form class="forms-sample" action="{{ route('updatecategory', $category->id) }}" method="POST">

                        @csrf

                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="categoryname" placeholder="Category Name" name="categoryname" value="{{ $category->categoryname }}">

                            <div class="error-wrapper mt-2">
                                @error('categoryname')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        
                        
                        <button type="submit" class="btn btn-gradient-primary me-2">
                            Update
                        </button>
                       
                    </form>
                </div>
            </div>


        </div>
    </div>
    
    
</div>

@endsection