@extends('adminlte::page')

@section('title', 'ひとりでいけるモン。')

@section('content_header')
<h1>ひとりでいけるモン</h1>
@stop


@section('content')
<h2>北海道・東北</h2>
<div class="container">
    <p>北海道</p>
    <div class="row">
        <div class="d-flex">
            @foreach($hoka_tohos as $hoka_toho)
            @if($hoka_toho->prefecture_id == 1)
            <div class="col-sm"><a href="/travel/{{ $hoka_toho->id }}"><img src="{{ asset('storage/profiles/'. $hoka_toho->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>青森県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($hoka_tohos as $hoka_toho)
            @if($hoka_toho->prefecture_id == 2)
            <div class="col-sm"><a href="/travel/{{ $hoka_toho->id }}"><img src="{{ asset('storage/profiles/'. $hoka_toho->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>岩手県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($hoka_tohos as $hoka_toho)
            @if($hoka_toho->prefecture_id == 3)
            <div class="col-sm"><a href="/travel/{{ $hoka_toho->id }}"><img src="{{ asset('storage/profiles/'. $hoka_toho->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>宮城県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($hoka_tohos as $hoka_toho)
            @if($hoka_toho->prefecture_id == 4)
            <div class="col-sm"><a href="/travel/{{ $hoka_toho->id }}"><img src="{{ asset('storage/profiles/'. $hoka_toho->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>秋田県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($hoka_tohos as $hoka_toho)
            @if($hoka_toho->prefecture_id == 5)
            <div class="col-sm"><a href="/travel/{{ $hoka_toho->id }}"><img src="{{ asset('storage/profiles/'. $hoka_toho->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>山形県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($hoka_tohos as $hoka_toho)
            @if($hoka_toho->prefecture_id == 6)
            <div class="col-sm"><a href="/travel/{{ $hoka_toho->id }}"><img src="{{ asset('storage/profiles/'. $hoka_toho->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>福島県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($hoka_tohos as $hoka_toho)
            @if($hoka_toho->prefecture_id == 7)
            <div class="col-sm"><a href="/travel/{{ $hoka_toho->id }}"><img src="{{ asset('storage/profiles/'. $hoka_toho->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>

@endsection