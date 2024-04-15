---
title: '7 Best WordPress Image Optimization Plugins Compared'
date: '2019-03-09 23:48:50'
modified: '2020-07-27 11:21:59'
slug: best-wordpress-image-optimization-plugins
categories:
    - wordpress
tags:
    - wordpress-plugins
featured_image: 2019/03/image-optimization-plugins-featured.png
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. While testing your website&rsquo;s load speed using tools like Pingdom, you might have noticed that images add a lot of weight to your pages, resulting in lower page speed scores. Google PageSpeed Insights also suggests serving images in the next-gen format. However, you can not avoid images unless you have a text-oriented blog. So what is the best way to solve it? The answer is, make each image as lightweight as possible. Since…'
yoast_seo_title: ''
yoast_meta_description: ''
cn_related_posts:
    - shortpixel-image-optimization-plugin-review
    - lazy-load-images-wordpress-plugins
    - reduce-server-response-time-ttfb
---
While testing your website's load speed using tools like Pingdom, you might have noticed that images add a lot of weight to your pages, resulting in lower page speed scores. Google PageSpeed Insights also suggests serving images in the next-gen format.

_However, you can not avoid images unless you have a text-oriented blog. So what is the best way to solve it?_

The answer is, make each image as lightweight as possible. Since you are using WordPress, there are a couple of plugins that help to compress and reduce the size of images you upload to your site or blog. In this post, I going to compare top image optimization plugins available in the plugins directory.

As I also run a couple of photo-heavy blogs, I am especially interested in image SEO also. Photos generally use JPEG format while screenshots and illustrations work best in PNG format. So while comparing each plugin, we will check how efficiently they compress images in both JPEG and PNG.

In short, theser are the three main things that I usually look for in an image optimization plugin:

- Size reduction after compressing JPEG & PNG images
- Does the plugin support WebP (next-gen format) or not?
- Pricing: how many images can I optimize with the free plan? And what is the cost per image after that?

This is the list of plugins I am going to compare here:

|**Plugin**|**Installations**|**Rating**|**Free plan usage**|**WebP**|**Min. Price**  <br>**after free**|
|---|---|---|---|---|---|
|ShortPixel|200k+|4.6|100 images/mo|Yes|$4.99/mo|
|Imagify|300k+|4.5|25MB (~250 images)/mo|Yes|$4.99/mo|
|TinyPNG|200k+|4.5|500 images/mo|No|$0.009/image|
|reSmush|100k+|4.3|No limit|No|--|
|Ewww|800k+|4.7|No limit|Yes|$3/1500 images|
|WP Smush|1m+|4.8|No limit|Pro|$6/mo|
|Optimole|60k+|4.8|1GB images/mo|Yes|$27/mo|

Wordpress image compression plugins - last update: Jul 2020

I have included only the plugins that are actively maintained and have at least 10k installs.

## Test Images

For testing, I chose a JPEG image and a PNG image.

**JPEG image (a photo clicked by myself):**

_Note: Omitted the smallest thumbnail (150w) as it is too small._

**Sizes before compression:**  
  
Full size (1280w) - 594 KB  
Thumb 1(1024w) - 214 KB  
Thumb 2 (768w) -  119 KB  
Thumb 3 (300w) -  20KB  
  
**Total - 947 KB**

![test jpeg image](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/07/jpeg-test-image-io-plugins-1080x720.jpg)

Our JPEG test image

**PNG(from Pixabay.com):**

**Sizes before compression:**  
  
Full size - 294 KB  
Thumb 1(1024w) - 227 KB  
Thumb 2 (768w) - 142 KB  
Thumb 3 (300w) - 35 KB  
  
**Total - 698 KB**

![test png image](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/07/png-test-image-io-plugins-1080x720.png)

The PNG image from pixabay.com

## Results after Compression

### JPEG Compression

|Plugin|Setting|Total (KB)|% Saved|WebP Size (Total)|
|---|---|---|---|---|
|No optimization|---|947|0|--|
|**ShortPixel**|Lossy|343|63.8%|375|
|**WP Smush**|Super-smush (pro-only)|474|49.9%|--|
||Lossless (default)|926|2.2%|--|
|**reSmush.it**|82% quality|509|46.25%|--|
||92% quality - default|749|20.9%|--|
|**Imagify**|Ultra|546|42.3%|368|
||Aggressive|642|32.2%|394|
|**TinyPNG**|Default|684|28%|--|
|**Ewww**|Pixel Perfect|897|5.2%|521|
|**Optimole**|Default (on-the-fly)|--|~52.7%**|--|

**since optimole only cdn-only, the savings % is based on the webp image

### PNG Compression

