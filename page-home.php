<?php
/**
 * Template Name: Home Page
 *
 * Template for a home page
 *
 * @package National-Day
 */

get_header(); ?>
    <div id="pageHome">
    
    <section class="hero-section float-left">
        <div class="container" >
            <div class="section-wrapper">
            <?php 
                $inc_tmp=1;
                // The Query

                $args = array(
                    'cat'  => 8,
                    'post_type' => 'post',
                    'order' => 'ASC'
                    );

                $the_query = new WP_Query( $args );

                // The Loop
                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        ?>
                        <div class="post-wrapper post-block float-left" style="<?php if ($inc_tmp > 1) {echo 'display:none';} else {echo '';}; ?>" id="postBlock<?php echo $inc_tmp ?>">
                            <div class="col-md-12 col-lg-12 upper-post-wrapper ">
                                <div class="col-md-8 col-lg-8 img-wrapper fade-down-animation" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);">
                                <div class="date-wrapper" id="dateWrapper">
                                   <?php 
                                    
                                    $celebrate_arr = explode(',',trim(get_field('celebrate_on')));
                                    $celebrate_day = $celebrate_arr[0];
                                    $celebrate_month = $celebrate_arr[1];
                                    echo '<span class=celebrate-Day>'.$celebrate_day.'</span>';
                                    echo '<br />';
                                    echo '<span class=celebrate-Month>'.$celebrate_month.'</span>';
                                    
                                    ?>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 control-flex">
                                    <div class="control-wrapper">
                                        <div class="next-btn-wrapper">
                                            <a class="next-btn" id="nextBtn" onclick="plusSlides(1)"></a>
                                        </div>
                                        <div class="prev-btn-wrapper">
                                            <a class="prev-btn" id="prevBtn" onclick="plusSlides(-1)"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 lower-post-wrapper">
                            <div class="col-md-3 col-lg-3 float-right up-next bounce-in-right-animation">
                                <div class="up-next-wrapper">
                                <?php // Display the thumbnail of the next post ?>
                                    
                                            <h3 class="next-header">Up Next </h3>
                                            <?php
                                            $nextPost = get_next_post();
                                            $nextthumbnail = get_the_post_thumbnail($nextPost->ID); 
                                            $nextTitle = get_the_title($nextPost->ID);
                                            $nextthumbnailurl = get_the_post_thumbnail_url($nextPost->ID); 
                                            ?>
                                            
                                            <?php next_post_link('%link', '<div class=next-thumbnail-img style=background-image:url(' . $nextthumbnailurl . ');></div>'); ?>
                                            <p><?php echo $nextTitle ?></p>
                                </div>
                                </div>
                                <div class="col-md-5 col-lg-5 float-right post-content-wrapper">
                                <h3><?php the_title(); ?></h3>
                                        <?php the_content(); ?>
                                    <div class="read-more-wrapper">
                                        <a class="read-more" href="<?php echo get_the_permalink();?>">Read More</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <?php
                        $inc_tmp++;
                    }
                } else {
                    // no posts found
                }
                /* Restore original Post Data */
                wp_reset_postdata();
                ?>
            </div>
        </div> <!-- .container -->
    </section>
               
    <section class="celebrate-section float-left" id="celebrateSection">
        <div class="container">
            <h1>Celebrate</h1>
            
                <div id="filters" class="button-group">  
                    <div class="filter-wrapper">
                        <button class="filter-btn button is-checked" data-filter="*">all</button>
                        <button class="filter-btn button" data-filter=".Surveys">Surveys</button>
                        <button class="filter-btn button" data-filter=".Listicles">Listicles</button>
                        <button class="filter-btn button" data-filter=".Quizzes">Quizzes</button>
                    </div>
                </div>
                <div class="grid">
                <h2 class="celebrate-post-block Surveys Listicles Quizzes" >Mauris venenatis condimentum purus, ac consectetur nulla dictum ultrices.</h2>
                <?php 
                    $inc_tmp=1;
                    // The Query
                    $args = array(
                        'cat'  => 27,
                        'post_type' => 'post',
                        'order' => 'ASC'
                        );
                    $the_query = new WP_Query( $args );
                    
                // The Loop
                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        ?>
                    
                        <div class="celebrate-post-block <?php foreach((get_the_category()) as $childcat) { if (cat_is_ancestor_of(27, $childcat)) {echo $childcat->cat_name ; }}?>" data-category=".<?php foreach((get_the_category()) as $childcat) { if (cat_is_ancestor_of(27, $childcat)) {echo $childcat->cat_name ; }}?>">
                            <div id="post-<?php the_ID(); ?>" class="post-block-container" >
                                <div class="img-wrapper">
                                    <img class="post-img" id="celebrateImage<?php echo $inc_tmp;?>" src="<?php echo the_post_thumbnail_url(); ?>"/>
                                    <div class="date-wrapper">
                                   <?php 
                                    
                                    $celebrate_arr = explode(',',trim(get_field('celebrate_on')));
                                    $celebrate_day = $celebrate_arr[0];
                                    $celebrate_month = $celebrate_arr[1];
                                    echo '<span class=celebrate-Day>'.$celebrate_day.'</span>';
                                    echo '<br />';
                                    echo '<span class=celebrate-Month>'.$celebrate_month.'</span>';
                                    
                                    ?>
                                    </div>
                                </div>
                                    <div class="post-block-wrapper" >
                                    <h3><?php the_title();?></h3>
                                    <div class="post-info">
                                        <h6>Holiday:<span class="meta-grey"> <?php foreach((get_the_category()) as $childcat) { if (cat_is_ancestor_of(8, $childcat)) {echo $childcat->cat_name ; }}?></span></h6>
                                        <h6>Celebrate on: <span class="meta-grey"><?php the_field('celebrate_on');?></span></h6>
                                    </span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                        <?php
                        $inc_tmp++;
                         
                    }
                } else {
                    // no posts found
                }
                /* Restore original Post Data */
                wp_reset_postdata();
                ?>

                </div>
                <div class="col-md-12 col-lg-12 see-all-wrapper">
                    <h6><span class="meta-red">See More</span></h6>
                </div>
        </div><!-- .container -->
    </section>
   
    <section class="news-section float-left">
        <div class="container">
            <div class="section-wrapper">
                <h1>News</h1>
                <h2>Duis viver tellus et tincidunt lacinia, eros mauris tincidun t liber.</h2>
                <div class="grid-wrapper">


                   


                    <?php 
                    $inc_tmp=1;
                    // The Query

                    $args = array(
                        'cat'  => 19,
                        'post_type' => 'post',
                        'order' => 'ASC'
                        );

                    $the_query = new WP_Query( $args );

                // The Loop
                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        ?>
                        <div class="col-md-4 col-lg-4 news-post-block">
                            <div class="news-block-container">
                                <div class="post-img" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);"></div>
                                <div class="post-block-wrapper">
                                    <h4><?php the_title();?></h4>
                                    <div class="post-info">
                                        <h6>By: <span class="meta-red"><?php echo get_author_name();?></span></h6>
                                        <h6>Holiday:<span class="meta-red"> <?php foreach((get_the_category()) as $childcat) { if (cat_is_ancestor_of(8, $childcat)) {echo $childcat->cat_name ; }}?></span></h6>
                                       </span></h6>
                                    </div>
                                    <div class="post-excerpt">
                                        <p>
                                        <?php echo get_the_excerpt(); ?>
                                       <a href="<?php echo get_the_permalink(); ?>"> <span class="meta-red">...More</span></a>
                                        </p>
                                    </div>
                                    <div class="tags-wrapper">
                                        <span class="meta-grey">
                                         <?php
                                         //get the tags from array
                                            $posttags = get_the_tags();
                                            $l = count($posttags);
                                            $i = 1;
                                            if ($posttags) {
                                                foreach($posttags as $tag) {
                                                    echo $tag->name;
                                                    if ( $i == $l) {
                                                        echo "";
                                                    } else {
                                                        echo  ", ";
                                                    }
                                                    $i++;
                                                }
                                            }
                                        ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $inc_tmp++;
                    }
                } else {
                    // no posts found
                }
                /* Restore original Post Data */
                wp_reset_postdata();
                ?>

                </div>
            </div>
            <div class="col-md-12 col-lg-12 see-all-wrapper">
                <h6><span class="meta-red">See All</span></h6>
            </div>
        </div><!-- .container -->
    </section>

