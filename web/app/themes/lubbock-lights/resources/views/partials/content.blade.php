<article @php post_class() @endphp>
  @php the_post_thumbnail( 'full' ) @endphp
  <p class="entry-category">@php echo get_the_category()[0]->cat_name @endphp</p>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
  </div>
</article>
