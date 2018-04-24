@extends('layouts.app')

@section('content')
  <div class="page-header">
    <h1 class="home__title">Latest Stuff</h1>
  </div>


  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  <!-- FEATURE STORY -->
  @php
		$args = array(
			'post_type' => 'post',
      'category_name' => 'feature',
			'posts_per_page' => 1
		);
		$the_query = new WP_Query( $args );
	@endphp
  @if (have_posts())
    @while ($the_query->have_posts())
      @php $the_query->the_post() @endphp
      @include('partials.content-feature')
    @endwhile
  @endif
  @php wp_reset_query() @endphp

  <div class="home__latest-grid">
    <!-- LATEST STORIES -->
    <section class="home__latest">
    @php
      $featureCategoryID = get_cat_ID( 'feature' );
      $rantsCategoryID = get_cat_ID( 'rants' );
      $snowflakeCategoryID = get_cat_ID( 'Stupid Snowflake' );
  		$args = array(
  			'post_type' => 'post',
        'category__not_in' => array( $featureCategoryID, $rantsCategoryID, $snowflakeCategoryID ),
  			'posts_per_page' => 5
  		);
  		$the_query = new WP_Query( $args );
  	@endphp
    @if (have_posts())
      @while ($the_query->have_posts())
        @php $the_query->the_post() @endphp
        @include('partials.content-'.get_post_type())
      @endwhile
    @endif
    @php wp_reset_query() @endphp
    </section>

    <!-- NEWS RSS -->
    <section class="home__news">
      <h1>News</h1>
      @php dynamic_sidebar('sidebar-home-news') @endphp
    </section>
  </div>

  <!-- RECENT STORIES -->
  <section class="home__recent">
    <h1 class="home__title">They Said That?</h1>
    @php
  		$args = array(
  			'post_type' => 'post',
        'category_name' => 'stupid-snowflake',
  			'posts_per_page' => 1
  		);
  		$the_query = new WP_Query( $args );
  	@endphp
    @if (have_posts())
      @while ($the_query->have_posts())
        @php $the_query->the_post() @endphp
        @include('partials.content-feature')
      @endwhile
    @endif
    @php wp_reset_query() @endphp

    <h1 class="home__title">Recent Stuff</h1>
    <div class="home__recent-grid">
      @php
    		$args = array(
    			'post_type' => 'post',
          'category_name' => 'rants',
          'category__not_in' => array( $snowflakeCategoryID ),
    			'posts_per_page' => 2
    		);
    		$the_query = new WP_Query( $args );
    	@endphp
      @if (have_posts())
        @while ($the_query->have_posts())
          @php $the_query->the_post() @endphp
          @include('partials.content-'.get_post_type())
        @endwhile
      @endif
      @php wp_reset_query() @endphp
    </div>
  </section>

  {!! get_the_posts_navigation() !!}
@endsection
