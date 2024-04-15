---
title: 'Basics of Google Tag Manager for Beginners'
date: '2019-02-16 18:57:26'
modified: '2020-11-15 16:54:35'
slug: basics-of-google-tag-manager-for-beginners
categories:
    - marketing-analytics
tags: {  }
featured_image: 2019/02/basics-of-google-tag-manager-for-beginners.jpg
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. There are generally two types of products, or services, in this world. The first type satisfies a need people know they have. Whereas with the second, the product makes its target users realize a need they are overlooking. The internet is a great example of this. Twenty years ago, common man didn&rsquo;t even know what the internet was. But now, you know how it is. For me, Google Tag Manager belonged to the…'
yoast_seo_title: ''
yoast_meta_description: 'Basics of Google Tag Manager including tags, triggers and events. How to get started with GTM, integrate GTM on a website - a guide for beginners'
cn_related_posts:
    - how-to-set-up-google-analytics-website
    - set-up-click-tracking-google-analytics-tag-manager
---
There are generally two types of products, or services, in this world. The first type satisfies a need people know they have. Whereas with the second, the product makes its target users realize a need they are overlooking. The internet is a great example of this. Twenty years ago, common man didn't even know what the internet was. But now, you know how it is.

For me, Google Tag Manager belonged to the second type.

At first, I didn't understand what a tag manager is, or why I need one. But after playing around with it on my blog, I realized what I was missing. Unless you are a digital marketer, you might also be feeling the same.

So, this article will help you to understand the following

- What is Google Tag Manager?
- Why you may need GTM? What are its advantages?
- How GTM works?
- How to integrate it on your blog/website?

## What is Google Tag Manager?

You know that a web page is made using HTML code. And this HTML contains several tags like paragraphs, images, headings, scripts, etc.

But in the context of a tag manager, we are usually referring to the script tags (and image tags). Most of the analytics tools work by adding a script to the HTML code, which the developers of the tools give us.

For example, when we register our website on Google Analytics, GA provides a script tag called _gtag.js_. Then we have to edit our HTML code to insert this tag to the head section of the website's HTML code. After that, the script starts collecting information and sends it to Google's analytics system for report generation. Facebook Pixel is another example of a third-party tag.

So far, so good. But what if we want to use multiple marketing tools? Each of them will want us to add their tags to our code for it to work. No problem. We can continue to add the tags manually. However, it can quickly become messy. That's where the need for a tag manager comes in. There are a few tools that allow us to do that including paid ones. Google's Tag Manager is a free tool and probably the most popular today.

> In short, Google Tag Manager enables you to add, update and remove popular **marketing and analytics tags** on your website dynamically from a web user interface, thereby eliminating the need for manual code editing.

## Advantages of Using a Tag Manager

Using a tag manager has many advantages when compared to managing tags manually especially if you are a non-coder.

- If you are a non-coder, you don't need to seek the help of a developer each time you want to change a tag.
- Google Tag Manager's user interface makes things like event tracking a lot easier.
- You can integrate many of the popular marketing tags from the user interface without writing a single piece of code. GTM has built-in integration for third-party tags like Hotjar and Crazy Egg.
- GTM loads tags asynchronously which implies that it does not affect page speed much.

## How Google Tag Manager Works - Events, Triggers & Tags

In short, GTM provides a script tag that load all the other marketing tags at appropriate times.

If you are wondering how Google manages the file on your server, it does not. The loading happens in an **asynchronous** manner. The GTM script loads the necessary tags on your user's browser window without touching the files on your server. That's how it eliminates the need for file editing.

For a detailed understanding, you need to know the three main concepts behind GTM.

1. **Events**
2. **Triggers**
3. **Tags**

### Events

Events usually refer to the [browser events](https://javascript.info/introduction-browser-events) that occur when your user takes some action on a web page. For example, when someone clicks a button, it emits a _click event_. Similarly, the browser emits a _load event_ on each page load.

If you are a Javascript coder, you know how to listen to a particular event and fire the callback function.

Fortunately, GTM has built-in features to listen to all such common browser events. So we can perform most event trackings **without writing custom code**.

Example use cases include form-submission tracking, purchase button clicks etc.

- [How to track clicks in Google Analytics](http://localhost:10003/set-up-click-tracking-google-analytics-tag-manager/)

That brings us to the next concept - triggers - which fires when an event occurs.

### Triggers

Triggers in GTM acts like a wrapper to events, which fire in response to a certain event. In other words, triggers are more or less similar to event handlers (callback functions) in Javascript.

The trigger in turn loads the tags attached to it. In that way, triggers connect tags to events.

Currently, GTM provides the following types of triggers:

![trigger types in google tag manager](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/02/google-tag-manager-trigger-types-1.png)

Under the _Other_ section, you can see the option to create a custom event. You can use this to create a trigger that fires when a custom event occurs.

### Tags

The next concept is tags.

A tag refers to the piece of code we have to add to our website. It can be anything like Google Analytics or third-party tags. As of writing this post, GTM offers integration with 72 tags thereby relieving you from the worry of copy-pasting codes and making mistakes.

![tag integrations in google tag manager](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/02/gtm-tag-types.jpg)

Tag integrations in Google Tag Manager

If you cannot find the direct integration for a particular tag, you can always make use of the **Custom HTML** feature. For example, GTM does not offer built-in support for Facebook Pixel. However, you can grab the code from Facebook and paste it into a GTM custom HTML field.

After creating the Custom HTML tag, don't forget to attach it to an appropriate trigger.

## **Start using GTM on your Website**

The first thing you have to do is registering an account. Then create a **_container t_**hat represents the website or app on which you need to install the tag manager.

![Create an account on Google Tag Manager](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/02/google-tag-manager-register-1-777x800.jpg)

GTM then gives you a tag (gtm.js) that you have to add to your website code. It will be the only marketing tag you have to ever add. GTM.js takes care of all the other analytics tag you want to implement afterward.

![Google Tag Manager Workspace](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/02/gtm-workspace-1024x509.png)

Workspace in GTM - Manage all triggers & tags from here

For a detailed example on how to integrate a tag using GTM, read my article on [**installing Google Analytics on a website**](http://localhost:10003/how-to-set-up-google-analytics-website/#method-2).

## Wrapping it Up

So, we have seen what a tag manager is and how it can ease the management of multiple tags. I hope that you got the idea of events, triggers, and how it loads a tag.

If it's your first time, try implementing one of the existing tags in Google Tag Manager way.

Have I missed some key points? Say about it in the comments.