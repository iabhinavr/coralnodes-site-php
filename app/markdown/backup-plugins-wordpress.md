---
title: '10 Best Backup Plugins for WordPress for 2021'
date: '2019-04-10 23:13:05'
modified: '2021-05-06 23:51:28'
slug: backup-plugins-wordpress
categories:
    - wordpress
tags:
    - wordpress-plugins
featured_image: 2019/04/best-backup-plugins-featured.png
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. If you own or manage a website with lots of content, what is the biggest nightmare that can happen to it? Losing all those hardwork and the website getting vanished. Isn&rsquo;t it? However, you can almost avoid such a disaster if you have a habit of taking regular backups. Backup is a record of your whole website including its content. With that, you can quickly restore the site to the most recent version…'
yoast_seo_title: ''
yoast_meta_description: 'A list of the best backup plugins for WordPress - includes free and paid ones - partial, full-site, and incremental backup solutions.'
cn_related_posts:
    - best-wordpress-image-optimization-plugins
    - best-cdn-providers
    - wordpress-hosting
---
If you own or manage a website with lots of content, what is the biggest nightmare that can happen to it?

Losing all those hardwork and the website getting vanished. Isn't it?

However, you can almost avoid such a disaster if you have a habit of taking regular backups. Backup is a record of your whole website including its content. With that, you can quickly restore the site to the most recent version even if something unfortunate happens.

When you use WordPress as your content management system, taking backups is quite easy with plugins. In today's post, let us look at some of the best backup plugins for WordPress.

You might also want to read:

