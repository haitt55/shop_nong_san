@extends('layouts.master')

@section('title', $article->page_title)

@section('meta_keyword', $article->meta_keyword)

@section('meta_description', $article->meta_description)

@section('content')

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Company
                    <strong>blog</strong>
                </h2>
                <hr>
            </div>
            <div class="col-lg-12 text-center">
                <h2>{{ $article->title }}
                    <br>
                    <small>{{ date('F d, Y', strtotime($article->created_at)) }}</small>
                </h2>
                {!! $article->featuredImage() ? image('/' . $article->featuredImage()->path, array('class' => 'img-responsive img-border img-full')) : '' !!}
            </div>
            <div class="col-lg-12">
                <br>
                {!! $article->content !!}
                <hr>
            </div>
        </div>
    </div>

@endsection