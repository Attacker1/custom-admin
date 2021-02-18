{{--
Template Name: Добавить категории
--}}
@extends('layouts.app')

@section('content')
  <div class="addcategories">
    <div class="container">
      <div class="addcategoris__inner">
        <h1 class="title title_main addcategories__title">Добавить категорию</h1>
        @include('components.addcategory.wrap', ['class' => 'addcategories__form'])
        @include('components.categories.wrap', ['class' => 'addcategories__categories'])
      </div>
    </div>
  </div>
@endsection
