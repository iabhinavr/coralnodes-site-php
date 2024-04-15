---
title: 'What is a CMS (Content Management System) - Key Factors to Know'
date: '2020-12-15 10:50:07'
modified: '2022-03-17 13:37:29'
slug: what-is-cms-content-management-systems
categories:
    - fundamentals
tags: {  }
featured_image: 2020/12/what-is-cms-featured-2.jpg
excerpt: 'Discussing the different types of content management systems, advantages, disadvantages, and examples.'
yoast_seo_title: '%%title%% %%page%%'
yoast_meta_description: 'Wondering what a CMS (Content Management System) is? Discussing the different types of CMS, examples, advantages, and disadvantages.'
cn_related_posts:
    - best-blogging-platforms
    - wordpress-com-vs-wordpress-org-differences-similarities
    - wix-vs-wordpress
    - wordpress-vs-ghost
---
For someone creating their first website, there are several terms that seem confusing - _CMS, website builder, platform, framework,_ etc. People often use these terms interchangeably.

In this article, we will primarily look at content management systems or CMS in short. By the end, you will also get an idea about the differences between these terms.

Before that, let me mention one thing. Here, we are mainly discussing websites rather than web applications. If you are not sure about the difference between the two, here it is. A website is content-oriented. Users just consume content without many interactions. Blog sites and _Wikipedia_ are examples of websites.

Whereas _Google Map_, social media sites, and other online tools are examples of web applications. Although web applications also contain content, they are mostly driven by user interactions. There is no strict distinction, anyway, I hope you get the idea.

So, coming back to CMSs, they allow managing content on websites efficiently and easily.

## What is the Need for Content Management Systems?

Without a system, how would you create a website? If you know HTML, you know the answer. Hand-code each web page using HTML markup, save it as HTML files, upload them to a web host, and point a domain. And your site is online.

That's okay if you have only a couple of pages on your site. It's also how we used to create simple web pages in the 1990s. But it's no longer the case. Websites these days consist of hundreds, thousands, or even more web pages. And it's next to impossible for any normal human being to efficiently hand-code and manage all those pages.

