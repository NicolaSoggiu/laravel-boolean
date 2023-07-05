@extends('layouts.base')

@section('contents')
    <div class="container d-flex p-5 gap-5 justify-content-between">
        <div class="col-5">
            <h2 style="color: black">Team's Member:</h2>
            <div class="ps-3 pt-2">
                <h4>{{ $member->nome }} {{ $member->cognome }}</h4>
                <p>{{$member->text}}</p>
                <div>Contattami via <a href="{{$member->email}}">email</a></div>
                
            </div>
        </div>
        <div class="col-5 d-flex flex-column gap-2 justify-content-center align-items-center">
            <h5>...E dai un'occhiata al mio GitHub</h5>
            <a href="{{$member->github}}"><img src="https://play-lh.googleusercontent.com/PCpXdqvUWfCW1mXhH1Y_98yBpgsWxuTSTofy3NGMo9yBTATDyzVkqU580bfSln50bFU" alt="" style="width: 15rem; border-radius: 2em"></a>
        </div>
    </div>

@endsection