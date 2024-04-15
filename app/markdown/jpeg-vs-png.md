---
title: 'JPEG vs. PNG: Understanding the Differences'
date: '2022-03-05 19:04:17'
modified: '2022-03-05 19:04:20'
slug: jpeg-vs-png
categories:
    - fundamentals
tags: {  }
featured_image: 2022/02/jpeg-vs-png-featured-1.jpg
excerpt: 'Comparing the two popular raster image formats - JPEG vs. PNG. Example images showing which format to use in different scenarios.'
yoast_seo_title: ''
yoast_meta_description: 'Comparing the two popular raster image formats - JPEG vs. PNG. Example images showing which format to use in different scenarios.'
cn_related_posts:
    - what-is-webp-how-to-use-it
    - best-wordpress-image-optimization-plugins
    - shortpixel-vs-wp-smush
    - shortpixel-image-optimization-plugin-review
---
Have you ever got confused about whether to save a particular image as JPG or PNG? Then this post will help you.

In an earlier post, we had also [discussed webP](http://localhost:10003/what-is-webp-how-to-use-it/) format, which is a new generation format for serving images on the web.

JPG and PNG are two of the most popular formats used to save images. Both are raster image formats that store the image data in pixels unlike vector graphic formats like SVG, EPS, and PDF.

Despite that, both serve fundamentally different purposes.

## **What is JPEG**

JPEG is probably the most commonly used image format. It was developed by the **Joint Photographic Experts Group**. The initial version was released in 1992.

Its major aim was to offer an efficient way to encode photographic images. Even after about 30 years from the initial release, most digital cameras still use this format to save photographs.

Originally, JPEG used to support only 8-bit images. But with [an update](https://petapixel.com/2014/01/22/jpeg-standard-gets-boost-will-support-12-bit-color-depth-lossless-compression/) that came out in 2014, it can now support 12-bit images as well. However, it is not commonly used until now, and 8-bit is the _standard_.

You can find JPEG images with different file extensions:

- .jpg
- .jpeg
- .jpe

Despite the slight differences in the extension, all of them are essentially [the same](https://www.dpreview.com/forums/thread/327113). You may also rarely encounter other extensions such as .jfif and .jif too.

In addition to the original JPEG (JPEG 1) release, the Joint Photographic Experts Group has also developed other formats like JPEG 2000, JPEG XT, JPEG LS, JPEG XR, JPEG XS, and so on.

For instance, the JPEG 2000 version offers better compression performance while the JPEG XT format offers better support for high dynamic range images.

However, JPEG 1 is still the most popular version and that's what we are discussing in this post.

## **How JPEG Compression Works**

The main benefit of using the JPEG format is the huge savings in size. For instance, let’s take the example of this image, which is 1280 by 853 pixels in dimension.

[![](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/03/DSC_1103_scaled-jpg-100-subs-best-1080x720.jpg)](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/03/DSC_1103_scaled-jpg-100-subs-best.jpg)

When I saved it as an uncompressed 8-bit TIFF file, the total size was around 3.3MB. That makes sense if you do simple math:

- 1280x853x8x3 = 26204160 bits = 3.27 MB

Here, note that an 8-bit file means a _channel_ is 8 bits in size (8bpc), which means a pixel is 24 bits (24bpp) or 3 bytes. A color photo has 3 channels per pixel - Red, Green, and Blue.

When I saved the same image as a JPG file at 80% quality, the size was reduced to just 188KB. That's almost an 18:1 reduction from the original 3.3 MB size.

Below you can find details on how different images performed when saved at different quality settings and file formats.

_Now let us have a brief look at how the compression actually works._

You might already know that JPEG uses a **lossy compression** algorithm. That means it discards some data from the image to offer significant size reductions. Even if you set the quality parameter to 100%, it is still a lossy compression.

Behind the scenes, the JPEG library uses **Discrete Cosine Transformations** (DCT) to perform the compression. It is a complex mathematical function similar to _Fourier Transforms_.

This algorithm groups the nearby pixels into blocks and figures out a way to weed out the unnecessary data. During the process, it converts the RGB channels to _YCbCr_ channels and also converts the _spatial domain_ to the _frequency domain_. You can read more about all those things on [this website](https://cgjennings.ca/articles/jpeg-compression/).

In short, JPEG compression gives the most savings when an image has fewer details. That's why photographs with boring skies and less-detailed foregrounds usually have [very small file sizes](https://photo.stackexchange.com/questions/73011/does-the-detail-in-an-image-affect-how-large-the-image-file-is) when saved as JPEG files.

## **What is PNG**

PNG or Portable Network Graphics offers a lot of features not available in JPEG:

- 8 and 16 bits per channel images
- Support for transparency, alpha channel
- Lossless compression

However, PNG [does not](https://graphicdesign.stackexchange.com/questions/129985/why-is-cmyk-png-not-possible) support CMYK color mode, as its primary goal is to serve images for web use, rather than photographs for printing.

Initially released in 1995, PNG did not support EXIF data. However, a [recent update](http://ftp-osl.osuosl.org/pub/libpng/documents/pngext-1.5.0.html#C.eXIf) has added support for EXIF chunks.

## **Types of PNG**

Unlike JPEG, PNG supports several variants natively. The following are the options available when you save a PNG image using GIMP - an image editing program.

- 8bpc RGB
- 8bpc RGBA
- 16bpc RGB
- 16bpc RGBA
- 8bpc GRAY
- 8bpc GRAYA
- 16bpc GRAY
- 16bpc GRAYA

![save PNG file in GIMP](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/03/gimp-save-png-1-1080x626.png)

The first part (8bpc/16bpc) indicates the bits per channel while the second part (RGB/RGBA/GRAY/GRAYA) indicates the channels.

In addition to these types, Photoshop also gives you the option to save an image as a PNG 8 file. It uses an indexed color palette, which supports a total of only 256 colors. Whereas the 24-bit PNG file supports 16.7 million color variations. Because of that, 8-bit PNG has low color accuracy, making it not ideal for saving high-quality images.

You can check [this website](http://www.libpng.org/pub/png/book/chapter08.html#png.ch08.div.5) to get a detailed understanding of the different types of PNG files.

## **How PNG Works**

PNG uses _delta encoding_ to store the image data. It is a better choice for saving graphic images rather than photographs.

As I had already mentioned above, PNG is a lossless image format. It uses the DEFLATE algorithm for compression derived from the LZ77 algorithm. Released in 1977, LZ77 is also the basis for the LZW algorithm used in GIF image format.

## **Testing with Images**

To find out which format works best for different types of images, I created five sample images and then saved each of them in JPG and PNG.

1. Photograph taken with DSLR
2. Logo image
3. Rainbow gradient 
4. Graphic with text and transparency
5. Graphic with text and photo background

|   |   |   |   |   |   |
|---|---|---|---|---|---|
||Photo|Logo|Rainbow|Graphics|Graphics+Photo|
|TIFF 8bpc|3.3MB|||5.7MB|3.8MB|
|JPEG 80%|188KB|40KB (transparency lost)|56KB|54KB|97KB|
|PNG 8bpc rgba|1.8MB|36KB||324KB|597KB|
|PNG 8bpc rgb|1.6MB|Transparency lost|266KB|185KB (transparency lost)|540KB|

Links to the image files are given below

![photo with DSLR](https://coralnodes-files.b-cdn.net/coralnodes.com/jpeg-vs-png/DSC_1103_scaled-jpg-80-subs-best.jpg)

photo

![logo image](https://coralnodes-files.b-cdn.net/coralnodes.com/jpeg-vs-png/coralnodes-logo-8bpc-rgba.png)

logo image

![rainbow gradient](https://coralnodes-files.b-cdn.net/coralnodes.com/jpeg-vs-png/spectrum-png-9c-8bpc.png)

rainbow gradient

![graphics with transparency](https://coralnodes-files.b-cdn.net/coralnodes.com/jpeg-vs-png/graphics-8bpc-rgba.png)

graphics with  
transparency

![graphics with photo background](https://coralnodes-files.b-cdn.net/coralnodes.com/jpeg-vs-png/graphic-with-photo-80-jpg.jpg)

graphics with photo bg

### Photograph taken with DSLR

Photographic images contain numerous colors and lots of details. They do not have any transparent backgrounds that require an alpha channel. Both of these factors make them a perfect fit for the JPEG format.

When I saved the above photo at 80% quality, it yielded almost 9:1 more savings compared to 8-bpc PNG.

- Links to files: [JPEG 80%](https://coralnodes-files.b-cdn.net/coralnodes.com/jpeg-vs-png/DSC_1103_scaled-jpg-80-subs-best.jpg), [PNG 8bpc RGBA](https://coralnodes-files.b-cdn.net/coralnodes.com/jpeg-vs-png/DSC_1103_scaled-8bpc-rgba.png), [PNG 8bpc RBG](https://coralnodes-files.b-cdn.net/coralnodes.com/jpeg-vs-png/DSC_1103_scaled-8bpc-rgb.png)

### Logo Image

The logo image had a transparent background so it got the best results when saved as a PNG file at 8 bits per channel with RGB and alpha channels.

- Links to files: [JPEG 80%](https://coralnodes-files.b-cdn.net/coralnodes.com/jpeg-vs-png/coralnodes-logo-jpg-80.jpg), [PNG 8bpc RGBA](https://coralnodes-files.b-cdn.net/coralnodes.com/jpeg-vs-png/coralnodes-logo-8bpc-rgba.png)

### Rainbow Gradient

The rainbow gradient image does not have any transparent areas. So it got the best result when saved as 8bpc PNG RGB. The JPEG image could achieve more size savings but it showed visible banding when zoomed in.

- Links to files: [JPEG 80%](https://coralnodes-files.b-cdn.net/coralnodes.com/jpeg-vs-png/spectrum-jpg-80.jpg), [PNG 8bpc RBG](https://coralnodes-files.b-cdn.net/coralnodes.com/jpeg-vs-png/spectrum-png-9c-8bpc.png)

### Graphic with text & transparency

Again, this image has a transparent background. So the JPEG format is out of the question.

- Link to files: [JPEG 80%](https://coralnodes-files.b-cdn.net/coralnodes.com/jpeg-vs-png/graphics-80jpg.jpg), [PNG 8bpc RGBA](https://coralnodes-files.b-cdn.net/coralnodes.com/jpeg-vs-png/graphics-8bpc-rgba.png), [PNG 8bpc RBG](https://coralnodes-files.b-cdn.net/coralnodes.com/jpeg-vs-png/graphics-8bpc-rgb.png)

### Graphics with text & photo background

The PNG format saved the image without losing any quality. However, the JPEG image was also highly usable and it was almost 6x smaller.

- Links to files: [JPEG 80%](https://coralnodes-files.b-cdn.net/coralnodes.com/jpeg-vs-png/graphic-with-photo-80-jpg.jpg), [PNG 8bpc RGBA](https://coralnodes-files.b-cdn.net/coralnodes.com/jpeg-vs-png/graphic-with-photo-8bpc-rgba.png), [PNG 8bpc RBG](https://coralnodes-files.b-cdn.net/coralnodes.com/jpeg-vs-png/graphic-with-photo-8bpc-rgb.png)

## **Conclusion**

I hope this post helped you to get a good understanding of the two image formats.