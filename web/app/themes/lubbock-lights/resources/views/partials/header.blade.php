<header class="banner">
  <nav class="nav-primary">
    <img src="@asset('images/lubbock-lights-icon.svg')" alt="Lubbock Lights">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </nav>
  <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}<span>{{ get_bloginfo('description', 'display') }}</span></a>
  <div class="hamburger">
    <span class="line"></span>
    <span class="line"></span>
    <span class="line"></span>
  </div>
</header>
