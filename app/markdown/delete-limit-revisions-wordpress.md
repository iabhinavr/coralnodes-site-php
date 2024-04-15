---
title: 'How to Delete and Limit WordPress Post Revisions'
date: '2019-03-21 16:05:12'
modified: '2021-12-24 22:22:29'
slug: delete-limit-revisions-wordpress
categories:
    - wordpress
tags:
    - wordpress-tips
featured_image: 2019/03/delete-revisions-featured.png
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. Revisions in WordPress is a useful feature which allows you to revert your posts or pages back to a previous update. By default, the WordPress system creates a new revision each time you update or publish a post. So, if something goes wrong, you can quickly restore to a previous revision. Each revision is a separate entry in the wp_posts table of the WordPress database. If you have a habit of updating older…'
yoast_seo_title: ''
yoast_meta_description: ''
cn_related_posts:
    - essential-settings-after-installing-wordpress
    - best-google-font-combinations
    - wp-super-cache-vs-wp-fastest-cache
---
Revisions in WordPress is a useful feature which allows you to revert your posts or pages back to a previous update. By default, the WordPress system creates a new revision each time you update or publish a post.

So, if something goes wrong, you can quickly restore to a previous revision. Each revision is a separate entry in the wp_posts table of the WordPress database. If you have a habit of updating older posts to keep the content fresh, the number of revisions also increases. As time passes, your database grows to a huge size. In this post, let us see how you can delete and limit the number of revisions in WordPress.

The two main reasons you might need to delete these unwanted data are:

- **It takes a lot of space on your hosting.**
- **A large number of rows can slow down database queries.**

## Watch Video

<iframe src="https://www.youtube-nocookie.com/embed/OZVmkCL5zgs?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
## How Revisions Work

The two main revision types are:

- **Revisions made while saving or updating**
- **Autosaves**

Although auto-saving happens once in a minute, the new entry replaces the previous version, if one exists. So auto-saves will not add up over time and also comes useful in case you forgot to save your draft. It is the other one - the regular revisions - that makes the database huge.

Suppose you save a post-draft ten times in the course of writing a blog post before finally hitting the publish button. That creates ten rows for revisions, one row for your published post, and another row for the auto-saves in between. That is a total of 12 rows for just one post.

The same thing happens whenever you update a published post also. In this blog itself, I had around 20 revisions for each post on average. So, by the time I publish 500 posts and pages, I will be having a total of 10k rows for revisions in my database if I do not delete them.

_If you manage posts on your own, chances are less you will ever need to restore a post to an old revision._

## How to delete revisions

Optimizing the database by deleting revisions involves three steps:

1. **Backing up the database**
2. **Deleting the revisions of existing posts and pages**
3. **Limiting or disabling revisions for future updates**

### Back Up Database

Since you are going to make some serious changes to your database, it will be wise to take a backup. You can restore it if something breaks the site. Use a plugin like [UpdraftPlus](https://wordpress.org/plugins/updraftplus/) to create the backups.

### Deleting the revisions of existing posts and pages

You can do this either by using a plugin or manually by performing an SQL command. If you are not experienced, I don't recommend the SQL method as it can be disastrous in case you make some errors. So let us look at the plugins here.

#### **[WP Optimize Plugin](https://wordpress.org/plugins/wp-optimize/)**

WP-Optimize offers a bunch of database optimization features which includes the deletion of revisions as well.

[![WordPress delete revisions](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/03/delete-revisions-1-1024x966.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/03/delete-revisions-1.png)

It also shows the number of revisions your database currently keeps. Check the box in front of the _Clean all post revisions_ option and then click _Run Optimization_ on the right side.

Note: Check only the box to clean revisions if you are not sure about other options.

#### [**WP Sweep Plugin**](https://wordpress.org/plugins/wp-sweep/)

![Deleter Revisions using WP Sweep](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/03/delete-revisions-6-1024x274.png)

WP Sweep is another solution you can use to delete old revisions. It does what its name suggests - sweeps and cleans unwanted data from the database. Like WP-Optimize, it can also delete orphaned metas and relationships in the database in addition to several other useful features.

The main thing I like about this plugin is the statistics. The plugin page shows a list of all unwanted data along with the possible savings in percentage. Clicking on the Details button reveals more information about each item.

To access the plugin page, install it, activate, and go to _**Tools > Sweep**_.

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/03/delete-revisions-2-1024x393.png)

It offers the following types of cleanings:

- Post sweep - affects pages also
- Comment sweep
- User sweep
- Term Sweep
- Option sweep
- Database sweep

_Once you have cleaned up the existing revisions, you can choose to keep or uninstall the above plugin._

## Limiting or Disabling Future Revisions

The next step is to limit the revisions for future updates. For that, you have to edit the `wp-config.php` file.

### Limit the Number

Add the following line to the `wp-config.php` file of your WordPress installation:

```
define('WP_POST_REVISIONS', 2);
```

![Limit revisions in WordPress](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/03/delete-revisions-9.png)

With the above line of code, WordPress will keep only the latest two revisions and deletes any older ones. Change the number to whatever you want.

### Disable Revisions Altogether

To disable it completely, set the above constant to false.

```
define('WP_POST_REVISIONS', false);
```

![Disable revisions in WordPress](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/03/delete-revisions-8.png)

Note that autosaves will still work. Sixty seconds is the default interval for auto-saves. If you disable that too, set the interval to something very high.

```
define('AUTOSAVE_INTERVAL', 43200);
```

With that, we have set the interval to twelve hours. Unless you keep the post edit page open for twelve hours, auto-save won't work.

However, I don't recommend doing this. For me, auto-saves had come to the rescue many a time during network and power outages. It had helped to recover the edits I couldn't save. Moreover, there is only one version of auto-save stored in the database at a time. So, unlike other revisions, it won't be an issue.

## Results & Conclusion

Before publishing this, I have tried these things on my blog itself. Here are the results.

[table id=5 /]

Note that my database size reduces from 2.5MB to 0.75MB. That is almost a 70 percent reduction. Remember that it was a new website with only a couple of updates. So imagine how much you can save for a large website.