</div> <!-- End Home -->

<?php get_footer(); ?>

<script>

jQuery(document).ready(function($){

    $('#celebrateSection').imagesLoaded( function() {
  // images have loaded

    // init Isotope JS
    var $grid = $('.grid').isotope({
    itemSelector: '.celebrate-post-block',
    layoutMode: 'fitRows',
    getSortData: {
        name: '.name',
        symbol: '.symbol',
        number: '.number parseInt',
        category: '[data-category]',
        weight: function( itemElem ) {
        var weight = $( itemElem ).find('.weight').text();
        return parseFloat( weight.replace( /[\(\)]/g, '') );
        }
    }
    });




// filter functions
var filterFns = {
  // show if number is greater than 50
  numberGreaterThan50: function() {
    var number = $(this).find('.number').text();
    return parseInt( number, 10 ) > 50;
  },
  // show if name ends with -ium
  ium: function() {
    var name = $(this).find('.name').text();
    return name.match( /ium$/ );
  }
};

// bind filter button click
$('#filters').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});

$(window).load(function(){
    console.log('everything loaded')
    $grid.isotope({ filter: '*' });
});

// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});

});
});

// Hero Slide functionality

let slideIndex = 1;
  showSlides(slideIndex);

  // Next/previous controls
  let plusSlides = (n) => showSlides(slideIndex += n);
  

  // Thumbnail image controls
  let currentSlide = (n) => showSlides(slideIndex = n);
  

  function showSlides(n) {
    
      const slides = document.getElementsByClassName("post-block");
      
      if (n > slides.length) {slideIndex = 1} 
      if (n < 1) {slideIndex = slides.length}
      for (let i = 0; i < slides.length; i++) {
          slides[i].style.display = "none"; 
         
      }
     
      slides[slideIndex-1].style.display = "block"; 
      
  }






   //set block container max-width to size of post image

