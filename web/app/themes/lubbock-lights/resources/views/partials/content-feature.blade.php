<article @php post_class('section-feature') @endphp>
  @php $featureImageUrl = get_the_post_thumbnail_url(get_the_ID(), 'full') @endphp
  <div class="entry-image" style="background-image: url('@php echo $featureImageUrl @endphp');"></div>
  <div class="entry-info">
    <p class="entry-category"><a href="{{ get_category_link(get_cat_ID( get_the_category()[0]->cat_name )) }}">@php echo get_the_category()[0]->cat_name @endphp</a></p>
    <header>
      @if (get_field('series_title'))
        <div class="entry-subtitle">
          <p>{{ the_field('series_title') }}</p>
          @if (get_field('series_icon'))
            <div class="entry-subtitle__image"><div style="background-image: url('{{ the_field('series_icon') }}');"></div></div>
          @endif
        </div>
      @endif
      <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    </header>
    <div class="entry-summary">
      @php the_excerpt() @endphp
    </div>
  </div>
</article>
