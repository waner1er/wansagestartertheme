@if (has_nav_menu('primary_navigation'))

  <nav class="primary-navigation hidden" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
    {{ the_custom_logo() }}
    {!! wp_nav_menu([
	'menu_class'        => "primary-navigation__list", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
  'container'         => "nav-primary__container", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
  'echo'              => "false", // (bool) Whether to echo the menu or return it. Default true.
  'depth'             => "2", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
  'theme_location'    => "primary_navigation", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
   'add_li_class'  => 'primary-navigation__list__item',
   'add_sub_menu_ul_class' => 'primary-navigation__list__item__submenu',
]) !!}
  </nav>
  <x-pictos.burger id="nav-burger" width="50px">
  </x-pictos.burger>
  <x-pictos.close id="nav-close" width="50px"/>
@endif
