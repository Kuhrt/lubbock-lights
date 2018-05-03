<article @php post_class() @endphp>
  <header>
    @if (get_field('series_title'))
      <div class="entry-subtitle">
        <p>{{ the_field('series_title') }}</p>
        @if (get_field('series_icon'))
          <div class="entry-subtitle__image"><div style="background-image: url('{{ the_field('series_icon') }}');"></div></div>
        @endif
      </div>
    @endif
    <h1 class="entry-title">{{ get_the_title() }}</h1>
  </header>
  <div class="entry-content">
    @php $imageUrl = get_the_post_thumbnail_url(get_the_ID(), 'full') @endphp
    <div class="entry-content__image" style="background-image: url('@php echo $imageUrl @endphp');"></div>
    <div class="entry-content__body">
      <div class="entry-content-body__share">
        <a href="https://www.facebook.com/sharer/" class="facebook" target="_blank"><i class="fa fa-facebook-f"></i></a>
        <a href="https://twitter.com/intent/tweet?text={{ get_the_title() }}&amp;url=http:{{ get_permalink() }}" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="mailto:?subject={{ get_the_title() }}" class="mail"><i class="fa fa-envelope mail"></i></a>
      </div>
      @php the_content() @endphp
    </div>
  </div>
  <div class="entry-author">
    @php $authorID = get_the_author_meta('ID') @endphp
    @if (get_avatar( $authorID ))
      <div class="entry-author__image" style="background-image: url('{{ get_avatar_url($authorID, array('size' => 335)) }}');"></div>
    @endif
    <div class="entry-author__info">
      <h3>{{ get_the_author_meta('display_name') }}</h3>
      <p>{{ get_the_author_meta('description') }}</p>
    </div>
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
