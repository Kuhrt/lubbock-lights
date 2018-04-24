<header class="banner">
  <nav class="nav-primary mobile-nav">
    <img src="@asset('images/lubbock-lights-icon.svg')" alt="Lubbock Lights">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </nav>
  <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}<span>{{ get_bloginfo('description', 'display') }}</span></a>
  <nav class="nav-primary desktop-nav">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </nav>
  <div class="hamburger">
    <span class="line"></span>
    <span class="line"></span>
    <span class="line"></span>
  </div>
</header>
