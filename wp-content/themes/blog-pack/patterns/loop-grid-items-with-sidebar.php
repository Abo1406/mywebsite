<?php
/**
 * Title: Grid of posts with sidebar
 * Slug: blog-pack/loop-grid-items-with-sidebar
 * Description: Add Grid of posts with sidebar
 * Categories: sectionsitem
 * Keywords: loop, posts
 */

?>
<!-- wp:group {"metadata":{"categories":["sectionsitem"],"patternName":"blog-pack/loop-grid-items-with-sidebar","name":"Grid of posts with sidebar"},"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"40px","right":"20px","left":"20px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:80px;padding-right:20px;padding-bottom:40px;padding-left:20px"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"},"blockGap":{"left":"4rem"}}}} -->
<div class="wp-block-columns" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"80px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:80px;padding-left:0px"><!-- wp:query {"queryId":12,"query":{"perPage":"10","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"35px"}},"layout":{"type":"grid","columnCount":2}} -->
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
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results.","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} -->
<p class="has-black-color has-text-color has-link-color"></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"266px","style":{"border":{"left":{"width":"0px","style":"none"},"top":[],"right":[],"bottom":[]},"spacing":{"padding":{"top":"0px","left":"0px","right":"0px"},"blockGap":"40px"}}} -->
<div class="wp-block-column" style="border-left-style:none;border-left-width:0px;padding-top:0px;padding-right:0px;padding-left:0px;flex-basis:266px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"},"blockGap":"14px"},"border":{"radius":"5px"}},"backgroundColor":"extra-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-extra-light-background-color has-background" style="border-radius:5px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:image {"id":523,"width":"124px","height":"auto","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100px"}}} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tyler.jpeg" alt="" class="wp-image-523" style="border-radius:100px;width:124px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"padding":{"bottom":"0px"},"margin":{"top":"15px"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"textTransform":"none","letterSpacing":"1px","fontSize":"1.2rem"}},"textColor":"black","fontFamily":"prata-regular"} -->
<h5 class="wp-block-heading has-text-align-center has-black-color has-text-color has-link-color has-prata-regular-font-family" style="margin-top:15px;padding-bottom:0px;font-size:1.2rem;letter-spacing:1px;text-transform:none">Tyler Moore</h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} -->
<p class="has-text-align-center has-black-color has-text-color has-link-color" style="font-size:14px">Hello, my name is Tyler Moore and with the help of many people I made this template. I made it so it is super easy to update and so that it flows perfectly with my tutorials. I wish you the best of luck with your business, enjoy the adventure.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:search {"label":"","placeholder":"Search blog...","buttonText":"Search","buttonPosition":"no-button","buttonUseIcon":true,"className":"is-style-high-search","style":{"border":{"radius":"33px"}},"borderColor":"light"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":5,"style":{"spacing":{"padding":{"bottom":"0px"},"margin":{"top":"15px"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"textTransform":"none","letterSpacing":"1px","fontSize":"1.2rem"}},"textColor":"black","fontFamily":"prata-regular"} -->
<h5 class="wp-block-heading has-text-align-left has-black-color has-text-color has-link-color has-prata-regular-font-family" style="margin-top:15px;padding-bottom:0px;font-size:1.2rem;letter-spacing:1px;text-transform:none">Must Read</h5>
<!-- /wp:heading -->

<!-- wp:query {"queryId":31,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-query alignfull"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-template {"style":{"typography":{"textTransform":"none"}}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":""}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"layout":{"selfStretch":"fit"},"typography":{"lineHeight":"1.1","fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"spacing":{"margin":{"top":"4px","right":"4px","bottom":"4px","left":"4px"}}},"textColor":"black"} /-->

<!-- wp:post-date {"textAlign":"left","format":"F j, Y","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontSize":"12px"}},"textColor":"black"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":5,"style":{"spacing":{"padding":{"bottom":"0px"},"margin":{"top":"15px"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"textTransform":"none","letterSpacing":"1px","fontSize":"1.2rem"}},"textColor":"black","fontFamily":"prata-regular"} -->
<h5 class="wp-block-heading has-text-align-left has-black-color has-text-color has-link-color has-prata-regular-font-family" style="margin-top:15px;padding-bottom:0px;font-size:1.2rem;letter-spacing:1px;text-transform:none">Categories</h5>
<!-- /wp:heading -->

<!-- wp:categories {"className":"is-style-modern-list","style":{"typography":{"fontSize":"12px","textTransform":"uppercase","textDecoration":"none"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->