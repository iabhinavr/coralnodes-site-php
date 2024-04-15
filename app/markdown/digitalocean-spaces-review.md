---
title: 'DigitalOcean Spaces Review - Why it is an Affordable Storage Solution?'
date: '2019-04-13 04:02:27'
modified: '2022-03-26 23:27:10'
slug: digitalocean-spaces-review
categories:
    - hosting
tags:
    - cloud
featured_image: 2019/04/digitalocean-spaces-review-featured.png
excerpt: 'A detailed review of DigitalOcean Spaces - a cloud object storage solution compatible with the S3 API. Discussing the features, pricing, pros, and cons.'
yoast_seo_title: 'DigitalOcean Spaces Review [2022] - Is this Cloud Object Storage Good?'
yoast_meta_description: 'A detailed review of DigitalOcean Spaces - a cloud object storage solution compatible with the S3 API. Discussing the features, pricing, etc.'
cn_related_posts:
    - amazon-s3-alternatives
    - keycdn-review
    - best-cdn-providers
---
Are you confused about which object storage service to choose for your backups, media storage, and other services?

In this review, we will take a look at **DigitalOcean Spaces**. By the time you finish reading it, you will be able to decide if it is right for you or not. I am sharing my experiences after using Spaces for more than six months.

You might know that _Amazon S3, Azure Blog, and Google Cloud Storage_ are two mammoths in this field. We will check how Spaces stack up with these competitors, and what makes it different from such enterprise-grade storage providers.

_You might want to check:_

