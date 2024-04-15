---
title: 'Posts vs Pages in WordPress - How to Choose the Right One'
date: '2019-01-14 15:28:53'
modified: '2021-12-13 19:23:18'
slug: posts-vs-pages-in-wordpress
categories:
    - wordpress
tags: {  }
featured_image: 2019/01/posts-vs-pages-3.jpg
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. When you are about to add content to a WordPress website, you are greeted with two options &ndash; Posts and Pages. If you are new to the WordPress content management system, you may not have a clear idea when to use which one. In this post, you will learn about all the crucial differences and a couple of similarities between the two. By the end, you will be able to tell yourself if…'
yoast_seo_title: '%%title%% %%page%%'
yoast_meta_description: 'Difference between Posts and Pages in WordPress - two built-in post types. When to use each of them. Post chronology and page hierarchy explained.'
cn_related_posts:
    - essential-settings-after-installing-wordpress
    - what-are-permalinks-wordpress
    - change-font-wordpress
---
When you are about to add content to a WordPress website, you are greeted with two options - **Posts** and **Pages**.

If you are new to the WordPress content management system, you may not have a clear idea when to use which one. In this post, you will learn about all the crucial differences and a couple of similarities between the two.

By the end, you will be able to tell yourself if a piece of content on your website is best published as a Post or as a Page.

_Before diving into the details, here is a quick infographic showing the main differences between posts and pages._

![WordPress Posts vs. Pages - Infographic](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/01/posts-vs-pages-infographic-1.png)

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/01/posts-vs-pages-2-e1548006195875.png)

_What the key difference between Posts and Pages?_

## Differences between Posts and Pages

### 1. Posts appear as blog entries in reverse chronology

