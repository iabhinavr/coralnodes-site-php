---
title: 'How to Disable WordPress Comments: Different Methods Discussed'
date: '2021-04-03 11:08:28'
modified: '2021-12-24 22:22:27'
slug: disable-comments-wordpress
categories:
    - wordpress
tags:
    - wordpress-tips
featured_image: 2021/02/disable-wordpress-comments-featured-1.jpg
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. There is no question that comments are a great way to increase user engagement. They can share their thoughts with you, and you can interact with them. As a content management system, WordPress allows users to post comments on your site. Useful comments can also add more insights to your content, thereby improving its value over time. While it is debatable whether comments improve SEO and traffic, it indeed helps to build a…'
yoast_seo_title: '%%title%% %%page%%'
yoast_meta_description: 'This article discusses the different methods to disable comments in a WordPress website - both manually and using a plugin.'
cn_related_posts:
    - http-security-headers
    - how-to-backup-a-wordpress-site
    - fix-wordpress-not-sending-emails-smtp
---
There is no question that comments are a great way to increase user engagement. They can share their thoughts with you, and you can interact with them. As a content management system, WordPress allows users to post comments on your site.

Useful comments can also add more insights to your content, thereby improving its value over time. While it is debatable whether comments improve SEO and traffic, it indeed helps to [build a community](https://michaelhyatt.com/ive-brought-comments-back/) around your blog.

However, sometimes you might want to disable comments altogether, or partly on some posts. That's what we are going to look at in this guide - how to disable comments on your WordPress website.

## Reasons to Disable Comments

There can be several reasons to disable comments in a site. But there are mainly four of them that I can think of:

- to prevent hurtful comments
- improve WordPress performance
- to prevent spam comments
- comments are irrelevant (for example, in a static site)

While constructive comments add value to a page, destructive comments may not be of any use to you. Unfortunately, some of your readers might be so intolerant that they use bad language in comment forms, even for non-controversial content.

Some may even use your website to spread hatred, which can degrade the experience for other legitimate users.

WordPress does give the option to manually moderate comments, but for large blogs and news websites, it is not practical. So, a better way is to disable comments for such posts when you have no time for manual moderation.

Another important reason to disable comments is performance. You might know that WordPress stores all comments in the database, in the _wp_comments_ table.

So, if a post has tens or hundreds of comments, WordPress has to pull all those from the database to display that post. Even with caching turned on, this can be a burden on your server.

Also, some cheap shared hosts even suspend your account for excessive resource usage. However, there are some alternatives you can try, other than disabling comments:

- lazy-load comments: with lazy-loading, your post loads as usual but without the comments at the bottom. Later if a reader clicks a button, e.g, _show comments_, then it loads via an AJAX request. While it won't completely take the burden off your server, it prevents the initial page loading from slowing down.
- use a third-party comment platform like Disqus
- use Facebook comments or other social platforms

Next is spam comments. There are some useful plugins like [Akismet](https://akismet.com/) that help to filter out the vast majority of spam comments. But still, if you are receiving an overwhelming amount of spam, it might be better to disable comments.

And lastly, comments are usually not relevant for static brochure-like websites. Unless you want to receive comments on your about page or other static pages, you can keep the comments disabled. Thereby, you don't need to worry about spam either.

## How to Disable Comments for Future Posts

All the important comment-related settings are available under **Settings > Discussion**. On that page, under the first section - **Default post settings** - you can see an option:

- Uncheck _'Allow people to submit comments on new posts'_

Uncheck that option, and comments will be turned off for all the posts that you publish from then on. The **Discussion Settings** page includes a lot of other settings, but unchecking this one option is enough to disable comments for new posts.

![disable comments - wordpress discussion settings](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/disable-comments-settings-discussion-1-1080x578.png)

But, comments will still be open for all the existing posts. Let's solve that too.

## Comments on Existing Posts

To disable comments for existing posts, there are two approaches:

- disable comments for individual posts, or
- select multiple posts, and bulk edit to disable comments

For either of the two approaches, go to the **Posts** page (which is usually located at _example.com/wp-admin/edit.php_).

To turn of comments for an individual post, click on the **Quick Edit** link, then uncheck the following two boxes:

- Allow Comments
- Allow Pings

![disable comments in quick edit](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/quick-edit-disable-comments-1-1080x221.png)

Instead, to turn of comments for multiple posts, select the posts, then from the **Bulk Actions** menu, select **Edit**, then click **Apply**.

![wordpress bulk edit](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/bulk-edit-disable-comments-1.png)

![bulk edit comments](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/bulk-edit-disable-comments-2-1080x363.png)

Then select _'Do Not Allow'_ for both Comments and Pings. Finally, click **Update**.

## Media Attachments

Yoast and other similar SEO plugins have an option to redirect media pages to their respective post pages. But by default, comments are enabled on Media attachment pages.

To disable them, go to your **Media Library**, click on an attachment, choose **Edit more details**. Scroll down to the **Discussions** tab and uncheck the box against **Comments**.

![edit more details - attachement](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/edit-more-media-attachment-1-1080x476.png)

![screen elements - edit media](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/media-attachment-screen-options-1-1080x395.png)

enable Discussion and Comment under Screen Elements

![disable discussion - media attachement](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/media-attachment-discussion-tab-1.png)

under Discussion, uncheck Allow Comments, Allow trackbacks and pingbacks on this page

_If the Discussions tab is not visible, enable it from the Screen Options at the top._

## Custom Post Type Comments

For custom post types, comments are enabled while registering it using the _register_post_type()_ function. If you manually created the post type using functions.php or a site plugin, check the arguments array. It should contain a supports key that looks like this:

'supports' => array('title', 'editor', 'featured', 'comments')

The default value of the 'supports' array are _'title'_ and _'editor'_. So if you didn't find the array, then there is nothing to do.

Otherwise, if the value - _'comments'_ - is there, remove it. You can use a program like Filezilla to open and edit WordPress files and re-upload them back to the server.

Instead, if you created the custom post type using a plugin like [Custom Post Type UI](https://wordpress.org/plugins/custom-post-type-ui/), then check the respective plugin's settings to disable comments.

## Alternative: Turning Off Comments from the Theme

I hope you got an idea on how to turn of comments. Now let us check how comments are handled inside a WordPress theme.

_Those who don't want to deal with code can skip this section. Otherwise, here is how it works behind the scenes._

You know that a theme handles the layout and design of a WordPress website. So, by modifying the theme code, you can remove the comments section from your site.

- In other words, your site is displaying comments because your theme supports it. Usually, comments appear at the bottom of single post pages, which is handled by a template file like single.php. singular.php, or even index.php.

If we take the WordPress default theme **Twenty Twenty** as an example, this is done in the _singular.php_ file. Here are the main things you need to know:

- the **comments_template()** function
- **comments.php** file
- **comment_form()** function

The _singular.php_ file loads the _content.php_ template file, which is located inside _template-parts/content.php_. This is where you can find the markup for single posts and pages. It is wrapped inside an HTML5 article tag.

![loading content template part](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/load-template-parts-content-1-1080x426.png)

Below the WordPress _entry-header_, _entry-content_, and post navigation sections, you can find the comments part, which calls the function _comments_template()_.

![calling comments_template function](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/call-comments-template-1-1080x393.png)

It is a built-in WordPress function, which in turn loads the _comments.php_ file. This file contains the markup for your comments, list of comments, and comments navigation, followed by the _comment_form()_ function call that loads the form for comment submission.

![calling comment_form function](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/comment-form-call-1-1080x480.png)

- In short, just by commenting out the _comments_template()_ function call, you can disable comments on your entire site.
- The advantage is, you don't have to modify any settings. Nothing is changed in the database either.
- Comments will still be open in the database, but they won't be loaded in the front-end. So in effect, it is closed.

**_Or, if you want to disable new comment submission only, and show existing comments, just remove the comment_form() function call._**

- Note that when modifying theme files, it is better to use a child theme instead of directly modifying theme file.

### Disable Comments Turned off Notice

When you disable comments from the settings, post pages show a message similar to - _'comments are closed_', or _'comments turned off'_. To change that message also, you have to modify the theme file (check the above image).

## Deleting Existing Comments

After disabling comments and turning off new comments, you may also delete existing comments to save space and optimize the database.

- Go to the **Comments** page in your WordPress dashboard
- Select all the Comments that you want to delete
- From **Bulk Actions** menu > **Move to Trash** > click **Apply**

The default no. of comments shown on a page is 20. You can change that value from the Screen Options.

## Easiest Way: Disable Comments using Plugin

There is also a plugin that can disable comments from your entire site or from specific post types. Compared to the manual methods we discussed above, this plugin method is much easier.

[Disable Comments](https://wordpress.org/plugins/disable-comments/) is a free plugin that you can install from the WordPress Plugins directory. Go to the **Add Plugins** page in your WordPress admin area and search for the keyword - _'disable comments'_.

![install Disable Comments plugin](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/install-disable-comments-plugin-1-1080x578.png)

The plugin has over a million installations and very good ratings.

Selecting the '_Everywhere_' option under **Settings** can disable comments from the whole site. It even hides the '_Comments_' menu from the left sidebar.

![Disable Comments plugin](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/disable-comments-plugin-settings-1-1080x703.png)

## Conclusion

In the above sections, we discussed the different methods you can use to disable comments on a WordPress site, manually or using a plugin.

You also learnt how comment templates work in a theme, and how to modify them.

I hope this article helped you.