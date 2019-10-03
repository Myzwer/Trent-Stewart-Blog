<?php
/**
* Template Name: Media Static
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @since 1.0
* @version 1.0
*/

get_header(); ?>

<div class = "featured-pages">
    <div class="grid-container fullWidth billboard-img media-page-bg">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell billboard-main">
                <h1 class = "center">Media</h1>
                <p class = "quote">Helping churches create healthy environments that grow healthy ministries.</p>
            </div>
        </div>
    </div>
</div>

<h2 class = "media-titles">Podcasts</h2>
<div class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="small-12 medium-6 large-4 cell">
			<a href = "#">
				<div class = "media-post">
					<img src = "https://images.unsplash.com/photo-1516655855035-d5215bcb5604?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80">
					<div class = "title">The Ascent 3: The Battle Against Lust</div> 
					<span class = "author">featuring Trent Stewart</span> | <span class="date">June 26, 2019</span>

					<p>What does Jesus have to say about lust? How do we apply his teaching in an era defined by unprecedented access to explicit material in today's digital landscape? And how does the church confront this issue? We discuss all of that and more in this episode of The Ascent Podcast.</p>
				</div>
			</a>
        </div>

        <div class="small-12 medium-6 large-4 cell">
			<a href = "#">
				<div class = "media-post">
					<img src = "https://images.unsplash.com/photo-1526080676457-4544bf0ebba9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80">
					<div class = "title">The Ascent 2: This Changes Everything</div> 
					<span class = "author">featuring Trent Stewart</span> | <span class="date">June 12, 2019</span>

					<p>We continue the Life on the Mountain series by taking a look at one of the most transformative statements of the Sermon on the Mount - one that changes everything.</p>
				</div>
			</a>
        </div>

        <div class="small-12 medium-6 large-4 cell">
			<a href = "#">
				<div class = "media-post">
					<img src = "https://images.unsplash.com/photo-1434394566634-da0fa7e334b8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80">
					<div class = "title">The Ascent 1: Are You Connected To God?</div> 
					<span class = "author">featuring Trent Stewart</span> | <span class="date">May 29, 2019</span>
					<p>Today, we’re asking the question, are you truly connected to God and if so, what does that life look like?</p>
				</div>
			</a>
        </div>
    </div>
</div>

<hr>
<h2 class = "media-titles">Sermons</h2>
<div class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="small-12 medium-6 large-4 cell">
			<a href = "#">
				<div class = "media-post">
					<img src = "http://trentblog.local/wp-content/uploads/2019/07/Mountain-2.jpg">
					<div class = "title">Easter 2019</div> 
					<span class = "author">featuring Trent Stewart</span> | <span class="date">June 26, 2019</span>

					<p>Sermon Description</p>
				</div>
			</a>
        </div>

        <div class="small-12 medium-6 large-4 cell">
			<a href = "#">
				<div class = "media-post">
					<img src = "http://trentblog.local/wp-content/uploads/2019/07/Mountain-1.jpg">
					<div class = "title">Christmas 2018</div> 
					<span class = "author">featuring Trent Stewart</span> | <span class="date">June 12, 2019</span>

					<p>Sermon Description</p>
				</div>
			</a>
        </div>

        <div class="small-12 medium-6 large-4 cell">
			<a href = "#">
				<div class = "media-post">
					<img src = "http://trentblog.local/wp-content/uploads/2019/07/LOTM-8.jpg">
					<div class = "title">Vision Sunday 2018</div> 
					<span class = "author">Trent Stewart</span> | <span class="date">JUL 22, 2018</span>
					<p>Where there is no vision, the people perish.</p>
				</div>
			</a>
        </div>
    </div>
</div>

<?php
get_footer();
