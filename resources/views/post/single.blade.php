@extends('layouts.app')

@section('content')
    <div class="container posts-container">
        <x-post :post="$post"/>
    </div>
@endsection

