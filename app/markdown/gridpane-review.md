---
title: 'GridPane Review: What Makes this WordPress Control Panel Stand Out?'
date: '2022-02-03 07:00:00'
modified: '2022-02-03 07:00:00'
slug: gridpane-review
categories:
    - hosting
tags:
    - cloud-hosting
featured_image: 2022/02/gridpane-review-featued-1.jpg
excerpt: 'A detailed review of GridPane - a control panel for hosting WordPress sites on Cloud servers.'
yoast_seo_title: '%%title%% %%page%%'
yoast_meta_description: 'A detailed review of GridPane - a control panel for hosting WordPress sites on Cloud servers like DigitalOcean, Vultr, and Linode.'
cn_related_posts:
    - cloud-hosting-wordpress
    - cloud-hosting-vs-shared-hosting
    - chemicloud-review
    - cloudways-vs-kinsta
---
Starting from the cheapest shared hosting plans to the most expensive managed WordPress hosting, there are several ways to host a WordPress website on the web.

If you are about to host the site on an unmanaged VPS or dedicated server, then the burden of managing and maintaining your server lies on your shoulders. That's where a control panel proves helpful.

In this review, we are going to look at one of those control panels - **GridPane**. We will look at what GridPane is, what its top features are, ease of use, advantages, and disadvantages.

![GridPane website home page](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/gridpane-home-feb-2022-1080x572.png)

By the end, you will be able to decide if GridPane is right for your WordPress website or not.

