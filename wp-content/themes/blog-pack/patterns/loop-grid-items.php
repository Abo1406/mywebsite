<?php
/**
 * Title: Grid of Posts
 * Slug: blog-pack/loop-grid-items
 * Description: Add Grid of posts
 * Categories: sectionsitem
 * Keywords: loop, posts
 */

?>
<!-- wp:group {"metadata":{"categories":["sectionsitem"],"patternName":"blog-pack/loop-grid-items","name":"Grid of Posts"},"align":"full","style":{"spacing":{"padding":{"left":"20px","right":"20px","top":"80px","bottom":"80px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:80px;padding-right:20px;padding-bottom:80px;padding-left:20px"><!-- wp:query {"queryId":12,"query":{"perPage":"9","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"10px"}}} /-->

<!-- wp:post-date {"style":{"spacing":{"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|light"}}},"typography":{"fontSize":"14px"}},"textColor":"light"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"22px"},"spacing":{"margin":{"bottom":"10px","top":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} /-->

<!-- wp:read-more {"content":"\u003cstrong\u003eREAD MORE\u003c/strong\u003e →","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontSize":"13px"}},"textColor":"black"} /-->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}},"typography":{"fontSize":"1rem"}},"textColor":"light"} -->
<!-- wp:query-pagination-previous {"label":"\u003c Prev","style":{"typography":{"textDecoration":"none"}}} /-->

<!-- wp:query-pagination-numbers {"className":"is-style-rounded-numbers","style":{"typography":{"fontSize":"1rem","textDecoration":"none"}}} /-->

<!-- wp:query-pagination-next {"label":"Next \u003e","style":{"typography":{"textDecoration":"none"}}} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results.","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"textColor":"light"} -->
<p class="has-light-color has-text-color has-link-color"></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->