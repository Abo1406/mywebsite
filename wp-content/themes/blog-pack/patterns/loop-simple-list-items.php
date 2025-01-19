<?php
/**
 * Title: Simple List of Posts
 * Slug: blog-pack/loop-simple-list-items
 * Description: Add a Simple List of Posts
 * Categories: sectionsitem
 * Keywords: loop, posts
 */

?>
<!-- wp:group {"metadata":{"categories":["sectionsitem"],"patternName":"blog-pack/loop-simple-list-items","name":"Simple List of Posts"},"align":"full","style":{"spacing":{"padding":{"top":"40px","bottom":"60px","right":"30px","left":"30px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:40px;padding-right:30px;padding-bottom:60px;padding-left:30px"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontSize":"2.5rem"},"spacing":{"margin":{"bottom":"50px"}}},"textColor":"black","fontFamily":"hedvig-letters-serif-regular"} -->
<h2 class="wp-block-heading has-black-color has-text-color has-link-color has-hedvig-letters-serif-regular-font-family" style="margin-bottom:50px;font-size:2.5rem">Latest Posts</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":12,"query":{"perPage":"7","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[]}},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"grid","columnCount":1}} -->
<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","textDecoration":"none","fontSize":"12px","fontStyle":"normal","fontWeight":"700","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"textColor":"light"} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"15px","top":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontSize":"1.38rem"}},"textColor":"black","fontFamily":"prata-regular"} /-->

<!-- wp:post-date {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontSize":"14px"}},"textColor":"black"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50px"><!-- wp:group {"style":{"dimensions":{"minHeight":"42px"},"border":{"radius":"50%","width":"1px"}},"borderColor":"light","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center","flexWrap":"wrap"}} -->
<div class="wp-block-group has-border-color has-light-border-color" style="border-width:1px;border-radius:50%;min-height:42px"><!-- wp:read-more {"content":"\u003cimg class=\u0022wp-image-559\u0022 style=\u0022width: 16px;\u0022 src=\u0022<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arrow.png\u0022 alt=\u0022\u0022\u003e","style":{"spacing":{"padding":{"top":"14px","right":"12px","bottom":"13px","left":"12px"}},"typography":{"lineHeight":"1"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"16px","bottom":"16px"}}},"backgroundColor":"vibrant"} -->
<hr class="wp-block-separator has-text-color has-vibrant-color has-alpha-channel-opacity has-vibrant-background-color has-background is-style-wide" style="margin-top:16px;margin-bottom:16px"/>
<!-- /wp:separator -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}},"typography":{"fontSize":"1rem"}},"textColor":"light"} -->
<!-- wp:query-pagination-previous {"label":"\u003c Prev","style":{"typography":{"textDecoration":"none"}}} /-->

<!-- wp:query-pagination-numbers {"className":"is-style-rounded-numbers","style":{"typography":{"fontSize":"1rem","textDecoration":"none"}}} /-->

<!-- wp:query-pagination-next {"label":"Next \u003e","style":{"typography":{"textDecoration":"none"}}} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->