- [How to Backup a WordPress Site: Best Practices & Step-by-step Guide](http://localhost:10003/how-to-backup-a-wordpress-site/)

## What's in a backup?

Before that, you must also be aware of the four main constituents of a WordPress backup.

1. **Database:** WordPress uses MySQL database to store the data inside posts, pages, site settings, and other data. So, the database is the most important component of any backup. Without it, you won't be able to restore your site.
2. **Website Files:** A backup will not be complete without the necessary files. Remember that there are plugins that back up only the database. In this article, we are only looking at the plugins that take full backups.
    1. **Media Uploads:** Media include photos, images, PDFs, and other things that you upload to your site. If you try to restore a database without the associated media, all the links to media, such as images, will appear broken.
    2. **Plugins:** Since plugins add extra functionalities, without it, the site may break after restoring. However, if you have a list of plugins you had previously activated on your site, you can re-install all those one by one. But why take such a pain when you can easily include plugins in your backup?
    3. **Themes:** Lastly, a theme determines the design and layout of your site. So you should backup that as well.

## Features to look for in a Backup Plugin

These are the top things I look for in a backup plugin:

- _Scheduled or automatic backups_
- _Cloud-based remote storage options_
- _Ability to take full or partial backups_
- _Is there an incremental or real-time backup feature?_
- _How easy it is to restore_
- _Is there a Migration & cloning feature?_

## Best WordPress Backup Plugins

Now let us look into the list. I have arranged the list based on my personal preference. However, each plugin differs from the others in terms of features and ease of use. So, choose one based on your specific requirements.

### 1. [UpdraftPlus](https://wordpress.org/plugins/updraftplus/)

[![UpdraftPlus WordPress Backup Plugin](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/backup-plugins-updraftplus-1-800x315.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/backup-plugins-updraftplus-1.png)

UpdraftPlus is probably the best option available for backing up WordPress without spending any money. I have used it on my own sites and it has worked great so far.

For me, the ability to store backup files to Google Drive or [DigitalOcean Spaces](http://localhost:10003/digitalocean-spaces-review/) is the top reason to choose UpdraftPlus. Many other plugins offer remote storage options in the premium version only.

Apart from Google Drive and Spaces, the free version of UpdraftPlus allows you to choose Dropbox, Amazon S3, or any other [S3-compatible locations](http://localhost:10003/amazon-s3-alternatives/) for remote storage.

[![backing up WordPress using UpdraftPlus](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/backup-plugins-updraftplus-2-800x366.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/backup-plugins-updraftplus-2.png)

|UpdraftPlus Overview|   |
|---|---|
|Free Version available||
|Premium Pricing|$70 - $195|
|Installations (free version)|3M+|
|Rating|4.8/5|
|Features|   |
|Scheduled backups||
|Remote Storage|Free - FTP, S3 & similar,  <br>Dropbox, Dreamobjects,  <br>Rackspace, Google Drive  <br>  <br>Pro only - Azure, SFTP,  <br>OneDrive, Google Cloud, Backblaze|
|Restore||
|Migration|Premium/Addon|
|Partial Backups||
|Incremental Backups|Premium/Addon|

#### **UpdraftPlus Premium**

Apart from the much powerful free version, UpdraftPlus comes with three tiers of pro versions. The price starts at $70 for two sites. In addition to these, you can also buy individual features as add-ons which cost much less.

These are the important features available in the premim plugin:

- Incremental backups
- Site migration to a new domain (automatically replaces the domain in the database)
- Ability to select multiple remote storage locations
- Multi-site support
- Auto-backups before WordPress updates

### 2. [Backup Guard](https://wordpress.org/plugins/backup/)

![backup guard wordpress plugin](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/05/backup-guard-may-2021-1.png)

[Backup Guard](https://wordpress.org/plugins/backup/) is another popular website backup and restoration solution that offers a cloud-based solution as well as a stand-alone plugin.

Earlier, Backup Guard used to offer the migration feature also in the free version. But when I checked it the last time, migration has moved to the Pro package.

On the other hand, free BackUpGuard allows you to store backups remotely on Dropbox only. If you want the ability to upload to Google Drive, S3 or others, you have to purchase a premium license.

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/05/backup-guard-interface-2-1080x478.png)

|BackUpGuard Overview|   |
|---|---|
|Free plugin||
|Premium Pricing|Plugin: $25 - $99  <br>Cloud: $9.95 - $99.95/mo|
|Plugin Installations|70k+|
|Rating|4.54/5|
|Features|   |
|Scheduling||
|Remote Storage|Free - Dropbox  <br>  <br>Paid options - SFTP, Google Drive  <br>Amazon S3, OneDrive|
|Restore||
|Migration|Pro only|
|Partial Backups||
|Incremental Backups|Available in Cloud  <br>Not in plugin|

#### **BackUpGuard Premium**

The price of the plugin is around $25 for two websites, which is almost half the price of UpdraftPlus.

#### **Cloud-based Backup for any CMS or Website**

In addition to the plugin, they also have a cloud storage service, which can backup any type of website, be it WordPress or not. The service connects to your website via FTP (for files) and MySQL (for the database). The incremental backup feature is available only in the cloud solution, not in the plugin. The starting price is $9.95/mo for 10GB of storage.

### 3. [BackWPup](https://wordpress.org/plugins/backwpup/)

[![backwpup - wordpress backup plugin](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/backup-plugins-backwpup-1-800x254.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/backup-plugins-backwpup-1.png)

In the first look, the dashboard of BackWPup doesn't look that intuitive as that of the other plugins. You have to set Jobs for each type of backup (full, partial, or database) you want to take. After that, you can run these jobs manually or at scheduled intervals.

However, the free plugin does not include the restoration feature. You have to do that manually when you need it. That can be a deal-breaker if you are not a technically-inclined person.

![backwpup plugin dashboard](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/backup-plugins-backwpup-2-800x407.png)

|BackWPup Overview|   |
|---|---|
|Free plugin||
|Premium Pricing|$69 - $349|
|Plugin Installations|600k+|
|Rating|4.43/5|
|Features|   |
|Scheduling||
|Remote Storage|Free - FTP, Dropbox, S3, Azure, Rackspace  <br>  <br>Pro only - Google Drive, Amazon Glacier|
|Restore|Premium feature|
|Migration||
|Partial Backups||
|Incremental Backups||

#### **BackWPup Premium**

The premium plugin offers one-click restores along with a variety of other features, including:

- Store on Azure, S3, Dropbox, Google Drive, Amazon Glacier or SFTP
- Backup Encryption

### 4. [WP Time Capsule](https://wordpress.org/plugins/wp-time-capsule/)

[![wp time capsule - incremental backup plugin for wordpress](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/backup-plugins-wptimecapsule-2-800x609.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/backup-plugins-wptimecapsule-2.png)

WP Time Capsule is a premium-only plugin. While most of the other plugins in this list focus on taking full-site backups, this plugin focuses only on **incremental and real-time backups** over traditional backups.

Let's see the advantages of incremental backups. Imagine your site's size is around 1GB when you first take a full backup. You update your site daily by adding images and content. So it keeps growing day by day.

If you perform daily backups, within one month, your archive will be more than 30GB. Thus, you can run out of space quickly. That's why most plugins allow you to set the number of backups you want to retent.

_The disadvantage? You have fewer restore points in case you want to switch the site to a previous state._

In contrast to this, real-time and incremental backup solutions like WP Time Capsule take a snapshot of the full site only once. From there, it will store only the changes. For example, if you upload an image, the plugin saves just that change into the archive. This allows you to keep a much longer backup archive without running out of space.

_The disadvantage? you have to depend on the same plugin to perform restoration. Whereas with plugins like UpdraftPlus that takes simple file backups, you can even do the restoration manually._

![wp time capsule archive calendar](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/backup-plugins-wptimecapsule-1-800x360.png)

|WP Time Capsule Overview|   |
|---|---|
|Free plugin||
|Premium Pricing|$49 - $199|
|Scheduling||
|Remote Storage|FTP, Dropbox, S3, Google Drive, Wasabi|
|Restore|Upto 365 days of backup archive|
|Migration|One-click staging available|
|Incremental Backups||

Currently, WP Time Capsule allows you to store backups on Dropbox, S3, Google Drive, [Wasabi](http://localhost:10003/wasabi-storage-review/), or Backblaze.

### 5. [WPBackItUp](https://wordpress.org/plugins/wp-backitup/)

![wpbackitup](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/backup-plugins-wpbackitup-2-800x251.png)

WPBackItUp is another free plugin which offers a simple interface for backing up your site.

The plugin creates a compressed Zip archive of your entire website. For it to work, ensure that you have the **Zip PHP extension** enabled on the web host. Otherwise, the backup process will encounter an error.

Since the free version is so basic, it lacks features like restore, migration, cloud storage, and scheduling.

The premium version comes with all these features though. However, it still lacks incremental backups. Apart from Dropbox, storage options are also limited.

![wpbackitup admin](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/backup-plugins-wpbackitup-1-800x450.png)

|WPBackItUp Overview|   |
|---|---|
|Free plugin||
|Premium Pricing|$79 - $199|
|Scheduling|Premium|
|Remote Storage|Pro - Dropbox|
|Restore|Premium|
|Migration|Premium|
|Incremental Backups||

So, unless you are looking for a simple solution, there are better options than WPBackItUp.

### 6. [Duplicator](https://wordpress.org/plugins/duplicator/)

[![duplicator wordpress plugin](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/backup-plugins-duplicator-1-800x251.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/backup-plugins-duplicator-1.png)

Duplicator is a complete WordPress **cloning and migration** tool with over 1 million active installations. It is often the best choice when you want to move a site from one host to another or from one domain to another.

A migration plugin in effect can act as a backup tool as well. So, if you use Duplicator, you may not need to look for another plugin when you want to move your site.

While backing up, Duplicator creates two files - an **installer** and a zipped **package**. The installer helps to restore the site on the current location or somewhere else. The package contains your complete website. Again like WPBackItUp, the plugin needs zip module active on your host. If that is not possible, it offers DupArchive compression also.

To restore or migrate, upload both the installer and packages using FTP or cPanel to the directory where you want to install your site. Then run the installer.php file from a browser (eg., mysite.com/installer.php).

|Duplicator Overview|   |
|---|---|
|Free plugin||
|Premium Pricing|$69 onwards|
|Scheduling|Premium|
|Remote Storage|Free - None  <br>Pro - S3, Dropbox, Google Drive,  <br>OneDrive, SFTP|
|Migration/Restore||
|Incremental Backups||

On some budget hosts, the backup may fail due to timeout settings on the server. So I do not recommend using free Duplicator with medium or large sites on cheap shared hosts. However, remember that this can happen with any backup or migration plugin when trying to create big archive files. So, the problem is not specific to Duplicator.

#### **Duplicator Pro**

Since the free version does not have many features, you will have to buy Duplicator Pro to schedule backups and save to remote cloud storage.

In addition to these, the Pro version also supports multi-threading, which may ease the process of migrating large websites and databases.

### 7. [BlogVault](https://blogvault.net/)

[![BlogVault](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/backup-plugins-blogvault-1-800x645.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/backup-plugins-blogvault-1.png)

BlogVault is very much similar to WP Time Capsule as it takes incremental backups instead of creating full-site archives, but only in the premium version. So, you can be almost sure that failures won't occur as in the case of Duplicator.

With this plugin, your site is in sync with BlogVault's servers. On the flip side, you cannot select other cloud services like Dropbox for syncing. So you have to trust them with your backups.

|BlogVault Overview|   |
|---|---|
|Free plugin||
|Premium Pricing|$89/yr onwards|
|Scheduling||
|Remote Storage|BlogVault storage|
|Restore|90 or 365 days|
|Migration||
|Incremental Backups||

Starting from $89/yr, the price is a bit on the expensive edge. Month-to-month billing is also available. Since they offer a free trial, you can try and make sure it is the right choice before buying.

The Basic and Plus plans give 90 days of backup archive while the high-end Advanced plan gives 365-day archive with real-time syncing.

### 8. [VaultPress](https://vaultpress.com/)

[![vaultpress](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/backup-plugins-vaultpress-1-800x248.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/backup-plugins-vaultpress-1.png)

ValutPress is a part of JetPack, created by Automattic, the company behind WordPress.Com.

So, in order to use VaultPress, you have to buy a JetPack subscription. That is an advantage and a disadvantage. If you currently use JetPack, you might find this useful. On the other hand, if you don't want to use JetPack, you can't buy VaultPress alone. According to [this support thread](https://wordpress.org/support/topic/vaultpress-discontinued/), they also plan to integrate VaultPress completely into JetPack and deprecate the standalone feature.

_Update: VaultPress is now integrated into JetPack._

|VaultPress Overview|   |
|---|---|
|Free plugin||
|Premium Pricing|$39 onwards|
|Scheduling||
|Remote Storage|VaultPress storage|
|Restore|30 days to unlimites|
|Migration||
|Incremental Backups||

Just like BlogVault and WP Time Capsule, VaultPress is also a premium-only plugin which takes incremental backups. The price starts at $39/year for the Personal license. It includes scheduling daily backups.

JetPack Business starts at $99/year and includes malware scanning and protection.

To back up in real-time, you have to go for the highest plan which also offers unlimited days of backup archive.

### 9. [BackupBuddy](https://ithemes.com/purchase/backupbuddy/)

[![backupbuddy](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/backup-plugins-backupbuddy-1-800x284.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/backup-plugins-backupbuddy-1.png)

BackupBuddy is a premium offering from Ithemes, the creators of the popular Ithemes Security Plugin.

The plugin offers two types of backups:

- Traditional - normal full-site snapshots from your server.
- Stash Live - real-time syncing without stressing your server.

With their Stash Live feature, you can take automatic real-time backups and sync with BackupBuddy Stash storage. Each purchase comes with free 1GB of storage, which may not be sufficient for large websites. Also, you cannot use other cloud storage providers to sync with Stash Live. This is a bit limiting in my opinion. On top of that, if you want more storage, you have to buy additional storage space from Ithemes.

|BackupBuddy Overview|   |
|---|---|
|Free plugin||
|Premium Pricing|$80 onwards|
|Scheduling||
|Remote Storage|Real-time - Stash Storage Only  <br>Traditional - Google Drive, Dropbox, S3 and more|
|Restore||
|Migration||
|Incremental Backups|With Stash Live|

5GB of storage costs $35 per year while the plugin itself is $80 for one site. So, BackupBuddy is a bit pricier, but still a solid option.

### 10. [ManageWP](https://managewp.com/)

![managewp backups](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/backup-plugins-managewp-backup-2-800x203.png)

ManageWP is not really a backup plugin. Instead, it is a great solution to manage multiple WordPress websites from a single dashboard. It offers one-click plugin and theme updates across all of your connected sites.

In fact, it works off-site without the need to install a plugin. You just have to connect your site with their service by providing the credentials. If you are not sure about giving out your site password and username, you can install ManageWP's Worker plugin, which in turn generates a unique connection key.

I have been using it for a while to manage my own sites. The experience have been smooth so far.

All the basic features are free for any number of sites, which includes backups also. The highlights are:

- Free monthly backups
- Remote/off-site storage on S3 for 90 days, owned by ManageWP
- Easy restoration and cloning

If you want daily or more frequent backups, you can buy the premium backup feature for $2 per month for one website. Still, it is very much affordable. I have only tried the free backup feature, which is sufficient for sites that are not updated frequently.

|ManageWP Backup Overview|   |
|---|---|
|Free version||
|Premium Pricing|$2 onwards|
|Scheduling||
|Remote Storage|Free - Off-site storage provided by ManageWP  <br>Premium - Google Drive, Dropbox, S3, OneDrive ($0.13/GB)|
|Restore||
|Migration||
|Incremental Backups|With Premium|

[![managewp backup interface](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/backup-plugins-managewp-backup-1-800x397.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/backup-plugins-managewp-backup-1.png)

So, if you own or manage a large number of WordPress sites (your's or client's), ManageWP can save you a lot of time. Without depending on another plugin, you can securely take backups with it.

## Conclusion

So far, we have discussed some of the top plugins available in the WordPress ecosystem to securely backup your site. Still, if you are confused to choose one, here are my three picks.

- **UpdraftPlus** - feature-rich free version & great premium plans
- **WP Time Capsule** - for incremental backups
- **ManageWP** - for multiple sites

If you ask me to select the best free backup plugin, it is UpdraftPlus. Why? Because it has the most options for free. Moreover, the plugin has worked without any glitch on several less powerful shared hosts like Godaddy and Bluehost.

For frequent incremental backups that do not stress your server, WP Time Capsule offers the best value for money.

And finally, for managing tens of sites, ManageWP backups comes handy without relying on other plugins.

_Coming back to you, if you could not find your favorite plugin in the list, feel free to mention it in the comments. I'll take a look at it also._