@extends('adminlte::page')

@section('title', 'ひとりでいけるモン。')

@section('content_header')
<h1>ひとりでいけるモン</h1>
@stop


@section('content')
<h2>中部</h2>
<div class="container">
    <p>新潟県</p>
    <div class="row">
        <div class="d-flex">
            @foreach($tubus as $tubu)
            @if($tubu->prefecture_id == 15)
            <div class="col-sm"><a href="/travel/{{ $tubu->id }}"><img src="{{ asset('storage/profiles/'. $tubu->photos) }}" class="img-rounded w-100 alt=""></a></div>
            @endif
        @endforeach
        </div>
    </div>
</div>
<div class=" container">
                    <p>富山県</p>
                    <div class="row">
                        <div class="d-flex">
                            @foreach($tubus as $tubu)
                            @if($tubu->prefecture_id == 16)
                            <div class="col-sm"><a href="/travel/{{ $tubu->id }}"><img src="{{ asset('storage/profiles/'. $tubu->photos) }}" class="img-rounded w-100" alt=""></a></div>
                            @endif
                            @endforeach
                        </div>
                    </div>
            </div>
            <div class="container">
                <p>石川県</p>
                <div class="row">
                    <div class="d-flex">
                        @foreach($tubus as $tubu)
                        @if($tubu->prefecture_id == 17)
                        <div class="col-sm"><a href="/travel/{{ $tubu->id }}"><img src="{{ asset('storage/profiles/'. $tubu->photos) }}" class="img-rounded w-100" alt=""></a></div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="container">
                <p>福井県</p>
                <div class="row">
                    <div class="d-flex">
                        @foreach($tubus as $tubu)
                        @if($tubu->prefecture_id == 19)
                        <div class="col-sm"><a href="/travel/{{ $tubu->id }}"><img src="{{ asset('storage/profiles/'. $tubu->photos) }}" class="img-rounded w-100" alt=""></a></div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="container">
                <p>山梨県</p>
                <div class="row">
                    <div class="d-flex">
                        @foreach($tubus as $tubu)
                        @if($tubu->prefecture_id == 20)
                        <div class="col-sm"><a href="/travel/{{ $yamanashi->id }}"><img src="{{ asset('storage/profiles/'. $yamanashi->photos) }}" class="img-rounded w-100" alt=""></a></div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="container">
                <p>長野県</p>
                <div class="row">
                    <div class="d-flex">
                        @foreach($tubus as $tubu)
                        @if($tubu->prefecture_id == 21)
                        <div class="col-sm"><a href="/travel/{{ $tubu->id }}"><img src="{{ asset('storage/profiles/'. $tubu->photos) }}" class="img-rounded w-100" alt=""></a></div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="container">
                <p>岐阜県</p>
                <div class="row">
                    <div class="d-flex">
                        @foreach($tubus as $tubu)
                        @if($tubu->prefecture_id == 22)
                        <div class="col-sm"><a href="/travel/{{ $tubu->id }}"><img src="{{ asset('storage/profiles/'. $tubu->photos) }}" class="img-rounded w-100" alt=""></a></div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="container">
                <p>静岡県</p>
                <div class="row">
                    <div class="d-flex">
                        @foreach($tubus as $tubu)
                        @if($tubu->prefecture_id == 23)
                        <div class="col-sm"><a href="/travel/{{ $tubu->id }}"><img src="{{ asset('storage/profiles/'. $tubu->photos) }}" class="img-rounded w-100" alt=""></a></div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="container">
                <p>愛知県</p>
                <div class="row">
                    <div class="d-flex">
                        @foreach($tubus as $tubu)
                        @if($tubu->prefecture_id == 24)
                        <div class="col-sm"><a href="/travel/{{ $tubu->id }}"><img src="{{ asset('storage/profiles/'. $tubu->photos) }}" class="img-rounded w-100" alt=""></a></div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            @endsection