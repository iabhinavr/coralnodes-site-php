---
title: 'HTTP Status Codes: A Guide for  Beginners [with Infographic]'
date: '2021-09-17 01:00:50'
modified: '2022-01-24 12:36:08'
slug: http-status-codes
categories:
    - fundamentals
tags: {  }
featured_image: 2021/09/http-status-codes-featured-image-1.jpg
excerpt: 'Learn about the different HTTP status codes you encounter on the internet - success, error, redirections, and informational'
yoast_seo_title: '%%title%% %%page%%'
yoast_meta_description: 'Learn about the different HTTP status codes you encounter on the internet. Success codes, error codes, redirections. Includes infographic.'
cn_related_posts:
    - http-security-headers
    - create-redirects-wordpress
    - how-the-internet-works
    - a-brief-history-of-the-internet
---
You might already know that HTTP (Hypertext Transfer Protocol) is the protocol governing the World Wide Web.

Servers and clients follow that while communicating with each other. Clients send **HTTP requests**, for which the server responds with appropriate **HTTP responses**. We had discussed all these in a previous article on [how the internet works](http://localhost:10003/how-the-internet-works/).

Along with the HTTP response, the server also sends a **numeric status code**. This makes it easier for the client to identify the type of response it has just received. Whether it is a success, error, or something else.

As a web user, understanding the meaning of these codes helps you to quickly troubleshoot problems when something occurs.

You might also like:

- [What are HTTP Security Headers?](http://localhost:10003/http-security-headers/)
- [How to Create Redirects in WordPress?](http://localhost:10003/create-redirects-wordpress/)

So in this article, we will discuss all the important codes, as well as how to check them.

## How to Check the Status Code of a Resource

First of all, let us see how you can check the response code for a typical web page.

### Method 1: Using a Browser

If you are using a browser like Google Chrome or Mozilla Firefox, then it is quite straightforward.

In Chrome, right-click > _Inspect_ to open the _Developer Tools_. Then go to the _Network_ tab. Press _Ctrl+R_ or refresh the page.

Then you will find a list of all the requests for that page, along with the details of each. At the top, you can filter results by type - CSS, JS, Fonts, Doc, etc.

Clicking on any request opens a details pane on the right, where you can find all the request and response headers. Go to _Headers > General_, and there you can find the _Status Code_ for that resource.

_I think this quick video will help you to understand it better._

<div><div style="position: relative; padding-top: 53.383458646616546%;"><iframe src="https://iframe.mediadelivery.net/embed/670/60b1cce2-4ca8-4c46-b033-b710c47761bf?autoplay=false" loading="lazy" style="border: none; position: absolute; top: 0; height: 100%; width: 100%;" allow="accelerometer; gyroscope; autoplay; encrypted-media; picture-in-picture;" allowfullscreen="true"></iframe></div></div>

### Method 2: Using cURL Command

If you are using Mac or Linux, then you can easily check the status codes and response headers from the command line.

Open the terminal and run the following command:

```
curl -I urlofthepage
```

![checking HTTP status code using curl command](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/09/check-status-code-cli-1.gif)

Note that in the above command, I added the **-I flag**, which tells that it is a **HEAD request**. Unlike a normal GET request, a HEAD request shows only the response headers, without the body of the response.

Then there are also online tools like [httpstatus](https://httpstatus.io) that give a detailed analysis, including redirect chains if there are any.

## 5 Categories of Response Codes

In the above request, you can see that we got a 200 response code. That means it is a success.

But, 200 is only one of the many different success codes. There are five categories of codes that you need to know:

- **1xx**
- **2xx**
- **3xx**
- **4xx**
- **5xx**

Let's look at each of these categories:

### 1xx: Informational codes

These codes start with the digit '1'. They are intermediate responses, which means the request-response cycle is not complete. So it's neither success nor error.

### 2xx: Success Codes

Success codes start with the digit '2'. 200 (OK) is the most common, which indicates that the request is successful, and the response is sent with a body. When requesting web pages, the body contains the HTML code.

### 3xx: Redirects

3xx codes indicate a redirect. For example, a site's domain starts with 'www' and you typed the bare domain without the 'www'. The server sends back a redirect response with the status code **301 Moved Permanently**, along with the new URL (with the www in front). The browser can then send another request to the new URL.

The same is used for HTTP to HTTPS redirection.

**304** is another code in this category, which is used for [browser caching](http://localhost:10003/leverage-browser-caching/). It tells the browser to use the cached version of a resource instead of downloading again from the server.

### 4xx: Client-side Error Codes

4xx errors occur when the client (e.g., a browser) makes a mistake.

A common example is the **404 Not Found** error. This happens when you request a page that does not exist. Maybe it got deleted, or you made a typo while entering the URL in the address bar.

### 5xx: Server-side Error Codes

In contrast to a 4xx error, 5xx means the error has occurred due to the server.

A famous example is the **500 Internal Server Error**. It can happen when a server is so overloaded that it cannot handle any further requests for a while.

## Where are these codes defined?

Now you might have several questions in mind.

- _Are there any standards for these status codes?_
- _On what basis do servers issue these codes?_
- _Can you create custom codes?_

As I said in the introduction, the Internet follows certain standards to work smoothly. The **Internet Engineering Task Force (IETF)** is the body that develops and maintains such standards. So, as you guess, status codes are also covered.

The specifications for HTTP status codes were originally defined in [RFC 2616](https://datatracker.ietf.org/doc/html/rfc2616#section-10). An updated document can be found in [RFC 7231](https://datatracker.ietf.org/doc/html/rfc7231). These documents define forty-one codes in total. In addition, some services like Cloudflare issue [custom codes](https://support.cloudflare.com/hc/en-us/articles/115003011431/#524error).

You can also check this [MDN resource](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status) for a more thorough list.

Also, you [can create](https://stackoverflow.com/questions/7996569/can-we-create-custom-http-status-codes) custom codes if necessary. However, you should adhere to the categories mentioned in the specification. In case a client does not understand a custom code, it may default to one of the standard codes in the same category.

## Infographic

I felt there is no point in textually relisting the codes already written in the above sources.

So I decided to create an infographic that will help to better understand the details.

_(click to open a larger image)_

[![](https://coralnodes-files.b-cdn.net/coralnodes.com/infographic-http-status-codes-1-960w.jpg)](https://coralnodes-files.b-cdn.net/coralnodes.com/infographic-http-status-codes-1-original.jpg)

## Wrapping Up

I hope this guide helped you to learn more about HTTP and the internet. In case you find any errors in the above information, please do mention them in the comments.