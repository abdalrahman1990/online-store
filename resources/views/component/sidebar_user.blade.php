<div class="container">
	<h2 style="margin:7px; " class="my-4">Category</h2>
	<ul class="navbar-nav ml-auto">
        @foreach( $categories as $category )
        	@if($category->status == 1)
				<li class="nav-item category ">
		          <center>
                      <a class="nav-link list-group-item list-group-item-action active "style="background-color: #793C72"
                                 href="{{ url('category/' . $category->id) }}">
                          {{ $category->category_name }}
                      </a>
                  </center>
		        </li>
		    @endif
		@endforeach
    </ul>
</div>


