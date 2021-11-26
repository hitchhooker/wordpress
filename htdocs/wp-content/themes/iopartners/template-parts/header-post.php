<?php
/* Create id attribute allowing for custom "anchor" value. */
$id = 'header-' . get_the_ID();
$category = 'News';
$bg_color = 'bg-salmon';
$category_link = get_post_type_archive_link( 'post' );
if(has_category('careers')) {
  $bg_color = 'bg-gray-dark';
  $category = 'Careers';
  $category_link = '/careers';
}

$page_url = get_the_permalink();
?>

<header id="<?php echo esc_attr($id); ?>" class="header">
    <div class="container">
      <div class="row breadcrumbs-row">
        <div class="col col-12 col-md-7">
          <p class="breadcrumbs"><a href="/">Home</a> / <a href="<?php echo $category_link; ?>"><?php echo $category; ?></a> / <span class="current-page"><?php the_title(); ?></span></p>
        </div>
      </div>

      <div class="row">
        
        <div class="col col-12 col-md-6 post-image">
          <?php the_post_thumbnail('medium', 'img-fluid'); ?>
        </div>

        

        <div class="col col-12 col-md-6 post-meta d-flex align-items-center <?php echo $bg_color; ?>">
          <div class="content">
            <?php if(has_category('careers')) : ?>
              <p class="post-date">Apply by: <?php echo get_field('apply_by'); ?></p>
            <?php endif; ?>
            <h1 class="post-name"><?php the_title(); ?></h1>

            <?php if(!has_category('careers')) : ?>
            <p class="post-date"><?php echo get_the_date(); ?></p>
            <?php endif; ?>
            <!--<p class="post-excerpt"><?php echo get_the_excerpt(); ?></p>
            <a class="post-link btn btn-dark" href="<?php the_permalink(); ?>">Read more</a>-->
            <div class="social-share">
              <a href="https://twitter.com/share?url=<?php echo $page_url ?>" class="btn share-btn">
                <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19.2395 2.26889C18.5475 2.57543 17.8136 2.77655 17.062 2.86553C17.8536 2.39187 18.446 1.64652 18.7288 0.768409C17.9847 1.21014 17.1704 1.5212 16.3213 1.68809C15.9666 1.30971 15.5379 1.00822 15.0619 0.802296C14.5858 0.596374 14.0726 0.490409 13.5539 0.490969C11.4601 0.490969 9.76239 2.18825 9.76239 4.28249C9.76239 4.57937 9.79599 4.86905 9.86079 5.14673C6.70959 4.98857 3.91599 3.47897 2.04591 1.18481C1.70873 1.76346 1.53155 2.4214 1.53255 3.09113C1.53205 3.71537 1.68576 4.33007 1.98002 4.88061C2.27427 5.43115 2.69997 5.90047 3.21927 6.24689C2.61728 6.22777 2.02855 6.06518 1.50207 5.77265C1.50159 5.78849 1.50159 5.80409 1.50159 5.82041C1.50159 7.65689 2.80839 9.18929 4.54263 9.53801C3.98421 9.68918 3.39872 9.71134 2.83047 9.60281C3.31287 11.1088 4.71303 12.2054 6.37215 12.2361C5.02909 13.2901 3.37059 13.8618 1.66335 13.8592C1.35735 13.8592 1.05567 13.8414 0.758789 13.8062C2.49239 14.9201 4.51002 15.5113 6.57063 15.5092C13.5445 15.5092 17.3581 9.73217 17.3581 4.72241C17.3581 4.55825 17.3543 4.39433 17.3471 4.23137C18.0898 3.69518 18.7307 3.03057 19.2395 2.26889Z" fill="#2A334A"/>
                </svg>
                Tweet
              </a>
              <a href="http://www.facebook.com/sharer.php?u=<?php echo $page_url ?>" class="btn share-btn">
                <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.16699 7.66675H10.667V11.1667H7.16699V19.3334H3.66699V11.1667H0.166992V7.66675H3.66699V6.20258C3.66699 4.81541 4.10332 3.06308 4.97132 2.10525C5.83932 1.14508 6.92316 0.666748 8.22166 0.666748H10.667V4.16675H8.21699C7.63599 4.16675 7.16699 4.63575 7.16699 5.21558V7.66675Z" fill="#2A334A"/>
                </svg>
                Post
              </a>
              <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $page_url ?>" class="btn share-btn">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.000244413 1.838C0.000244413 1.35053 0.19389 0.883032 0.538582 0.53834C0.883274 0.193648 1.35078 2.45031e-06 1.83824 2.45031e-06H20.1602C20.4018 -0.000392101 20.6411 0.0468654 20.8644 0.139069C21.0877 0.231273 21.2906 0.366612 21.4615 0.537339C21.6324 0.708065 21.768 0.910826 21.8604 1.13401C21.9529 1.3572 22.0004 1.59643 22.0002 1.838V20.16C22.0005 20.4016 21.9531 20.6409 21.8608 20.8642C21.7685 21.0875 21.6331 21.2904 21.4623 21.4613C21.2915 21.6322 21.0886 21.7678 20.8654 21.8602C20.6421 21.9526 20.4029 22.0001 20.1612 22H1.83824C1.59679 22 1.3577 21.9524 1.13464 21.86C0.91158 21.7676 0.708916 21.6321 0.538229 21.4613C0.367541 21.2905 0.232176 21.0878 0.139867 20.8647C0.0475574 20.6416 0.000113045 20.4025 0.000244413 20.161V1.838ZM8.70825 8.388H11.6872V9.884C12.1172 9.024 13.2172 8.25 14.8702 8.25C18.0392 8.25 18.7902 9.963 18.7902 13.106V18.928H15.5832V13.822C15.5832 12.032 15.1532 11.022 14.0612 11.022C12.5462 11.022 11.9162 12.111 11.9162 13.822V18.928H8.70825V8.388ZM3.20825 18.791H6.41625V8.25H3.20825V18.79V18.791ZM6.87525 4.812C6.88129 5.08667 6.83242 5.35979 6.73148 5.61532C6.63055 5.87084 6.4796 6.10364 6.28748 6.30003C6.09536 6.49643 5.86594 6.65247 5.6127 6.75901C5.35946 6.86554 5.08748 6.92042 4.81275 6.92042C4.53801 6.92042 4.26603 6.86554 4.01279 6.75901C3.75955 6.65247 3.53013 6.49643 3.33801 6.30003C3.14589 6.10364 2.99494 5.87084 2.89401 5.61532C2.79307 5.35979 2.7442 5.08667 2.75024 4.812C2.76212 4.27286 2.98463 3.75979 3.37013 3.38269C3.75563 3.00558 4.27347 2.79442 4.81275 2.79442C5.35202 2.79442 5.86986 3.00558 6.25536 3.38269C6.64086 3.75979 6.86337 4.27286 6.87525 4.812Z" fill="#2A334A"/>
                </svg>
                Share
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </header>