<form method="POST" class="form {{ $class or '' }}">
  {{--  <input type="hidden" name="createCat">--}}
  <input type="text" class="input form__input" name="catName" placeholder="Напишите название своей категории...">
  @php
    global $errors;
  @endphp
  @include('components.addcategory.error', ['error' => isset($errors) ? $errors->get_error_message('termExist') : 'Ваша категория успешно добавилась'])
  <button type="submit" class="button button_colored form__submit">Добавить категорию</button>
  {{--  @dump(term_exists('dasdas', 'category') == 0 )--}}
</form>
