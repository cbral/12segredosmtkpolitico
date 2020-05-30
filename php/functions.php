<?php
if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title'   => 'Configurações do Site',
    'menu_title'  => 'Configurações do Site',
    'menu_slug'   => 'configuracoes-do-tema',
    'icon_url' => 'dashicons-buddicons-topics',
    'autoload' => true,
    'redirect'    => false,
    'position' => '1.1',
    'update_button' => __('Atualizar Site', 'acf'), 'updated_message' => __("Seu site foi atualizado com sucesso, recarregue a página do site para ver as mudanças", 'acf'),
  ));

  acf_add_options_sub_page(array(
    'page_title'   => 'Configurações do Banner',
    'menu_title'  => 'Banner',
    'parent_slug'  => 'configuracoes-do-tema',
    'update_button' => __('Atualizar Site', 'acf'), 'updated_message' => __("Seu site foi atualizado com sucesso, recarregue a página do site para ver as mudanças", 'acf'),
  ));

  acf_add_options_sub_page(array(
    'page_title'   => 'Configurações da Seção de vídeo',
    'menu_title'  => 'Seção Vídeo',
    'parent_slug'  => 'configuracoes-do-tema',
    'update_button' => __('Atualizar Site', 'acf'), 'updated_message' => __("Seu site foi atualizado com sucesso, recarregue a página do site para ver as mudanças", 'acf'),
  ));

  acf_add_options_sub_page(array(
    'page_title'   => 'Configurações de Outras Seções',
    'menu_title'  => 'Outras Seções',
    'parent_slug'  => 'configuracoes-do-tema',
    'update_button' => __('Atualizar Site', 'acf'), 'updated_message' => __("Seu site foi atualizado com sucesso, recarregue a página do site para ver as mudanças", 'acf'),
  ));
}

function custom_redirect_level_user($redirect_to, $requested_redirect_to, $user)
{
  if (isset($user->roles) && is_array($user->roles)) {
    if (in_array('subscriber', $user->roles)) {
      $redirect_to = home_url('/inscrito');
    }
    if (in_array('editor', $user->roles)) {
      $redirect_to = home_url('/wp-admin/admin.php?page=configuracoes-do-tema');
    }
  }
  return  $redirect_to;
}
add_filter('login_redirect', 'custom_redirect_level_user', 10, 3);