|Plugin|Setting|Total (KB)|% Saved|WebP Size (Total)|
|---|---|---|---|---|
|No optimization|---|698|0|--|
|**ShortPixel**|Lossy|216|69%|119|
|**TinyPNG**|Default|214|69.3%|--|
|**WP Smush**|Super-smush|224|67.9%|--|
||Lossless (free)|670|4%|--|
|**Ewww**|Premium|225|67.8%|208|
||Pixel Perfect (default)|622|10.8%|458|
|**reSmush.it**|Default|226|67.6%|--|
|**Imagify**|Ultra|234|66.5%|96|
||Aggressive|262|62.4%|101|
|**Optimole**|Default|--|~81%**|--|

**optimole - % based on webp

## ShortPixel

![ShortPixel Image Optimization Plugin](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/07/shortpixel-wp-page.png)

In my tests, ShortPixel's lossy method gives the maximum compression for the JPEG image. The results for the PNG image is also excellent - 69%. In addition to the lossy, ShortPixel also supports **glossy algorithm**, which is great for photographers who want to optimize images without compromising on image quality.

The first thing to after installing ShortPixel is to get an API key. The free key allows 100 images/mo. Later you can purchase more image credits.

![ShortPixel dashboard after validating with a key](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/07/shortpixel-admin-page-1080x550.png)

ShortPixel admin page after validating with an API key

The following are the things that make ShortPixel worth a try:

- A free plan with all the features: the only difference is, you can compress only 100 images/mo with the free plan.
- Compression happens remotely in the background.
- WebP support: Converts the optimized images to WebP format and inserts in posts using HTML <picture> tags.
- Competitive pricing: bulk credits starting from $9.99 for 10k images. Also, you can use the same API key on multiple sites.
- Cloudflare integration: If you use Cloudflare, enter your key in the ShortPixel settings page, and it will update the CDN with newly optimized images.

