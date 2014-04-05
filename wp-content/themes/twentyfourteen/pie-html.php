<html>
<head>
    <title>eddiesaidputatitlehere</title>
    <script>
        var JSONObject= {
            "status": "doesn't matter",
            "actions": [
                {"location": "http://thingalkd",
                    "duration": 10 },
                {"location": "http://whatever",
                    "duration": 5 }
            ]
        }
    </script>
</head>

<body>
    <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
<?php

    // Start the Loop.
    while ( have_posts() ) : the_post();

        /*
        * Include the post format-specific template for the content. If you want to
        * use this in a child theme, then include a file called called content-___.php
        * (where ___ is the post format) and that will be used instead.
        */
        get_template_part( 'content', get_post_format() );

    endwhile;
?>
    </div><!-- #content -->
    </div><!-- #primary -->
</body>
</html>