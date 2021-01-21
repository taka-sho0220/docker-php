@extends('adminlte::page')

@section('title', 'ひとりでいけるモン。')

@section('content_header')
<h1>ひとりでいけるモン</h1>
@stop


@section('content')
<h2>四国</h2>
<div class="container">
    <p>徳島県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($shikokus as $shikoku)
            @if($shikoku->prefecture_id == 36)
            <div class="col-sm"><a href="/travel/{{ $shikoku->id }}"><img src="{{ asset('storage/profiles/'. $shikoku->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>香川県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($shikokus as $shikoku)
            @if($shikoku->prefecture_id == 37)
            <div class="col-sm"><a href="/travel/{{ $shikoku->id }}"><img src="{{ asset('storage/profiles/'. $shikoku->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>愛媛県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($shikokus as $shikoku)
            @if($shikoku->prefecture_id == 38)
            <div class="col-sm"><a href="/travel/{{ $shikoku->id }}"><img src="{{ asset('storage/profiles/'. $shikoku->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>高知県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($shikokus as $shikoku)
            @if($shikoku->prefecture_id == 39)
            <div class="col-sm"><a href="/travel/{{ $shikoku->id }}"><img src="{{ asset('storage/profiles/'. $shikoku->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
@endsection