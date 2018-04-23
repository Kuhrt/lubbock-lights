<article @php post_class('section-feature') @endphp>
  @php $featureImageUrl = get_the_post_thumbnail_url(get_the_ID(), 'full') @endphp
  <div class="entry-image" style="background-image: url('@php echo $featureImageUrl @endphp');"></div>
  <p class="entry-category">@php echo get_the_category()[0]->cat_name @endphp</p>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    <p class="byline author vcard">
      {{ __('By', 'sage') }} {{ get_the_author() }}
    </p>
  </header>
</article>
