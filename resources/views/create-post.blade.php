<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap CSS CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Create Post</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href={{ route('read-post-route') }}>Read Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ route('create-post-route') }}>Create Post</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            @if(Session:: has('post_created'))
                
                <div class="alert alert-success" role="alert">
                    {{Session::get('post_created')}}
                </div>
            @endif
            <form method="POST" action="{{route('post.create')}}">
                    @csrf

                
                
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Create Post</h5>
                        </div>
                        <div class="card-body">
                            
                            
                             <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="post_title">Enter Post Title</label>
                                        <input type="text" name="post_title" class="form-control" id="post_title"
                                            placeholder="Enter Post Title">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="post_date">Enter Post Date</label>
                                        <input type="date" name="post_date" class="form-control" id="post_date">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="post_image">Select Post Image</label>
                                        <input type="file" name="post_image" class="form-control" id="post_image">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="post_description">Enter Post Description</label>
                                        <textarea class="form-control" name="post_description" placeholder="Enter Post Description" id="post_description" cols="30"
                                            rows="5"></textarea>
                                    </div>
                                </div>
                             </div>

                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    {{-- Bootstrap Scripts CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</body>

</html>