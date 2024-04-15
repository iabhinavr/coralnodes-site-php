---
title: 'How to Migrate WordPress from Localhost to Live Server: Step-by-step Guide'
date: '2020-08-07 11:14:43'
modified: '2021-12-24 22:22:28'
slug: migrate-wordpress-from-localhost-to-live
categories:
    - wordpress
tags:
    - wordpress-tips
featured_image: 2020/08/wordpress-local-to-live-featured-1.jpg
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. In this post, I will show you how to migrate a WordPress website from localhost to a live server. If you have your site developed on your local machine and want to upload it, this post will help you. To do this migration, we will be using the UpdraftPlus plugin. By default, the free version supports only Backup and Restoration. That means, it doesn&rsquo;t support migrations, which involve changing site URLs. But I…'
yoast_seo_title: 'How to Migrate WordPress from Localhost to Live Server: Complete Steps'
yoast_meta_description: 'Step-by-step guide on how to migrate a WordPress site from localhost to a live server, using the free UpdraftPlus & how to search & replace database'
cn_related_posts:
    - essential-settings-after-installing-wordpress
    - prevent-wordpress-xml-rpc-attacks
    - best-caching-plugins-wordpress
---
In this post, I will show you how to migrate a WordPress website from localhost to a live server. If you have your site developed on your local machine and want to upload it, this post will help you.

To do this migration, we will be using the UpdraftPlus plugin. By default, the free version supports only Backup and Restoration. That means, it doesn't support migrations, which involve changing site URLs. But I will show how you can manually search and replace the database before uploading the files to the remote host.

Earlier, I had tried some dedicated migration plugins like All-in-one WP Migration and Duplicator. But since I faced some issues with these plugins on some web hosts, I decided to resort to UpdraftPlus.

There is another reason I stick with UpdraftPlus. All-in-one WP Migration uses proprietary file formats for the export files, whereas Updraftplus uses normal Zip & Gzip files. So you can open it and view it anywhere.

## 1. Pre-requisites

Before starting this guide, make sure you have the following two things ready:

- **A local WordPress installation on your machine:** It's obvious, that's what we're discussing. Also, you can use any localhost environment such as XAMPP, WAMP, MAMP, etc.
- **A vanilla WordPress installation on your remote host:** Make sure you have a clean installation of the latest WordPress on your remote host. The steps vary from one web host to another. For this guide, I am moving the site to a Dreamhost shared server, which came with WordPress pre-installed. Check your hosting provider for more information. Most web hosts offer one-click WordPress installations.

## 2. Start Localhost & Login to WP Admin

Here I am using Xampp for the localhost. So the first step is to open the Xampp Control Panel and start the Apache & MySQL services.

