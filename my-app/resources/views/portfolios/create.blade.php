
@extends('layouts.app')
@section('title', 'Create Portfolio')

@section('content')
<div class="panel">
    <h2>Create Your Portfolio</h2>
    <p>Complete the information you want to display.</p>

    <form action="{{ route('portfolios.store') }}" method="POST"
          enctype="multipart/form-data">
        @csrf
        @include('portfolios._form', ['buttonText' => 'Save Portfolio'])
    </form>
</div>
@endsection
s