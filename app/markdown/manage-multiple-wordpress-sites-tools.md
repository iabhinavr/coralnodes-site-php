---
title: '5 Tools to Manage Multiple WordPress Sites Efficiently'
date: '2021-10-08 00:12:28'
modified: '2021-10-08 00:12:40'
slug: manage-multiple-wordpress-sites-tools
categories:
    - wordpress
tags:
    - tools
featured_image: 2021/10/manage-multiple-wp-sites-featured-1.jpg
excerpt: 'Tired of managing multiple WordPress sites? Meet some awesome tools to manage them all from one place without logging into each.'
yoast_seo_title: ''
yoast_meta_description: 'Tired of managing multiple WordPress sites? Meet some awesome tools to manage them all from one place without logging into each.'
cn_related_posts:
    - wordpress-maintenance-services
    - how-to-backup-a-wordpress-site
    - backup-plugins-wordpress
    - update-wordpress-plugins-themes
    - wordpress-hosting
    - akismet-alternatives
    - best-caching-plugins-wordpress
    - best-wordpress-image-optimization-plugins
---
Properly maintaining a WordPress site involves many tasks:

- Keeping [software up-to-date](http://localhost:10003/update-wordpress-plugins-themes/)
- Taking regular backups
- Security checks
- Uptime monitoring
- _etc..._

If you have just one site to worry about, then it may not be a huge job. But what if you have two, or more?

Or, what if you are an agency developing and maintaining tens of sites for clients?

Then it becomes a pain. If you plan to manually log in to each site and perform the updates, [backups](http://localhost:10003/backup-plugins-wordpress/), and everything, then it will be totally unproductive and time-consuming.

That's why there are tools for that. In this article, we will discuss some awesome tools that allow you to manage multiple WordPress websites from a centralized location.

_Instead, if you want to completely handover the maintenance responsibilities to a team, then check out these [WordPress maintenance providers](http://localhost:10003/wordpress-maintenance-services/) as well. Note that some of them also utilize the tools I'm going to list below._

## 1. ManageWP

[ManageWP](http://localhost:10003/go/managewp/) is a tool, which was acquired by GoDaddy in 2016. It provides several neat features to manage unlimited WordPress websites from a single dashboard, which they call _Orion_.

![managewp website home page](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/10/managewp-home-page-1-1080x446.png)

Here is how it works:

- Go to [ManageWP](http://localhost:10003/go/managewp/) and create an account.
- Install the [ManageWP Worker](https://wordpress.org/plugins/worker/) plugin on the site you want to manage.
- Get the connection key from the plugin's Connection Settings area.
- Then add the site to MangeWP's Orion dashboard. Enter the connection key from the previous step to authenticate the connection. Alternatively, you can also provide your WordPress site's login credentials.
- Repeat the process for all the sites you want to connect.

![managewp worker plugin](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/10/managewp-worker-plugin-1.png)

ManageWP Worker Plugin - Install it on all the site to be managed

[![ManageWP's Orion dashboard interface](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/10/managewp-dashboard-1-1080x549.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/10/managewp-dashboard-1.png)

ManageWP's Orion dashboard interface

ManageWP's pricing model is what makes it quite affordable. **The dashboard and the Worker plugins are free to use**, along with all the core features:

- Scheduled updates for plugins, themes, and the WordPress core.
- Monthly backups to cloud storage.
- Ability to sync with a local WordPress installation.
- Turn on [Maintenance mode](http://localhost:10003/best-under-construction-wordpress-plugins/) when required.
- Ability to add custom PHP code snippets to your sites.

On top of these, premium features are available as add-ons, most of which are available for **$1/mo/site**:

- Uptime monitoring
- SEO rank monitoring
- Broken link checking
- Daily/on-demand backups, website cloning & migration

Some add-ons have free and premium versions, such as Performance Checks, Security Checks, and Client reporting.

Overall, ManageWP is an affordable and useful tool that you can consider.

## 2. MainWP

[MainWP](http://localhost:10003/go/mainwp/) is another free tool, but it is a lot different from ManageWP. The most important factor is, it is **self-hosted**.

![MainWP website](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/10/mainwp-home-page-1-1080x663.png)

Unlike ManageWP's dashboard, which is hosted on a remote server, MainWP allows you to host the dashboard on your own server. It is also open-source.

Here is how it works:

- MainWP involves two plugins: the [MainWP Dashboard](https://wordpress.org/plugins/mainwp/) and [MainWP Child](https://wordpress.org/plugins/mainwp-child/).
- Install the Dashboard plugin on one of your sites, from where you can control all the other sites. This controller site will host the interface and all the related functionalities. _So, it is recommended to install the Dashboard plugin on a clean WordPress site rather than on a production website._

![mainwp child and dashboard plugins](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/10/mainwp-child-dashboard-plugins-1-1080x356.png)

MainWP Child & Dashboard Plugins - both open-source & freely available

- Then install the Child plugin on the site you want to manage. Back on the Dasboard site, enter the details of the child site to complete the connection (you might see a warning not to leave the child site unconnected for a long period of time, as it can cause unexpected problems).
- That's it. Similarly, connect all the sites that you want to manage.

The UI is not the best I've seen. The overall organization is nowhere as organized as ManageWP's Orion. However, it offers lots of features worth exploring.

[![mainwp dashboard](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/10/mainwp-dashboard-interface-1-1080x515.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/10/mainwp-dashboard-interface-1.png)

MainWP Dashboard

For the connection between the Dashboard and the client sites, MainWP uses [OpenSSL cryptographic](https://www.php.net/manual/en/intro.openssl.php) key-based authentication, which ensures secure connections.

In addition to the core features, MainWP offers several extensions, both free and premium. The free offerings include backups (using [BackWpUp](https://wordpress.org/plugins/backwpup/)), and site checks (using [Sucuri](https://sitecheck.sucuri.net/)).

The list of premium extensions includes article uploader, bulk settings manager, code snippets, site clone, etc. You get access to all these premium extensions with the Pro membership, which costs $29/mo. I couldn't find a way to buy extensions individually, though.

## 3. WPMU Dev

[WPMU Dev](http://localhost:10003/go/wpmudev/) is a well-known name in the WordPress industry. They provide premium tools to run WordPress businesses, for agencies and individuals.

![wpmudev hub](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/10/wpmudev-hub-page-1-1080x540.png)

Their catalog of products includes plugins, hosting, and a site management platform.

- The site management tool - know as **The Hub** - allows managing multiple sites from a centralized remote dashboard.

But it's much more than just updates & backups. You can monitor uptime, SEO, and can even run performance tests right from the Hub.

The pricing is not that cheap, though. There aren't any free plans either, although there is a free trial.

There are three membership plans: **Personal** ($19/mo for a single site), **Freelancer** ($39/mo for twenty sites), and **Agency** ($99/mo for unlimited sites).

[![wpmudev pricing as in Oct 2021](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/10/wpmudev-pricing-oct-2021-1080x542.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/10/wpmudev-pricing-oct-2021.png)

So it's definitely not for you if you are on a tight budget. However, the good part is, all these plans give access to a set of premium plugins and professional support in addition to the Hub. With the higher plans, you also get hosting at no additional costs.

So, if you're searching for a one-stop-shop for all things related to run a WordPress business, WPMU Dev may be what you want.

## 4. InfiniteWP

Like MainWP we discussed above, [InfiniteWP](http://localhost:10003/go/infinitewp/) is another self-hosted WordPress management tool.

![InfiniteWP website home page](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/10/infinitewp-home-page-1-1080x672.jpg)

However, its working is a little different. You don't need to install the dashboard on an existing WordPress website. Instead, you can install the control panel software via cPanel or FTP. An installer plugin is also available if required.

The [InfiniteWP Client](https://wordpress.org/plugins/iwp-client/) plugin connects your child sites to the dashboard site.

![InfiniteWP Client plugin](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/10/infinitewp-client-plugin-1.png)

InfiniteWP Client plugin

The base plan is free, along with the essential features - one-click updates, backups, and restore.

The Premium plans unlock more features like incremental backups, uptime monitoring, client reporting, priority support, and a lot more.

There are five plans available:

- Starter (10 sites)
- Developer (20 sites)
- Freelancer (50 sites)
- Agency (unlimited)
- Enterprise (unlimited)

![InfiniteWP Pricing - Oct 2021](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/10/infinitewp-pricing-oct-2021-1080x507.png)

The prices range from $147/yr for the Starter plan all the way up to $647/yr for the Enterprise plan. The features across all the plans are mostly the same. The difference is in the no. of allowed sites and the priority support response times.

## 5. wpCentral

[wpCentral](https://wordpress.org/plugins/wp-central/) is a remote-hosted control panel with over 100k installations and a rating of 4.5/5.

![wpCentral plugin install](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/10/wpcentral-add-plugin-1.png)

Install the client plugin on all the sites you want to manage. Then, just like ManageWP, you can connect these sites to the dashboard by providing the WordPress credentials or by generating a remote connection key.

The user interface looks a bit dated, in my opinion.

[![wpCentral user interface](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/10/wpcentral-ui-1-1080x489.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/10/wpcentral-ui-1.png)

The free plan allows plugin & theme management and local backups on unlimited sites.

The pricing for the paid plans looks a bit confusing to me. There are six plans in total, but none of them allow unlimited site usage.

[![wpCentral pricing - october 2021](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/10/wpcentral-pricing-oct-2021-1080x628.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/10/wpcentral-pricing-oct-2021.png)

The Personal plan that costs $2.5/mo allows adding only one site. The highest is the Corporate plan that allows 100 sites.

## Conclusion

I hope this article helped you in finding some tools to better manage your WordPress websites. ManageWP, WPMU Dev, and wpCentral offers a remote location from where you can control your sites.

Whereas, if you don't like a third-party server controlling your sites, then a self-hosted solution is what you need. InfiniteWP and MainWP are great options in this regard.