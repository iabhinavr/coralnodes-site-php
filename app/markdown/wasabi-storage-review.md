---
title: 'Wasabi Storage Review: How Good is this Object Storage Provider?'
date: '2020-11-26 16:55:36'
modified: '2021-01-29 01:00:14'
slug: wasabi-storage-review
categories:
    - hosting
tags:
    - cloud
featured_image: 2020/11/wasabi-storage-review-featured-1.jpg
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. Founded fairly recently in 2017, Wasabi is a new competitor in the cloud object storage industry. Their advertisement is that their costs are only 80% of that of Amazon S3. And that is their main attraction too. In 2020, Wasabi has been also listed as one of the hottest technology startup companies by CRN. Despite the recent entry, they are now head-to-head with other providers like Backblaze B2, who have been around for…'
yoast_seo_title: '%%title%% %%page%%'
yoast_meta_description: 'A detailed review of Wasabi, an object storage provider that is said to be an alternative to AWS S3. Dicussing features, pros, and cons.'
cn_related_posts:
    - amazon-s3-alternatives
    - digitalocean-spaces-review
    - set-up-cloudflare-wordpress
    - bunnycdn-review
---
Founded fairly recently in 2017, Wasabi is a new competitor in the cloud object storage industry. Their advertisement is that their costs are only 80% of that of Amazon S3. And that is their main attraction too.