- You might also like: [A brief history of the internet: from 1960s to 2020](http://localhost:10003/a-brief-history-of-the-internet/)

That is the problem content management systems solve.

- They give an interface to write and edit the content, store it and publish it on the front-end.

So in effect, the CMS software is a _web application_, whereas the frontend it generates is a _website_.

That brings us to the next point - a **CMS-generated site is dynamic**, which means the pages are _generated_ by the software and sent to the visitor's browser. There aren't any static HTML files as in the case of static websites. Each system has a mechanism to handle the [URL rewrites](https://www.smashingmagazine.com/2011/11/introduction-to-url-rewriting/#what-is-url-rewriting) for generating different pages.

- [How to set permalinks in WordPress](http://localhost:10003/what-are-permalinks-wordpress/)

With that being said, page caching can save the HTML copies of these dynamic pages to improve performance. However, that's a different story altogether.

## Important Functions of a CMS

- A crucial characteristic that makes a content management system different from other platforms is the ability and flexibility it provides for creating and managing **different types of content**.

It is also the reason why many people argue that _blogging platforms_ are not CMSs. Earlier WordPress was thought of as a blogging platform. But with the introduction of [custom post types](http://localhost:10003/add-custom-post-types-wordpress/) and various other plugins like WooCommerce, the scope has widened, and you can now create any type of website with it. Now there is no question that [WordPress is a CMS](https://premium.wpmudev.org/blog/is-wordpress-an-actual-content-management-system-cms/).

So, here are the key functions of a CMS:

- User management
- Content management
- Delivering the content

[![functions of a content management system (cms)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/12/functions-of-a-cms-1-1080x762.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/12/functions-of-a-cms-1.png)

### User Management - Backend

The main part of any CMS is the **dashboard where you log in** and manage the various things. When you install the CMS, an _administrator_ user will be created along with it. Later the admin can add or remove additional users.

Most content management systems also allow setting roles for the users, such as editor, moderator, etc, in addition to the admin. And this role determines what power the user has. For example, the editor can write and publish articles, but cannot change the important site settings.

### Content Management - Backend

In a CMS, the content creation primarily happens in the editor. The features and interface of the editor depend on the particular CMS you use. For example, currently, I am writing this article on the WordPress Gutenberg editor, which supports adding headlines, hyperlinks, images, bold text, tables, and a lot more.

[![editor in wordpress cms](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/12/cms-editor-1-1080x481.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/12/cms-editor-1.png)

editor in WordPress CMS

Based on the role, a user can create, modify, edit, or delete a piece of content. Most CMSs also support different content states, such as draft, pending, published, etc.

The software saves the content into a database, from where it is retrieved for delivery.

### Delivering the Content - Frontend

The final part is delivering the content via the front-end. In most content management systems, the frontend design and the backend will be part of the same system (monolithic). For example, in WordPress, the backend is located at the address _yoursite.com/wp-admin/_ while the frontend will be _yoursite.com/*_.

#### Presentation

Monolithic systems also support setting templates or themes for the frontend from the backend. The design, look, and feel of your site depends on the theme you choose. In this case, content is delivered as a full webpage by the CMS.

In contrast to that, the content can also be delivered as data via an API. Instead of HTML, this data will be usually in JSON or XML formats. If it's API-only, then there is no need to set a design template/theme. Later you can present or process the data in any way you want. If you want, you can even create a custom frontend using this API data.

## Different Types of CMSs

There are quite a number of ways to classify content management systems based on several factors, including how they work, the license types, purpose, etc.

Here we are mentioning only some of them. Also, note that there are overlaps between the categories so that one CMS can come under multiple categories.

### Open-source self-hosted CMS

When speaking about content management systems, people mostly refer to the open-source type. They give access to the source code, offering us complete freedom. Open-source CMSs are mostly self-hosted, which means you can choose the hosting provider you like.

- [WordPress](https://wordpress.org/download/), [Drupal](https://www.drupal.org/), and [Joomla](https://www.joomla.org/) are classic examples of open-source content management systems written in PHP language.

### Hosted CMS

Unlike self-hosted CMS, hosted CMS comes with hosting included. So you don't need to look for a web host elsewhere. No need to install it on a server either. Just sign-up and start using. Although you are trading off a little freedom, the benefit is better ease-of-use and peace of mind.

For the same reason, this type of CMS is a favorite choice among designers and non-coders who want to build websites for clients. If you are a designer, you can put more focus on designing instead of wasting time updating software and searching for fast web hosts.

- Examples: [Squarespace](https://www.squarespace.com/), [Shopify](https://www.shopify.com), [WordPress.Com](https://wordpress.com/)

Note that there are also hosted solutions that use open-source CMS and sell it to customers. WordPress.Com is an example, which uses a modified version of the open-source WordPress software. Whereas platforms like Squarespace use custom software.

- See also: [WordPress.Org vs WordPress.Com](http://localhost:10003/wordpress-com-vs-wordpress-org-differences-similarities/)

### Headless CMS

Headless CMS **includes only the backend without the frontend**. They are decoupled. So, instead of delivering the content using HTML webpages, it provides only an API. The frontend developers can consume this API to get the data from the backend and present it with a suitable design.

If you prefer to build a custom frontend, then a Headless CMS may be what you want.

- Examples: [Strapi](https://strapi.io/), [Sanity](https://www.sanity.io/), [ButterCMS](https://buttercms.com/)

Although WordPress started out as a traditional CMS, now it also provides a REST API, which allows you to use it in any way you prefer.

### Enterprise CMS

Enterprise CMS may be less popular than the other types. But they can be a better option for companies or large enterprises that need sophisticated workflows.

An ECMS supports a step-by-step content publishing workflow, including drafting, editing, and approval.

- An example is [Django-CMS](https://www.django-cms.org/), which is based on the popular Django framework powered by Python programming language.

### Classification based on use cases

Another way to classify content management systems is based on their primary purposes.

_Note that it is not fully correct to label some blogging platforms and Wikis as CMS. Although they have some content management capabilities, they are not full-fledged CMS. But I am including them here based on the CMS divisions given on the Builtwith website._

#### eCommerce CMS

The primary purpose of an eCommerce system is creating online stores. The backend of such a system usually offers advanced features for managing orders and inventory in addition to creating product listings.

Apart from that, they also offer integration with popular payment gateways, which facilititates collecting payment from your customers.

- Examples: **Shopify** (a hosted eCommerce platform), [Opencart](https://www.opencart.com/) (self-hosted)

#### Blogging CMS

A blogging CMS (platform may be a better word) primarily focuses on managing article-style content and user comments. They are well-suited for publishers, personal bloggers, and business bloggers.

Since they make managing online articles hassle-free, blogging platforms are also widely used by media and news agencies.

- Examples: [Medium](https://medium.com/), [Blogger](https://www.blogger.com/), [Ghost](https://ghost.org/)

According to [Builtwith](https://trends.builtwith.com/cms/blog), WordPress is the most popular blogging platform. Over 36% of the top 1 million sites use it.

- See also: [10 Best Blogging Platforms](http://localhost:10003/best-blogging-platforms/)

#### LMS (Learning Management Systems)

eLearning is the future of education. A Learning Management System specializes in just that - creating online courses. Not only that, it includes several big and small features like saving learning progresses, teacher-student interactions, online assessments, etc.

Are you an expert in something? Then an LMS might help you to set up your classroom online. It is equally useful for schools and universities also.

- Examples: [Moodle](https://moodle.org/), [Canvas](https://www.instructure.com/canvas/) (both are open source)

#### Wiki

A Wiki is not really a CMS, although its functionalities include content creation. Unlike other systems, a Wiki allows collaborative content creation and editing. Its users are volunteers. That means anyone can edit the content of such a site, including you and me, not just the administrator.

Most often, the edits are subject to moderation by other volunteers, so there is less chance for wrong information to stay longer.

- Wikipedia is the best example of a Wiki, which uses the open-source [MediaWiki](https://www.mediawiki.org/wiki/MediaWiki) software. [Confluence](https://www.atlassian.com/software/confluence) is another example of a wiki engine, but that is proprietory.

## 5 Advantages of using a pre-built CMS

Let's discuss the main advantages of using CMS vs. developing a custom website from scratch.

### 1. Fast Way to Launch a Site

When you choose a CMS to build your site, the software is pre-built and ready for deployment. So, there is no further development required, unless you want to make some custom modifications.

The only thing you need to focus on is finding a domain name and a hosting provider, installing the CMS (for self-hosted), and creating the content.

And how long will it usually take? Maybe an hour, or a few minutes if you are using WordPress or Squarespace.

### 2. Minimum or no Coding Skills Required

Have no coding experience? Still, you can create a website using CMS. As I mentioned in the previous point, the developers and designers of the CMS have already done that job for you.

However, to get the most out of open-source systems like Drupal and WordPress, you need some coding knowledge. At some point, you feel the need to make some small tweaks, which may require only a few lines of code.

So without any idea of coding, you will have to depend on someone else to perform the job. It's like going on a long road trip without even knowing how to change a punctured tire.

Another option if you have zero coding knowledge is to choose a hosted CMS. In that case, the platform's support team will be there always to help you out.

### 3. Cost-Effective

Again, since everything is pre-built, you don't need to spend any money on design or development. The minimum requirements to start a CMS-powered website is a domain name and a hosting provider.

A domain name usually costs less than $10 a year, while a starter hosting plan is in the range of $5-10/mo.

- See also: [Best Hosting Providers for WordPress](http://localhost:10003/wordpress-hosting/)

### 4. Easy to Customize, Manage and Extend

Have hundreds of pages on your site? No problems. With a CMS, making site-wide changes is a breeze. Want to add an SEO tag to all the pages? Most systems allow doing such things in a few steps.

Most CMSs support additional extenstions/plugins to make a successful website:

- SEO extensions
- Media-related plugins for compressing, editing, etc
- Social media integrations
- Marketing and Analytics extensions

### 5. Easier to Get Support

Popular content management systems have a community of users around it. So, you won't find any difficulty in finding solutions to your problems.

In addition, hosted and paid platforms also offer dedicated support teams ready to solve your issues.

## Disadvantages of Using pre-built CMS

Mostly, the advantages of using a CMS far outweigh the disadvantages I am going to mention below. There are mainly four points that I can think of.

- CMS can contain lots of unnecessary features or code that you'll never want (code bloat)
- Not exclusive to you, used by other websites as well
- Less freedom in making modifications
- Possibility of outdated or unsafe code creeping in

### Unnecessary features

When you choose a ready-made CMS, it may contain a lot of features that you may never need. Although most systems follow a modular approach (with plugins or extensions), many things are hardcoded into the system.

So, from a performance point-of-view, a pre-built CMS may not be as fast as a custom-built system.

### Used by Others also - Not Exclusive

When you use a pre-built CMS like WordPress, remember that you are not the only one using it. Mostly, it is an advantage. Because a larger user base means better support and updates.

But for some reason, if your purpose demands exclusive software, then building a custom solution may be a better choice.

For instance, if your company demands high security and doesn't want others to know what software you're using, then don't use an existing CMS. But, it doesn't mean pre-built CMSs are unsafe, though.

### Less Freedom in Making Modifications

Each CMS has its own architecture and a way of working. So, to modify some existing features using custom code, you need to comply with the existing standards. Whereas in a custom solution, you have all the programming freedom to make whatever changes you want.

For example, WordPress provides the Block Editor for writing and editing posts. If you want to completely swap it out with your own custom editor, it is difficult. I won't say it is impossible. But if you want that level of modifications, then why not build a custom CMS?

### Outdated and Unsafe Code

Open-source CMSs regularly release updates, which often patch security holes. If you fail to update your site with the latest version, then it can result in serious security issues.

Open-source systems are used by many people. So hackers are always looking for sites using outdated software.

Another problematic area is plugins and extensions. These plugins are often built by third-party developers. So, the quality and safety of the code depend on those developers. There are many occasions where [plugins used vulnerable code](https://blog.sucuri.net/2019/08/timthumb-attacks-the-scale-of-legacy-malware-infections.html) and caused serious security issues. The only way to prevent this is to use plugins from credible sources only.

On hosted CMSs that use proprietary software, it is not much of a problem, since their code is closed to the outside world and depends less on third-party extensions.

For example, you can find tens of thousands of plugins in the WordPress Plugins directory. And it is not rare to find outdated or abandoned plugins that are still available to download and use. Whereas with Squarespace, a hosted platform, the number of third-party apps is fewer than WordPress, but more strictly maintained.

## 8 Best Content Management Systems (Examples)

Above, I already mentioned some CMS examples while discussing the different types of CMS.

Here are some more based on popularity. And for that, I have used the facts and figures available on [W3Techs](https://w3techs.com/technologies/overview/content_management) and [Builtwith](https://trends.builtwith.com/cms/). In addition to popularity, I have also used my own findings while creating this list.

|CMS|License|Language|Category|Hosting|
|---|---|---|---|---|
|WordPress|Open-source (GPL)|PHP|Multipurpose|self-hosted|
|Shopify|Proprietory|Ruby|eCommerce|platform-hosted|
|Drupal|Open-source (GPL)|PHP|Multipurpose|self-hosted|
|Joomla|Open-source (GPL)|PHP|Multipurpose|self-hosted|
|Squarespace|Proprietory|--|Website Builder|platform-hosted|
|Magento|Open-source (OSL)|PHP|eCommerce|self-hosted|
|Hubspot|Proprietory|--|Marketing|platform-hosted|
|Ghost|Open-source (MIT)|NodeJS|Blogging|both available|

## CMS FAQs

**What is the difference between a platform and a CMS?**

In short, all CMSs are platforms, but not all platforms are CMS. For example, both Tumblr and WordPress are platforms. But the former is more of a _micro-blogging platform_. So, even if it has some capabilities to manage content, it's not entirely correct to call it a CMS.

**What is the difference between a website builder and a CMS?**

Website builders are another way to create websites. They are also platforms. But the difference is, a website builder gives more focus on designing pages, rather than managing content.

For example, in [Wix](http://localhost:10003/wix-review/) - a popular website builder - you create pages by dragging and dropping elements to its WYSIWYG editor. So, the content is tightly coupled with the design, which reduces freedom. Some articles do refer to Wix as a CMS, and it's not completely wrong. But it is not a full-fledged CMS either.

- You might also like: [Wix vs. WordPress - a Detailed Comparison](http://localhost:10003/wix-vs-wordpress/)

**What is the difference between a framework and CMS?**

A framework is just a collection of functions (written in some programming language) arranged in a certain architecture. Unlike a CMS, it's not a finished product. When you install a CMS, it's already a fully working site with a backend and a frontend (or API).

In contrast, you need to develop a framework to create a functional website or a web application. And that requires a good level of programming knowledge. **Symfony** and **Laravel** are examples of two popular PHP frameworks.

To give you an analogy, a fresh CMS installation is like a newly built unfurnished house. The only thing you need to do is bringing in some furniture (content) and people (users and visitors). Whereas a framework is just a collection of ready-made walls, windows, slabs, bricks, etc. There is also a convention on how you should fit these together to build a house (framework conventions).

## Conclusion

The world of content management systems is so vast. They come in a variety of forms. We have only touched the surface of that in this article. I have included a number of examples above, which should hopefully give you an idea of the different choices available.

**_So, which is the best CMS?_**

If you don't have any specific reasons to choose a particular platform, I suggest you pick **WordPress**, the self-hosted version. Powering over 38% of the websites on the internet, WordPress won't be going anywhere in the near future. Compared to the other open-source CMS like Drupal, WordPress has a **less steep** learning curve.

Otherwise, if you are looking for a hosted platform, I suggest **Squarespace**, which is easier than even WordPress.