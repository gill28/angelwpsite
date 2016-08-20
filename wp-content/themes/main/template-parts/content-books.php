<?php
/**
 * The template for displaying the books.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 */
?>

<section id="books" class="full book-wrap">

    <h2>Books</h2>
    <?php if ( have_rows('book_information') ) : ?>
        <div class="container-fluid">
            <div class="row">
        <?php while( have_rows('book_information') ) : the_row(); ?>

                <div class="col-1-5">

                    <div class="hovereffect">

                        <img class="img-responsive" src="<?php the_sub_field( 'book_image' ); ?>" alt="">

                            <div class="overlay">

                                <h2><?php the_sub_field( 'book_title' ); ?></h2>
                                <p>
                                    <a class="bk-info" href="#<?php the_sub_field( 'book_id' ); ?>">
                                        <i class="fa fa-book"></i>
                                    </a>
                                </p>

                            </div>
                    </div>

                </div>

                <div style="display: none;">

                    <section id="<?php the_sub_field( 'book_id' ); ?>" class="books">

                        <div class="bookInformation" class="row">

                            <h2><?php the_sub_field( 'book_title' ); ?></h2>

                                <a href="<?php the_sub_field( 'book_url' ); ?>"><img src="<?php the_sub_field( 'book_image' ); ?>" alt=""></a>
                            <div class="book-ct">
                                <p><?php the_sub_field( 'summary' ); ?></p>
                            </div>
                        </div>


                    </section>

                </div>


    <?php endwhile; ?>
            </div>
            </div>
    <?php endif; ?>

</section>



