---
title: 'What are Permalinks in WordPress? Why You Must Use it for Better SEO?'
date: '2019-05-07 19:05:27'
modified: '2021-12-24 22:22:29'
slug: what-are-permalinks-wordpress
categories:
    - wordpress
tags:
    - wordpress-tips
featured_image: 2019/04/permalinks-wordpress-featured-1.png
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. Permalinks in WordPress are the permanent URL that points to a particular post or a page on your site. It is the link that you enter into the address bar of a browser to access a page. For example, the home page URL of this website is http://localhost:10003 while the permalink of this post is http://localhost:10003/what-are-permalinks-wordpress/. Note the last portion of this URL after the domain name. That is what we are concerned…'
yoast_seo_title: 'What are Permalinks in WordPress? Why You Must Use it for Better SEO?'
yoast_meta_description: 'How to set permalinks in WordPress. Does permalinks have impact on SEO. Best practices to create URLs. Why not use dates in links.'
cn_related_posts:
    - delete-limit-revisions-wordpress
    - wp-super-cache-vs-wp-fastest-cache
    - astra-theme-review
---
Permalinks in WordPress are the permanent URL that points to a particular post or a page on your site. It is the link that you enter into the address bar of a browser to access a page.

For example, the home page URL of this website is _http://localhost:10003_ while the permalink of this post is _http://localhost:10003/what-are-permalinks-wordpress/_. Note the last portion of this URL after the domain name. That is what we are concerned about.

## Why use Pretty Permalinks

By default, WordPress uses query strings in URL to access each page. However, this is not friendly to read and does not hold any meaning in relation to the contents of the page.

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/05/default-permalinks-wordpress-1.png)

Suppose you have a post about how to photograph birds on your photography blog. Consider the following two permalinks:

1. http://www.yoursite.com/?p=25
2. http://www.yoursite.com/how-to-photograph-birds/

Which one looks more useful in the context of the page? Obviously, the second one is relevant to the page. So the two main reasons to change the permalink structure from the default setting are:

1. User-experience
2. SEO-friendliness

Pretty permalinks make more sense when you share your pages on social media.

## Watch Video

<iframe src="https://www.youtube-nocookie.com/embed/40CPwSyS84c?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

## Permalink Structures in WordPress

To set pretty permalinks in WordPress, go to _Settings > Permalinks_. Here, you can see six options. Five of them are built-in while the last one allows you to set a custom structure.

![permalink settings in WordPress](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/05/wordpress-permalink-settings-menu-1.png)

Out of these options, _Post name_ is the best for most websites. Select it and click _Save Changes_.

![Setting Permalinks in WordPress](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/05/permalink-structures-wordpress-1-1024x431.png)

### Custom Structures

In addition to the built-in structures, WordPress allows you to define your own structures using tags. There are ten such tags available:

1. %year%
2. %monthnum%
3. %day%
4. %hour%
5. %minute%
6. %second%
7. %post_id%
8. %postname%
9. %category%
10. %author%

Out of these, `%category%` and `%postname%` comes handy if you want to create custom permalink structures based on categories.

For example, suppose you have a travel website with Africa as a category and you have page about the best wildlife safari packages. To create a URL structure that looks like example.com/africa/best-wildlife-safari-packages/, set the permalink structure like this:

`/%category%/%postname%/`

## Changing Permalink Slugs in Gutenberg Editor

In the above section we learned how to set the permalink structure for your whole site. Now let us see how to edit the slugs for individual posts or pages.

From WordPress 5 onwards, Gutenberg is the default editor. It replaced the previous TinyMCE editor. In the new editor, you can edit the slug (i.e. %postname%) in two ways:

1. By clicking on the post title on the editor page
2. From the right sidebar under Document

![WordPress Permalinks](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/05/changing-wordpress-post-permalinks-1024x356.png)

## Impact of Permalinks on SEO

When you search for a topic on Google, you can see that Google shows the permalink below the title. So, it is one of the factors that help both search engines and users to understand what your page is about.

If you are using Yoast's SEO plugin, it suggests you to use your keyword phrase in the slug.

![Yoast Permalink Warning](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/05/yoast-permalink-warning-1.png)

In short, permalinks may not be the most important SEO factor. But it definitely contributes to the user experience and relevancy.

### How to Create the Best Permalink

Now, let us see what are the important things to consider while creating the slug for a page.

#### 1. Short & Concise

First of all the slug should not be too long. If you ask, three to eight words is an optimum length. By default, WordPress includes all the words on your post title separated with dashes to create a slug. This is not usually good. Instead, pick only the important words to form a custom slug.

According to a [study by Backlinko](https://backlinko.com/search-engine-ranking), shorter permalinks tend to rank better.

#### 2. Include your main Keyword

While creating a custom slug, make sure to include the main keyword too. It can potentially give a slight SEO boost.

#### 3. Give attention to Stop Words

Stop word are small words like is, in, with etc. that usually does nothing other than increasing the length of the permalink. So, check to make sure that the slug does not contain unwanted stop words.

However, in many cases, removing stop words from a phrase can completely alter the meaning. In those cases, keep it like that.

#### 4. Avoid using dates in Permalinks

Although WordPress allows you to include the month and year in your permalink structure, it is not wise to do that.

It has mainly two downsides:

1. Date increases the length of the permalink URL. We have seen that shorter URLs are more clear and SEO-friendly
2. Including the date in the slug can negatively impacts the **freshness of your content**. Even if you update the content to keep it fresh, the URL contains the original published date. So, when someone searches for your topic, they feel that your page is old although it is not.

Unless your site contains short-lived contents like news websites, there is no reason to include dates in your permalink structures.

![Dates in Permalinks](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/05/permalink-dates-1.png)

In the above image, the part /2019/03 is totally unnecessary. If you have used Blogspot, you know that it includes dates in links by default although it is not needed.

So, when migrating from Blogspot to WordPress, you can either retain the existing structure or get rid of the dates and the .html extension. If you choose the latter, make sure to create 301 redirects for all pages to the new URLs

#### 5. When to use category in the Permalinks

For most websites like blogs, using just the post-name as the permalink structure is sufficient.

On the other hand, if you already have a well-defined site structure with categories and sub-categories, including it in the permalink can be beneficial. This is especially true for e-commerce and travel websites.

![Category in Permalinks](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/05/category-in-permalinks-1-1024x82.png)

This is how Yatra website have organised their tour packages based on destinations. The site may or may not be on WordPress, but you can do the same on WordPress also.

However, if you ever want to re-organise or edit the existing categories, permalinks of all posts associated with those categories also change. It causes 404 errors.

## Wrapping Up

We saw why setting proper permalinks is an important factor for both your users and for search engines. Also, you now know how easy it is to set the permalinks using WordPress. So, whenever you create a new post or page, spare some time to set an appropriate slug too.