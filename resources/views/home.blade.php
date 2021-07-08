<!DOCTYPE html>
<html>

<head>
    <title>Laravel Category</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @foreach($categories as $category)
            <ul class="navbar-nav mr-auto" id="tree1">

                <li class="nav-item dropdown" style="list-style:none;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ $category->title }}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                       
                        @if(count($category->childs))
                        @include('front-child',['childs' => $category->childs],['class'=>'dropdown-item'])
                        @endif
                    </div>
                </li>
            </ul>
            @endforeach
           
        </div>
    </nav>
</body>

</html>