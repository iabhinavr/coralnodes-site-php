---
title: 'DigitalOcean vs Linode'
date: '2021-04-10 20:15:45'
modified: '2021-12-24 22:13:30'
slug: digitalocean-vs-linode
categories:
    - hosting
tags:
    - cloud
    - cloud-hosting
featured_image: 2021/02/digitalocean-vs-linode-featured-1.jpg
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. Both DigitalOcean and Linode are cloud infrastructure providers who share a lot of similarities. And for the same reason, comparing the two providers and getting to a conclusion is not an easy task. Linode was founded in 2003 while DigitalOcean came about much later in 2011. However, they became quickly popular with a short span of time. The company has also recently gone public in March 2021. Apart from offering cloud VPS instances,…'
yoast_seo_title: '%%title%% %%page%% - Which is a Better Cloud Provider'
yoast_meta_description: 'In this article, we compare DigitalOcean and Linode, two popular cloud providers. Find out the differences, similarities, and performance.'
cn_related_posts:
    - amazon-s3-alternatives
    - wordpress-hosting
    - wasabi-storage-review
---
Both DigitalOcean and Linode are cloud infrastructure providers who share a lot of similarities. And for the same reason, comparing the two providers and getting to a conclusion is not an easy task.

Linode was founded in 2003 while DigitalOcean came about much later in 2011. However, they became quickly popular with a short span of time. The company has also recently [gone public](https://www.nyse.com/quote/XNYS:DOCN) in March 2021.

Apart from offering cloud VPS instances, both the companies offer a lot of other related services too, such as Kubernetes, object storage, etc. In another post about object storage [alternatives to S3](http://localhost:10003/amazon-s3-alternatives/), I had mentioned DO Spaces and Linode in the list.

Unlike AWS or Google Cloud Platform, DigitalOcean and Linode are much easier to use, be it for spinning up a server, or for storing files. In this post, we will look at the important services provided by each of them, and also try to deduce where they differ in their offerings.

We will also check the performance of their base VPS instances, which costs $5/mo for 1GB memory.

[Visit DigitalOcean](http://localhost:10003/go/digitalocean/)

[Visit Linode](http://localhost:10003/go/linode/)

## Important Services Available

As cloud infrastructure providers, VPS instances are the primary products offered by both companies. At DigitalOcean, an instance is called a Droplet while at Linode, it is called a Linode itself.

Apart from that, they also offer several other related products and services too. There's a lot of overlap in between, but at the same time, there are some differences too:

_The below table helps to get an idea about the various offerings:_

|Product/Service|DigitalOcean|Linode|
|---|---|---|
|Cloud VPS|yes|yes|
|Kubernetes|yes|yes|
|Managed Databases|yes|no|
|Object Storage|yes|yes|
|Volume Storage|yes|yes|
|CDN|yes|no|
|Firewall|yes|yes|
|DDoS Protection|no|yes|
|Load Balancing|yes|yes|
||||

As you can see, Linode lacks Managed Databases and CDN services. On the other hand, DigitalOcean offers those services, while it doesn't explicitly mention the availability of any DDoS protection. However, I cannot comment if one provider is better than the other in terms of security. I have been hosting sites with DigitalOcean for a while without any problems.

DigitalOcean also offers a built-in CDN feature with its Spaces Object storage. You can store the files in S3-like buckets and serve them from the CDN. It also supports CNAME subdomains. So it can be a potential alternative for S3+Cloudfront if you are looking for a cheaper alternative.

- See also: [DigitalOcean Spaces Review](http://localhost:10003/digitalocean-spaces-review/)

Linode also offers object storage service, but currently, there is no CDN attached with it.

## VPS Comparison

First, let us look at the different VPS plan categories available with each provider.

### Plans & Pricing

On **DigitalOcean**, the plan structure goes like this:

- Shared CPU (Basic)
- Dedicated CPU

Within the Shared CPU category, there are again three configuration types you can choose from:

- Regular Intel SSD
- Premium Intel NVMe SSD
- Premium AMS NVMe SSD

The first one - _Regular Intel SSD_ - offers the cheapest servers, with prices starting at $5/mo for a 1GB and 25GB SSD droplet. Premium categories (Intel or AMD) are slightly more expensive with the base plan costing $6/mo. It also comes with 1GB RAM, but the storage is NVMe SSD. The good part is that, in the Premium category, you can choose between Intel or AMD processors.

From what I understand from the documentation, with Shared CPU, there is no guarantee that your droplet always has access to the specified no. of hyper-threads. So, the processing power may vary depending on the load on the nearby droplets.

Whereas with Dedicated CPU, you get a guaranteed processing power. And there are four sub-categories of dedicated CPU plans:

- General Purpose
- CPU-optimized
- Memory-optimized
- Storage-optimized

[Visit DigitalOcean](http://localhost:10003/go/digitalocean/)

Like DigitalOcean, Linode also offers a shared CPU category. Overall, there are four categories of plans:

- Shared
- Dedicated
- High memory
- GPU

However, unlike DO, there is no option to choose between Intel or AMD processors. It seems all their instances are currently using AMD Epyc processors.

One advantage Linode has over DigitalOcean is its GPU instances. They come with dedicated graphics cards that are highly useful for tasks like image processing and machine learning.

[Visit Linode](http://localhost:10003/go/linode/)

_Disclaimer: the plans and prices may vary from time to time. The respective providers may change them as and when they wish. The above figures only show how it is when I am writing this post._

### Operating Systems & Stacks

Both Linode and DigitalOcean allow installing a wide variety of Linux distros. But still, there are a few differences here and there. With DigitalOcean, the standard options are:

- Ubuntu
- FreeBSD
- Debian
- Fedora
- Centos

And with Linode, the options goes like this:

- Alpine
- Arch Linux
- Centos
- Debian
- Fedora
- Gentoo
- Slackware
- Ubuntu
- OpenSuse

There are options to install custom Linux images with either of the providers, although I have felt that DigitalOcean's approach is more straightforward. You can upload images directly from the web interface.

### Hardware

Before writing this post, I spent some time with the smallest VPS available with each provider. Both offer similar specs with 1GB RAM, 1vCPU, and 25GB SSD Disk.

Here's what a simple _lscpu_ command revealed on DigitalOcean and Linode:

![lscpu command DigitalOcean](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/do-lscup-1.png)

![lscpu command Linode](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/linode-lscpu-1-1080x495.png)

The above results reveal that both of them use KVM hypervisors to create virtual servers. DO uses Intel-based processors with its basic shared droplets, although the _lscpu_ command couldn't find the model name.

Whereas Linode uses the 32-core AMP EPYC processor, which is known for [great performance](https://www.servethehome.com/amd-epyc-7501-benchmarks-and-review-32-cores-per-socket/). It also comes with 16MiB of L3 Cache and a clock speed of 2GHz.

At 2.5GHz, DigitalOcean has slightly higher clock speed, but the below sysbench tests show that Linode gives a better overall CPU performance.

## Performance

### Sysbench Tests

[Sysbench](https://github.com/akopytov/sysbench) is a benchmark tool that allows testing CPU, memory, and database performances. It's freely available in various Linux repositories.

For the below tests, I installed Sysbench on VPSs running Ubuntu 20.04. Here's a quick spec of the servers I used:

**DigitalOcean**

- 1GB RAM, 25GB SSD
- Shared CPU (Regular)
- $5/mo
- Location: NYC
- Image: Ubuntu 20.04

**Linode**

- 1GB RAM, 25GB SSD
- Shared CPU
- $5/mo
- Location: Dallas
- Image: Ubuntu 20.04

**CPU Test**

[![sysbench cpu test - DigitalOcean](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/do-1gb-sysbench-cpu-1-1080x627.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/do-1gb-sysbench-cpu-1.png)

![sysbench CPU test - Linode](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/linode-1gb-sysbench-cpu-1-1080x608.png)

|Provider|CPU Speed (events per second)|
|---|---|
|DigitalOcean|1081|
|Linode|1195|

As expected, Linode's AMD CPU showed better performance than DigitalOcean's Intel processor.

**Memory Test**

The positions swapped during the memory tests, with DigitalOcean showing significantly faster write speeds than Linode.

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/memory-sysbench-do-1gb-1-1080x742.png)

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/memory-sysbench-linode-1GB-1-1080x749.png)

|Provider|Write speeds|
|---|---|
|DigitalOcean|4836 MiB/sec|
|Linode|3357 MiB/sec|

### WordPress Benchmarks

**WP Performance Tester** benchmarks both raw server performance and WordPress performance. So it is a great tool to assess a server if you are planning to host WordPress sites on it.

_I conducted the below tests on identical WordPress installations (ver. 5.7), with no other plugins or optimizations. The theme used was the default Twenty Twenty-One WordPress theme._

- WordPress 5.7
- [Twenty Twenty-One](https://wordpress.org/themes/twentytwentyone/) theme
- LAMP stack on Ubuntu 20.04

And here is how each of the providers performed:

![WP Benchmarks - DigitalOcean](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/wpperformance-tester-do-1-1080x742.png)

![WP Benchmarks - Linode](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/wpperformance-tester-linode-1-1080x778.png)

I ran three consecutive tests and took the average of the three results:

||Execution time (server perf.)|Execution time (wp)|Queries per second|
|---|---|---|---|
|DigitalOcean|0.358s|2.218s|451.49|
|Linode|0.646s|2.622s|384.93|

With all the three measured metrics, DigitalOcean showed better results. It is a little surprising to find that Linode gave significantly slower execution time (server perf.) than DigitalOcean. This is in stark contrast to the Sysbench CPU speeds we got above, where Linode performed better.

### Load Tests

I conducted the load tests on two different WordPress configurations:

1. Fresh WordPress 5.7 on LAMP stack - no caching or optimizations
2. WordPress 5.7 on LAMP stack + a few images & sample content + W3 Total Cache Disk: Enhanced mode

Since the first site involves no caching, it really tests how efficient the server is in handling PHP and MySQL queries. While the second site has some sample content with page caching enabled, which resembles a real-world site.

So, for the first site, I increased the no. of users on the site from 0-100 over a period of 1 minute using [Loader.io](https://loader.io/). And for the second, the no. of users were in the range of 0-1000.

And here is how the servers performed:

**DigitalOcean - WordPress - No Cache**

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/do-1gb-loadtest-times-1-1080x645.png)

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/do-1gb-loadtest-responses-1-1080x617.png)

The DigitalOcean droplet stayed pretty solid until around 40sec, that is when nearly 70 users were on the site. After that, timeouts started occurring. I repeated the test to check for inconsistencies, but the result was almost the same. Timeouts started occurring after around 40-45s in the second test too.

The error rate was 4.8%, while the average response time was 1096ms.

**Linode - WordPress - No Cache**

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/linode-1gb-loadtest-times-1-1080x622.png)

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/linode-1gb-loadtest-responses-1-1080x637.png)

In stark contras to DigitalOcean, Linode never crashed during the test period, with a perfect 0% error rate. As you can see from the first graph, the response times increased in a linear fashion with the no. of users.

Average response time: 1344ms.

Conclusion: Although DigitalOcean responded faster during the initial seconds, Linode was more stable as the load increased.

The next round of tests were done with page caching enabled. The no. of users were increased steadily from 0 to 1000 over a period of 1 minute.

**DigitalOcean - WordPress + W3TC**

[![](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/do-1gb-loadtest-times-2-1080x545.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/do-1gb-loadtest-times-2.png)

**Linode - WordPress + W3TC**

[![](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/linode-1gb-loadtest-times-2-1080x548.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/linode-1gb-loadtest-times-2.png)

Error rates were:

- DigitalOcean: **3%**
- Linode: **2.2%**

Again, Linode stayed a bit more stable.

### GTmetrix Speed Tests

Next is speed test, for which I used GTmetrix to test the site from seven different locations. The same WordPress configurations (with W3TC caching) was used for these tests too.

|Hostinger Speed Test|   |   |
|---|---|---|
|Location|TTFB|Onload Time (rounded)|
|Hong Kong|646ms|3200ms|
|London|239ms|1500ms|
|Mumbai|561ms|2800ms|
|San Antonio|161ms|1000ms|
|Sydney|646ms|3200ms|
|Sao Paulo|403ms|1900ms|
|Vancouver|261ms|1200ms|
|**Average**|**417ms**|**2114ms**|

|Hostinger Speed Test|   |   |
|---|---|---|
|Location|TTFB|Onload Time (rounded)|
|Hong Kong|620ms|3100ms|
|London|341ms|1800ms|
|Mumbai|764ms|40000ms|
|San Antonio|92ms|946ms|
|Sydney|598ms|3200ms|
|Sao Paulo|527ms|2500ms|
|Vancouver|207ms|1100ms|
|**Average**|**450ms**|**2378ms**|

DigitalOcean performed a tad faster, both in terms of TTFB and Onload Times.

## Ease of Use

Compared with AWS or GCP consoles where you can manage hundreds of services, DigitalOcean and Linode are much easier. The reason is that they don't offer an overwhelming no. of services under one umbrella.

_**But, among the two, which one offers better user experience?**_

I think the answer mostly depends on personal preference. There is no question that DigitalOcean's web dashboard looks modern and sleek.

![digitalocean dashboard](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/digitalocean-vs-linode-do-create-droplet-1-1080x555.png)

In contrast, Linode console may look slightly old-fashioned, but I liked its simple and minimal interface.

Linode also offers dark mode, which you can toggle from the Settings page.

![linode create server interface](https://cdn-2.coralnodes.com/coralnodes/uploads/2021/04/linode-create-server-interface-1-1-1080x494.png)

When it comes to creating a server, DigitalOcean is slightly faster. It took around 10-15s for DigitalOcean to create a Droplet. Whereas Linode took around 30-40s.

Overall, I think DigitalOcean's interface is slightly ahead. It would have been better if they could offer dark mode too.

## Datacenter Locations

DigitalOcean offers eight server locations:

- New York
- San Francisco
- Toronto
- Amsterdam

- London
- Frankfurt
- Singapore
- Bangalore

If you look at the number of locations available, Linode is slightly ahead with eleven centers to choose from:

- Atlanta
- Dallas
- Fremont
- Newark
- Toronto
- London

- Frankfurt
- Singapore
- Tokyo
- Mumbai
- Sydney

With one location available in Sydney, Linode has its presence in four continents. Whereas DigitalOcean is available in three continents. None of the providers offer data centers in Africa or South America.

## Support Options

The support options are mostly similar across both the platforms:

- Tickets
- Community forums (QnA)
- Community guides (tutorials)
- Product documentation

In addition to these options, Linode also offers a chatbot feature. However, it seems the bot can answer only basic questions.

With over 30k forum answers and nearly four thousand tutorial guides, DigitalOcean's community is a great resource for sysadmins. You can find answers to typical questions without contacting support. And this library of articles and questions is ever-growing. If you are a tech writer, you can also contribute, and get paid too.

Linode also offers similar community guides, but I think it is not as extensive as DigitalOcean's.

## Conclusion

Above we have analyzed the plans, performance, and ease of use of DigitalOcean and Linode. From those, I think Linode is a more stable option in many aspects. They have fewer products to offer but they do it well.

DigitalOcean has more products under its belt and frequently rolls out new features. The Spaces CDN & object storage solution is an example. It has faster loading speeds and server creation time.

For general purposes such as web hosting, I don't think you can go wrong with either DigitalOcean or Linode. Both are cheap and easy to use.

However, for special purposes like machine learning, Linode can be a better choice. Their GPU-optimized instances are an example.

[Visit DigitalOcean](http://localhost:10003/go/digitalocean/)

[Visit Linode](http://localhost:10003/go/linode/)