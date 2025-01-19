<?php
/**
 * Title: Three Post Items
 * Slug: blog-pack/loop-three-items
 * Description: Add Three Post Items template
 * Categories: sectionsitem
 * Keywords: loop, posts
 */

?>
<!-- wp:group {"metadata":{"categories":["sectionsitem"],"patternName":"blog-pack/loop-three-items","name":"Three Post Items"},"align":"full","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull"><!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":"0","offset":"3","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"full"} -->
<div class="wp-block-query alignfull"><!-- wp:group {"align":"wide","className":"variations-posts-grid","style":{"spacing":{"padding":{"top":"2.01rem","bottom":"2.01rem","left":"2.01rem","right":"2.01rem"},"margin":{"top":"0","bottom":"0"},"blockGap":"0px"},"dimensions":{"minHeight":"0px"},"border":{"width":"0px","style":"none","radius":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide variations-posts-grid" style="border-style:none;border-width:0px;border-radius:0px;min-height:0px;margin-top:0;margin-bottom:0;padding-top:2.01rem;padding-right:2.01rem;padding-bottom:2.01rem;padding-left:2.01rem"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"1.3rem"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","height":"","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":"16px"}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","bottom":"2rem","left":"0rem","right":"0rem"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0rem;padding-right:0rem;padding-bottom:2rem;padding-left:0rem"><!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"top":"20px"}},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="min-height:0px;margin-top:20px"><!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","textDecoration":"none","fontSize":"12px","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"textColor":"light"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"textDecoration":"none","lineHeight":1.3,"fontSize":"1.22rem"},"spacing":{"padding":{"bottom":"0rem"},"margin":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"textColor":"black","fontFamily":"hedvig-letters-serif-regular"} /-->

<!-- wp:post-date {"style":{"spacing":{"margin":{"right":"0","left":"0","top":"16px","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"typography":{"fontSize":"0.9rem"},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->