[Visit GridPane](http://localhost:10003/go/gridpane/)

## **What is GridPane**

As I have said in the introduction, GridPane is a control panel that helps you to manage servers and WordPress websites on other cloud providers Like AWS and DigitalOcean.

[![GridPane control panel](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/gridpane-control-panel-1080x582.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/gridpane-control-panel.png)

control panel home page

These cloud providers give only the infrastructure, that is a cloud VPS machine with an operating system installed. For instance, if you were to host a WordPress website directly on DigitalOcean, you need to use the terminal and run the SSH commands to manage the server and the websites. There are also command-line tools like [EasyEngine](https://easyengine.io/) and [WordOps](https://wordops.net/) if that's the route you prefer.

In contrast to that, if you use traditional web hosting, then you get both infrastructure and the control panel to manage the sites.

For example, web hosting companies offer shared hosting plans that come with cPanel, which helps you to manage all the aspects of your hosting account.

However, since everything is managed by the hosting provider you do not usually get root access to the server.

Control panels like GridPane offer the best of both worlds. It offers a graphical user interface from where you can control the server on another provider, while still retaining complete root access to the server itself.

Gridpane allows you to do the following things:

- provisioning new servers
- setting up the server stack
- installing WordPress
- installing plugins and themes
- managing updates and security patches
- taking backups
- provides a staging area for testing

GridPane is a hosted service, which means the control panel is maintained by them and hosted on their servers instead of yours. So you don't have to worry about it. Even if the panel goes down temporarily, your servers and sites stay up.

## How it Works

You can add your server provider’s API credentials to your GridPane account, which allows the control panel to remotely connect to the provider and manage the servers.

It also supports custom VPS, which requires you to run an SSH command once when setting up the server.

## Top Features

GridPane offers numerous configuration options and settings. Discussing all of them can make this post so long. So let me discuss only the important ones.

### Server Providers

Currently, GridPane supports direct integration with five cloud providers:

- **DigitalOcean**
- **Linode**
- **Vultr**
- **Amazon Lightsail**
- **Upcloud**

But technically, you can connect servers from any provider. Because GridPane supports adding custom VPS.

The first step to connect a custom VPS is to provide the server's IP address, along with other options like name, data center, and server stack. Then you will get a command that you need to run on the server. You need to SSH into the server to run the command.

[![connecting custom VPS with GridPane](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/custom-vps-gridpane-1080x503.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/custom-vps-gridpane.png)

_Also, the VPS needs to be a KVM virtualized machine or bare metal server running Ubuntu 18.04. As of now, it looks like GridPane does not support Ubuntu 20.04, the latest LTS version._

From there onwards, GridPane will take care of the rest. See the _How to Use_ section below to learn more.

### Tech Stack

As a system that optimizes the server for hosting WordPress sites, GridPane offers both LEMP (Linux, Nginx, MySQL, PHP) and LOMP (Linux, OpenLitespeed, MySQL, PHP).

The following are the things you can set while creating a new server:

- Operating System: **Ubuntu 18.04**
- Web server: **Nginx** or **OpenLiteSpeed**
- Database: **Percona** or **MariaDB**
- **PHP 7.x** & **PHP 8.x**

And for each individual website, you can set the following as well:

- Page caching: **Nginx Redis** or **Nginx FastCGI**
- Object caching: **Redis object caching**

WordPress websites installed on OpenLiteSpeed servers come with the [LScache](https://wordpress.org/plugins/litespeed-cache/) plugin. It is the equivalent of Nginx FastCGI cache that enables page caching. In addition to that, Redis object caching is also available.

Overall, GridPane fine-tunes WordPress websites to load fast even without the need for a third-party [caching plugin](http://localhost:10003/best-caching-plugins-wordpress/).

### Security

GridPane implements a bunch of server hardening rules to make your WordPress sites secure.

It automatically installed the Fail2ban package along with other features like rate limiting and [HTTP security headers](http://localhost:10003/http-security-headers/).

Another feature worth mentioning is the [6G and 7G](https://perishablepress.com/7g-firewall/) web application firewall (WAF). It is a package developed by Jeff Star from Perishable Press. It's a lightweight package weighing just 12KB. Initially, it was made for the Apache webserver but GridPane has modified it for Nginx.

While the firewalls protect your site on the server level, WordPress hardening features offer an additional layer of protection on the site level. For each individual site, you can [disable the XML-RPC API](http://localhost:10003/prevent-wordpress-xml-rpc-attacks/), block PHP file execution inside the wp-content folder, etc.

### Backup

When using GridPane, you don't need another [backup plugin](http://localhost:10003/backup-plugins-wordpress/).

The control panel supports both local and remote backups. Automated scheduled backups are available at hourly, daily, weekly, or monthly intervals. There is even an option to pause the backup if the disk space is less than a specified percentage. This proves the attention to detail GridPane has taken while offering WordPress-specific features.

When it comes to remote backups, GridPane supports two storage providers Amazon S3 and Backblaze B2. You can integrate them from the settings section.

- You might also like: [10 Alternatives to Amazon S3](http://localhost:10003/amazon-s3-alternatives/)

### WordPress Features

One feature I like very much is the ability to create bundles. A bundle is a predefined set of themes or plugins that you want GridPane to install while creating a WordPress website.

This can be quite handy if you have a set of plugins that you need across multiple sites. 

### Performance Features

To assess the performance of your servers, GridPane provides the Monit dashboard.

It allows you to monitor all processes and services such as MySQL, PHP, Redis, Nginx, etc.

On the homepage, you can view the status of all the available services. As you can see from the below screenshot, it is showing OK status for all the services on my server.

[![Monit server manager](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/monit-gridpane-1-1080x550.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/monit-gridpane-1.png)

Clicking on an individual item takes me to the status page for that process where I can see more details.

[![monitoring individual processes using Monit on GridPane](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/monit-process-manage-1-1080x514.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/monit-process-manage-1.png)

monitoring the redis-server process using Monit on GridPane

Instead of just viewing the metrics, Monit allows managing the services as well. For instance, you can start, stop, restart individual services from their respective pages.

### Access & Management Features

Password-based authentication is disabled by default when you create a server using the GridPane control panel. This measure helps to improve security. So the recommended way to connect to a server from the terminal is by using the SSH keys.

The usual way to do this is by adding the public key to the server and keeping the private key on your local machine. GridPane makes the process easier by allowing you to upload the keys to the control panel, which will then add the public key to the server.

[![adding SSH keys to GridPane control panel](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/add-ssh-keys-gridpane-1080x548.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/add-ssh-keys-gridpane.png)

Two-factor authentication is also available if you want to make your control panel account more secure.

## How to Use

### Signing up & Onboarding

GridPane offers a 14-day free trial. However, you have to provide your credit card details to start the trial.

Overall the onboarding process is easy and straightforward. There is also a step-by-step onboarding video series to pave your way around the panel.

![Onboarding videos](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/gridpane-onboarding-1080x604.png)

Onboarding videos

### Setting up the API tokens

GridPane offers API integration with all the five providers mentioned above. Go to the Your Settings page, then under the Integrations tab, you can find the fields to enter the API tokens.

For instance, if you are using DigitalOcean as the cloud provider, then go to your DigitalOcean account settings page and generate a new API token. Then copy the API Token to the clipboard and come back to the integration page on GridPane and paste it.

[![generating API token on DigitalOcean](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/do-gridpane-generate-api-token-1080x397.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/do-gridpane-generate-api-token.png)

generating API token on DigitalOcean

[![adding DO token to GridPane control panel](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/add-do-token-gridpane-1-1080x392.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/add-do-token-gridpane-1.png)

adding DO token to GridPane control panel

### Connecting Servers

Once you have connected the API, you can start provisioning servers from the control panel.

The steps involve selecting an operating system, database engine, plan, region, and web server software.

[![provisioning a new DO server in GridPane](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/gridpane-provisioning-do-server-1080x790.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/gridpane-provisioning-do-server.png)

provisioning a new DO server in GridPane

[![provisioning in progress](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/gridpane-provisioning-do-server-1-1080x540.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/gridpane-provisioning-do-server-1.png)

provisioning in progress

GridPane recommends a VPS with at least 2GB of RAM. As of writing this review, Ubuntu 20.04 is the latest long-term support (LTS) version, but on GridPane, the default operating system available was Ubuntu 18.04.

### Creating Sites

After creating a new server, the next step is to create a site. For that, go to the Sites page.

There you can enter the URL of the new site, select the server on which to install the site, assign a system user, along with the plugin and theme bundles you want to install.

[![creating a new site on GridPane](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/create-new-site-gridpane-1.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/create-new-site-gridpane-1.png)

creating a new site on GridPane

GridPane also generates a new SSL certificate for the new domain. For that to work, you first need to point the domain name to the IP address of the new server. However, this can cause downtime if you are migrating a website that’s already running on another server.

In such cases, the best way is to use the DNS API verification to generate the SSL certificates. GridPane supports two APIs: Cloudflare and [DNS Made Easy](https://dnsmadeeasy.com/). This allows you to generate the SSL certificates on the new server while the site is still running on the old server.

### Settings

Now let's have a look at the site settings. Under the Active Sites section, click on the site name, which opens a popup. There you can find the settings organized into 10 different tabs:

- Settings
- Caching
- Security
- PHP
- Backups
- Clone
- Domains
- Logs
- Multisite settings
- beta settings

![Click on the site name to open Settings](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/gridpane-site-settings-1-1080x448.png)

Click on the site name to open Settings

[![site settings modal](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/gridpane-site-settings-2-1080x637.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/gridpane-site-settings-2.png)

site settings modal

## **Plans & Pricing**

GridPane offers five plans - **four paid plans and a free plan**. Despite there's an option to switch to the free plan from the Billing section, there is no mention of it anywhere else.

The paid plans are:

- **Panel** - $50/mo, unlimited sites, all features we’ve discussed above. This is the plan we are currently reviewing .
- **Developer** - $200/mo - all features in Panel, GridPane API access, and other features like Snapshot Failover, UpdateSafely, and one support seat.
- **Agency** - price not publicly available - whitelabeling, multiple support seats
- **Enterprise**

There is also a 14-day free trial, which requires you to provide the payment details. Also, no payment methods are available other than credit cards.

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/02/gridpane-pricing-feb-2022-1080x755.png)

## **Support**

If you want some serious help, then you need at least the **Developer** or the **Agency** plan. There is also a community forum. But for some reason, I was not able to create an account on the forums site with the **Panel** plan.

In addition to that, there is also a Knowledge Base section, which is quite comprehensive.

## **Speed Tests**

To find out how well the great pain server stack performs, I tested the site using GTmetrics from all seven locations.

The server was a 2GB DigitalOcean instance located at the New York data center. 

|   |   |   |
|---|---|---|
|**Location**|**TTFB (ms)**|**Onload (ms)**|
|Hong Kong|915|2600|
|London|328|903|
|Mumbai|751|2300|
|San Antonio|170|668|
|Sydney|874|2800|
|São Paulo|580|1400|
|Vancouver|307|866|
|**Average**|**560.71**|**1648.14**|

Overall, the site performed really well. [Here](https://abhinavr.com) you can view the site I used to test.

## **GridPane Alternatives**

GridPane is not the only server control panel for WordPress sites. Here are a few alternatives:

- SpinupWP
- Cloudways
- ServerPilot

Out of these, Cloudways is not a mere control panel. It's more like a managed cloud hosting provider.

## **Pros & Cons of GridPane**

- LAMP & LOMP server stacks
- Performance & security features available out of the box
- Retains root access to servers

- Pricing is expensive
- Limited support options in the lower plan

## **Conclusion**

GridPane is a great option if you are a WordPress developer or agency managing multiple sites.

The only major disadvantage is the pricing which starts at $50 per month for the lowest plan. So it may not be a great choice if you have only one or two sites to manage.

Other than that, GridPane is an excellent option if you are looking for complete control over your WordPress hosting. It is probably the most feature-rich WordPress hosting control panel I have used so far.