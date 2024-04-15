---
title: 'How to Add Lightbox in WordPress [using Plugins]'
date: '2021-09-29 23:20:00'
modified: '2021-09-29 23:20:59'
slug: add-lightbox-wordpress-plugins
categories:
    - wordpress
tags:
    - wordpress-plugins
featured_image: 2021/09/lightbox-plugins-wordpress-featured-1.jpg
excerpt: 'Find out some of the best WordPress plugins to display images in a lightbox.'
yoast_seo_title: ''
yoast_meta_description: 'Find out some of the best WordPress plugins to display images in a lightbox.'
cn_related_posts: {  }
---
You already know that WordPress automatically creates multiple thumbnail sizes when you upload images to it.

Usually, when you insert images into a post or gallery, you use these thumbnails and link them to the original image.

When someone clicks on a thumbnail, the original file loads in the same window (or in a new tab) just like any other hyperlink. The user needs to click the back button to get back to the content.

In contrast, a lightbox allows the user to view the images in an overlay box. Also, most lightboxes support slideshows and touch swipes, giving a far better user experience than an ordinary image hyperlink.

So in this post, we will see how to implement the lightbox feature in a WordPress website.

I'll mention a few plugins to get that done. However, keep in mind that you can do it without plugins as well.

_Note that we're discussing lightboxes only, not galleries. If you are looking for a gallery+lightbox feature, please check these posts:_

