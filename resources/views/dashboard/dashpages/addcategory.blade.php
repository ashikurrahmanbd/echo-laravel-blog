@extends('dashboard.dashlayout.layout')@extends('dashboard.dashlayout.layout')

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
                        Add New Category
                    </h4>
                    <p class="card-description">
                        Add your category
                    </p>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputUsername1">
                                Category Name
                            </label>
                            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
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