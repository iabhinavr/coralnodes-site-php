---
title: 'What is a Web Font? How Does it Work?'
date: '2022-01-02 15:35:32'
modified: '2022-01-02 15:35:34'
slug: what-is-web-font
categories:
    - web-design
tags:
    - fonts
    - typography
featured_image: 2022/01/what-are-web-fonts-featured-1.jpg
excerpt: 'What are Web Fonts? How do they differ from desktop fonts? How to use fonts on websites. Discussing the basics of web fonts.'
yoast_seo_title: ''
yoast_meta_description: 'What are Web Fonts? Web fonts vs. desktop fonts, how to use fonts on websites. Discussing the basics of fonts.'
cn_related_posts:
    - best-google-font-combinations
    - host-google-fonts-locally
    - font-awesome-alternatives
    - change-font-wordpress
---
We know that typography plays an important role in designing and branding. 

If you are a web designer, then you might have come across several web fonts that you can use while creating websites.

Otherwise, if you are a graphic designer, then you might have used several fonts on your graphic designing software like Photoshop.

But what does it really mean when you say that a certain font is a web font?

A font that can be used on websites. Right?

But is that everything? How does it differ from a desktop font?

For instance, Open Sans is a highly popular web font. But does that mean it's not a desktop font? Or can you use a desktop font on a website and vice versa?

I too had many such questions in the beginning. So I began reading more and tried to understand the differences between these terms. The more I read the more I got confused. Eventually, resources like this Stackoverflow thread helped to get a clear picture.

If you are also in the same position then this article will help you.

## What's the Difference between font, font family, and typeface?

Many of the above questions arise because people often use the terms font, font-family, and typeface interchangeably.

Typeface denotes the design, which decides the shape of the letters.

If you can look at some writing and tell that it is using _Arial_ then you are actually identifying the typeface.

Now, what is a font? A font is a _typeface and the style_ combined. For example, Arial Regular and Arial Bold are two different fonts, but one typeface. I hope now you get the idea.

But people often use these two terms interchangeably. Because it’s the norm. Suppose someone says, _"I want to change the font on my website"_. They are actually asking to change the typeface, not just make it bold or Italic.

So a single typeface can have multiple fonts in it. That's why you see several files when you download a certain typeface from websites like Google fonts. Each file represents one particular font, such as regular, Italic, bold Italic, semibold, medium, etc.

And finally, what is a font family? Font family is just a collection of multiple font files belonging to a single typeface.

- Typeface denotes the design
- A font is a particular style belonging to a typeface
- Example: Arial denotes a typeface, while Arial Bold, Arial Italic, etc are the fonts.
- The font data is stored in a font file.
- Font-family is a collection of font files.
- It's normal to use the term _font_ for both font files and typefaces.

## Understanding the Various font file formats

To understand things better, let's briefly discuss the different font file formats. Some of them are older while some are newer:

- **PostScript (.pfb, .pfm, .pfa, etc)**
- **TrueType (.ttf, .tte)**
- **OpenType (.otf, .ttf, .otc, .ttc)**
- **Embedded OpenType (.eot)**
- **Web Open Font Format (.woff, .woff2)**

Postscript was developed by Adobe in the 1980s and it included typefaces like Times New Roman, Helvetica, and Courier.

During the same time, Apple started developing the TrueType file format, which came into use on Macintosh and Windows machines.

OpenType was invented as an improvement to TrueType file format, and it added more features for encoding fonts.

Currently, Windows system support PostScript, TrueType, and OpenType file formats, while Mac machines support TrueType and OpenType formats.

Web open font format (WOFF) was invented much later in 2009. The aim was to develop a lightweight font format tuned for web use. WOFF supports better compression.

## Web font vs. desktop font: What's the Difference?

From the above section, I hope now you have some idea about the differences between a desktop font and a web font.

Usually, a desktop font will be in TrueType or OpenType file formats. You download it and install it on your desktop computer. Then you can use those fonts on desktop-based applications like Microsoft Word and Photoshop.

