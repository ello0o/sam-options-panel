<?php
/**
 * Template Name: Wordpress Admin Sample
 **/

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
                
                <?php
				// Value from Text Field
				echo get_option(THEMEPREFIX.'_sample_text_field');
				?>
                
                
                <br><br>
                
                
                <?php
				// Value from Text Area
				echo get_option(THEMEPREFIX.'_sample_text_area');
				?>
                
                
                <br><br>             
                
                
                <?php
				// Value from Image Upload
				echo get_option(THEMEPREFIX.'_sample_image_upload');
				?>
                
                
                <br><br>
                
                
                <?php
				// Value from Checkbox
				echo get_option(THEMEPREFIX.'_sample_checkbox');		
				?>
                
                
                <br><br>
                
                
                <?php
				// Value from Dropdown
				echo get_option(THEMEPREFIX.'_sample_dropdown');
				?>
                
                
                <br><br>
                
                
                <?php
				// Value from Radio
				$sample_radio = get_option('yourtheme_sample_radio');
                echo $sample_radio;
				?>
                
                
                <br><br>
                
                
                <?php
				// Value from Image Radio Buttons (if/else example)
				echo get_option(THEMEPREFIX.'_sample_image_radio');
				?>
                
                
                <br><br>
                
                
                <?php
				// Value from Color Picker
				echo get_option(THEMEPREFIX.'_sample_color_picker');
				?>
                
                
                <br><br>
                
                
                <?php
				// Value from Wordpress Page Dropdown
				echo get_option(THEMEPREFIX.'_sample_wp_pages');
				?>
                
                
                <br><br>
                
                
                <?php
				// Value from Wordpress Category Dropdown
				echo get_option(THEMEPREFIX.'_sample_wp_category');
				?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>