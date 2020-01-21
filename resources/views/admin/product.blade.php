@include('admin.nav')

<div class="container">

    <div class="row">

    <a type="button" href="{{ route('product.add-form') }}" class="btn btn-primary">Add Product</a>

    </div>
    <div class="row">

        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Panel heading</div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>product</th>
                                <th>category</th>
                                <th>image</th>
                                <th>description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($products)>0)
                                @foreach ($products as $key=>$product)
                                        <tr>
                                        <td>{{ $key+1  }}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>{{ $product->product_category[0]->category_name }}</td>
                                        <td><img src='{{ asset("products/$product->product_img") }}' alt="" class="img-responsive" width="100" height="100"></td>
                                        <td>{!! $product->product_description !!}</td>
                                        <td><a href="{{ route('product.edit-form', $product->id) }}"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp; <a href="{{ route('product.delete',$product->id) }}" style="color:red"><i class="fa fa-trash-o"></i></a></td>

                                        </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

</div>
