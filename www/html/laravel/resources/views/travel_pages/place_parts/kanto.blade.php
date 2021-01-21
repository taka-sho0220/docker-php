@extends('adminlte::page')

@section('title', 'ひとりでいけるモン。')

@section('content_header')
<h1>ひとりでいけるモン</h1>
@stop


@section('content')
<h2>関東</h2>
<div class="container">
    <p>茨城県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kantos as $kanto)
            @if($kanto->prefecture_id == 8)
            <div class="col-sm"><a href="/travel/{{ $kanto->id }}"><img src="{{ asset('storage/profiles/'. $kanto->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>栃木県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kantos as $kanto)
            @if($kanto->prefecture_id == 9)
            <div class="col-sm"><a href="/travel/{{ $kanto->id }}"><img src="{{ asset('storage/profiles/'. $kanto->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>群馬県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kantos as $kanto)
            @if($kanto->prefecture_id == 10)
            <div class="col-sm"><a href="/travel/{{ $gunma->id }}"><img src="{{ asset('storage/profiles/'. $gunma->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>埼玉県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kantos as $kanto)
            @if($kanto->prefecture_id == 11)
            <div class="col-sm"><a href="/travel/{{ $kanto->id }}"><img src="{{ asset('storage/profiles/'. $kanto->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>千葉県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kantos as $kanto)
            @if($kanto->prefecture_id == 12)
            <div class="col-sm"><a href="/travel/{{ $kanto->id }}"><img src="{{ asset('storage/profiles/'. $kanto->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>東京都</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kantos as $kanto)
            @if($kanto->prefecture_id == 13)
            <div class="col-sm"><a href="/travel/{{ $kanto->id }}"><img src="{{ asset('storage/profiles/'. $kanto->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <p>神奈川県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($kantos as $kanto)
            @if($kanto->prefecture_id == 14)
            <div class="col-sm"><a href="/travel/{{ $kanto->id }}"><img src="{{ asset('storage/profiles/'. $kanto->photos) }}" class="img-rounded w-100" alt=""></a></div>
            @endif
            @endforeach
        </div>
    </div>
</div>

@endsection