- See also: [How to Install WordPress on Localhost](http://localhost:10003/how-to-install-wordpress-on-localhost/)

[![start localhost](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/start-localhost-wp-localhost-to-live.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/start-localhost-wp-localhost-to-live.png)

Here is the local site we want to migrate to the server. It's just a demo site running Astra theme and Elementor with some dummy content.

[![local site - how to migrate wordpress from localhost to live server](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/0-local-site-wp-localhost-to-live-1080x596.jpg)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/0-local-site-wp-localhost-to-live.jpg)

Then login to your local WordPress site.

[![login to local wordpress site](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/login-to-local-wp-localhost-to-live-1080x540.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/login-to-local-wp-localhost-to-live.png)

go to _yourlocalsiteaddress/wp-login.php_

## 3. Install UpdraftPlus Plugin on Local Site

After logging in, Go to **Plugins > Add New** in your WordPress admin. Search for **UpdraftPlus** on the top right corner. Then install and activate the plugin.

[![install and activate updraftplus locally](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/install-updraftplus-local-wp-localhost-to-live-1080x352.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/install-updraftplus-local-wp-localhost-to-live.png)

## 4. Create & Download Backup Files

After installing and activating UpdrafPlus, you will see a new menu item - **UpdraftPlus Backups** - below the **Settings** menu. Open it and there you can see the options to backup and restore the site.

Next, click on the **Backup Now** button to take a full-site backup, which will backup the following things:

- Database (gzipped SQL file)
- Themes (zip)
- Plugins (zip)
- Uploads (zip)
- Other files (zip)

[![backup site using updraftplus](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/32-local-backup-now-wp-localhost-to-live-1080x568.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/32-local-backup-now-wp-localhost-to-live.png)

[![updrafplus backup in progress](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/35-backupinprogress-wp-localhost-to-live-1080x327.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/35-backupinprogress-wp-localhost-to-live.png)

Once it is complete, you can find the files under the **Existing backups** section.

[![](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/40-backup-complete-wp-localhost-to-live-1080x290.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/40-backup-complete-wp-localhost-to-live.png)

Click each of them one by one and download it a suitable location.

_If you are thinking about why you want to download (it's a local site), you are right. The backups are there in the wp-content folder of your wp installation. But we are doing it just to make it more clear._

[![download backups to computer](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/43-download-to-computer-wp-localhost-to-live-1080x286.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/43-download-to-computer-wp-localhost-to-live.png)

[![save to a suitable destination](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/44-save-to-folder-wp-localhost-to-live-1080x559.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/44-save-to-folder-wp-localhost-to-live.png)

don't change the filenames

Also, don't change the filenames as UpdraftPlus requires the filenames to be in this format. Otherwise, it may not recognize the backups when we try to restore it on the other site.

![downloaded backup files](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/50-backups-downloaded-wp-localhost-to-live-1080x607.png)

downloaded backup files

## 5. Extract Database Gzip File

As I had said in the introduction, the free version of UpdraftPlus does not support migrations. So we have to manually search and replace the URLs in the database backup before uploading.

Since the database backup is a normal SQL file compressed in gzip format. If you're on windows, you can download the [7zip](https://www.7-zip.org/) program to extract the Gzip file.

[![extract gzipped database file](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/51-extract-db-gz-file-wp-localhost-to-live-875x1080.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/51-extract-db-gz-file-wp-localhost-to-live.png)

## 6. Search & Replace URLs

As we have extracted the SQL file, we want to open it in a text editor. Even the default Notepad can also work, but it will be better if you use an editor that supports bulk search and replace. Here I will use Visual Studio Code.

[![open database sql file](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/55-open-extracted-db-wp-localhost-to-live.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/55-open-extracted-db-wp-localhost-to-live.png)

![open sql in vscode](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/56-open-with-vscode-wp-localhost-to-live.png)

On VSCode Windows, press **Ctrl+H** to open the **Search & Replace** dialog. Enter the **local site URL** in the first field and your **remote site URL** in the second. Then press bulk replace button on the right side.

[![vscode search and replace URLs](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/57-db-search-replace-wp-localhost-to-live-1080x431.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/57-db-search-replace-wp-localhost-to-live.png)

Save the edited database file and close the editor.

## 7. Re-compress Database File

Now, we have to recompress the edited db file. Remember the following things:

- delete the old .gz file
- right-click the new uncompressed file & select gzip format
- retain the original file name with the .gz extension.

![recompress db file](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/58-rezip-new-db-wp-localhost-to-live.png)

![select gzip compression format](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/59-select-gzip-format-wp-localhost-to-live.png)

![compression in progress](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/60-compressing-new-db-wp-localhost-to-live.png)

![recompressed db file](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/65-new-compressed-db-wp-localhost-to-live.png)

After compressing, you can delete the uncompressed file.

## 8. Login to Remote Site

Hope you already a domain and a web host with WordPress installed on it. Now it's time to login there.

![login to remote site](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/70-login-to-remote-site-wp-localhost-to-live-1080x700.png)

## 9. Install UpdraftPlus on Remote Site

As you have done earlier on the local site, install Updraftplus on the live site as well. Go to Plugins > Add New, and search for 'updraft'.

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/75-install-updraftplus-remote-wp-localhost-to-live-1080x291.png)

## 10. Import the Backups

Next, go to the settings page. Under the existing backups section, click 'upload backup files'. Then upload the files we have created just before.

[![upload backup files to updraftplus](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/80-upload-backup-files-wp-localhost-to-live-1080x307.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/80-upload-backup-files-wp-localhost-to-live.png)

[![select all files and upload](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/85-select-all-backup-files-wp-localhost-to-live.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/85-select-all-backup-files-wp-localhost-to-live.png)

select all the files & upload them

![upload in progress](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/86-upload-in-progress-wp-localhost-to-live.png)

files being uploaded one by one

## 11. Restore the Backup

Once the upload is complete, you will see the newly uploaded files at the bottom, along with the date and actions. Check the box against it and click 'Restore'.

![select the backup data and click restore](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/87-select-restore-wp-localhost-to-live-1080x300.png)

![select restore components](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/88-updraftplus-restoration-wp-localhost-to-live.png)

check all the components

![ignore warning and click Restore](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/89-upadraftplus-restoration-2-wp-localhost-to-live.png)

you might see warning if there's a difference in PHP versions. In most cases, you can ignore it.

![restoration in progress](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/90-updraftplus-restoration-3-wp-localhost-to-live.png)

restoration in progress

![restoration successful](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/95-restore-successful-wp-localhost-to-live.png)

restoration finished - go back to admin

After the restoration is complete, you might be prompted to login again.

_Note: you have to use the local site's username and password._

![login again after restoration](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/100-remote-login-again-wp-localhost-to-live-1080x658.png)

So, we have successfully migrated the local site to a live server.

## 12. Check for Broken Links or Images

![site migrated successfully from localhost to live server](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/120-moved-site-wp-localhost-to-live-1080x586.jpg)

Although we have done a search & replace, it changed the URLs in the database only. So, if you have any hardcoded links in any theme files or CSS files, it can result in broken images and links.

- replace hardcoded links in themes & CSS files
- regenerate CSS files generated by page builders like Elementor
- purge any cache (purge Cloudflare cache as well, if you're using it

For example, here I was using Elementor to build the pages. Since Elementor uses custom CSS files to store design data, it contained links to background images that pointed to the old URL.

To fix that, go to Elementor > Tools > Replace URLs and change the URLs. After that, go to the first tab and regenerate the files.

## Wrapping Up

Hope it helped you to take your site live from localhost. You can use the same methods to move a WordPress site from anywhere, not just localhost. If you found any steps confusing, please comment it below.