@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
<script>
    window.Echo.channel('test')
        .listen('TestEvent', (e) => {
            console.log('hehe');
        });
</script>
@endsection
