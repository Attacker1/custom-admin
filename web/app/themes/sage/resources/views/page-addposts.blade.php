{{--
Template Name: Добавить Посты
--}}
@extends('layouts.app')

@section('content')
  <div class="addposts">
    <div class="container">
      <div class="addposts__inner">
        <h1 class="title title_main addposts__title">Добавить пост</h1>
        @include('components.post-action.wrap', ['id' => 'new_post', 'submit' => 'Добавить'])
      </div>
    </div>
  </div>
@endsection
