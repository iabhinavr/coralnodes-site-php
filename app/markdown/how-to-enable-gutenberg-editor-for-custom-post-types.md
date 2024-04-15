---
title: 'How to Enable Gutenberg Editor for Custom Post Types'
date: '2020-03-19 18:27:21'
modified: '2021-12-24 22:22:28'
slug: how-to-enable-gutenberg-editor-for-custom-post-types
categories:
    - wordpress
tags:
    - wordpress-tips
featured_image: 2020/03/enable-gutenberg-custom-post-types-featured-1.jpg
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. You know that starting from WordPress 5.0, the new Gutenberg editor is the default editor for posts and pages. But that is not the case for custom post types. The classic editor still shows up by default. So, in this guide, I will show you how to enable the Gutenberg editor for the custom post types on your site. The process is simple. However, based on how you&rsquo;ve created the CPT, the methods…'
yoast_seo_title: 'How to Enable Gutenberg Editor for Custom Post Types - WordPress Tips'
yoast_meta_description: 'A short tip on how to enable gutenberg editor for custom post types in WordPress - mentions both manual and plugin methods'
cn_related_posts:
    - create-image-gallery-wordpress
    - how-to-install-wordpress-on-localhost
    - prevent-wordpress-xml-rpc-attacks
---
You know that starting from WordPress 5.0, the new Gutenberg editor is the default editor for posts and pages. But that is not the case for custom post types. The classic editor still shows up by default.

So, in this guide, I will show you how to enable the Gutenberg editor for the custom post types on your site. The process is simple. However, based on how you've created the CPT, the methods also differ. 

Below, we will discuss two methods for a CPT created:

- manually with `register_post_type()` function
- using a plugin - Custom Post Type UI

- You might also like: [Best Block Plugins to Supercharge Gutenberg Editor](http://localhost:10003/best-block-plugins-wordpress-gutenberg-editor/)

Let us start with the manual method first.

## Manually Enable Gutenberg Editor for Custom Post Types

First of all, find out where you've defined the CPT code using the `register_post_type()` function. It can be in your theme's `functions.php` file or in a site plugin. It usually looks like this:

[![how to enable gutenberg editor for custom post types](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/03/cpt-gutenberg-not-enabled-1.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/03/cpt-gutenberg-not-enabled-1.png)

You should change it to the following to add support for the Gutenberg editor.

[![enabling editor and rest api support for cpt](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/03/cpt-gutenberg-enabled-1-1080x518.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/03/cpt-gutenberg-enabled-1.png)

In the above code, we've done two things to enable Gutenberg:

- Added 'editor' value to the 'supports' array
- Set the 'show_in_rest' key to true

The 'supports' key is used to enable support for several core WordPress features for the CPT, like featured image, excerpt, etc. There is no problem even if you do not define that key at all, as it's default values are 'title' and 'editor.' But if you define it, be sure to include 'editor' also.

The second step is setting the 'show_in_rest' key to true. You might know that WordPress has a built-in REST API. By enabling 'show_in_rest', we make sure the custom post type data is available via this API.

The [Gutenberg editor depends on the API](https://torquemag.io/2018/02/rest-api-gutenberg-work-together/) to work. Unlike CPTs, posts and pages are API-enabled by default, and they support Gutenberg out of the box.

After modifying the code, reload the editor and see if Gutenberg is showing up. Then repeat the process for all other CPTs for which you want to enable the new editor.

## Method 2: Using the Custom Post Type UI Plugin

At least some of you might be using the [Custom Post Type UI](https://wordpress.org/plugins/custom-post-type-ui/) plugin to create CPTs on your site. If so, you don't have to deal with any code directly. The plugin gives a friendly interface to manage all.

Usually, you don't have to do anything more to enable Gutenberg if using CPT UI. But if you still find that your CPT uses the classic editor, check the following.

Go to the Registered Types/Taxonomies page under CPT UI. Then click the CPT for which you want to enable Gutenberg. Under the Settings tab, check two things:

- Show in REST API field should be set to true

Then scroll down, and for the Supports section,

- Ensure that 'Editor' is checked

[![cpt ui plugin - edit](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/03/cpt-ui-select-cpt-1080x472.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/03/cpt-ui-select-cpt.png)

[![shot in rest api option - cpt ui](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/03/cpt-ui-show-in-rest-api-1080x773.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/03/cpt-ui-show-in-rest-api.png)

[![](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/03/cpt-ui-editor-support.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/03/cpt-ui-editor-support.png)

After doing this, you should be able to edit your posts in Gutenberg. Then repeat the same for all other CPTs.

## Conclusion

We saw that REST API support and adding the value _editor_ are the two main requirements to enable Gutenberg for any post type. So, I hope that this short post has helped you.

One more thing, if you have the [Classic Editor](https://wordpress.org/plugins/classic-editor/) plugin active on the site, Gutenberg won't be available for any type, be it posts, pages, or CPTs. So, deactivate it.

If you still couldn't get it working on your site, feel free to mention your issue in the comments.