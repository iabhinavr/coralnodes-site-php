---
title: '9 Ways to Stop WordPress Spam Comments'
date: '2021-06-05 00:07:49'
modified: '2021-12-24 22:22:27'
slug: stop-spam-comments-wordpress
categories:
    - security
tags:
    - wordpress-tips
featured_image: 2021/06/stop-spam-comments-featured-1.jpeg
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. There won&rsquo;t be a single internet user who hasn&rsquo;t heard the word spam. They often look like unnecessary or misleading messages containing hyperlinks to illegitimate websites. You can see such messages often in email inboxes and on social media platforms. WordPress sites are also a frequent target. Not just WordPress, spammers target any website or platform that allows the public to post comments. According to a report published by Kaspersky, around 50% of…'
yoast_seo_title: ''
yoast_meta_description: 'Learn the different ways to stop spam comments on your WordPress website - antispam plugins, firewall, comment moderation, and more.'
cn_related_posts:
    - http-security-headers
    - wordpress-maintenance-services
---
There won't be a single internet user who hasn't heard the word spam. They often look like unnecessary or misleading messages containing hyperlinks to illegitimate websites. You can see such messages often in email inboxes and on social media platforms.

WordPress sites are also a frequent target. Not just WordPress, spammers target any website or platform that allows the public to post comments.

