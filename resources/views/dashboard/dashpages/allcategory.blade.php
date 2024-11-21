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
                    <h4 class="card-title">All Category</h4>
                    
                    @session('updated')
                        <div class="alert alert-success">{{ session('updated') }}</div>
                    @endsession

                    @session('deleted')
                        <div class="alert alert-danger">{{ session('deleted') }}</div>
                    @endsession
                   
                    <table class="table">
                        <thead>
                            <tr>
                            <th>Category ID</th>
                            <th>Category Name.</th>
                            <th>Category Slug</th>
                            <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($all_category as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->categoryname }}</td>
                                <td>{{ $category->slug }}</td>
                                <td><a href="{{ route('edit_category', $category->id) }}">Edit</a> | 
                                
                                <form style="display:inline-block" action="{{ route('delete_category', $category->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" onclick="alert('Are you sure?')" class="btn btn-link mt-0 mb-0 ms-0 me-0" style="padding: 0; font-weight:normal">Delete</button>
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

@endsection