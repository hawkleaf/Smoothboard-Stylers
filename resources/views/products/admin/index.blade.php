@extends('adminPanel.admin')

@section('content')
<div class="base__bar">
    <h2 class="base__title">All Products</h2>
    <a href="/product/create"><i class="material-icons">add_circle</i> Product</a>
</div>
<div class="detailedList__container">
    <div class="detailedList__details">
        <span class="child">Name</span>
        <span class="child">Price</span>
        <span class="child">Image</span>
    </div>
    @foreach ($products as $product)
        <div class="detailedList__item">
            <span class="child">{{$product->name}}</span>
            <span class="child">&#8364; {{$product->price}}</span>
            <span class="child">{{$product->thumbnail}}</span>
            <div class="detailedList__item--buttons">
                <a href="{{ action('ProductController@edit', $product->id) }}" class="material-icons">edit</a>
                <a href="javascript:checkDelete({{$product->id}})" class="material-icons">delete</a>
            </div>
        </div>
    @endforeach
</div>
@stop

@section('footer')
    <script type="text/javascript">
        function checkDelete(id)
        {
            if (confirm('Are you sure you want to delete this product?'))
            {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'DELETE',
                    url: '/product/' + id,
                    success: function(result)
                    {
                        location.reload();
                    }
                });
            }
        }
    </script>
@stop
