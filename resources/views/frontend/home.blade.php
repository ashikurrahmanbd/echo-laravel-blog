<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Xtra Blog</title>
	<link rel="stylesheet" href="{{ asset('frontend/fontawesome/css/all.min.css') }}">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> 
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/templatemo-xtra-blog.css') }}" rel="stylesheet">

</head>
<body>
	<header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>            
                <h1 class="text-center">Echo Blog</h1>
            </div>
            <nav class="tm-nav" id="tm-nav">            
                <ul>
                    <li class="tm-nav-item active"><a href="index.html" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Blog Home
                    </a></li>
                    
                    <li class="tm-nav-item"><a href="about.html" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        About Echo
                    </a></li>
                    <li class="tm-nav-item"><a href="contact.html" class="tm-nav-link">
                        <i class="far fa-comments"></i>
                        Contact Us
                    </a></li>
                </ul>
            </nav>
            <div class="tm-mb-65">
                
               
                <a href="https://www.linkedin.com/in/ashikurrahman2/" class="tm-social-link">
                    <i class="fab fa-linkedin tm-social-icon"></i>
                </a>

                <a rel="nofollow" href="https://github.com/ashikurrahmanbd" class="tm-social-link">
                    <i class="fab fa-github tm-social-icon"></i>
                </a>

                <a rel="nofollow" href="https://www.facebook.com/ashikjoy.akash" class="tm-social-link">
                    <i class="fab fa-facebook tm-social-icon"></i>
                </a>
            </div>
            <p class="tm-mb-80 pr-5 text-white">
                Echo Blog is a clean Laravel Blog App. Left side has a nice fixed sidebar and rightside containing whole blog section with all the posts.
            </p>
        </div>
    </header>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                                
                    </form>
                </div>                
            </div>            
            <div class="row tm-row">

                @foreach ($all_posts as $post)
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="post.html" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner">
                            <img src="{{ asset('storage/' . $post->post_thumbnail) }}" alt="Image" class="img-fluid">                            
                        </div>
                        <span class="position-absolute tm-new-badge">New</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">{{ $post->post_title }}</h2>
                    </a>                    
                    <p class="tm-pt-30">
                        {{ Str::words(strip_tags($post->post_description), 25, '...') }}
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">{{ $post->category->categoryname }} . {{  $post->subcategory->subcategory_name  }}</span>
                        <span class="tm-color-primary">{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>36 comments</span>
                        <span>by Admin Nat</span>
                    </div>
                </article>

                @endforeach

                
               

            </div>

            

            <div class="row tm-row tm-mt-100 tm-mb-75">
                {{-- Previous and Next Buttons at the Top --}}
                <div class="tm-prev-next-wrapper">
                    @if ($all_posts->onFirstPage())
                        <span class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</span>
                    @else
                        <a href="{{ $all_posts->previousPageUrl() }}" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20">Prev</a>
                    @endif
            
                    @if ($all_posts->hasMorePages())
                        <a href="{{ $all_posts->nextPageUrl() }}" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
                    @else
                        <span class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled">Next</span>
                    @endif
                </div>
            
                {{-- Pagination Links with Page Numbers --}}
                <div class="tm-paging-wrapper">
                    <span class="d-inline-block mr-3">Page</span>
                    <nav class="tm-paging-nav d-inline-block">
                        <ul>
                            {{-- Page Numbers --}}
                            @foreach ($all_posts->links()->elements[0] as $page => $url)
                                <li class="tm-paging-item {{ $all_posts->currentPage() == $page ? 'active' : '' }}">
                                    <a href="{{ $url }}" class="mb-2 tm-btn tm-paging-link">{{ $page }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
             
            
            
            <footer class="row tm-row">
                <hr class="col-12">
                <div class="col-md-6 col-12 tm-color-gray">
                    Developed By: <a rel="nofollow" target="_parent" href="#" class="tm-external-link">AshikuR Rahman</a>
                </div>
                <div class="col-md-6 col-12 tm-color-gray tm-copyright">
                    Copyright 2024 Echo Blog.
                </div>
            </footer>
        </main>
    </div>
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/templatemo-script.js') }}"></script>
</body>
</html>