---
title: '9 Different Types of Web Hosting - For Websites of any Size'
date: '2021-08-25 22:40:26'
modified: '2022-03-19 20:50:00'
slug: web-hosting-types
categories:
    - hosting
tags: {  }
featured_image: 2021/08/web-hosting-types-featured-1.jpg
excerpt: "Let's learn about the different types of web hosting - explained in simple language, useful for all - beginners and advanced."
yoast_seo_title: '%%title%% %%page%%'
yoast_meta_description: "Let's learn about the different types of web hosting - explained in simple language, useful for all - beginners and advanced."
cn_related_posts:
    - cloudways-vs-kinsta
    - wordpress-hosting
    - domain-registrars
    - free-blogging-sites
    - wordpress-com-vs-wordpress-org-differences-similarities
    - a-brief-history-of-the-internet
    - best-website-builders
    - wix-vs-wordpress
---
Most hosting companies offer various types of hosting services, such as shared, VPS, dedicated, etc.

If you are in the hosting market for the first time, this sheer number of choices can easily confuse you.

That's why I've written this article. Below I will try to explain the different options in layman's language.

Also, note that the boundaries between the different categories of hosting are not always clear. They often overlap in terms of architecture and functionality.

To give you a vague analogy, let me take the example of cameras.

What are the different types of cameras available today? Digital camera, film camera, SLR, point-n-shoot, mirrorless interchangeable lens camera, etc. Right?

A digital camera can be an SLR as well (DSLR). As there are film SLRs, there are film point-n-shoots as well. But an interchangeable lens camera can't be an SLR.

Likewise in the web hosting world, there are multiple ways to categorize things. In this post, we will discuss the most popular hosting types available today.

To begin with, let me briefly explain what web hosting is.

## What is Web Hosting?

There are a couple of terms that you need to know here:

- Web Host
- Web Server
- Client & Server
- Web server software

