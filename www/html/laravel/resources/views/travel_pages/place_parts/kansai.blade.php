@extends('adminlte::page')

@section('title', 'ひとりでいけるモン。')

@section('content_header')
<h1>ひとりでいけるモン</h1>
@stop


@section('content')
<h2>関西</h2>
<div class="container">
    <p>三重県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kansais as $kansai)
            @if($kansai->prefecture_id == 24)
            <div class="col-sm"><a href="/travel/{{ $kansai->id }}"><img src="{{ asset('storage/profiles/'. $kansai->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>滋賀県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kansais as $kansai)
            @if($kansai->prefecture_id == 25)
            <div class="col-sm"><a href="/travel/{{ $kansai->id }}"><img src="{{ asset('storage/profiles/'. $kansai->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>京都府</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kansais as $kansai)
            @if($kansai->prefecture_id == 26)
            <div class="col-sm"><a href="/travel/{{ $kansai->id }}"><img src="{{ asset('storage/profiles/'. $kansai->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>大阪府</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kansais as $kansai)
            @if($kansai->prefecture_id == 27)
            <div class="col-sm"><a href="/travel/{{ $kansai->id }}"><img src="{{ asset('storage/profiles/'. $kansai->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>兵庫県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kansais as $kansai)
            @if($kansai->prefecture_id == 28)
            <div class="col-sm"><a href="/travel/{{ $kansai->id }}"><img src="{{ asset('storage/profiles/'. $kansai->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>奈良県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kansais as $kansai)
            @if($kansai->prefecture_id == 29)
            <div class="col-sm"><a href="/travel/{{ $kansai->id }}"><img src="{{ asset('storage/profiles/'. $kansai->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>和歌山県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kansais as $kansai)
            @if($kansai->prefecture_id == 30)
            <div class="col-sm"><a href="/travel/{{ $kansai->id }}"><img src="{{ asset('storage/profiles/'. $kansai->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>

@endsection