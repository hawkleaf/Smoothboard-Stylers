@extends('adminPanel.admin')

@section('header')

@stop

@section('content')
    <div class="base__bar">
        <h2 class="base__title">Customers</h2>
    </div>
    <div class="detailedList__container">
        <div class="detailedList__details">
            <span class="child">Name:</span>
            <span class="child">E-mail:</span>
            <span class="child">Country of Residence:</span>
            <span class="child">Gender:</span>
        </div>
        @foreach ($customers as $customer)
            <div class="detailedList__item">
                <span class="child">{{ $customer->firstname . " " . $customer->surname }}</span>
                <span class="child">{{ $customer->email }}</span>
                <span class="child">{{ $customer->country }}</span>
                <span class="child">{{ $customer->gender }}</span>
                <div class="detailedList__item--buttons">
                    <a href="javascript:checkDelete({{$customer->id}})" class="material-icons">delete</a>
                </div>
            </div>
        @endforeach
    </div>
@stop
@section('footer')
    <script type="text/javascript">
        function checkDelete(id)
        {
            if (confirm('Are you sure you want to remove this customer?'))
            {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'DELETE',
                    url: '/customer/' + id,
                    success: function(result)
                    {
                        location.reload();
                    }
                });
            }
        }
    </script>
@stop
