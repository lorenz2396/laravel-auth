@extends('layouts.app')

@section('page-title', 'All Posts')

@section('main-content')
    <div class="row">
        <div class="col">
            <form action="{{ route('admin.posts.store') }}">
                @csrf
                
            </form>
        </div>
    </div>
@endsection
