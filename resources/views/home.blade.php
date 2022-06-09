@extends('layouts.app')

@section('content')
@push('css')
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
@endpush

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.5.0/socket.io.min.js"></script>
    <script src="{{ asset('assets/js/jquery-1.10.1.min.js') }}"></script>
<script>
    let userId      = `{{auth()->user()->id}}`;
    let userName    = `{{auth()->user()->name}}`;
</script>
<script src="{{ asset('assets/js/script.js') }}"></script>
@endpush

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Chat Control</div>

                <div class="card-body">

                    @foreach(App\Models\User::all() as $user)
                    <div id="chat-sidebar">
                    <div id="sidebar-user-box" class="100" >
                    <img src="{{ asset('assets/image/user.png') }}" />
                    <span id="slider-username">{{ $user->name }} </span>

                    <span class="user_status online">&nbsp;</span>
                    </div>
                    @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
