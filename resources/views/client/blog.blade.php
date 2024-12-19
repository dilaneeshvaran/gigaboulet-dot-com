@extends('layout.master')
@section('title')
Blog |Gigaboulet
@endsection

@section('header')
<header>
    <div class="header-bg"></div>
    <div class="header-content">
        <h1>Gigaboulet</h1>
        <p>L'histoire fascinante des boulets de canon à travers les âges</p>
    </div>
</header>
@endsection

@section('content')
<section id="blog" class="blog wrapper">
    <h2>Le blog Gigaboulet</h2>
    <div class="services-grid ">
        @foreach ($posts as $post)

        <article class="service-card">
            @if ($post->tags->isNotEmpty())
                <div class="flex justify-start gap-x-2 my-2">
                    @foreach ($post->tags as $tag)
                        <span class="px-2 py-1 text-xs rounded-full dark:bg-violet-400 dark:text-white font-semibold">{{ $tag->name }}</span>
                    @endforeach
                </div>
            @endif
            <h3>{{  $post->excerpt }}</h3>
            <!-- Utilisation de Str::limit() ici -->
            <p>{{ \Illuminate\Support\Str::limit($post->description, 100) }}</p>

            <a rel="dofollow" href="{{ url('/blog', $post->slug) }}" class="btn">
                <span>Lire plus</span>
            </a>
            <p>{{ $post->user->name }}</p>

        </article>
        @endforeach
    </div>
</section>
@endsection
