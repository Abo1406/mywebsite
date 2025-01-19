<?php
/**
 * Title: List of Posts
 * Slug: blog-pack/loop-list-items
 * Description: Add a List of posts
 * Categories: sectionsitem
 * Keywords: loop, posts
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:50px;padding-bottom:50px"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontSize":"2.5rem"},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"black","fontFamily":"hedvig-letters-serif-regular"} -->
<h2 class="wp-block-heading has-black-color has-text-color has-link-color has-hedvig-letters-serif-regular-font-family" style="margin-bottom:0px;font-size:2.5rem">Latest Posts</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"100px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"black","className":"is-style-outline","style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontSize":"16px","textDecoration":"underline"}}} -->
<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:16px;text-decoration:underline"><a class="wp-block-button__link has-black-color has-text-color has-link-color wp-element-button" href="#" style="border-style:none;border-width:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">See More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":12,"query":{"perPage":"9","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[]}},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"grid","columnCount":1}} -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"40px","left":"40px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"390px"} -->
<div class="wp-block-column" style="flex-basis:390px"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","height":"","style":{"border":{"radius":"10px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","style":{"spacing":{"blockGap":"10px","padding":{"top":"0px"}}}} -->
<div class="wp-block-column" style="padding-top:0px"><!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","textDecoration":"none","fontSize":"12px","fontStyle":"normal","fontWeight":"700","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"textColor":"light"} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"15px","top":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontSize":"1.77rem"}},"textColor":"black","fontFamily":"prata-regular"} /-->

<!-- wp:post-date {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontSize":"14px"}},"textColor":"black"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":31,"style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"50px","bottom":"50px"}}},"backgroundColor":"vibrant"} -->
<hr class="wp-block-separator has-text-color has-vibrant-color has-alpha-channel-opacity has-vibrant-background-color has-background is-style-wide" style="margin-top:50px;margin-bottom:50px"/>
<!-- /wp:separator -->
<!-- /wp:post-template -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"4rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:4rem"><!-- wp:query-pagination {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}},"typography":{"fontSize":"1rem"}},"textColor":"light"} -->
<!-- wp:query-pagination-previous {"label":"\u003c Prev","style":{"typography":{"textDecoration":"none"}}} /-->

<!-- wp:query-pagination-numbers {"className":"is-style-rounded-numbers","style":{"typography":{"fontSize":"1rem","textDecoration":"none"}}} /-->

<!-- wp:query-pagination-next {"label":"Next \u003e","style":{"typography":{"textDecoration":"none"}}} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query -->