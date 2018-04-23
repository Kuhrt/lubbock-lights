<article @php post_class('section-feature') @endphp>
  @php the_post_thumbnail( 'full' ) @endphp
  <p class="entry-category">@php echo get_the_category()[0]->cat_name @endphp</p>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    <p class="byline author vcard">
      {{ __('By', 'sage') }} {{ get_the_author() }}
    </p>
  </header>
</article>