- [How to Create Galleries in WordPress](http://localhost:10003/create-image-gallery-wordpress/)
- [Top Gallery Plugins for WordPress](http://localhost:10003/wordpress-gallery-plugins/)

## Different Ways to Setup Lightbox in WordPress

- **By writing custom code** _- difficult_
- **Integrate an existing Javascript lightbox plugin** - _moderate (still involves coding)_
- **Install a plugin**: _easiest_

### Code a Custom Plugin

Coding a custom lightbox is not for everyone. You need to be good with Javascript, CSS, HTML, PHP, and WordPress to do that. You might want to hire someone if you are not a developer. Moreover, it is time-consuming. So, consider it only if you have special feature requirements that can't be met with an existing plugin.

### Integrate a JS Lightbox Plugin

The second choice is to integrate an existing Javascript plugin. There are a number of good-quality scripts available today. Many of them are open-source too, so you don't need to pay to use them.

Some of the plugins that I've found quite useful are:

- [Photoswipe](https://github.com/dimsemenov/PhotoSwipe)
- [Lightgallery](https://github.com/sachinchoolur/lightGallery)
- [Lightbox](https://lokeshdhakar.com/projects/lightbox2/)

Out of these, **Photoswipe** and **Lightgallery** are almost similar in terms of design.

Photoswipe is more performant as it does not depend on any other libraries like jQuery. On the flip side, Lightgallery depends on jQuery but has extra features like scrolling thumbnails and video lightbox.

Albeit being open-source, the two differ in licensing. Photoswipe is distributed under [MIT](https://opensource.org/licenses/MIT) license while Lightgallery is [GPLv3](https://www.gnu.org/licenses/gpl-3.0.en.html). So, the former may be better suited for commercial projects. LG also offers paid commercial licenses in case your website/app code is not going to be GPLv3-compatible.

Both the plugins are available on Github. Photoswipe has gained over 21k stars so far while LG is much behind with just 4.7k stars as of writing this.

Not just on WordPress, you can integrate these libraries with any website. It is easier than writing a custom-coded plugin, but still requires knowledge of HTML, JS, and CSS.

### Use a WordPress Plugin

The easiest method is to use an already existing WordPress plugin so that you don't need to deal with coding. Here are some of the plugins that I've found useful:

- [Simple Lightbox](https://wordpress.org/plugins/simple-lightbox/)
- [Lightbox with Photoswipe](https://wordpress.org/plugins/lightbox-photoswipe/)
- [Meow Lightbox](https://wordpress.org/plugins/meow-lightbox/)

Out of these, the second one is built using the Photoswipe JS library we've seen above.

_Let's look at each of the three plugins._

## Simple Lightbox

As the name says, [Simple Lightbox](https://wordpress.org/plugins/simple-lightbox/) is a simple plug-n-play lightbox plugin for WordPress. It's free and has over 200k installations and a 4.5/5 star rating.

[![Simple Lightbox plugin on WordPress repository](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/simple-lightbox-wp-page-1-1080x834.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/simple-lightbox-wp-page-1.png)

Search for _'simple lightbox'_ from the **Add Plugins** page in your WordPress admin and install the plugin.

[![installing Simple Lightbox plugin](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/simple-lightbox-plugin-install-1080x349.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/simple-lightbox-plugin-install.png)

The plugin has a settings page (Appearance > Lightbox), where you can enable/disable it, select dark/light theme, set slideshow interval, etc. The default settings work perfectly most of the time.

![simple lightbox settings page](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/simple-lightbox-settings-1-1080x550.png)

_And here is how it works on a blog post with multiple photos._

[![](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/simple-lightbox-in-action-2.gif)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/simple-lightbox-in-action-2.gif)

For an easy-to-use plugin, Simple Lightbox works great. However, it does not include any advanced features like zooming, social share, etc.

## Lightbox with Photoswipe

[This plugin](https://wordpress.org/plugins/lightbox-photoswipe/) is based on the Photoswipe javascript library, and offers a lot more features:

- Zooming
- Fullscreen view
- Display Exif data
- Share buttons, etc

![Lightbox with Photoswipe on WordPress repository](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/lightbox-photoswipe-wp-page-1080x801.png)

Go to Add Plugins, search for _'photoswipe'_ to install the plugin.

[![installing Lightbox with Photoswipe WordPress plugin](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/lightbox-photoswipe-install-1-1080x411.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/lightbox-photoswipe-install-1.png)

Access the settings area from _Settings > Lightbox with Photoswipe_. The options are organized into seven different tabs.

Under the **General** tab, you can selectively disable the lightbox based on post/page ID, and post types. You also get the choice to disable individual features that you don't need - picture counter, fullscreen, zoom, infinite loop, etc.

[![General Settings](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/lightbox-photoswipe-general-1080x555.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/lightbox-photoswipe-general.png)

Coming to **Themes**, you can select one of the four built-in skins. However, there isn't much distinction between the designs.

[![Theme settings](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/lightbox-photoswipe-theme.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/lightbox-photoswipe-theme.png)

Under **Captions**, select what all information you want to display along with the photo in the lightbox. The EXIF option is also available, which can be useful for photographers who want to show the details like aperture, shutter speed, ISO, and focal length.

[![captions](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/lightbox-photoswipe-captions.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/lightbox-photoswipe-captions.png)

Users can share photos directly to social media from the lightbox. The available options include Facebook, Twitter, and Pinterest, in addition to image download.

[![sharing](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/lightbox-photoswipe-sharing.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/lightbox-photoswipe-sharing.png)

**Desktop:** Choose how the lightbox behaves on a desktop device - mouse wheel function, slide animation, and other related controls.

[![desktop settings](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/lightbox-photoswipe-desktop.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/lightbox-photoswipe-desktop.png)

**Mobile:** Choose the behavior on mobile devices - vertical drag to close, pinch to close, and tap to toggle controls.

![mobile settings](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/lightbox-photoswipe-mobile.png)

Here is how it works on a blog post with a couple of photos:

## Meow Lightbox

[Meow Lightbox](https://wordpress.org/plugins/meow-lightbox/) is another lightbox plugin that you'll love if you are a photographer. It is created for photographers by a photographer, [Jordy Meow](https://www.instagram.com/jordymeow/).

[![meow lightbox - wordpress plugins](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/meow-lightbox-wp-page.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/meow-lightbox-wp-page.png)

The free version, which has 5k+ installations and a 5/5 rating, offers all the essential features you need to create beautiful photo gallery lightboxes. Captions, EXIF, photo zoom, light/dark themes, are all available for free.

_Install it like any other free plugin:_

[![installing Meow Lightbox plugin](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/meow-lightbox-install-1080x348.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/meow-lightbox-install.png)

Apart from that, there is also a paid version that unlocks additional features like deep linking, social sharing, Google Maps support (works if your photos have GPS coordinates), slideshows, and preloading (for faster loading).

On the settings page, you can include/exclude images from lightbox based on CSS selectors. By default, it selects all the images with _entry-content_, _wp-block-gallery,_ _gallery_, and _mgl-gallery_ CSS classes. And it excludes images on archive pages, blog index pages, attachment pages, and images with the class _no-lightbox_.

[![meow lightbox settings page](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/meow-lightbox-settings-page-1080x513.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/meow-lightbox-settings-page.png)

Here is how it works:

Meow Lightbox is not the only plugin from this developer. You can find other related products like Meow Gallery, Media Cleaner, Photo Engine, etc, all useful for photographers.

## Conclusion

I hope now you know how to implement lightbox in WordPress. Both Photoswipe and Meow Lightbox are great for creating professional-looking image lightboxes.

Personally, I prefer the look & feel of Meow although features like deep linking and social sharing are only available in the paid version. Whereas the Photoswipe plugin offers the maximum features for free.

_Also, remember that every website need not set up lightboxes for images. Lightbox plugins inevitably add more CSS and Javascript to your site's HTML code. So if you like to keep things lightweight, then you may not need to set up lightboxes all._