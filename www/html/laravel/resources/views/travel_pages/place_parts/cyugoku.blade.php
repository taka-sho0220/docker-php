@extends('adminlte::page')

@section('title', '一人でいけるモン。')

@section('content_header')
<h1>一人でいけるモン</h1>
@stop


@section('content')
<h2>中国</h2>
<div class="container">
    <p>鳥取県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($cyugokus as $cyugoku)
            @if($cyugoku->prefecture_id == 31)
            <div class="col-sm"><a href="/travel/{{ $cyugoku->id }}"><img src="{{ asset('storage/profiles/'. $cyugoku->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>島根県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($cyugokus as $cyugoku)
            @if($cyugoku->prefecture_id == 32)
            <div class="col-sm"><a href="/travel/{{ $cyugoku->id }}"><img src="{{ asset('storage/profiles/'. $cyugoku->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>岡山県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($cyugokus as $cyugoku)
            @if($cyugoku->prefecture_id == 33)
            <div class="col-sm"><a href="/travel/{{ $cyugoku->id }}"><img src="{{ asset('storage/profiles/'. $cyugoku->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>広島県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($cyugokus as $cyugoku)
            @if($cyugoku->prefecture_id == 34)
            <div class="col-sm"><a href="/travel/{{ $cyugoku->id }}"><img src="{{ asset('storage/profiles/'. $cyugoku->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>山口県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($cyugokus as $cyugoku)
            @if($cyugoku->prefecture_id == 35)
            <div class="col-sm"><a href="/travel/{{ $cyugoku->id }}"><img src="{{ asset('storage/profiles/'. $cyugoku->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>

@endsection