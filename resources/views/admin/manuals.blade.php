@extends('layouts.admin')

@section('title')
    Manuales
@endsection

@section('h1')
    Manuales
@endsection

@section('content')
    @include('admin.general._page-instructions', [
        'title'         =>  'Manuales',
        'instructions'  =>  'Proximamente'
    ])

    <div class="col-xs-10 col-xs-offset-1 video">
        <div class="video__wrapper">
            {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLWJxD0GLYDMYiHN0BZSZTQZLNfn-rg0ZQ&amp;showinfo=0" frameborder="0" allowfullscreen></iframe> --}}
        </div>
    </div>
@endsection
