<footer class="footer fixed bottom-0" style="display: flex">

  <div class="footer__first-row grid-2-first-bigger">
    <div class="footer__first-row__social-network">
      <x-social-links></x-social-links>
    </div>
    <div class="footer__first-row__contact-me">
      @php(dynamic_sidebar('sidebar-footer'))
{{--      <x-contact-me contact="{{get_bloginfo('admin_email')}}"></x-contact-me>--}}
    </div>
  </div>
  <x-pictos.back-to-top/>
  <div class="footer__second-row">
    <div class="wrapper">
      @php(wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'footer_navigation']) )
    </div>
  </div>
  <div class="footer__third-row">&#xA9; Erwan RIVET {{ get_the_date( 'Y' ) }}</div>
</footer>
