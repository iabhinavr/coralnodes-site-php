---
title: 'How to Prevent WordPress XML-RPC Attacks?'
date: '2019-03-05 02:55:03'
modified: '2021-12-24 22:22:29'
slug: prevent-wordpress-xml-rpc-attacks
categories:
    - security
tags:
    - wordpress-tips
featured_image: 2019/03/disable-xml-rpc-wordpress-featured-1.jpg
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. Do you know that WordPress offers an XML-RPC interface? If you are like the majority of the users, you might not have even heard of it. It&rsquo;s a rarely used feature. Also, it&rsquo;s often a target for Brute force and DDoS attacks as well. If you are using some security plugins like Sucuri or Limit Logins, you might have noticed the word XML-RPC Client mentioned in the list of failed login attempts. That&rsquo;s…'
yoast_seo_title: ''
yoast_meta_description: ''
cn_related_posts:
    - backup-plugins-wordpress
    - best-multi-purpose-wordpress-themes
    - essential-settings-after-installing-wordpress
---
Do you know that WordPress offers an XML-RPC interface? If you are like the majority of the users, you might not have even heard of it.

It's a rarely used feature. Also, it's often a target for Brute force and DDoS attacks as well.

If you are using some security plugins like Sucuri or Limit Logins, you might have noticed the word XML-RPC Client mentioned in the list of failed login attempts. That's how I came to know about this feature.

So, why not disable this feature altogether?

In this post, let us see how you can prevent XML-RPC attacks on a WordPress website.

## Why XML-RPC is a Security Risk?

Before disabling it, let us explore what XML-RPC really is. RPC stands for Remote Procedure Call. In simple words, it enables one system to communicate with another system (server). Just like a browser or a Web API, it also uses the HTTP protocol for communication where the data should be in XML.

As an example, it allows you to log in and publish posts programmatically on your WordPress website without using a browser. All you have to do is to send a proper request with your username and password to the `xmlrpc.php` file located at the root of your WordPress installation.

> The one bulging issue with WordPress' XML-RPC is that it requires you to send your username and password with each request for authentication.

This opens the doors for brute force login attempts. In a brute force attack, the attacker repeatedly sends username and password combinations until the right ones are found. Sending requests repeatedly can result in DDoS if your site goes down due to overload. In contrast, newer APIs use token-based authentication which does not require sending a password over HTTP.

## How to Disable XML-RPC?

To disable it, you can take any of these approaches:

1. Completely disable from the server level using the htaccess file or equivalent.
2. Disable it from the WordPress level using a plugin (receives requests but disables login attacks)
3. Diable manually from the WordPress level using code (receives requests but disables all actions including logins)

### Disable Completely Using HTAccess

If you are not planning to use XML-RPC, denying access completely using a server configuration file is the best method. In the case of Apache, you can block access by adding the following code to your WordPress HTAccess file.

```
# Block all requests to xmlrpc.php file at the root of WordPress
<Files xmlrpc.php>
order allow,deny
deny from all
</Files>
```

I think it is the best method to completely block anyone from accessing the RPC feature, effectively preventing all attacks through this door.

### Using Plugin

[![](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/03/disable-xmlrpc-plugin.png)](https://wordpress.org/plugins/disable-xml-rpc/)

This is a simple plugin with just one line of code. If you don't want to write code just install this plugin and it will disable XML-RPC from the WordPress level.

[Get the Plugin](https://wordpress.org/plugins/disable-xml-rpc/)

_However, remember that it prevents only the requests that require authentication. It can still call functions that don't need logging in._

### Disable Manually

To manually disable XML-RPC from requests, add the following code to a site plugin or your child theme's `functions.php` file. It is the same thing the above plugin also does.

```
add_filter( 'xmlrpc_enabled', '__return_false' );
```

Note that `__return_false` is a WordPress function which returns a boolean false. This filter only prevents operations that require a login. To disable all operations, we have to deregister all methods that the XMLRPC server knows. For that, we have to hook onto the `xmlrpc_methods` filter.

```
function remove_xmlrpc_methods( $methods ) {
    $methods = array(); //empty the array
    return $methods;
}

add_filter( 'xmlrpc_methods', 'remove_xmlrpc_methods' );
```

When the `xmlrpc.php` file receives a request, it creates an object of the class `wp_xmlrpc_server`. This class file resides in the `wp-includes` folder and has a property called methods. The methods property contains an array of function names you can call using an XML-RPC request. If you request a function not listed in that array, it will return an error. So by emptying the array, we can make sure that no functions are available.

Note that the above way will not block requests to the RPC system. Any request can cause WordPress to bootstrap although it will not call the requested function. So _**it prevents brute force login attempts but still vulnerable to DDoS.** So I prefer the htaccess method._

_Have you used XML-RPC before? What do you think about it? Do you prefer it to keep it enabled or disabled?_