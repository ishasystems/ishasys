@include('admin.nav');

<div class="container">
    <div class="row">

        <div class="col-xs-8 col-sm-12 col-md-8 col-lg-8">
            @if($errors->any())
              <h4>{{$errors->first()}}</h4>
             @endif

        <form action="{{ route('product.post') }}" method="POST" role="form" enctype="multipart/form-data">
                {{ csrf_field() }}   
            <legend>Add Product</legend>

                <div class="form-group">
                    <label for="">product name</label>
                    <input type="text" name="product_name" class="form-control" id="" placeholder="Product Name">
                </div>
                <div class="form-group">
                    <label for="">Product Category</label>
                    <select name="category_id" class="form-control">
                        @if (count($category) >0)
                                @foreach ($category as $item)
                    <option value="{{ $item->id }}">{{ $item->category_name}}</option>
                                    
                                @endforeach
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="product">Highlight feature</label>
                    <textarea name="product_description" id="editor" cols="30" rows="10" class="editor form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Technical Specification (Enter data in table)</label>
                    <textarea name="technical_spec" id="editor1" class="editor form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Catalogue</label>
                    <input type="file" name="catalogue" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Product Image</label>
                    <input type="file" name="image" class="form-control">
                </div>



                <button type="submit" class="btn btn-primary">Add </button>
            </form>

        </div>

    </div>
</div>


<script>
    CKEDITOR.replace( 'editor' );
    CKEDITOR.replace( 'editor1' );

</script>