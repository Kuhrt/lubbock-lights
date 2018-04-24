<article @php post_class() @endphp>
  <header>
    <div class="entry-subtitle">
      <p>Reagor on Raiders</p>
      <div class="entry-subtitle__image"></div>
    </div>
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    <div class="entry-content__image">
      @php the_post_thumbnail( 'full' ) @endphp
    </div>
    <div class="entry-content__body">
      @php the_content() @endphp
    </div>
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
