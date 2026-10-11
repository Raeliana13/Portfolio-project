
@extends('layouts.app')
@section('title', 'Choose Template')

@section('content')
<h2 class="mb-2">Choose Your Template</h2>
<p class="text-secondary">Select one of these three designs.</p>

<div class="row g-3">
    <div class="col-md-4">
        <div class="panel h-100 simple-theme">
            <h3>01. Simple</h3>
            <p>Minimal, clean, and professional.</p>
            <hr>
            <h5>{{ $portfolio->full_name }}</h5>
            <p>About Me · Education · Skills · Projects</p>

            <form method="POST"
                  action="{{ route('portfolios.template', $portfolio) }}">
                @csrf
                <input type="hidden" name="template" value="simple">
                <button class="btn btn-main w-100">Choose Simple</button>
            </form>
        </div>
    </div>

    <div class="col-md-4">
        <div class="panel h-100 modern-theme">
            <h3>02. Modern</h3>
            <p>Blue accents and organized sections.</p>
            <hr>
            <h5>{{ $portfolio->full_name }}</h5>
            <p>Profile cards · Skills · Experience</p>

            <form method="POST"
                  action="{{ route('portfolios.template', $portfolio) }}">
                @csrf
                <input type="hidden" name="template" value="modern">
                <button class="btn btn-primary w-100">Choose Modern</button>
            </form>
        </div>
    </div>

    <div class="col-md-4">
        <div class="panel h-100 creative-theme">
            <h3>03. Creative</h3>
            <p>Warm colors and expressive typography.</p>
            <hr>
            <h5>{{ $portfolio->full_name }}</h5>
            <p>Personal story · Creative work · Highlights</p>

            <form method="POST"
                  action="{{ route('portfolios.template', $portfolio) }}">
                @csrf
                <input type="hidden" name="template" value="creative">
                <button class="btn w-100 text-white"
                        style="background:#b54d38">
                    Choose Creative
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
