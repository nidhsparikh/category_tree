<ul>
@foreach($childs as $child)
	<li>
	    {{ $child->title }}
	@if(count($child->childs))
            @include('category.child',['childs' => $child->childs])
        @endif
	</li>
@endforeach
</ul>