In 2020, Wasabi has been also listed as one of the hottest technology startup companies by [CRN](https://www.crn.com/slide-shows/cloud/the-20-coolest-tech-startups-of-2020/21). Despite the recent entry, they are now head-to-head with other providers like Backblaze B2, who have been around for a longer time. Look at this Google trends graph from 2014:

[![wasabi vs. backblaze b2 - google trends](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-vs-b2-google-trends-1-1080x485.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-vs-b2-google-trends-1.png)

[wasabi storage vs. backblaze b2 - google trends](https://trends.google.com/trends/explore?date=2014-10-26%202020-11-26&q=wasabi%20storage,backblaze%20b2)

But when I add S3 to the list, neither Wasabi nor B2 are still nowhere near that in terms of popularity:

[![wasabi storage vs. backblaze b2 vs. aws s3 - google trends](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-vs-b2-vs-s3-google-trends-2-1080x500.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-vs-b2-vs-s3-google-trends-2.png)

[wasabi storage vs. backblaze b2 vs. aws s3 - google trends](https://trends.google.com/trends/explore?date=2014-10-26%202020-11-26&q=wasabi%20storage,backblaze%20b2,aws%20s3)

- _But, how does Wasabi perform actually? When can you consider it as an [alternative to Amazon S3](http://localhost:10003/amazon-s3-alternatives/) or [DigitalOcean Spaces](http://localhost:10003/digitalocean-spaces-review/)? I will try to answer such questions in this Wasabi review._

Before that, let me give you a context. I first learned about Wasabi while searching for a [backup plugin for my WordPress websites](http://localhost:10003/backup-plugins-wordpress/). And then I came across **WP Time Capsule**, a real-time backup plugin that offered integration with Wasabi. In fact, I was hearing about the brand for the first time. Since it was a time when S3 didn't have many cheap alternatives, I was curious to know more about Wasabi.

So, my primary need was to store backups and archives for small websites. I know, your requirements and use cases may be totally different, probably enterprise-grade. In this post, I am just sharing what I learned, and my user experiences.

If you prefer watching a video on how to use Wasabi, here it is. The video covers the basics about creating buckets, adding users, setting up bucket policies, and also how to integrate it with a web app.

<iframe src="https://www.youtube-nocookie.com/embed/YAAwSbDkCuo?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
## Signing up

[![wasabi try or buy](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-try-buy-now-1-1080x513.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-try-buy-now-1.png)

Wasabi offers a 30-day free trial, without giving your payment details. So, you can create buckets, users, policies, and try the different features to find out if it's right for you or not.

To activate the trial, signup with your email address. Then you'll receive an invitation email that leads you to set up your account.

[![wasabi invitation email](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-invitation-email-1-1080x570.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-invitation-email-1.png)

The trial account has a few limitations though. For example, when I tried to make an object public, this is what I got:

[![public objects not allowed](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-trial-no-public-access-1080x535.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-trial-no-public-access.png)

That means with a trial account, you cannot make your folders or objects public. But, overall, it's enough to learn the interface.

## Console User Experience

Speaking of the console, I found it much easier to use than the AWS console. One reason for this simplicity is that Wasabi offers only storge-related services. Whereas in AWS, S3 is just one of the many services you can manage from the console.

On the left side, there is the main navigation, which is neatly split into three sections:

- Data & Access
- Users & Groups
- Your Account

![Wasabi Console Menu](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-console-menu-1-1080x613.png)

### Data & Access

The Data & Access section is where you manage your buckets, and bucket-related settings.

[![wasabi create new bucket](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-create-bucket-dialog-1-1080x521.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-create-bucket-dialog-1.png)

Under Policies, you can pre-define Policies that you can later attach to users or groups.

There is also a Policy Generator like the [one on AWS](https://awspolicygen.s3.amazonaws.com/policygen.html), although I found the latter to be more intuitive. But, note that Wasabi does not support all the Actions supported by S3. So, if you are copying your policy JSON file directly from S3, make sure you delete the unnecessary Actions.

[![wasabi policies](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-policies-1-1080x493.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-policies-1.png)

use pre-defined policies or create new policies

Next is the Access Keys section, where you can generate credentials and attach them to users. A single credential includes two keys - an access key, and a _secret key_. The secret key shows only once, so be sure to save it to a safe location right after you generate it.

[![wasabi create new access key](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-create-access-keys-1-1080x485.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-create-access-keys-1.png)

### Users & Groups

When you create an account, a root user is created along with it. This user has full permissions on your Wasabi buckets. With the root user's access and secret keys, you can create or delete buckets, upload or delete objects, set policies, and everything like that.

But in most cases, you want to limit the permissions. For example, when I was connecting the storage with my site's backup plugin, I wanted to set read and write permissions only, without granting the delete permission.

That's where additional users with **limited permissions** are required. Another use is for organizations, where you want to control the permissions for different people accessing the storage buckets.

So, under **Users and Groups**, you can create more users in addition to the root user. If you know about IAM (Identity and Access Management) users in S3, you know all these things. And by default, an IAM user has no permissions.

And to grant the user permissions, there are mainly two ways:

- setting IAM policies for the user _(which says, this user can perform the mentioned actions with the specified buckets)_
- setting a bucket policy for the bucket _(what all actions are allowed on this bucket, and by whom)_
- or, a combination of both

[![creating new user in wasabi console](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-create-new-user-1-1080x481.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-create-new-user-1.png)

Each user gets a unique pair of access and secret keys that you can use to manage the buckets programmatically. There are also programs like [Cyberduck](https://cyberduck.io/) (GUI-based) and [S3Cmd](https://s3tools.org/s3cmd) (CLI) that allows connecting to your buckets using these keys.

### Your Account

The Accounts page is where you set several things such as multi-factor authentication, your account password, enabling FTP, etc. You can also view the details of the root user here, including the [ARN](https://searchaws.techtarget.com/definition/Amazon-Resource-Name-ARN#:~:text=An%20Amazon%20Resource%20Name%20(ARN,AWS%20products%20and%20API%20calls.) (Amazon Resource Name).

[![wasabi settings page](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-settings-page-1-1080x608.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-settings-page-1.png)

Coming to the Billing section, Wasabi currently accepts credit cards for payment. When you connect your card, a small amount (like $5) will be withdrawn temporarily.

Also, remember that if you are in the trial period, adding a credit card will immediately end the trial. All usage from there on will be charged and will be reflected in your monthly invoice.

## Other Important Features

### Data Center Locations

Wasabi allows creating storage buckets in five regions spread across four locations:

- **us-west-1:** located around Oregon and California in the USA
- **us-east-1** & **us-east-2**: Virginia, USA
- **eu-central-1**: Amsterdam, Europe
- **ap-northeast-1**: Tokyo, Japan

Compared to Wasabi's other enterprise-grade counterparts, the number of available regions is fewer. For example, both S3 and Google Cloud offers 20+ locations.

## Pricing

Wasabi's pricing may not be as complex as AWS S3's, but it is not simple either. First of all, there are two choices available - **pay-as-you-go** and **Reserved Capacity Storage** (RCS). Here, we are mainly discussing the pay-as-you-go type.

The minimum price for that is **$5.99 TB/month**. But there are a few things you have to understand here.

### How Wasabi's pricing works?

The first term to understand is **Timed Active Storage**. For example, if you store 1TB of data from day 1 to day 30, then that is 1TB-month of active storage. And if you store 1TB for only 15 days, then that is half TB-month. In short, it is a volume-time unit.

Even if your monthly active storage (volume-time) is less than 1TB during a month, you will still be charged $5.99 for storage. If you go over 1TB, then that will also be charged extra at the same rate.

Secondly, there is another important factor, which can result in unexpected bills - **minimum retention period** for each object. According to that, the minimum storage period for each object is 90 days. If you delete an object before that period, then that will be charged as **Timed Deleted Storage**, in addition to the Active Storage Charge.

All these details are given on their FAQ page, I just tried to explain it simpler. I also had a few email chats with Wasabi support to understand how it works. I think those conversations will help you understand it better:

![wasabi's billing - email chat](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-storage-billing-emai-chat-1.png)

in the above example, the charge from the fourth month onwards will still be $5.99 (I calculated it as $0) even if there is no active storage

_Disclaimer: This is how I understood Wasabi's pricing strategy. If there are any mistakes, please correct me in the comments._

In short, frequent deletion of large objects can really raise your costs.

And the third point is, Wasabi's egress (download) and API costs are free. But there is a caveat here as well. The total egress volume in a month should be less than the storage volume. That means if your monthly storage utilization is 1TB, the egress should be below 1TB. Otherwise, it may result in issues including account suspension.

Lastly, if you delete your account, then this minimum retention period won't be applicable. The charges will be prorated, if it's in between a billing cycle.

## Performance & Reliability

To know the download speed and response times, I tested a public image file from ten locations using KeyCDN Tools. However, note that it's not a good thing to frequently download files, due to Wasabi's egress policy. But anyway, the test helped to get an idea of the download speeds:

[![wasabi performance test using KeyCDN Tools](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-performance-test-1.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-performance-test-1.png)

- Average TTFB: **583.3ms**

As expected, Amsterdam got the lowest TTFB as my bucket was in the **eu-central-1** region. And the highest was for Tokyo - 1..11s

I didn't check the uptime myself. But here are a few [Twitter mentions](https://twitter.com/search?q=(to%3Awasabi_cloud)&src=typed_query) & [replies](https://twitter.com/search?q=(%40wasabi_cloud)%20filter%3Areplies&src=typed_query) about people mentioning Wasabi, which are mostly positive (also see [this](https://twitter.com/ryangorley/status/129907724285777) and [this](https://twitter.com/KaranRBeghi/status/1216659105164689408)).

_But it seems there had been a few outages in 2019 (see [this](https://twitter.com/alidhoon/status/1088914422628790272) and [this](https://twitter.com/wasabi_cloud/status/1181394091994693632))._

Overall, I feel that there aren't any serious reliability issues with Wasabi. I have tried their support also, and they were willing to help all the time.

## Support Options

Email is the primary way to get support from Wasabi. Apart from the pricing query I mentioned above, I have contacted them one more time regarding a bucket policy issue.

Despite setting the Policy for one of my buckets with Read, Write, and List permissions, the users could also Delete objects. So, I sent an email in the morning mentioning the issue and the policy file I used.

I got a reply by evening, and it turned out to be an ACL issue on my part. I might have unknowingly set it to public read/write/delete. So, as asked in the reply, I reset the ACL back to private, and the bucket policy started working as expected.

[![wasabi email support](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-emai-support-1-1080x803.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/11/wasabi-emai-support-1.png)

Anyway, the support staff could identify the issue and gave a solution in just one reply.

With that, let us move to the advantages and disadvantages I've felt about Wasabi.

## Conclusion

### Advantages: When to consider Wasabi?

- Wasabi is an **affordable choice** if you respect the egress limits and retention periods. It's a **cheap option for storing backups and archives** for the long term that do not require frequent access. The storage price is $0.0059/GB/month whereas S3 is $0.023/GB/mo, almost four times.
- Offers all the important features including bucket and user policies, access management, and security features.
- The console is intuitive and easy-to-use, even for a beginner.

### Disadvantages: When you may not want to consider Wasabi?

- Although egress is free, it's not recommended if your egress volume exceeds the storage volume. So, Wasabi may not be a good choice for storing small files or files that require frequent access from the bucket.
- Also, there is no built-in CDN feature like AWS Cloudfront or [DigitalOcean Spaces CDN](http://localhost:10003/digitalocean-spaces-review/). So, Wasabi may not be an ideal location to offload and deliver your public website assets. However, you can set your bucket as the origin URL for a third-party CDN like [Cloudflare](http://localhost:10003/set-up-cloudflare-wordpress/) or [BunnyCDN](http://localhost:10003/bunnycdn-review/) to serve web files.
- Since Wasabi is a new player in this field, there isn't much information about big companies using it, at least for now, when comparing with S3. As it gets more mature, this condition may change. But they do have partnerships with backup companies including Veeam and MSP360.

Wasabi Cloud Storage is definitely an option you can consider if you are looking for a cheaper alternative to big players like S3 and GCP. With sufficient features, security, and infinite scalability, it's also an enterprise-grade solution.

- [Visit Wasabi](https://wasabi.com/)

_If you have used Wasabi, share your experiences in the comments below._