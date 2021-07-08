@foreach($childs as $child)
<ul class="navbar-nav mr-auto" id="tree1">

    <li class="nav-item dropdown" style="list-style:none;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ $child->title }}
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @if(count($child->childs))
            @include('front-child',['childs' => $child->childs],['class'=>'dropdown-item'])
            @endif
        </div>
    </li>
</ul>
@endforeach

