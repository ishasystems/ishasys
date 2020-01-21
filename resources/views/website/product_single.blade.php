@include('website.nav')
{{-- <div class="row"></div> --}}
<div class="container" style="margin-top: 2%">
<div class="row" >
	<div class="panel panel-default">
	<div class="panel-heading"><h3>{{ $product->product_name }}</h3></div>
		<div class="panel-body">
			<div class="col-md-5">
			<img src='{{ asset("products/$product->product_img") }}'  alt="" class="img-responsive" style="max-height:300px !important">
			</div>
			<div class="col-md-5">
				<h3><a href="">{{ $product->product_name }}</a></h3>
				<h3><a href="">Product Highlight</a></h3>
					{!! $product->product_description !!}
			</div>
		</div>
	  </div>
</div>

<div class="row">
	<ul class="nav nav-pills">
		<li class="active"><a data-toggle="pill" href="#home">Technical Specification</a></li>
		<li><a data-toggle="pill" href="#menu1">PDF Catelogue</a></li>
		<li><a data-toggle="pill" href="#menu2">Connection Diagram</a></li>
		{{-- <li><a data-toggle="pill" href="#menu3">Menu 3</a></li> --}}
	  </ul>
	  
	  <div class="tab-content">
		<div id="home" class="tab-pane fade in active">
		  {{-- <h3>Technical Specification</h3> --}}
		  {!! $product->pro_specification !!}
		</div>
		<div id="menu1" class="tab-pane fade">
		  <h3>Downlad Catelogue</h3>
		<span>{{ $product->product_name }} PDF catelogue</span> <a href='{{ asset("catelogue/$product->catalogue") }}' download=""> <i class="fa-download fa"></i> </a>
		</div>
		<div id="menu2" class="tab-pane fade">
		  <h3>Menu 2</h3>
		  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
		</div>
		{{-- <div id="menu3" class="tab-pane fade">
		  <h3>Menu 3</h3>
		  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
		</div> --}}
	  </div>
</div>
</div>


@include('website.footer')