- [10 Best Alternatives to Amazon S3](http://localhost:10003/amazon-s3-alternatives/)
- [7 Best Dropbox Alternatives](http://localhost:10003/dropbox-alternatives/)

By the way, if you want a quick primer about **what is object storage** and when to use it, read the next section. Otherwise, you can skip to the [pricing](#pricing).

- [Signup on DigitalOcean to get $100 free credit](http://localhost:10003/go/digitalocean/)

## Why Use Object Storage?

As a blogger who manages a couple of image-heavy sites, I felt that storing all these assets on the same server as my website is not a great idea. These were the top reasons to try offloading:

- **Migrating web hosts** was a pain because I have to move all the files each time I switch web hosts.
- Traditional storage is **not so scalable**. Most web hosts impose a maximum file limit (Inode), crossing it can lead to account suspension.
- I needed a better place to **store site backups**.

That's why I decided to offload static assets to an object storage solution. Now, the images you see on this blog are stored on a cloud block storage and served via [BunnyCDN](http://localhost:10003/bunnycdn-review/).

_Update: After I offloaded images, some WordPress plugins (especially [image optimization plugins](http://localhost:10003/best-wordpress-image-optimization-plugins/)) didn't work properly. So, later I switched back to normal. But still, object storage is a great choice for storing backups and archiving purposes._

_So, what is meant by object storage?_

Here it is. Traditional storage system like the hard drive on your PC uses a file system to store data. For example, Windows OS uses the NTFS system. These systems use a hierarchical structure to store the details about files and folders. This can limit the potential to scale up.

In contrast to this, Object storage treats every data as an object with an identification key. There is no hierarchy or folder. It doesn't follow file systems. So it can scale infinitely and will not slow down. Read [this article](https://cloudian.com/blog/object-storage-vs-file-storage/) to know more about the differences between Object storage and file-based block system storage.

Object Storage does not have a file system or hierarchy.

That brings us to the following **advantages of object storage**:

- Easy to scale, does not slow down.
- Can be accessed via API.
- No file system, so any number of metadata can be attached to a data object.
- Object storage services are relatively more secure.

Let us see some of the best use cases of an object storage system like Spaces:

- **Serve website assets like images, CSS, etc.**
- **Store backups and archives**
- **Store images, photos, videos, and similar files that are static in nature.**

As you can see, it is best for static assets that do not require editing. On the other hand, files (data) like databases that require frequent modifications are not suited for object storage. You can only access and upload a whole object at once and cannot modify a part of it.

Storing databases on object storage may not be a good idea.

## Pricing - What makes Spaces Different from Amazon S3?

The simple pricing model is the main reason you might want to consider DigitalOcean Spaces instead of others. Starting at $5 per month, Spaces gives you 250GB of storage and 1TB of outbound transfer bandwidth.

_Update: Now, providers like [Linode](http://localhost:10003/go/linode/) and [Vultr](http://localhost:10003/go/vultr/) are also offering object storage solutions at similar pricing._

These are the key things that make Spaces different:

- Predictable monthly pricing for fixed resources instead of pay-per-use
- Lower cost per GB - $0.02/GB/month storage or $0.005/GB/month bandwidth
- No additional charge for requests like GET, PUT, POST, etc.
- No charge for inbound transfers.

In contrast, Amazon S3 prices start at $0.09/GB/month for outbound transfer bandwidth and $0.023/GB/month for storage. So, that is a total of $0.113 per GB per month. Remember, we haven't included the price for requests.

Let us do a quick comparison:

|Item|Usage|Spaces Price|S3 Price|
|---|---|---|---|
|Storage|250GB|**$5** @ $0.02/GB|**$5.75** @ $0.02/GB|
|Monthly Bandwidth|1000GB|Included|**$90** @ $0.09/GB|
|GET requests|5000K*|Included|**$2** @ $0.0004/1000 req.|
|Total|   |**$5**|**$97.75**|

_*Assuming that we receive a total of 500k page views monthly @ 10 requests per page._

_In the DigitalOcean ecosystem, a Spaces subscription is equivalent to a bucket in S3. Just like buckets, you can create multiple Spaces within your account. In short, the terms Space and Bucket can be used interchangeably._

Also, note that there is no limit on the number of Spaces (buckets) you can create with this price. That means the 250GB storage and 1TB bandwidth limits are for all the Spaces you have created. The monthly bill will still be $5 if your overall usage is below these limits [[see this forum thread](https://www.digitalocean.com/community/questions/prices-explanation-5-per-space-or-5-for-spaces)].

## Features

Although cheaper, Spaces is not behind when it comes to features. With the recent addition of CNAME sub-domain support for CDN, it has become more capable than before.

### Compatibility with S3

If you are an existing S3 user, moving your application assets to Spaces won't be a problem as it is completely compatible with the AWS S3 API.

You can also use existing packages and tools like [S3Cmd](https://s3tools.org/s3cmd) and AWS S3 SDK.

In short, if you are a developer, you can start integrating Spaces without learning another SDK documentation.

#### **API Access**

After generating an access key and a secret key from your DigitalOcean dashboard, you can programmatically connect with your Spaces to create and delete buckets and manage your data objects.

SDKs are available for all major programming languages like PHP, Node, Go, etc.

#### **API tools for non-developers & non-coders**

So far, we have been discussing these things from a developer's standpoint. But don't worry if you don't know how to code. There are several free and freemium tools to integrate Spaces with your applications:

- [WP Offload Media](https://wordpress.org/plugins/amazon-s3-and-cloudfront/) by Delicious Brains - This is one of the popular plugins available today to move your files to cloud object storage. The plugin also has a free lite version.
- [Media Library Folders Pro](https://maxgalleria.com/downloads/media-library-plus-pro/) - Another WordPress plugin to move your media files from your web host to Spaces or S3.
- **FileZilla Pro** - The premium version of the FileZilla FTP program comes with the ability to connect with DigitalOcean Spaces.

_Note:_ _I do not have much experience with these three tools._ Instead, _I've created a custom plugin to integrate my own sites with Spaces. It was quite easy to integrate the API, which is a topic for another post._

### Drag & Drop Upload

Apart from the API access, DigitalOcean's cloud dashboard allows you to manage the files on your spaces from a simple drag and drop interface.

Earlier, we have seen that object storage does not follow the concept of traditional files and folders. However, GUIs can present them in such a fashion based on the objects' key names. For example, if you have an object _photos/profile.jpg_, GUIs can show it as a file named _profile.jpg_ inside the _photos_ folder.

### Multiple Datacenter Choices

Spaces currently offer five data center locations:

- San Francisco
- Frankfurt
- New York
- Amsterdam
- Singapore

In contrast, Amazon and Google Cloud offer more locations to choose from.

### HTTPS Enabled

All the assets stored in your spaces can be accessed using the secure HTTPS protocol.

You can also set the privacy of individual files as public or private. Public files can be viewed by anyone using its URL while private files can be viewed only by you.

### In-built Content Delivery Network (CDN)

When you subscribe to Spaces storage, you also get a CDN without incurring further costs. That means you can serve your assets either from the origin or from an edge location closer to your users. The latter helps to reduce network latency.

- Enable CDN from the dashboard
- add the name _cdn_ to the URL of assets: For instance, _https://spacename.sfo2.digitaloceanspaces.com/photo.jpg_ retrieves the asset from the origin server while  
    _https://spacename.sfo2.**cdn**.digitaloceanspaces.com/photo.jpg_ retrieves the asset from the nearest edge server.

Currently, they have **25+** PoPs (Point of Presence) spread across five continents.

### Supports CNAME Subdomain for CDN

Custom sub-domain for CDN has been a long-awaited feature. Finally, on April 9, 2019, DigitalOcean announced on their blog the ability to attach your own domains to the built-in CDN assets.

With this, you can serve assets from a URL like _https://cdn.yoursite.com/photo.jpg_ instead of the lengthy _https://spacename.sfo2.cdn.digitaloceanspaces.com/photo.jpg._

## How to Use

After signing up for a DigitalOcean account, start by creating your first project, if you haven't already done it.

### Creating Bucket & Uploading

[![DigitalOcean Spaces Review](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/create-do-project-1-740x800.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/create-do-project-1.png)

Clicking the _Create_ button on the bottom reveals a drop-down menu. From it, select _Spaces_.

[![DigitalOcean Spaces Review](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/create-spaces-2-800x461.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/create-spaces-2.png)

On the next page you have to set the following things:

- Datacenter location
- CDN (optional)
- Directory listing - enable or disable
- Bucket name
- Project name

Finally, click Create to deploy your new bucket.

[![Creating a DigitalOcean Spaces bucket](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/03/create-do-spaces-mar-2022-1080x1045.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2022/03/create-do-spaces-mar-2022.png)

You can access the newly created bucket by clicking the Spaces on the left sidebar. Drag and drop the files you want to upload.

[![DigitalOcean Spaces Review](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/create-spaces-3-800x335.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/create-spaces-3.png)

Don't forget to set the permission to public for publicly viewable assets.

[![DigitalOcean Spaces Review](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/create-spaces-4-800x388.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/create-spaces-4.png)

Once the file is uploaded, you can view it in the dashboard along with its addresses, preview, permission, and mime-type.

[![DigitalOcean Spaces Review](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/create-spaces-5-800x372.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/create-spaces-5.png)

### Generating API Keys

If you are just trying out Spaces or using it for storing personal files, then the drag-and-drop upload may be sufficient. On the other hand, if you are using it for more complex purposes like website integration, then the API is the way to go.

To use the API, you have to generate an access key and a secret key. You can do that from the API section of the cloud dashboard. On that page, click **Generate New Key**.

[![DigitalOcean Spaces Review](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/create-spaces-6-800x306.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/create-spaces-6.png)

Once the keys are generated, remember to copy and paste them into a safe location.

[![DigitalOcean Spaces Review](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/create-spaces-7-800x149.png)](https://cdn-2.coralnodes.com/coralnodes/uploads/2019/04/create-spaces-7.png)

Later, you can use these keys to connect to your bucket using one of the tools I've mentioned earlier, such as WP Offload Media.

## Performance

After running a few ping tests using KeyCDN's free tools, the global average latency I got for my bucket in the San Francisco region was **124ms** (non-CDN URL). The tool pinged three times from fourteen locations around the globe.

Next, I checked the same using the CDN URL. Then the average time was reduced to a mere **14.5ms**. Out of the fourteen locations, Sydney (Australia) recorded 113ms, and Bangalore (India) clocked 39ms. All the other locations responded in less than 20ms.

||Min1|Min2|Max1|Max2|Avg (all locs.)|
|---|---|---|---|---|---|
|Origin Server|1.17ms  <br>(San Francisco)|26.78ms  <br>(Seattle)|232.93ms  <br>(Sydney)|230.98ms  <br>(Bangalore)|**124ms**|
|Edge Server|0.24ms  <br>(New York)|0.27ms  <br>(Frankfurt)|113.76s  <br>(Sydney)|39.88s  <br>(Bangalore)|**14.5ms**|

So, if you serve assets for the web from Spaces, enabling CDN can improve the performance by almost ten times. If you use another CDN service, then it is better to disable the built-in CDN.

## Support

DigitalOcean offers support through **tickets** and through **forums**. I had tried the ticket system, and the wait times can be a bit long at times. Otherwise, their services have been great so far and the knowledgebase articles are also well detailed.

## Pros & Cons

- Simple & predictable pricing structure
- Developer-friendly
- Compatible with S3 API and other existing tools

- Fewer regions than AWS & Google Cloud
- Some advanced features like Object policies and Bucket Replication are not supported. Bucket Policies are supported though, via the API.

## Conclusion

We have seen how object storage works and why DigitalOcean Spaces can be an affordable choice.

Because of its **predictable pricing**, Spaces gives greater peace of mind than its competitors like S3 and Google Cloud. So, for beginners and small developers who do not have much experience with cloud object storage, Spaces gives an easy entry. It has the potential to serve enterprise users as well.

- [Signup with DigitalOcean & get $100 free credits](http://localhost:10003/go/digitalocean/)

Since it works much like S3, developers find it easy to work with. It is a great option if you already use DigitalOcean's other products like Droplets.

On the other hand, if you need more regions, then Amazon and Google offer that along with a lot of other services.

Then we saw how the performance improved when coupled with the built-in CDN. Now it supports custom sub-domains also.

_Have you used Spaces? What is your experience, and what do you think about it when compared to S3 or GCP? Mention it in the comments._