---
title: 'What are RSS Feeds? How it Allows Subscribing to Blogs?'
date: '2022-01-26 07:00:00'
modified: '2022-01-26 07:00:00'
slug: rss-feeds
categories:
    - fundamentals
tags: {  }
featured_image: 2022/01/what-are-rss-feeds-featured-1.jpg
excerpt: 'Understanding what RSS Feeds are? How they work, syntax, the role of XML, use cases, and more.'
yoast_seo_title: '%%title%% %%page%%'
yoast_meta_description: 'Understanding what RSS Feeds are? How they work, syntax, the role of XML, use cases, and more.'
cn_related_posts: {  }
---
Have you ever used an application like Feedly that allows you to read news and articles from your favorite websites, all in one place? And wondered how does it work?

The magic behind all these things is Feeds. In this post, we are going to see what an RSS feed is and how does it work.

## **What are Feeds?**

We know that normal web pages are written in HTML, that is, Hypertext Markup Language. Web browsers render them visually. If you check the HTTP headers, you can see that the content type is set to **text/html.**

A feed is also a page on a website although it uses XML (eXtensible Markup Language) as the markup language instead of HTML.

Before going into the details of what RSS is, you need to know the basics of XML.

### Role of XML 

XML stands for eXtensible Markup Language. And it is a way to present structured data in a text file.

Like HTML, XML also has the concept of tags. However, unlike HTML tags that are already defined, XML tags are not defined. It is up to the author to define custom tags.

Web browsers render them like a normal text file. Usually, XML files do not have any stylings although it is possible.

Your website's sitemap is an example of an XML resource.

![website sitemap is an example of XML](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/01/sitemap-xml-example-1-1080x651.png)

WordPress XML sitemap with stylings

This is what the source looks like. <urlset>, <url>, <loc>, <lastmod>, <image:image>, etc are all custom XML tags as specified in the [sitemaps specification](https://www.sitemaps.org/protocol.html).

![XML sitemap source](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/01/sitemap-xml-example-page-source-1080x520.png)

In short, XML is only a way to present data in the form of tags. It is stricter than HTML standards when it comes to closing tags, using quotes, etc.

### What is RSS

Now, let us discuss what RSS is.

Just like sitemaps, RSS is a set of standards that define how to write web feeds in XML format.

[![](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/01/rss-specification-w3c-1080x472.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/01/rss-specification-w3c.png)

find the [RSS specification on W3C](https://validator.w3.org/feed/docs/rss2.html)

RSS is not the only standard available. [Atom](https://www.ietf.org/rfc/rfc4287.txt) is another one although the former is more popular these days.

If you take a sneak peek into the history, the works for creating these standards began in the late 1990s, during the era of the Netscape Navigator browser.

During that time, the full form of RSS was **RDF Site Summary**. Later it became **Rich Site Summary,** and now the accepted full form is **Really Simple Syndication**.

Currently, the RSS feed is in version 2.0, released in 2009. It defines the list of required and optional tags for creating valid RSS 2.0 feeds.

For instance, if you have a blog, then the RSS feed contains the list of the latest ten (or whatever number) articles you have recently published. A feed reader application like Feedly can parse this data and display it in a user-friendly form.

If you are using a content management system then most likely the system can take care of generating the necessary feed pages. It can automatically add your latest posts to the feed so that you don't need to do any manual work.

To understand it better let us take the case of WordPress.

## How **WordPress RSS Feeds** Work

On a wordpress website, the default location of the RSS feed is _yoursite.com/feed_, which contains the list of the latest posts in XML format written as per RSS standards.

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/01/wp-feed-content-type-1080x654.png)

Posts feed in WordPress

- Note that the content-type is **application/rss+xml**

There is also a comment feed located at _yoursite.com/comments/feeds_, which includes the list of the latest comments submitted by users on your blog.

WordPress also adds these feed URLs to the head section of your HTML pages using link tags. This helps humans and feed readers to find out the location of your RSS feeds.

[![Feed URLs in WordPress HTML](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/01/rss-feed-urls-html-wp-1080x535.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/01/rss-feed-urls-html-wp.png)

Feed URLs in WordPress HTML

By going to the **Reading** settings under your WordPress admin, you can set the number of posts to show in the feed. You can also choose whether to show the full post or only the excerpt.

[![Feed Settings in WordPress admin](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/01/feed-settings-wp-1080x708.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/01/feed-settings-wp.png)

Feed Settings in WordPress admin

## **How it looks: Understanding the syntax**

By now, I hope you understand that an RSS feed is an XML file that complies with RSS standards.

Next, take a look at the syntax. An RSS file begins with the mandatory XML tag which includes two attributes: **version** and **encoding**. Followed by that comes the **RSS tag** itself, which sets the version to 2.0.

[![RSS feed syntax](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/01/rss-feed-syntax-1080x722.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/01/rss-feed-syntax.png)

RSS feed syntax

Nested within the RSS tag, you can find the <channel> tag. A channel represents the website. According to the specification, it should contain three compulsory tags: the title, link, and description.

Apart from that, you can use many other optional tags like language, update period, etc.

Next is the <item> tag, which is nested within the channel tag. Items represent the individual posts or news articles.

A channel can have as many items as you like. There are no restrictions on that. However, it will be better to show only the most recent 10 or 20 items. Otherwise, the feed file can become too large.

The specification does not define any mandatory tags inside <item>. But you should define at least the title or description. WordPress defines the following tags inside <item>:

- <title>
- <link>
- <comments>
- <dcCreator>
- <pubDate>
- <category>
- <guid>
- <description>
- <wfw:commentRSS
- <slash:comments>

## **Use Cases**

One obvious use case for RSS feeds is syndicating blogs and news articles with the help of feed readers.

Similarly, if you are running a podcast you can create a feed for that too. Then submit the feed URL to an online podcasting service like **Spotify** or **Google podcast**, which will then find your latest audios and stream them to the listeners.

## **Top Feed Readers**

### Feedly

[![Feedly feed reader](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/01/feedly-jan-2022-1080x541.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/01/feedly-jan-2022.png)

Feedly is one of the most popular feed reading applications you can find today. It offers three paid plans and a free plan.

The free plan allows adding up to 100 feed URLs. The high-end premium plans come with highly advanced features, including an AI assistant, Leo, which is capable of filtering out irrelevant content.

The main thing I like about Feedly is its clean user interface that supports light and dark modes. It also allows you to organize your feeds into groups and save articles to boards.

- [Visit Feedly](https://feedly.com/)

### Inoreader

![Inoreader - Feedly alternative](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/01/inoreader-jan-2022-1080x483.png)

Inoreader may not have that clean user interface that you get on Feedly. But if you are looking for more customizations and better pricing, then Inoreader is a good choice.

The free plan allows up to 150 feeds although it is supported by advertisements.

- [Visit Inoreader](https://www.inoreader.com/)

## **Conclusion**

I hope this article helped you to learn more about RSS feeds and also how you can leverage them to consume and deliver content better.