You might already know that WordPress is primarily a [blogging tool](http://localhost:10003/best-blogging-platforms/). Unless you set a static page as your home page, WordPress displays blog entries on the home page by default.

By the phrase _blog entries_, I mean Posts, not Pages. They appear in **reverse chronological order**. That means, your newest posts appear on the top, and the oldest one will be at last.

You can also set how many posts to show up on each page under **Settings > Reading**. If you have a hundred Posts and set five posts on each page, your blog will have a total of twenty pages, separated by pagination.

On the other hand, Pages do not appear in any specific order. The date of publishing doesn’t have much significance for pages.

### 2. Pages can have a hierarchy

Pages support hierarchy while posts do not. That means you can set a page to be a child of another page.

<figure class="wp-block-video"><video controls src="https://cdn-2.coralnodes.com/coralnodes/uploads/2021/12/page-hierarchy-6.mp4"></video></figure>

In that way, you can have pages, sub-pages, and sub-subpages. If you [have the permalinks set](http://localhost:10003/what-are-permalinks-wordpress/), you can see the structure in the URL as well.

Suppose you have a website for your company. Apart from the main About page where you state your company’s values, mission, and vision, you can also create a sub-page for your team members, like this:

- `yoursite.com/about`
- `yoursite.com/about/our-team`

A post cannot be set as a child post of another post.

### 3. Posts have categories and tags

Another crucial difference is the ability to organize posts with categories and tags.

If you don’t know, categories and tags are the two default [taxonomies in WordPress](https://wordpress.org/support/article/taxonomies/). To create an efficient site architecture, you should assign a **category** to all your posts.

On the other hand, **tags** are more like labels or keywords. You can assign one or two main tags to a post. However, it is not a good idea to create new tags for each post. Only keep the ones you plan to reuse for other posts.

Suppose you have a photography blog. You write a review about a mirrorless camera, for example, the _Sony A7_. Put it under the category _Equipment Reviews_ (you can name it any way you want), while the tags can be _Sony_, _Mirrorless_, etc. Later when you review another similar camera, you can reuse those taxonomies. It makes it easier for visitors to find similar content at the same place.

So, in addition to the chronological order, the ability to use categories and tags is another reason why you should publish reviews and news articles under posts instead of pages.

Reviews & news are best fit for Posts.

Since pages do not support taxonomies, having too many pages without any proper organization creates a bad user experience. Your site visitors will have a hard time navigating the website. So if you have too many pages, creating list pages and linking to the individual pages can make them more discoverable and useable.

![Posts vs Pages in WordPress](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/01/posts-vs-pages-1-1024x620.png)

### 4. Excerpts Field

An excerpt is the summary of an article. Most WordPress themes use it while listing the posts on your home page and archives, instead of showing the whole body of content.

By default, **WordPress returns the first fifty-five words as the excerpt.** But those first few words may not always describe the summary of an article. 

That’s why Posts allows setting a custom excerpt. With that, readers get a better idea about what they are going to read.

Pages, on the other hand, do not offer a custom excerpt field.

### 5. Comments Section

Discussion and reader engagement are at the heart of blogging. So, comments are enabled by default on Posts. Not just comments, it allows [trackbacks and pingbacks](https://make.wordpress.org/support/user-manual/building-your-wordpress-community/trackbacks-and-pingbacks/#:~:text=Trackbacks%20and%20pingbacks%20are%20methods,don't%20send%20any%20content.) as well.

Since the nature of pages does not encourage discussion, comments are turned off by default on pages. _For example, who in the world wants comments on their Terms of Use page?_

But in case you want to turn comments on for a particular page, you can do it from the page editor.

### 6. Posts Show up in RSS Feeds

What is the easiest way to follow all your favorite blogs? I use [Feedly](https://feedly.com/), a popular feed reader. It brings together articles from all of my favorite blogs in one place.

All such feed readers depend on RSS feed to fetch content. For WordPress websites, it is usually located at the location of `yoursite.com/feed/`.

The critical point is, only the posts show up in the feed. That is, it should include only the content your subscribers like to receive as an update. How about receiving a contact page as an update in their feed? Nobody wants that.

### 7. Posts Formats

Although most people don’t use this feature, and it may not be relevant, [Post Formats](https://themeisle.com/blog/wordpress-post-formats/) is another point worth mentioning. If your theme supports post formats, you can assign formats like video, image, gallery, etc. The default format is **Standard**. 

Pages do not support this option.

## Similarities

### 1. Both are Post Types

It may sound a bit weird. But technically speaking, both posts and pages are two built-in [Post Types](https://developer.wordpress.org/themes/basics/post-types/) in WordPress.

Attachment, [Revisions](http://localhost:10003/delete-limit-revisions-wordpress/), and Menus are the other three default post types. Also, WordPress stores all these in the same database table - `wp_posts`.

### 2. Featured Images

Despite all these differences, both posts and pages allow you to set featured images. These images act as a banner for your articles.

### 3. Scheduled Publishing

The scheduling feature may be more useful for posts, which are more time-dependent. It is useful for planning your content ahead and publishing consistently.

However, pages also support scheduling.

With this feature, you can compose an article now and set it to go live on a future date or time.

## Conclusion

Generally, Pages contain essential information related to your website or business. They are evergreen. 

Other additional and useful information is published later at different points in time as Posts. They can be evergreen or short-lived, but it should fit in your blog’s feed as an update for your audience.

So, when you are confused about which one to choose, ask this question:

**_Does the content fit well in a newsletter update? Will your readers find it interesting (informative) or urgent (critical updates)?_**

_If yes, then publish it as a post. Otherwise, create a page for it._

Suppose you have a restaurant website. The price list page is an essential piece of information related to your business. So it should go under Pages.

So the following content will be best fit for pages:

- Price Lists
- About Us
- Special Recipes
- FAQs
- Terms & Conditions
- Contact Us

Later, you decide to write about the health benefits of one of your items, say green tea. It is something that your visitors may find interesting to read about.

You can also brainstorm to come up with hundreds of related content ideas. Such articles should go under the blog section as Posts.

With that, I hope that you got an idea where each of your content fits best.

Did I miss any critical points? Mention it in the comments.