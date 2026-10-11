
@extends('layouts.app')
@section('title', $portfolio->full_name . ' | Portfolio')

@section('content')
<div class="panel {{ $portfolio->template }}-theme">
    <div class="d-flex flex-wrap justify-content-between gap-3 mb-4">
        <div>
            <span class="badge text-bg-light">
                {{ ucfirst($portfolio->template) }} Template
            </span>
            <h1 class="display-5 fw-bold mt-3">
                {{ $portfolio->full_name }}
            </h1>
            <p>{{ $portfolio->email }}</p>
            <p>{{ $portfolio->contact_number }}</p>
            <p>{{ $portfolio->address }}</p>
        </div>

        @if($portfolio->profile_picture)
            <img class="profile-img"
                 src="{{ asset('storage/'.$portfolio->profile_picture) }}"
                 alt="Profile picture">
        @endif
    </div>

    @foreach([
        'about_me' => 'About Me',
        'education' => 'Educational Background',
        'skills' => 'Skills',
        'projects' => 'Projects',
        'experience' => 'Work Experience',
        'social_links' => 'Social Media / Website Links'
    ] as $field => $heading)
        @if($portfolio->$field)
            <section class="section">
                <h3>{{ $heading }}</h3>
                <div class="content-text">{{ $portfolio->$field }}</div>
            </section>
        @endif
    @endforeach

    <p class="text-secondary small">
        Portfolio generated with Portfolia.
    </p>
</div>

<div class="d-flex flex-wrap gap-2 mt-3">
    <a href="{{ route('portfolios.edit', $portfolio) }}"
       class="btn btn-main">Edit Portfolio</a>

    <a href="{{ route('portfolios.choose', $portfolio) }}"
       class="btn btn-outline-primary">Change Template</a>

    <a href="{{ route('portfolios.index') }}"
       class="btn btn-outline-secondary">Manage Portfolios</a>

    <button onclick="window.print()" class="btn btn-outline-dark">
        Print / Save as PDF
    </button>

    <form action="{{ route('portfolios.destroy', $portfolio) }}"
          method="POST"
          onsubmit="return confirm('Delete this portfolio permanently?')">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Delete Portfolio</button>
    </form>
</div>
@endsection