According to a [report published by Kaspersky](https://securelist.com/spam-and-phishing-in-q3-2020/99325/), around 50% of mail traffic contained spam in 2020. Even during the pandemic when many businesses are down, spammers are actively employing different techniques to mislead people. The aim can be anything from stealing credentials, money, spreading malware, or even identity theft.

Similar to spam emails, **comment spams** are also potentially dangerous. Most blogs and forums allow URLs in the comment forms, which spammers misuse.

## Why they spam?

The reasons behind posting spam comments are many.

- If one of your legitimate users clicks those links, it can potentially compromise their security. Even if that doesn't happen, spam comments are ugly and can negatively affect the credibility of your website.
- Blackhat SEO is another motive behind spamming. Leaving their links on your website can give them an SEO advantage.

So, if you are a website owner, you should never overlook implementing proper spam prevention methods on your site. In this article, we will discuss the different methods you can use to stop spam comments on WordPress websites.

_**Are you tired of spam comments?**_

Then here are some measures stop them on track.

## 1. Use an Anti-spam Plugin

An anti-spam plugin analyzes all the incoming comments and filters out the spammy ones. These plugins employ various algorithms and techniques to do this. Some sophisticated ones even make use of machine learning to identify newer patterns in spams. Email spam filters also work the same way.

Two of the most popular spam plugins available today are:

- **[Akismet](https://wordpress.org/plugins/akismet/)**
- [**Antispam Bee**](https://wordpress.org/plugins/antispam-bee/)

Akismet already comes pre-installed when you install WordPress. So it is the most obvious solution for most websites to start fighting spam.

With Akismet, much of the processing takes place on their cloud servers. While that approach takes the burden off of your server, it may not be ideal for everyone from a privacy standpoint.

Also, Akismet is free only for personal websites. Commercial websites (i.e, any website that makes money) are advised to purchase a paid plan.

_It is technically possible to use Akismet on any website, including commercial ones. But doing so will be against their policy._

So, another plugin that you can use as an alternative to Akismet is **Antispam Bee**. It is maintained by a group of volunteer developers at _Pluginkollectiv_. The plugin doesn't even offer a paid version and is completely free to use on commercial sites.

![installing Antispam Bee from WordPress Plugins directory](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/06/install-antispam-bee-1-1080x346.png)

installing Antispam Bee from WordPress Plugins directory

Since it works entirely on-server, there won't be any privacy issues either. Antispam Bee uses the Honeypot technique, in addition to checking the comments against the local spam database.

_I cannot say which plugin is more effective in stopping spam - Akismet or Antispam Bee. But I have been using the latter for while and it has been highly efficient._

## 2. Implement Honeypot

**A simple yet highly effective technique. That's honeypot.**

If you are not aware, the majority of the spam comments come from bots, not humans. That's where honeypot becomes successful. As the name suggests, it is a trap for spambots.

_Here is how it works:_

Just add one more field to your comment form (or any other form). Then make it hidden using CSS. So, real humans won't see that field and leaves it empty when they comment.

But bots, which work by looking at the HTML code, won't know that it is a hidden field. So they fill it up and prove themselves as fake.

I highly suggest you use **Antispam Bee** to implement the honeypot. The feature is included in the plugin. Otherwise, there are a few other plugins like [WP Armour](https://wordpress.org/plugins/honeypot/).

[![Spams caught by Antispam Bee honeypot](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/06/antispam-bee-honeypot-spam-1-1080x546.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/06/antispam-bee-honeypot-spam-1-1080x546.png)

Spam caught by Antispam Bee honeypot

[Some people have mentioned](https://stackoverflow.com/questions/36227376/better-honeypot-implementation-form-anti-spam) that they could stop more than 99% of spam using honeypot. My experiences are also not much different.

However, remember that this technique cannot stop human spammers. Also, some bots may be intelligent enough to circumvent honeypot traps.

So, it is not a complete solution. If you are still experiencing lots of spam comments after implementing honeypot or Antispam Bee, then try other methods, such as captchas.

## 3. Install a Captcha Service

Captchas are little challenges your users have to solve before submitting a form. The downside is bad user experience. Because of the difficulty in completing a challenge, legitimate users may abandon forms.

In recent times, Captcha solutions have improved a lot. Two such solutions you can consider are:

- **[Google reCaptcha](https://developers.google.com/recaptcha)**
- **[hCaptcha](https://www.hcaptcha.com/)**

Both the solutions require the users to click a checkbox to solve the captcha. More suspicious visitors get an image challenge.

![hCaptcha demo](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/06/hcaptcha-demo-2.gif)

hCaptcha demo given on its website

The latest version of Google ReCaptcha, ReCaptcha V3 is one step ahead. It does not involve any user interaction. Instead, it returns a risk score for each visitor, based on which you can take necessary actions. You can try [this plugin](https://wordpress.org/plugins/google-captcha/) to integrate ReCaptcha with WordPress.

In case Google's privacy practices are not sufficient for you, then **hCaptcha** is a great alternative. It won't track your website visitors, thereby offering better privacy. The [hCaptcha WordPress plugin](https://wordpress.org/plugins/hcaptcha-for-forms-and-more/) makes it easy to integrate the solution with your comment forms and login forms.

Recently, [Cloudflare has switched](https://blog.cloudflare.com/moving-from-recaptcha-to-hcaptcha/) to hCaptcha, which ensures that the service is well-supported and here to stay.

## 4. Switch to a social comment system

By default, WordPress uses its native comment system. While it has its advantages, spam and fake names are the disadvantages.

So, another route you can takes is to replace this native comment system with social comments. The two popular choices are:

- [Facebook](https://developers.facebook.com/docs/plugins/comments/)
- [Disqus](https://disqus.com/)

Less spam is not the only benefit of this approach. It also adds credibility to the comments. Because when someone comments using their Facebook or Disqus Id, they are revealing their identity. Whereas with native comments, people can use fake names or email addresses.

Disqus allows people to comment with Facebook, Twitter, and Google accounts.

![disqus comment with social profiles](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/06/disqus-comments-1.png)

Disqus allows commenting with major social accounts

Plugins are available to integrate these systems with WordPress:

- [WP Social Comments](https://wordpress.org/plugins/gs-facebook-comments/)
- [Disqus Comment System](https://wordpress.org/plugins/disqus-comment-system/)

However, a social comment system may not be suitable for all sites. Privacy is a major concern. Also, you are depending on a third-party system to store your site comments.

## 5. Use a Web Application Firewall (WAF)

As your website grows popular, attacks can also increase. In such a situation, ensuring more protection using a web application firewall is a wise move.

The firewall helps to block bad bots, hackers, and malicious users while allowing legitimate users. Two services you can consider are:

- **[Cloudflare](https://www.cloudflare.com/)**
- **[Sucuri](https://sucuri.net/)**

Cloudflare offers a free plan, which includes DDoS protection and DNS. Whereas the Pro plan, which costs $20/mo, comes with a web application firewall.

Sucuri is another well-acclaimed web security company. They do not have free plan, though.

In addition to the protection, both the services offer CDN also, which helps to speed up your website.

Overall, a firewall is not a direct spam prevention technique. But it helps to stop bad bots, which in turn reduces the spam.

- See also: [How to integrate Cloudflare with WordPress](http://localhost:10003/set-up-cloudflare-wordpress/)

## 6. Manual Moderation

Manually moderating each comment is another way to tackle spam. To enable it, go to **Settings > Discussion** in your WordPress admin.

Against _'Before a comment appears'_ section, you will see two options:

- _Comment must be manually approved_
- _Comment author must have a previously approved comment_

Check both the boxes, or only the appropriate one and save the changes.

[![enable comment moderation in WordPress](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/06/enable-comment-moderation-1-1080x545.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/06/enable-comment-moderation-1.png)

turn on moderation

When someone leaves a comment, it won't get published right away. Instead, they will receive a notice saying the comment is awaiting moderation.

![comment awaiting moderation message](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/06/wp-comment-awaiting-moderation-1.png)

the commenter gets a notice

Later you can go to the **Pending** tab in the **Comments** page, where you can manually approve, delete, or mark the comment as spam.

![manually moderate a wordpress comment](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/06/moderate-comments-wp-1-1080x383.png)

approve, edit, trash, or mark as spam

_Optionally turn on email notification also so that you can know when a comment arrives in the moderation queue._

However, this approach may not be practical for sites that receive a lot of comments daily.

## 7. Use the Built-in Comment Features

If manual moderation is not practical, there are still a few more built-in features you can try:

![wordpress discussion settings to prevent spam](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/06/wordpress-discussion-settings-prevent-spam-1-1080x908.png)

WordPress Discussion Settings

- **Make email and name field compulsory:** Check the box - _'comment author must fill out name and email'_. It is not that effective, but better than leaving it unchecked.
- **Allow only registered users:** If your site allows user registration, allow only registered users to comment.
- **Close comments on older posts:** Turning off comments on posts older than a set number of days can reduce spam to an extent.
- **Disable/reduce links in comments:** As we have mentioned, the goal of spammers is to post links on your site. So, not allowing links can demotivate spammers. Setting it to 0 disables all links. But sometimes genuine comments can also contain links, which adds value to your articles. So, 1 or 2 is a good setting.
- **Create a list of disallowed words:** WordPress gives two fields to enter spammy words. Look at the existing spam comments to find out which words have the most occurrences. Usually, comments with words like _free, discount, offer,_ and adult-related words are spam. Enter each of them in those fields and save. WordPress will move such comments to the moderation queue or trash.

## 8. Disable the Website Field

The main thing spammers exploit is the URL field (a.k.a the Website field) in WordPress comment forms. Disabling it can turn them away.

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/06/wordpress-comments-url-field-1.png)

There is no setting to do it directly. But WordPress gives a filter called _'comment_form_default_fields'_ to customize the form fields. You can use that to disable the URL field.

Add the following code to your _functions.php_ file or to a site plugin. Another easy way is to add it using the [Code Snippets](https://wordpress.org/plugins/code-snippets/) plugin.

```
<?php

function remove_wp_comment_url($fields) {
	if( isset($fields['url'])) {
		unset($fields['url']);
	}
	return $fields;
}

add_filter('comment_form_default_fields', 'remove_wp_comment_url');
```

[![using Code Snippets plugin to remove URL field](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/06/add-comment-url-remove-snippet-1-1080x465.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/06/add-comment-url-remove-snippet-1.png)

using Code Snippets plugin to remove URL field

## 9. Disable Comments Altogether

_**And finally, comments may not be equally valuable for all websites. If it is not beneficial, why not disable it completely?**_

Not only spam from bots but there are also quite a number of real humans who spread spam. Manual moderation is the only way to tackle them. Some popular sites like [Zenhabits](https://zenhabits.net/faq/) are not allowing any comments because of this reason.

[![disable comments for future posts](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/06/wp-disable-comments-new-posts-1-1080x533.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/06/wp-disable-comments-new-posts-1.png)

disable comments for future posts

For existing posts, select all the posts from the Posts screen and bulk edit them. Then set the Comments field to _'Do Not Allow'_.

[![use Bulk Edit to disable comments on existing posts](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/06/disable-comments-existing-posts-1-1080x466.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/06/disable-comments-existing-posts-1.png)

use Bulk Edit to disable comments on existing posts

## Conclusion

For most blogs, a reliable antispam plugin is all what you need. In addition to that, you can try a combination of several methods that we discussed above.

On this website, currently I use the Antispam Bee plugin along with the built-in WordPress features to fight spam. And so far, the honeypot system is taking care of most of the spam, both from comments and from the contact form.

_In case I have missed any important detail, mention it in the comments._