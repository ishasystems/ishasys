@include('admin.nav')

<div class="container">
    <div class="row">
    <form action="{{ isset($_GET['action']) && $_GET['action']=='edit' ? route('category.update') : route('category.add') }}" method="post">
        {{ csrf_field() }}
        <div class="col-md-4">
        <input type="hidden" name="id" value="{{ isset($_GET['id']) ? $_GET['id'] : '' }}">
            <div class="form-group">
            <input type="text" placeholder="Enter Category Name" class="form-control" name="category_name" value="{{ isset($_GET['action']) && $_GET['action']=='edit' ? $_GET['cat'] : '' }}">
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
            <button type="submit" class="btn btn-primary">{{ isset($_GET['action'])?'Update':'Add' }}</button>
            </div>
        </div>
        
    </form>
    </div>
    <div class="row">
        <table class="table">
            <thead>
            <th>#</th>
            <th>Category</th>
            <th>Action</th>
            </thead>
            <tbody>
                @foreach ($category as $key=>$cat)
                    <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $cat->category_name }}</td>
                    <td><a href="{{ route('category.list',["action"=>"edit","id"=>$cat->id,'cat'=>$cat->category_name]) }}"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp; <a href="{{ route('category.delete',$cat->id) }}"><i class="fa fa-trash-o" style="color:red"></i></a></td>
                    <td></td>
                    </tr>
                @endforeach
               
            </tbody>
            
        </table>
        {{ $category->links() }}
    </div>
</div>