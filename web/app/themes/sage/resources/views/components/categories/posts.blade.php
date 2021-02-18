@php
  $posts = get_posts(['category' => $categoryID])
@endphp
<ul class="category-posts {{ $class or '' }}">
  @foreach($posts as $post)
    <li class="category-posts__item">
      <h3 class="category-posts__name">{!! $post->post_title !!}</h3>
      <a href="/edit-post?post_id={{$post->ID}}" class="category-posts__edit">Редактировать</a>
    </li>
  @endforeach
</ul>
