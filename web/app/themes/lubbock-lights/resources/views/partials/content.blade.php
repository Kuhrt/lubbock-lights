<article @php post_class() @endphp>
  <p class="entry-category">@php echo get_the_category()[0]->cat_name @endphp</p>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    @include('partials/entry-meta')
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
  </div>
</article>