const celebrateBlock = document.getElementsByClassName('post-block-container');
let i;
let l;
let celebrateImg;
let imgWidth;


for ( i =0, l = 1; i < celebrateBlock.length; i++, l++) {
    // celebrateImg = 'celebrateImage' + (i + 1);
    // imgWidth = document.getElementById(celebrateImg).offsetWidth;
    // celebrateBlock[i].style.width = imgWidth + "px";
}

    // reformat Day string for celebrate section

const celebrateDay = document.getElementsByClassName('celebrate-Day');


for (let i = 0; i < celebrateDay.length; i++) {
    if (celebrateDay[i].innerHTML == 'Monday') {
        celebrateDay[i].innerHTML = 'Mon';
    } 
    if (celebrateDay[i].innerHTML == 'Tuesday') {
        celebrateDay[i].innerHTML = 'Tues';
    } 
    if (celebrateDay[i].innerHTML == 'Wednesday') {
        celebrateDay[i].innerHTML = 'Wed';
    } 
    if (celebrateDay[i].innerHTML == 'Thursday') {
        celebrateDay[i].innerHTML = 'Thurs';
    } 
    if (celebrateDay[i].innerHTML == 'Friday') {
        celebrateDay[i].innerHTML = 'Fri';
    } 
    if (celebrateDay[i].innerHTML == 'Saturday') {
        celebrateDay[i].innerHTML = 'Sat';
    } 
    if (celebrateDay[i].innerHTML == 'Sunday') {
        celebrateDay[i].innerHTML = 'Sun';
    } 
    if (celebrateDay[i].innerHTML == '') {
        
    } 
}

// reformat Month string for celebrate section


const celebrateMonth = document.getElementsByClassName('celebrate-Month');
let monthStringArr;
for (let i = 0; i < celebrateMonth.length; i++) {
  
    monthStringArr = [];
    monthStringArr.push(celebrateMonth[i].innerHTML.split(" "));
    monthName = monthStringArr[0][1];
    monthDay = monthStringArr[0][2];

    if (monthName == 'November') {
        celebrateMonth[i].innerHTML = "Nov " + monthDay;
    }
}


</script>
