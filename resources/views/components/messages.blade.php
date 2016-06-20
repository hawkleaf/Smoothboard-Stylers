@if (Session::has('Message'))
    <script type="text/javascript">
        ohSnap('{!! Session::get('Message') !!}', {'color':'green', 'duration':'2000'});
    </script>
@endif
@if (Session::has('Error'))
    <script type="text/javascript">
        ohSnap('{!! Session::get('Error') !!}', {'color':'red', 'duration':'2000'});
    </script>
@endif
@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <script type="text/javascript">
            ohSnap('{{ $error }}', {'color':'red', 'duration':'2000'});
        </script>
    @endforeach
@endif
