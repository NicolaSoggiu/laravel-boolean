@extends('layouts.base')

@section('contents')

@if (session('delete_success'))
        @php
            $travel = session('delete_success')
        @endphp
        <div class="alert alert-danger">
            "{{ $travel->title }}" has been deleted!!
            <form action="{{ route("travels.restore", ['travel' => $travel] )}}" method="post">
                @csrf
                <button class="btn btn-warning">Restore</button>
            </form>
        </div>
    @endif

    @if (session('restore_success'))
        @php
            $travel = session('restore_success')
        @endphp
        <div class="alert alert-success">
            "{{ $travel->title }}" has been restored!!
            
        </div>
    @endif    

<div class="container">
    <div class="row row-cols-3">
        @foreach ($travels as $travel)
            <div class="col mb-3">
                <div class="card h-100">
                    <img style="height: 275px" src="{{ $travel->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $travel->title }}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $travel->country }}</li>
                        <li class="list-group-item">{{ $travel->city }}</li>
                        <li class="list-group-item">{{ $travel->text }}</li>
                        <li class="list-group-item">{{ $travel->date }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{ route('travels.show', ['travel' => $travel->id]) }}" class="btn btn-primary">Travel info</a>
                        <a href="{{ route('travels.edit', ['travel' => $travel->id]) }}" class="btn btn-warning">Edit travel</a>
                        <form action="{{ route('travels.destroy', ['travel' => $travel->id]) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" href="">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $travels->links() }}
    <a href="{{ route('travels.create') }}" class="btn btn-primary mb-3">New</a>
    <a href="{{ route('travels.trashed') }}" class="btn btn-primary mb-3">Bucket</a>
</div>

@endsection