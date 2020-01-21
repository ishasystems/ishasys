@include('website.nav')

<section class="wrapper">
    <div class="container-fostrap">
      
        <div class="content">
            <div class="container">
                <div class="row">
					@if (count($products)>0)
						@foreach ($products as $product)
						<div class="col-md-3">
							<div class="card">
								<a class="img-card" href="#">
								<img src='{{ asset("products/$product->product_img") }}' />
							    </a>
								<div class="card-content">
									<h4 class="card-title">
									<a href="#">{{ $product->product_name }}</a>
									</h4>
							
								</div>
								<div class="card-read-more">
								<a href="{{ route('product.single',$product->id) }}" class="btn btn-link btn-block">
										Read More
									</a>
								</div>
							</div>
						</div>	
						@endforeach
					@else
						<h2>No Products Found Related to serach</h2>
					@endif
                    
				
         
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
