@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="user-wrapper">
                <ul class="users">
                    <li class="user" id="">
                        {{-- @if ($user->unread)
                <span class="pending">{{ $user->unread }}</span>
                        @endif --}}
                        <span class="pending">1</span>
                        
                        <div class="media">
                            <div class="media-left">
                                <img src="https://via.placeholder.com/150" alt="" class="media-project">
                            </div>
                            <div class="media-body">
                                <p class="name">Teddi</p>
                                <p class="email">Teddirahman@gmail.com</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-8" id="messages">
            <div class="message-wrapper">
                <ul class="messages">
                    <li class="message clearfix">

                        <div class="sent">
                            <p>Lorem ipsum</p>
                            <p class="date">1-12-2002</p>
                        </div>
                    </li>
                </ul>

                <ul class="messages">
                    <li class="message clearfix">

                        <div class="received">
                            <p>Lorem ipsum</p>
                            <p class="date">1-12-2002</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="input-text">
                <input type="text" name="message" class="submit">
            </div>
        </div>

        {{-- @endsection --}}
        {{-- @push('js')

@endpush --}}
    </div>
</div>
</div>
</div>
@endsection
