{{--
Template Name: Редактировать Пост
--}}
@extends('layouts.app')

@php
  if(!isset($id)) {
    $id = $_GET['post_id'];
  }
@endphp

@section('content')
  <div class="addposts">
    <div class="container">
      <div class="addposts__inner">
        <h1 class="title title_main addposts__title">Редактировать пост</h1>
        @include('components.post-action.wrap', ['id' => $id, 'submit' => 'Редактировать'])
      </div>
    </div>
  </div>
@endsection
