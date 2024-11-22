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
                    <h4 class="card-title">
                        Add New Post
                    </h4>
                    <p class="card-description">
                        Write New Post
                    </p>
                    <form class="forms-sample" action="{{ route('create_post') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group">
                            <label for="post_title">
                                Post Title
                            </label>
                            <input type="text" class="form-control" id="post_title" name="post_title" placeholder="Post Title">

                            @error('post_title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="form-group row">

                            <div class="col">

                                <label for="post_category">
                                    Category
                                </label>
                                <select class="form-select" id="post_category" name="post_category">
                                    <option value="">select Category</option>
                                    <option>Category 1</option>
                                    <option>Category 2</option>
                                </select>

                                @error('post_category')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                

                            </div>

                            <div class="col">

                                <label for="post_subcategory">
                                    SubCategory
                                </label>
                                <select class="form-select" id="post_subcategory" name="post_subcategory">
                                    <option value="">select SubCategory</option>
                                    <option>SubCategory 1</option>
                                    <option>SubCategory 2</option>
                                </select>

                                @error('post_subcategory')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                

                            </div>


                            
                        </div>
                        
                        
                        <div class="form-group">
                            <label>
                                Post Thumbnail
                            </label>
                            <input type="file" name="post_thumbnail" class="form-control">
                            
                            @error('post_thumbnail')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            
                        </div>
                        
                        <div class="form-group">
                            <label for="">
                                Post Discription
                            </label>
                            <textarea name="post_description" class="form-control" id="editor" rows="4" style="padding: 0" rows="6">
                            </textarea>
                            @error('post_description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            
                        </div>
                        <button type="submit" class="btn btn-gradient-primary me-2">
                            Submit
                        </button>
                        
                    </form>
                </div>
            </div>
            


        </div>
    </div>
    
    
</div>

@endsection

@push('myjscript')
    <script  src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

    <script>
        ClassicEditor.create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.log(error)
        } )
    </script>

@endpush