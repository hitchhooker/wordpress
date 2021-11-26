<?php

/**
 * Hero Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   int|string $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'portfolio-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'portfolio';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
?>

<section id="<?php echo esc_attr($id); ?>" class="portfolio <?php echo esc_attr($className); ?>">

<?php if( have_rows('portfolio_items') ): ?>

    <?php while( have_rows('portfolio_items') ): the_row();
    $image = get_sub_field('portfolio_item_image');
    $title = get_sub_field('portfolio_item_title');
    $desc = get_sub_field('portfolio_item_description');
    $quote = get_sub_field('portfolio_item_quote');
    $client = get_sub_field('portfolio_item_client');
    $price = get_sub_field('portfolio_item_price');
    $link = get_sub_field('portfolio_item_link');
    ?>

    <div class="portfolio-item">
    <a href="<?php echo $link; ?>">
        <img src="<?php echo $image; ?>" alt="Referenssi" class="portfolio-image" />

        <div class="portfolio-top">
            <div class="portfolio-title">
                <h3><?php echo $title; ?></h3>
            </div>
            <div class="portfolio-desc">
                <?php echo $desc; ?>
            </div>
        </div>
        
        <div class="portfolio-bottom">
            <div class="portfolio-quote">
                <?php echo $quote; ?>
            </div>   
                
            <div class="portfolio-meta">
                <h3><?php echo $client; ?></h3>
                <p>Toteutunut hinta: <?php echo $price; ?></p>
            </div>
                
            <div class="portfolio-button">
                <span>Lue lisää</span>
            </div>
        </div>
 
    </a>
    </div>
            
        
    <?php endwhile; ?>
<?php endif; ?>
</section>

<style>

.portfolio {
    text-align:center;
    padding-top: 60px;
    padding-bottom:60px;
}
.portfolio-item {
    width:500px;
    border-radius:20px;
    box-shadow:0 5px 20px rgba(0,0,0,0.25);
    display:inline-block;
    margin-left:15px;
    margin-right:15px;
    text-align:left;
}

.portfolio-top,
.portfolio-bottom {
    padding:15px;
}

.portfolio-top {
    padding-top:0;
}

.portfolio-image {
    width:100%;
    height: 240px;
    object-fit:cover;
    border-radius:20px 20px 0 0;
}


.portfolio h1,
.portfolio-item a,
.portfolio-item a:hover
.portfolio a:visited {
    text-decoration:none !important;
    color:#555 !important;
}

.portfolio-bottom {
    background-color: #f7f7f7;
    border-radius: 0 0 20px 20px;
}



.portfolio p {
    font-weight:normal;
    font-size:18px;
    font-family: "Raleway", sans-serif;
}

.portfolio-title h3 {
    color:#13aa57;
    font-size:24px;
}

.portfolio-meta h3 {
    color: #1279ed;
    font-size:24px;
}


.portfolio-button {
    text-align:right;
}

.portfolio-button span {
    background-color: #13aa57;
    display: inline-block;
    width: 200px;
    text-align: center;
    padding: 15px;
    border-radius: 99px;
    color: #fff;
    font-weight: bold;
    margin:10px;
}
</style>