@extends('dashboard.dashlayout.layout')

@section('content')

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home">
                </i>
            </span>
            Posts
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
                    <h4 class="card-title">All Posts</h4>
                    
                    @session('updated')
                        <div class="alert alert-success">{{ session('updated') }}</div>
                    @endsession

                    @session('deleted')
                        <div class="alert alert-danger">{{ session('deleted') }}</div>
                    @endsession
                   
                    <table class="table">
                        <thead>
                            <tr>
                            <th>Post Title</th>
                            <th>Post Category</th>
                            <th>Post SubCategory</th>
                            <th>Post Thumbnail</th>
                            <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->post_title }}</td>
                                <td>{{ $post->post_category }}</td>
                                <td>{{ $post->post_subcategory }}</td>

                                <td>

                                    @if ($post->post_thumbnail)

                                    {{-- here $post->post_thumbnail is refering the foldername/image.jpg --}}

                                    <img src="{{ asset('storage/' . $post->post_thumbnail) }}" alt="Post Thumbnail" style="width: 65px; height: 65px; border-radius:50%; object-fit:cover">
                                    @else
                                        
                                    @endif

                                </td>

                                <td><a href="#">Edit</a> | 
                                
                                <form style="display:inline-block" action="#" method="post">
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