On a Windows system, you can find the already installed font files under:

- **C:\Windows\fonts**

In contrast to that, a web font is usually available in WOFF or WOFF2. It's not meant for installation on a desktop computer. Instead, you upload it to the server and embed it in the website's CSS code.

So, even if the visitor doesn't have a particular font installed on their system, you can serve them the desired font over the network. That's the beauty of web font.

- Now you might have a question in mind. Why can't I just upload an OpenType or TrueType font to the server and serve it as a web font?

Technically that is possible.

You can upload & embed .ttf files on websites. But woff/woff2 is the latest format. Moreover, they are supported on all major browsers.

- You can also use a [web font generator](https://www.fontsquirrel.com/tools/webfont-generator) and convert a ttf file into a woff/woff2 file. So, you can convert a desktop font to a web font and embed it on websites.

However, the file format is not the only issue.

There is another important thing that distinguishes a desktop font and a web font. And that is the **license**.

You may already have many fonts installed on your computer. But most of them come with a desktop license, which may not be enough if you want to host the font on your website.

To do that, you will most likely require a website usage license. Without that, you cannot simply convert the desktop font to a web font and use it. You may end up breaking the license agreement by doing so.

So I hope one thing is clear now. The typeface does not determine whether a font is a web font or a desktop font. Instead, it is the associated license and the file formats that determine it.

## How to Embed web font to a website?

Let's take the example of [Google fonts](https://fonts.google.com/), which has a large collection of open source typefaces. You can use them either as desktop fonts or as web fonts.

To embed a font on a website, you have got two options:

- Host them locally on your web server
- or, use the provider’s CDN

Some providers like Adobe Fonts do not allow you to download the font files directly. So you cannot host them on your server. The preferred way is to use Adobe Typekit CDN to serve the font files.

Whichever method you choose, the working is the same. The font files are embedded in the site's CSS code, using the @font-face declaration. Then you can set the font on any HTML element using the font-family attribute.

For self-hosting you have to write the CSS rules yourself. Whereas with hosted fonts, the provider gives the necessary CSS code.

Here's an example showing how to embed the Roboto font family. Assume you have the WOFF files uploaded to the server:

```
@font-face {
    font-family: 'Roboto';
    src: url('/path/to/Roboto-Bold.woff2') format('woff2'),
        url('/path/to/Roboto-Bold.woff') format('woff');
    font-weight: bold;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Roboto';
    src: url('/path/to/Roboto-BoldItalic.woff2') format('woff2'),
        url('/path/to/Roboto-BoldItalic.woff') format('woff');
    font-weight: bold;
    font-style: italic;
    font-display: swap;
}

@font-face {
    font-family: 'Roboto';
    src: url('/path/to/Roboto-Italic.woff2') format('woff2'),
        url('/path/to/Roboto-Italic.woff') format('woff');
    font-weight: normal;
    font-style: italic;
    font-display: swap;
}

@font-face {
    font-family: 'Roboto';
    src: url('/path/to/Roboto-Regular.woff2') format('woff2'),
        url('/path/to/Roboto-Regular.woff') format('woff');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}
```

Then apply the font to CSS classes:

```
.bold {
    font-family: 'Roboto';
    font-weight: bold;
    font-style: normal;
}
.bold-italic {
    font-family: 'Roboto';
    font-weight: bold;
    font-style: italic;
}
.italic {
    font-family: 'Roboto';
    font-weight: normal;
    font-style: italic;
}
.regular {
    font-family: 'Roboto';
    font-weight: normal;
    font-style: normal;
}
```

## Conclusion 

Now let's address the two questions I asked in the introduction:

- Is Open Sans a desktop font?

Yes, Open Sans is a free typeface that is available in both desktop formats and web formats.

- Can you use a desktop font on the web?

Yes, but depending on the license. Also, you need to convert the font file to an appropriate web format.

I hope this post helped you to get a decent understanding of web fonts, and how you can use them on websites.