[Get ShortPixel](https://wordpress.org/plugins/shortpixel-image-optimiser/)

## Imagify

![Imagify](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/07/imagify-wp-page.png)

Pricing and feature-wise, Imagify is quite similar to ShortPixel. Both works remotely and requires an API key. The only main difference I could find is in the compression benefits with JPEG images. Imagify's Ultra algorithm gave only a 42% reduction with the test image while ShortPixel gave around 63%. Also, there's no Cloudflare integration.

The plugin is from **WP Media**, the same folks behind the popular **WP Rocket Caching** plugin.

![Imagify settings](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/07/imagify-admin-page-1080x513.png)

- Free API key limits to 25MB of images/month
- Pricing starts at $4.99/mo. There are also one-time plans just like ShortPixel
- Works remotely in the background

[Get Imagify](https://wordpress.org/plugins/imagify/)

## .it

reSmush is the only plugin in this list that is **completely free** to use. What it does completely free of charge deserves applause. It is on par with other plugins when it comes to optimizing both JPEG and PNG formats.

[Get reSmush.it](https://wordpress.org/plugins/resmushit-image-optimizer/)

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/07/reSmush-wp-page.png)

The plugin allows you to manually enter a quality level from 0 to 100. The default value is 92, which a little high in my opinion. For better compression, enter a safe value in the range of 75 to 85 which improves reductions a lot for JPEG images. However, there is no WebP support. Otherwise, it could rival the other freemium plugins.

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/07/reSmush-admin-page-1080x396.png)

The plugin saves a renamed version of the original file in the uploads folder. This comes useful when you want to re-optimize images after changing a quality setting. However, I couldn't figure out how to disable it so as to save disk space.

- Fully free
- Easy to configure
- Currently, there is no WebP support
- Free API

In short, reSmush.it is the best free image compression plugin I have found so far. You should definitely check it if you haven't already.

## TinyPNG Compress JPEG & PNG Images

![TinyPNG plugin](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/07/tinypng-wp-page.png)

TinyPNG Compress JPEG & PNG image is another plugins that's worth mentioning for its simplicity. There are no overwhelming number of configurations. Register with your email and get an API key. Then enter it in the settings page and the plugins starts optimizing.

- [Get TinyPNG](https://wordpress.org/plugins/tiny-compress-images/)

![TinyPNG WordPress plugin settings](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/07/tinypng-admin-page.png)

The plugin allows compressing the first 500 images per month for free. To compress more images, you have to provide your payment details on TinyPNG's website. The cost is $0.009/image upto 10k images. After that, the price is even lower - $0.002/image. So, if you are not a heavy user, it can be a cost-effective solution.

- First 500 images/month free, $0.009/image after that
- Easy to configure
- No WebP Support

However, since TinyPNG does not support WebP currently, it is a deal breaker for me. Also, the reduction with JPEG image is also lower than other plugins above.

## Optimole

Optimole works differently from the other plugins in this list. It optimizes images on the fly. That means, unlike the other plugins, it doesn't save the compressed images back on your server.

[Get Optimole](https://wordpress.org/plugins/optimole-wp/)

Instead, Optimole servers all the compressed images from its **CDN powered by Amazon Cloudfront**. The images will be in WebP too if the user's browser supports it. For that, it rewrites all the image URLs with the corresponding optimole(dot)com URL.

Because of that, the pricing structure is also different. The free tier is fully functional and allows up to 1GB of image optimizations per month. Since everything is served off of their CDN, there is also a viewing bandwidth - 5GB/mo.

- CDN based on-the-fly image optimizer
- The free plan allows 1GB images/month

To get more bandwidth, the pricing starts at $27.02/mo. You can pay monthly or annually.

## EWWW Image Optimizer

If you are looking for a powerful image optimization plugin, check out EWWW. With over 800k installations, it is currently more popular than Shortpixel or Imagify.

![EWWW Image Optimizer WordPress Plugin](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/07/ewww-wp-page.png)

- [Get EWWW](https://wordpress.org/plugins/ewww-image-optimizer/)

After installing and activating the plugin, you will see a lot of options under EWWW's settings page, which can be a little confusing at first. But in reality, it is quite easy to use.

![Ewww Image Optimization Plugin - admin page](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/07/ewww-admin-page-1080x649.png)

The free version of the plugin uses the image compression libraries present on your server to do the optimization. For example, if your server has cwebp utility installed, Ewww can use it to convert PNG and JPEG images to WEBP. So you can compress unlimited images with the free plugin.

However, the downside with this approach is that it can overload your server if you have lots of images to process. Also, it may not work equally on all hosting providers.

- Compress unlimited images with the free plan, includes WebP support
- The free plan uses local compression libraries available on the server.

So, for offloading the processing to Ewww's servers, you can purchase extra image credits along with an API key. The pricing starts at $3 for 1500 images. Purchasing an API key also unlocks more powerful compression methods.

- Free plan support only lossless compression for JPEG (jpegtran), whereas the API key unlocks lossy algorithms.

## WP Smush

![Smush - image compression plugin from WPMU Dev](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/07/wp-smush-wp-page.png)

The free Smush plugin has over 1 million installations and a 4.9/5 rating in the WordPress directory. However, it does not include most of the features included in the pro version - no WebP, no lossy compression, etc. You cannot even compress the original file.

[Get Smush](https://wordpress.org/plugins/wp-smushit/)

Also, the free version only gave a mere 2% reduction for the JPEG image, and 4% for the PNG. So, the free plugin is not that useful compared to the other plugins.

But the pro version of WP Smush is much more powerful. Developed by WPMU DEV, Smush was earlier available only as part of WPMU membership. But now, you can get it as a standalone plugin for $6/mo. It includes all the important features like WebP support, lazy loading, lossy compression, and adaptive images.

![Smush Pro dashboard](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/07/wp-smush-admin-page-1080x381.png)

Smush Pro Dashboard

Note that WebP is only available when you enable CDN (powered by Stackpath). There is no option to convert images to WebP and store it on your server.

- The free plan is quite basic
- Pro plan starts at $6/mo (there is a 7-day free trial)
- Pro includes WebP, CDN, lazy loading and lossy compression (Super-smush)

Overall, WP Smush is pricier than other plugins. But since they offer a 7-day free plugin, you can try it before paying.

## Do you actually need a Plugin to Optimize Images?

Not necessarily. If you use software like Photoshop or Gimp, you can manually set a quality level for each image before saving. For PNG, be sure to use PNG-8 over PNG-24 whenever possible.

Advantages of Manually Optimizing

- Ability to preview results before saving
- It can give greater savings if used correctly
- Gives more control on the image quality
- You can avoid an extra plugin

On the contrary, using a plugin has the following advantages:

- Saves time
- The quality of a compressed image is sometimes better. I have found that ShortPixel produces better quality JPEGs than Photoshop for the same size.
- To eliminate page speed warnings about image size, plugins can be better as it can automatically calculate the lossless compression opportunities for each of your images.

## Consclusion

You should definitely optimize all of your images for better performance and user experience. There is no question in that. However, you can do it either manually or by using plugins.

### The Winners

So these are the final picks:

- **ShortPixel**
- **Imagify**
- **reSmush.it**

So far, we have seen that ShortPixel is the best in terms of compression savings. Imagify is also equally capable. If you are looking for a completely free plugin, then there is nothing comparable to .it.

Apart from all these, Optimole is another plugin that is quite popular. It takes a slightly different approach by offering a CDN too.