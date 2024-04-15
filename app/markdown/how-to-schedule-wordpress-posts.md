---
title: 'How to Schedule WordPress Posts: Individual and Bulk Scheduling'
date: '2020-10-29 07:30:00'
modified: '2022-03-17 18:31:17'
slug: how-to-schedule-wordpress-posts
categories:
    - wordpress
tags:
    - wordpress-tips
featured_image: 2020/10/schedule-wordpress-posts-featured-image-1.jpg
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. Scheduling is a crucial feature for planning your content ahead and keeping consistency in your blogging journey. If you are looking for ways to schedule your WordPress posts, then in this post, we will discuss a couple of ways. These are the methods: Scheduling individual posts from the Posts Edit page Using the Quick Edit link to modify post date and status Bulk scheduling using a plugin &ndash; here we use the Editorial…'
yoast_seo_title: 'How to Schedule WordPress Posts: Individual and Bulk Scheduling'
yoast_meta_description: 'Learn how to schedule posts in WordPress - discussing both individual scheduling and bulk scheduling using the Editorial Calendar Plugin'
cn_related_posts:
    - fix-a-slow-wordpress-admin
    - best-blogging-platforms
    - manage-multiple-wordpress-sites-tools
    - secure-wordpress-essentials
---
Scheduling is a crucial feature for planning your content ahead and keeping consistency in your blogging journey. If you are looking for ways to schedule your WordPress posts, then in this post, we will discuss a couple of ways.

These are the methods:

- Scheduling individual posts from the Posts Edit page
- Using the Quick Edit link to modify post date and status
- Bulk scheduling using a plugin - here we use the **Editorial Calendar** plugin

If you prefer watching a video about the same, here it is:

<iframe src="https://www.youtube-nocookie.com/embed/WxxGkUGNbVk?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

## Before Beginning: A Note on WordPress Post Statuses

WordPress supports eight different Post Statuses:

1. Publish
2. **Future**
3. Draft
4. Auto-draft
5. Inherit
6. Pending
7. Private
8. Trash

As you might expect, '_Publish_' is the status assigned for a post when you publish a post. And _'draft'_ means the post is just saved in the database, it's neither published nor it has a publish date associated with it. When you hit the Publish button, the status changes from _'draft'_ to _'publish'_ along with the DateTime.

WordPress stores all this data under the `wp_posts` table in the database. To be more specific, WordPress saves the post status values under the column _post_status_ against each post ID. You can read more about the different post statuses on [this documentation page](https://wordpress.org/support/article/post-status/).

Here, we are interested in the second option - '_Future_'. It's the status WordPress assigns for posts scheduled to be published on a future date.

## Schedule from the Post Edit page

### Open Settings Panel

This guide assumes that you are using the [new Gutenberg Block Editor](http://localhost:10003/best-block-plugins-wordpress-gutenberg-editor/). Go to the edit page for any draft post you want to schedule. Or you can do this for a new post as well.

Then click on the cog wheel button at the top bar (towards the right side of the Publish button) to open the Settings panel one the right, if it's not already opened.

[![open settings panel - WordPress dashboard](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/10/schedule-posts-open-settings-panel-1080x782.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/10/schedule-posts-open-settings-panel.png)

### Go to Document > Status & visibility

In the settings panel, there are two tabs:

- Document
- Block

Go to the Document tab. There you can find the different settings arranged in accordion-style menus. Expand the first one - **Status & Visibility**.

Here you can find the following options:

- Visibility
- **Publish**
- Post Format
- Checkboxes to make the post sticky or mark for review
- Trash/delete the post

[![status and visibility setting in wordpress](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/10/status-visibility-wordpress-posts.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/10/status-visibility-wordpress-posts.png)

### Change the Publish value from _Immediately_ to a Future date/time

The default value for the Publish setting will be - _Immediately_. That means the post will go live immediately if you click the Publish button.

Instead, to schedule the post for another date, click on the word 'immediately', which opens a calendar. In that calendar, you can set the date and time for the post.

[![select a date to schedule wordpress posts](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/10/wordpress-schedule-posts-select-date.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/10/wordpress-schedule-posts-select-date.png)

When you select a future date:

- The Publish button changes to _Schedule_

_Note that you can also select past dates from the calendar, which is useful if you want to backdate any post._

### Click Schedule

After picking a desired date, click on the _Schedule_ button on the top bar. Now the post is scheduled. Also, note that:

- _'Save draft link'_ changes to _'Switch to draft'_, which reverts the post back to a draft if you click it.

[![scheduling wordpress posts](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/10/scheduling-wordpress-posts-1-1080x368.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/10/scheduling-wordpress-posts-1.png)

## Using the Quick Edit Link

In the above section, we discussed scheduling posts from the editor. You can do the same thing from the Posts list page also.

Under each post title, you can find a _Quick Edit_ link. Click on it to expand it.

[![open quick edit box](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/10/wordpress-posts-quick-edit-1.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/10/wordpress-posts-quick-edit-1.png)

From the _Quick Edit_ box, you get the options to set the date, time, and status of each post.

[![schedule posts from quick edit box](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/10/wordpress-quick-edit-scheduling-1-1080x383.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/10/wordpress-quick-edit-scheduling-1.png)

This method would be easier if you have multiple posts to schedule or backdate. Since it's Ajax-powered, you don't have to wait for the post editor to load either.

## Bulk Scheduling using the Editorial Calendar Plugin

But still, if you have tens of posts to schedule for future, it's not convenient to do it from the editor or posts page. For example, if you want to schedule posts for the next week, the week after that, next month, etc., then a calendar is essential.

By default, WordPress does not provide a calendar to organize your posts. So, for that, we will use the [Editorial Calendar](https://wordpress.org/plugins/editorial-calendar/) plugin.

Go to the **Add Plugins** page, and search for the keyword - 'editorial calendar', then install it, and activate it.

[![install editorial calendar plugin](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/10/install-editorial-calendar-plugin-wordpress-1080x433.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/10/install-editorial-calendar-plugin-wordpress.png)

Once you have activated the Editorial Calendar, you will see a new menu item called Calendar under Posts. Open that page.

[![open calendar view](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/10/open-editorial-calendar-wordpress-1.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/10/open-editorial-calendar-wordpress-1.png)

Now you should see a calendar. Scroll up to go to the previous month and scroll down to go forward. You should also see the posts you have already published/scheduled previously.

On the right side, toggle the option - _show unscheduled drafts_. Now on the right side, you see all the draft posts you've created.

To schedule one of them, just drag it to the required date cell in the calendar.

[![schedule a post using editorial calendar plugin](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/10/schedule-posts-editorial-calendar-plugin-1-1080x527.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/10/schedule-posts-editorial-calendar-plugin-1.png)

Then change the post status from Draft to Scheduled. That's all.

[![change post status in editorial calendar plugin](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/10/editorial-calendar-plugin-change-status-1-1080x526.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/10/editorial-calendar-plugin-change-status-1.png)

Now repeat the same process for all the drafts you want to schedule.

## Conclusion

Editorial Calendar may not be the only WordPress plugin that allows calendar-based post-scheduling. I have heard about other options like PublishPress, but I haven't tried it yet.

Hope this post helped you.