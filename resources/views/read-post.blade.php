<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap CSS CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Read Posts</title>
</head>

<body>
    {{-- <h1>Read posts</h1> --}}

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

    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Sr No.</th>
                        <th scope="col">Post Title</th>
                        <th scope="col">Post Date</th>
                        <th scope="col">Post Created On</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Test Title</td>
                        <td>19 April, 2022</td>
                        <td>19-04-2022</td>
                        <td>
                            <a class="btn btn-primary" href="posts">View</a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>Test Title</td>
                        <td>19 April, 2022</td>
                        <td>19-04-2022</td>
                        <td>
                            <a class="btn btn-primary" href="posts">View</a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>Test Title</td>
                        <td>19 April, 2022</td>
                        <td>19-04-2022</td>
                        <td>
                            <a class="btn btn-primary" href="posts">View</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

    {{-- anchor tags -> this tag is used for linking the pages --}}
    {{-- Hypertext Reference URL --}}

    {{-- Bootstrap Scripts CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

</body>

</html>