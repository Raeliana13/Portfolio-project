
@extends('layouts.app')
@section('title', 'Edit Portfolio')

@section('content')
<div class="panel">
    <h2>Edit Portfolio</h2>

    <form action="{{ route('portfolios.update', $portfolio) }}"
          method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('portfolios._form', ['buttonText' => 'Update Portfolio'])
    </form>
</div>
@endsection
