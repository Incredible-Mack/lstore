@extends('admin.layout.main')

@section('breadcrumb')
    <x-bread-crumb heading="Add Product" links='addproduct' prelink='product' />
@endsection

@section('maincontent')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif



    <form class="container" method="POST" action="store" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="inputName">Product Name</label>
            <input type="text" id="inputName" value="{{old('product_name')}}" name="product_name" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="image">Product Image</label>
            <input type="file" id="image" value="{{old('image')}}" name="image" class="form-control">
        </div>
        

        <div class="form-group">
            <label for="inputDescription">Product Description</label>
            {{-- <div id="summernote"></div> --}}
            <textarea value="{{old('description')}}" name="description" id="summernote">{{old('description')}}</textarea>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select value="{{old('description')}}" id="status" class="form-control custom-select">
                <option selected="" disabled="">Select one</option>
                <option>Hold</option>
                <option>Avaliable</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputStatus">Category</label>
            <select id="inputStatus" class="form-control custom-select" value="{{old('category')}}" name="category">
                
                <option>Hold</option>
                <option>Avaliable</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Stock">Stock</label>
            <input type="text" id="Stock" class="form-control" value="{{old('stock')}}" name="stock">
        </div>
        <div class="form-group">
            <label for="SKU">SKU</label>
            <input type="text" id="SKU" class="form-control" value="{{old('product_id')}}" name="product_id">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" id="price" class="form-control" value="{{old('prices')}}" name="prices">
        </div>
        <div class="form-group">
            <label for="discount">Discount Price</label>
            <input type="text" id="discount" class="form-control" value="{{old('discount')}}" name="discount">
        </div>

        <button class="btn  form-control my-5 btn-success">ADD PRODUCT</button>
        <br><br>
    </form>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var val = $('#summernote').summernote({
                height: 150, //set editable area's height
                codemirror: { // codemirror options
                    theme: 'monokai'
                }
            });


            console.log(val[0]['innerHTML'])


        });
    </script>
@endsection
