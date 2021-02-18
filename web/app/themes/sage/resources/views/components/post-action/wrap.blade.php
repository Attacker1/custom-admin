@php
acf_form_head();
$settings = [
     'id' => 'addPost',
     'post_id' => $id ,
     'field_groups' => false,
     'fields' => false,
     'new_post' => [
        'post_type' => 'post',
        'post_status' => 'publish'
       ],
     'post_title' => true,
     'post_content' => true,
     'form' => true,
     'html_before_fields' => '',
     'html_after_fields' => '',
     'submit_value' => __('Обновить', 'acf'),
     'updated_message' => __('Пост добавлен', 'acf'),
     'label_placement' => 'top',
     'instruction_placement' => 'label',
     'field_el' => 'div',
     'uploader' => 'basic',
     'honeypot' => true,
     'html_updated_message' => '<div id="message" class="updated"><p>%s</p></div>',
     'html_submit_button' => '<button class="button button_colored button_small">' . $submit .'</button>',
     'html_submit_spinner' => '',
     'kses' => true,
     'return' => '/post-actions/?success=true&post_id=%post_id%'
];
acf_form($settings);
@endphp
