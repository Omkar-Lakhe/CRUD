<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap CSS CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>View Post</title>
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
                    <a class="nav-link" href={{ route('read-post-route') }}>Read Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ route('create-post-route') }}>Create Post</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12"></div>
            <div class="col-md-8">
             <div class="card-body">
                 <table class="table table-striped">
                     <th>
                         <tr>
                             <th>Id</th>
                             <th>Post Title</th>
                             <th>Post Date </th>
                             <th>Post Image</th>
                             <th>Post Description</th>
                         </tr>
                     </th>
                     
                     <tbody>
                     
                         @foreach($posts as $post)
                         
                         <tr>
                             <td>{{$post->id}}</td>
                             <td>{{$post->post_title}}</td>
                             <td>{{$post->post_date}}</td>
                             <td>{{$post->post_image}}</td>
                             <td>{{$post->post_description}}</td>

                         </tr>
                         @endforeach
                     </tbody>
                 </table>
             </div>
            </div>
            <!-- <div class="col-md-2"></div> -->
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