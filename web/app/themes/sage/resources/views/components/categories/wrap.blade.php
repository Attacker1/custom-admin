@php
  $categories = get_categories(['taxonomy' => 'category', 'hide_empty' => false])
@endphp

<ul class="categories-list {{ $class or '' }}">
  @foreach($categories as $category)
    <li class="categories-list__item">
      <div class="categories-list__top">
        <h2 class="categories-list__title">
          {!! $category->name !!}
        </h2>
        <div class="categories-list__buttons">
          <button class="categories-list__button categories-list__edit">
            @include('icon::edit')
          </button>
          <a href="/add-post" class="categories-list__button categories-list__add">
            @include('icon::plus')
          </a>
        </div>
      </div>
      @include('components.categories.posts', ['categoryID' => $category->term_id])
      <form method="POST" class="categories-list__bottom">
        <input type="hidden" name="categoryID" value="{{ $category->term_id }}">
        <input class="input categories-list__input" type="text" value="{{ $category->name }}" name="updatedCategory"
               placeholder="Введите новое значение...">
        <input class="button button_colored button_small" type="submit" value="Обновить">
      </form>
    </li>
  @endforeach
</ul>
