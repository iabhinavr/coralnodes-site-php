---
title: 'How to Set Up Click Tracking in Google Analytics with Tag Manager'
date: '2019-05-26 15:47:09'
modified: '2019-05-26 15:45:43'
slug: set-up-click-tracking-google-analytics-tag-manager
categories:
    - marketing-analytics
tags: {  }
featured_image: 2019/05/track-link-clicks-featured-1.png
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. You know that Google Analytics helps to track the number of visitors or page views your website receives in a timeframe. However, this tool can do a lot more than that. Event tracking is an example. In this article, we will touch the basics of setting up click tracking in Google Analytics. Events refer to the interactions your visitors make while they are on your web page. Here are some of the most…'
yoast_seo_title: '%%title%% %%page%%'
yoast_meta_description: 'Guide to set up click tracking in Google Analytics using Tag Manager without writing code. Important things to know for tracking events using GTM.'
cn_related_posts:
    - basics-of-google-tag-manager-for-beginners
    - how-to-set-up-google-analytics-website
---
You know that Google Analytics helps to track the number of visitors or page views your website receives in a timeframe. However, this tool can do a lot more than that. Event tracking is an example. In this article, we will touch the basics of setting up click tracking in Google Analytics.

Events refer to the interactions your visitors make while they are on your web page. Here are some of the most common examples of event:

- **Click events**
- Form submissions
- Scrolling
- Ajax events

For example, clicking on a menu item is a click event while submitting a contact form emits a form submission event.

This guide assumes that you have already set up Google Analytics using Tag Manager on your site. If you haven't, I suggest you read the following guides:

- [How to Set Up Google Analytics on a Website](http://localhost:10003/how-to-set-up-google-analytics-website/)
- [Basics of Google Tag Manager for Beginners](http://localhost:10003/basics-of-google-tag-manager-for-beginners/)

## Where Event Reports Appear in Google Analytics

Event reports appear under the _Behavior_ tab in Google Analytics. The overview section gives a quick summary of all the events you are tracking, along with a timeline graph.

![Google Analytics Event Reports](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/05/ga-events-1.png)

Below that, you can also see the pages from which the events occurred. This is good to gain insights about the top pages that drive user interaction.

Finally, the _Event Flow_ tab shows chains of interactions users make while on your site. You can use this to find out the points at which drop-outs occur and make necessary changes.

## Setting Up Click Tracking in Google Tag Manager

If you install the Analytics code directly using the Global Site Tag (gtag.js), you have to write custom Javascript code to set up event listeners. But with Tag Manager, you can set up all these from a web interface without touching the code. That's one main reason to implement Tag Manager, especially if you are not a developer.

GTM collects the click events as it occurs and send the data to Analytics.

_The main steps involved in setting up click tracking are:_

1. **Enable the built-in click variables in GTM (if not already enabled)**
2. **Set up the click trigger for the element you want to track.**
3. **Create a Universal Analytics Tag (event type) in GTM and attach it to the trigger.**

### All Elements vs Just Links

GTM has two types of built-in triggers for detecting click events:

1. **All Elements**
2. **Just Links**

The first one allows you to track clicks on any HTML element like _button, div, span,_ etc. It works for links as well although not meant for that.

The second type - Just Links - is meant to track clicks on HTML _anchor_ elements only. So if you want to track link clicks, this one is more appropriate.

## Example #1 - Tracking an Element Click

Suppose you have a button on your site which opens a contact form in a lightbox. You have to track the clicks on that button. Let's see how to do that.

![Click tracking in Google Analytics using Google Tag Manager](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/05/click-tracking-1-1024x314.png)

### Step 1 - Creating the Trigger

In this case, the element we want to track is not an anchor (link) element. So, we have to select the All Elements trigger type.

![Click tracking in Google Analytics using Google Tag Manager](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/05/click-tracking-2-962x1024.png)

Since we are tracking the clicks on a particular element, select the _Some Clicks_ option. Now, we have to specify the criteria to match that element. For that, there are three fields to match the click variable with our expression.

In this example, we use the following settings:

- Variable - _Click Element_
- Operator - _matches CSS selector_
- Expression - _.get-quote button_

![Click trigger in Google Tag Manager](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/05/click-tracking-3-1024x391.png)

Note that, GTM also offers several other options for the Variable and Operator fields. So, select one according to the element you want to match.

![Click Trigger in Google Tag Manager](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/05/gtm-event-variables-operators-1.png)

That's it. Finally, give the trigger a proper title (e.g., CTA Click Trigger) and click Save. Now let us move on to create the Tag.

### Step 2 - Setting up GA Tag

The trigger we have set up in the previous step has no use if it has no tags attached to it. Tags work like an intermediary which send our data to third party tools like Google Analytics.

![Click tracking in Google Analytics using Google Tag Manager](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/05/click-tracking-tag-1-892x1024.png)

Click the _New_ button from the Tags page. Now select _**Google Analytics - Universal Analytics**_ as our Tag Type. This is one of the built-in tag types available in GTM.

The GA tag type requires you to select the _Track Type_. Since we are tracking an event, select **Event** from the drop-down list.

The next step is to fill up the Tracking Parameters. This involves mainly the following fields:

- **Category**
- **Action**
- **Label**

These three parameters act as the _Primary Dimension_ choices in GA's event reports with the event category appearing as the default.

Generally, the category helps to group similar events together whereas the action denotes the particular interaction the user has made, such as click, download, etc. There are no strict rules in specifying the values of these parameters. So, give sensible values for each.

After filling the three parameters, select the **Google Analytics Settings** variable. You might have already created the variable when you set up the page view tracking.

Finally, under the _Triggering_ section, choose the trigger we have created in the previous step.

After giving our tag a proper title, click the Save button.

### Step 3 - Previewing & Publishing

Always preview the changes before hitting the _Publish_ button. This ensures that all the tags are firing correctly.

## Example #2 - Tracking a Link Click

Suppose you want to track the clicks on a telephone link. All the steps are similar to that of the above example except for setting the trigger. So, let us look that in detail.

![Click tracking in Google Analytics using Google Tag Manager](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/05/link-click-tracking-1.png)

Start by creating a new trigger like the one above. As you reach the point of selecting the trigger type, choose _Just Links_ instead of _All Elements._ The remaining steps are similar.

![Click tracking in Google Analytics using Google Tag Manager - Setting up Tag](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/05/link-click-trigger-1-1024x468.png)

With this option, you have two additional settings at your disposal:

1. _Wait for Tags_ - delays opening the links for a specified time so that the tags get enough time to fire.
2. _Check for Validation_ - Tags fire only for valid clicks.

In most cases, you can keep these options unchecked.

Remember that _Just Links_ works for direct links as well as link elements with other elements nested inside it.

That means, if you have an image inside a link, you should still use the Just Links option. When someone clicks the nested image, the [event bubbles](https://javascript.info/bubbling-and-capturing) upwards to find the wrapping link and fires the trigger.

On the other hand, if you use the All Elements trigger, the click won't be fire the trigger as the clicked element is the image, not the wrapping link.

## Wrapping Up

Now you understand that setting up click tracking is not that overwhelming as it may look at first.

Deciding between links and other elements is the crucial step here. That's the only step you can get confused. However, if you have a basic understanding of HTML tags, you can get this easily. When in doubt, use Chrome's inspection tool to see how the element is placed inside the page's HTML.

I hope the post was helpful. If I am unclear or wrong in some steps, let me know in the comments.