Generally, the term _**web hosting**_ refers to the _service_ that allows _hosting and serving websites_. It is not the only type of hosting (e.g., [email hosting](http://localhost:10003/email-hosting-providers/)).

When people use the term _web host_, they often refer to the company that is providing the service. For example, Dreamhost is a _**web host**_, Kinsta is another (a.k.a web hosting company, web hosting provider, etc).

_How do hosting companies do it? Also, what is a server? Or web server?_

The web hosting companies have servers connected to the internet. These are not just servers, but web servers. That means these servers are capable of receiving HTTP requests, processing them, and sending responses back to the _**client**_ (e.i, you & me sitting with a web browser).

These servers have special _**web server software**_ running on them, which enables them to respond to HTTP requests. Apache & Nginx are two popular server software used by many web hosts.

When you purchase a hosting plan from a company, you get (limited) access to one of their web servers. On that server, you get a location to install/upload your website files. These files can be images, HTML, Javascript, stylesheets, or even dynamic code like PHP.

The server also has a public IP address. When you point your domain to that IP, people will be able to access your website using that domain.

_Note: In a computer network, any end device is called a host, be it a client or server. But generally speaking, we don't take it strictly. See [this discussion](https://www.quora.com/What-is-the-difference-between-a-web-server-and-a-web-host)._

## Different Types of Web Hosting

## 1. Shared Hosting

As the name suggests, Shared Hosting means you're sharing resources with other customers.

- Multiple customer accounts on the same physical server
- One account can have multiple websites under it
- The underlying operating system is the same
- Shared CPU power, memory, and other resources, although you may get bandwidth and storage allocation

When you purchase a shared hosting plan from a company like Bluehost, you are actually getting a **hosting account**, not an entire web server.

Within that hosting account, you can create websites, users, set up databases, and so on. And to do all such tasks, the hosting company provides a graphical user interface. **cPanel** is an example of one such interface. Some companies like [Dreamhost](http://localhost:10003/dreamhost-review/) and [Hostinger](http://localhost:10003/hostinger-review/) also use custom-developed control panels.

Since you're sharing resources with others, shared hosting is the most economical choice for small websites.

The downside is also obvious. If another user on that server overuse system resources, your sites can become slow.

Another disadvantage is shared IP addresses. If another account gets hacked or infected, the whole IP can get blacklisted. This in turn can affect your sites too. However, many web hosts now allow setting dedicated IP addresses for shared hosting accounts.

**So, is shared hosting secure?**

It depends on the company running it. Good web hosts take necessary measures to isolate one account from another. So one user cannot access the files of another user.

However, if someone gains root access to the operating system, it can compromise all the accounts even if your sites are secure. So, you need to trust the hosting company's capability in providing a secure environment.

So, next, we're looking at VPS, which isolates the operating system as well.

## 2. VPS

VPS stands for **Virtual Private Server**. Like shared hosting, there can be multiple users on the same physical server.

The difference is that, in VPS hosting, the physical server is **divided into multiple virtual machines**. It's made possible using special software called _Hypervisors_, which creates and manages multiple virtual machines.

And each virtual machine runs a separate instance of the operating system, usually a Linux distro like Ubuntu or Centos. The advantage? It gives more isolation than a shared environment.

Also, it is guaranteed that you always have access to your allocated resources, be it memory or CPU cores. So, another VPS on the same server cannot affect your VPS, ensuring **better consistency in performance**.

Also, you get more server-level control, including root access.

- Full control over your virtual machine, with root access
- Can install custom software packages
- Guaranteed system resources
- Separate operating system instance
- Better isolation from other users

The pricing of a VPS hosting package is based on the memory and CPU cores it offers. Comparatively, it is more expensive than shared hosting.

Also, the server maintenance responsibility is on your shoulders. You have to take care of the server's security and updates. If you are not a sysadmin, then this can be a difficult job.

That's why some companies offer **managed VPS hosting**. The price is usually higher, though.

## 3. Dedicated Server Hosting

In Dedicated Hosting, you get full control over an **actual physical server**. You don't need to share that server with any other customer.

You have the freedom to install whatever software you want and configure the server in any way you like.

See also:

- [What is Dedicated Server Hosting](http://localhost:10003/what-is-dedicated-server-hosting/)
- [7 Best Dedicated Hosting Providers](http://localhost:10003/best-dedicated-server-hosting/)

- Full access to a physical machine
- Expensive but powerful
- Dedicated resources
- Best for popular sites/ apps, not for beginners
- Maximum isolation & security
- Pricing based on CPU power, memory, and storage space (almost no restriction bandwidth)

Dedicated servers are capable of hosting multiple high-traffic websites without any slowdowns.

However, this freedom and power cost a premium. The price of a dedicated server is typically in the range of hundreds of dollars per month. For example, a 4GB RAM, 1TB HDD, 4 Core-server from Dreamhost costs you $149/mo.

Again, just like VPS, a dedicated server can also be **managed or unmanaged**. With the latter, you have to perform all the maintenance tasks from the command line using SSH. Whereas managed dedicated servers usually come pre-installed with a control panel. You can also expect maintenance support from the hosting company.

## 4. Cloud (self-managed)

Cloud hosting is one step up from VPS hosting. It also involves virtualization, which means multiple virtual machines are created from physical machines using hypervisors.

On top of that, cloud hosting uses cloud computing software (e.g., Apache Cloudstack, Openstack, etc.) to manage these virtual machines. This approach allows creating a pool of resources. That's why it is called _cloud_.

The advantage? Virtual machines can be created, deleted, or scaled much quicker than a traditional VPS. Downtime is also less since you're not depending on a single physical machine.

That's also the reason why Cloud companies are able to provide pay-as-you-go pricing. For instance, if you have a 2GB EC2 instance from AWS, you can scale it up to 4GB or higher within seconds.

- All benefits of VPS
- Better scalability and reliability
- Pay-as-you-go pricing
- Cheaper than traditional VPS

Amazon AWS, DigitalOcean, Linode, etc are some of the popular cloud server providers.

- See also: [10 Best Alternatives to AWS](http://localhost:10003/aws-alternatives/)

Just like VPS and Dedicated, you need to set up the server and take care of it. For that, you need to know Linux, SSH, and how to secure a server. What does that mean? Either you should be a sysadmin or hire someone who knows how to do it.

That's where **managed cloud hosting** comes in.

## 5. Managed Cloud

With managed cloud hosting, you still get the benefits of the cloud. But you need not worry about server security and maintenance.

Different companies offer managed cloud hosting services in different ways. Some are built on top of other cloud infrastructure providers like AWS and Google Cloud. Whereas some others use their own server infrastructure.

[Liquid Web](http://localhost:10003/go/liquidweb-vps/) is one such managed cloud hosting provider that uses its own infrastructure.

Whereas with [Cloudways](http://localhost:10003/go/cloudways/), you can select between Google Cloud, AWS, DigitalOcean, Linode, and Vultr. They manage everything including server provisioning, software installation, and maintenance, in addition to offering support. While you can focus on your website.

- See also: [12 Best Alternatives to Cloudways](http://localhost:10003/cloudways-alternatives/)

ServerPilot is another one, which is a bit different. You can connect any VPS with it, be it cloud or not.

## 6. Serverless Hosting

Need something more modern & trendy? Meet **Serverless Hosting**.

The term should not confuse you. Serverless doesn't mean there isn't any physical server associated with it. The difference is, you need to worry _less_ about the server. Instead, you can focus more on your application.

If you are new to tech, it might be difficult to wrap your head around these concepts. Also, serverless hosting may not be ideal for all use cases such as hosting a WordPress website, although [it isn't impossible](https://www.serverless.com/blog/serverless-wordpress-hosting-with-shifter).

_Then what's serverless hosting best for?_

Suppose you want to generate thumbnail images on the fly for your web app. As usual, you could do it within a web server as part of your application code.

If image requests increase, you need to scale up the server accordingly.

On the flip side, there can also be periods of time when there isn't any usage (in this case, when nobody is requesting images). But still, you need to pay for your active servers.

Serverless hosting is best for such situations. You can create _functions_ that perform a specific task, host it, and invoke it only when required.

**AWS Lambda** is an example of serverless computing service. [Cloudflare Workers](https://workers.cloudflare.com/) is another.

The platform automatically scales up or down when required. And you need to pay only for code execution. That's why Serverless is often synonymous with [Function-as-a-Service](https://squadex.com/insights/what-is-serverless/amp/).

The term serverless may be a bit [ambiguous](https://techmonitor.ai/techonology/emerging-technology/guide-to-serverless-computing-gartner). But the main advantage is, you need not provision or scale servers as usual. It's all managed by the platform provider.

That brings me to the next type of hosting - **Static site hosting**.

## 7. Static Site Hosting

If you are a little tech-savvy, static site hosting may be the most economical and performant way to host websites and blogs.

Dynamic systems like WordPress involve server-side code, databases, and other complexities. That's why it needs complex servers to run.

In contrast to that, a static site is made up of just HTML, CSS, Javascript, and images. No server-side processing at all.

Instead of hosting such a site on a normal server, you can deploy it on a serverless platform like [Netlify](https://www.netlify.com/).

There's even a free plan so that you can start using it without costing a penny.

- See also: [7 Best Static Site Hosting Services](http://localhost:10003/static-site-hosting-services/)

_But, static sites are good for small sites only, isn't it? Not necessarily._

Because you don't need to code HTML pages manually. There are [static site generators](https://jamstack.org/generators/) to do that job. You can write content in markdown files and these generators convert them into HTML pages.

_But still, that's not as convenient as using a CMS like WordPress. Right?_

That's why there are headless CMSs. [Ghost](https://ghost.org/) and [Strapi](https://strapi.io/) are examples. You can do all the content management stuff as usual and still convert it into a static site using [Gatsby](https://www.gatsbyjs.com/) or other similar generators. The backend and frontend are decoupled.

You can even decouple WordPress like that, thanks to the [WP GraphQL](https://wordpress.org/plugins/wp-graphql/) plugin.

**_Here are the steps to host WordPress in a static-site way:_**

- Run WordPress on your local machine (using Xampp/Wamp localhost)
- Install Gatsby on the same local machine.
- Configure Gatsby to consume the WordPress GraphQL API.
- Now everytime you create/update posts on WordPress, Gatsby automatically generate the static frontend pages.
- Push the Gatsby site to a [Github](https://github.com/) repository.
- Create a free account on Netlify and connect the Github repository.
- That's it! From then on, Netlify automatically deploys the site live on the internet everytime you push changes to your Github repo.
- Additionally, you can also setup a custom domain and SSL certificate for the new static website.

The result? A faster and more modern website at no cost, powered by WordPress.

Then why is everyone not taking this route? Because:

- It involves some coding and command-line usage. You need to know Github, React, etc to make this thing work.
- In comparison, hosting WordPress in the traditional (monolithic) way is simple and straighforward.

Hopefully, I will write a detailed article on how to create a headless WordPress website using Gatsby, GraphQL, and Netlify.

## 8. Reseller Hosting

Reseller hosting is nothing complicated. It's for web agencies and developers who create and manage multiple client websites.

If you are an agency creating websites for others, you can find an additional revenue stream by reselling hosting and domain from a popular web hosting company.

They sell the plans to you at wholesale prices. You can then set a higher profit margin and sell to your clients. That's how you make a profit. If you have the marketing skills to get people to sign up, then this business can be highly profitable.

Under a single reseller account, you can set up multiple cPanel accounts. Then hand over it to your clients. Or you can manage it yourself as well.

You can also white label the accounts via WHM (Web Host Manager). So your customers will only see your logo, not the hosting company's.

All popular web hosting companies including GoDaddy and Hostgator offer Reseller plans.

## 9. Managed WordPress Hosting

Managed WordPress Hosting is aimed at power WordPress users who don't want to bother about the technicalities of web hosting.

Access to an expert WordPress support team, WordPress-specific features, better reliability, etc are the highlights of managed WordPress hosting.

The underlying infrastructure can be anything like Cloud, VPS, or dedicated servers, based on the provider. For example, [Kinsta's](http://localhost:10003/kinsta-review/) managed WordPress service is built on the Google Cloud Platform.

Since it is a premium service, the price is also on the higher side.

## Conclusion

By now, I hope you have an idea of the different web hosting choices available in front of you.

If you are a beginner not expecting much traffic to your new site, a quality shared hosting is the best place to start. Later, as your site outgrows, you can upgrade to cloud, VPS, or anything that meets your requirements.

Otherwise, if you are technically inclined and want to do things by yourself, then go with an unmanaged cloud server and set up things yourself. You will learn a lot of sysadmin things in the process.

Costs of unmanaged cloud instances from Vultr, Linode, and DigitalOcean are on par with many shared hosting plans.

Managed Cloud is another option if you need some assistance in server-related things. Cloudways and ServerPilot are great options.

Finally, if you want complete peace of mind in hosting a high-traffic WordPress website, then a managed WordPress hosting company can provide that.