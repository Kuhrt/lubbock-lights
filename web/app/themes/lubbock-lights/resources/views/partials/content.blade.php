<article @php post_class() @endphp>
  @php $imageUrl = get_the_post_thumbnail_url(get_the_ID(), 'full') @endphp
  <div class="entry-content__image" style="background-image: url('@php echo $imageUrl @endphp');"></div>
  <p class="entry-category"><a href="{{ get_category_link(get_cat_ID( get_the_category()[0]->cat_name )) }}">@php echo get_the_category()[0]->cat_name @endphp</a></p>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
  </div>
</article>
