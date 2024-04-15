---
title: 'How to Disable Emojis in WordPress for Better Speed'
date: '2019-02-23 03:57:40'
modified: '2020-11-03 01:59:45'
slug: disable-emojis-wordpress
categories:
    - wordpress
tags: {  }
featured_image: 2019/02/disable-emojis-wordpress-featured-1.jpg
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. You don&rsquo;t need any introduction to emojis. You see it often in text messages and conversations. They are enabled on your phone too. According to a recent statistic, there are over three thousand Unicode emojis in use on the web. These small icons help to convey emotions or meanings easier than words. WordPress by default supports the use of emojis. That means if you enter emoji characters in the editor, WordPress automatically converts…'
yoast_seo_title: ''
yoast_meta_description: 'Learn how to disable emojis in WordPress, and prevent loading wp-emoji-release.min.js script, which can give a slight boost in page speed.'
cn_related_posts:
    - lazy-load-images-wordpress-plugins
    - eliminate-render-blocking-resources-wordpress
    - leverage-browser-caching
---
You don't need any introduction to emojis. You see it often in text messages and conversations. They are enabled on your phone too. According to a [recent statistic](https://emojipedia.org/stats/), there are over three thousand Unicode emojis in use on the web.

These small icons help to convey emotions or meanings easier than words.

WordPress by default supports the use of emojis. That means if you enter emoji characters in the editor, WordPress automatically converts them into the corresponding icons on the front-end. However, unless your blog has a personal nature, you might not require this feature. So you can disable it altogether, which can give a slight performance boost.

WordPress loads additional scripts for emojis on all pages even if you use it or not. This includes an HTTP request too - `wp-emoji-release.min.js`.

_**Learn how to disable emojis by watching this video:**_


<iframe src="https://www.youtube-nocookie.com/embed/n24YSEk21KU?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

WordPress loads these resources in several areas, including the admin, front-end pages, feeds, and so on. To disable them at least from the front-end, we have to do the following things:

1. Remove the inline JS script for emojis
2. Disable the inline emoji CSS styles
3. Prevent requesting `wp-emoji-release.min.js`. _The first step - removing the inline script - automatically takes care of this._

![wordpress emoji scripts](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/02/disable-emoji-1-1024x502.png)

Emojis in the front-end and the action hooks that loaded them

![wp-emoji-release.min.js loading in the front-end](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/02/wp-emoji-script-disable-1024x411.png)

The JS file - Using Chrome Dev Tools

In addition to the front-end, we will also remove it from loading in the following areas:

- WordPress admin
- RSS feeds
- Embeds
- Emails
- TinyMCE editor

## 2 Ways to Disable Emojis

There are two ways to disble WordPress emojis:

- Manually by adding custom code, which unhooks all the emoji-related functionalities
- Using a plugin

If you want to want to avoid installing another plugin, I would suggest the manual method. It's my preferred method too. Otherwise, there are a couple of plugins that can save you from messing with code.

### 1. Manual Method - Code to Disable Emojis in WordPress

```
function disable_emoji_feature() {
	
	// Prevent Emoji from loading on the front-end
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	// Remove from admin area also
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );

	// Remove from RSS feeds also
	remove_filter( 'the_content_feed', 'wp_staticize_emoji');
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji');

	// Remove from Embeds
	remove_filter( 'embed_head', 'print_emoji_detection_script' );

	// Remove from emails
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

	// Disable from TinyMCE editor. Currently disabled in block editor by default
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );

	/** Finally, prevent character conversion too
         ** without this, emojis still work 
         ** if it is available on the user's device
	 */

	add_filter( 'option_use_smilies', '__return_false' );

}

function disable_emojis_tinymce( $plugins ) {
	if( is_array($plugins) ) {
		$plugins = array_diff( $plugins, array( 'wpemoji' ) );
	}
	return $plugins;
}

add_action('init', 'disable_emoji_feature');
```

In the above code, the lines starting with `remove_action` and `remove_filter` unhook all filters and actions that add support for the emojis.

Even after unhooking them, emojis will still show up on your site if the visitor's device supports it. That's why we **turned off the character conversion** as well, with this line of code:

```
add_filter( 'option_use_smilies', '__return_false' );
```

_Earlier, there was an option to uncheck emoji support under the **Writings** section on the Settings page. However, it is missing in the recent WordPress releases._

**Adding the code to your site:**

The easiest way is to paste this code in the functions.php file of your theme.

But remember, it's not wise to add code directly to the `functions.php` file of a parent theme. Otherwise, the next theme update can wipe out all these changes you have made. So, you should preferably add it in a [child theme](https://developer.wordpress.org/themes/advanced-topics/child-themes/).

**Alternatively, you can also add it to a site-specific plugin, as I've done on my site.**

If you don't feel comfortable with editing PHP files, you can use a plugin like [Code Snippets](https://wordpress.org/plugins/code-snippets/), which allows adding custom PHP code from the WordPress admin. But again, you have to install another plugin.

_Compared to other crucial performance measures like using a lightweight WordPress theme and a fast hosting, disabling emojis may not give a perceivable improvement in page loading speed._

Here I am using [Astra Pro](http://localhost:10003/go/astra-theme/) - a performance-focused WordPress theme, and [Cloudways](http://localhost:10003/go/cloudways/) to manage hosting on DigitalOcean. Both help me achieve better than average page speeds.

You might also like:

- [Steps to Reduce Server Response Time (TTFB)](http://localhost:10003/reduce-server-response-time-ttfb/)
- [How to Leverage Browser Caching](http://localhost:10003/leverage-browser-caching/)
- [How to Eliminate Render-blocking Resources](http://localhost:10003/eliminate-render-blocking-resources-wordpress/)

### 2. Disable Emojis using Plugins

If you want to do it without touching code, then use one of the following plugins.

#### **Disable Emojis (GDPR Friendly)**

It is a lightweight plugin with just one PHP file and less than a hundred lines of code. So don't hesitate to install it, as it will not slow down your site. In fact, the code I have given above is derived from this plugin.

- [Visit Plugin Page](https://wordpress.org/plugins/disable-emojis/)

![Disable Emojis WordPress Plugin](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/02/disable-emojis-plugin-1024x706.png)

The plugin has no settings or other options. Just install it and you are good to go. It is as simple as that.

#### **Autoptimize**

Autoptimize is not a plugin to disable emojis. It's a comprehensive performance plugin that can [eliminate render-blocking resources](http://localhost:10003/eliminate-render-blocking-resources-wordpress/), and [integrate a CDN](http://localhost:10003/bunnycdn-review/). But it includes the option for emojis too. So if you are already using Autoptimize to minify and defer WordPress files, then there is no need to look for another plugin or adding custom code.

- [Visit Plugin Page](https://wordpress.org/plugins/autoptimize/)

![WordPress Disable Emoji using Autoptimize](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/02/disable-emoji-autoptimize-1024x594.png)

Autoptimize emoji setting

You can locate the option under the Extra tab of the plugin's Settings page.

## Conclusion

If emojis are an unnecessary feature on your site, it's a good idea to remove it. I hope this article was helped you to do it.