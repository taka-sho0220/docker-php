@extends('adminlte::page')

@section('title', 'ひとりでいけるモン。')

@section('content_header')
<h1>ひとりでいけるモン</h1>
@stop


@section('content')
<h2>九州・沖縄</h2>
<div class="container">
    <p>福岡県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kyushus as $kyushu)
            @if($kyushu->prefecture_id == 40)
            <div class="col-sm"><a href="/travel/{{ $kyushu->id }}"><img src="{{ asset('storage/profiles/'. $kyushu->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>佐賀県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kyushus as $kyushu)
            @if($kyushu->prefecture_id == 41)
            <div class="col-sm"><a href="/travel/{{ $kyushu->id }}"><img src="{{ asset('storage/profiles/'. $kyushu->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>長崎県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kyushus as $kyushu)
            @if($kyushu->prefecture_id == 42)
            <div class="col-sm"><a href="/travel/{{ $kyushu->id }}"><img src="{{ asset('storage/profiles/'. $kyushu->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>熊本県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kyushus as $kyushu)
            @if($kyushu->prefecture_id == 43)
            <div class="col-sm"><a href="/travel/{{ $kyushu->id }}"><img src="{{ asset('storage/profiles/'. $kyushu->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>大分県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kyushus as $kyushu)
            @if($kyushu->prefecture_id == 44)
            <div class="col-sm"><a href="/travel/{{ $kyushu->id }}"><img src="{{ asset('storage/profiles/'. $kyushu->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>宮崎県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kyushus as $kyushu)
            @if($kyushu->prefecture_id == 45)
            <div class="col-sm"><a href="/travel/{{ $kyushu->id }}"><img src="{{ asset('storage/profiles/'. $kyushu->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>鹿児島県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kyushus as $kyushu)
            @if($kyushu->prefecture_id == 46)
            <div class="col-sm"><a href="/travel/{{ $kyushu->id }}"><img src="{{ asset('storage/profiles/'. $kyushu->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>沖縄県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kyushus as $kyushu)
            @if($kyushu->prefecture_id == 47)
            <div class="col-sm"><a href="/travel/{{ $kyushu->id }}"><img src="{{ asset('storage/profiles/'. $kyushu->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>

@endsection