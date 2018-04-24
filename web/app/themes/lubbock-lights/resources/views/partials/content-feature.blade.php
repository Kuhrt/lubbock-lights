<article @php post_class('section-feature') @endphp>
  @php $featureImageUrl = get_the_post_thumbnail_url(get_the_ID(), 'full') @endphp
  <div class="entry-image" style="background-image: url('@php echo $featureImageUrl @endphp');"></div>
  <p class="entry-category">@php echo get_the_category()[0]->cat_name @endphp</p>
  <header>
    <div class="entry-subtitle">
      <p>Reagor on Raiders</p>
      <div class="entry-subtitle__image"></div>
    </div>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    <p class="byline author vcard">
      {{ __('By', 'sage') }} {{ get_the_author() }}
    </p>
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
  </div>
</article>
