---
title: '7 Free Tools to Measure Your Website Speed in 2020'
date: '2020-08-20 07:00:00'
modified: '2022-01-03 17:39:03'
slug: tools-to-measure-website-speed
categories:
    - seo
tags:
    - tools
    - web-performance
featured_image: 2020/08/speed-tools-featured-1.jpg
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. Optimizing your website for speed is essential for both SEO and good user experience. You should fix any performance bottlenecks and implement proper practices. To do that, you need to know about the right tools to audit your site. So in this post, we will look at some of the free tools that can measure your website&rsquo;s loading speed. But not all the tools are the same. That means, one tool may not…'
yoast_seo_title: '%%title%%'
yoast_meta_description: 'Learn about some of the free tools you can use to measure your website speed. Find out loading time, TTFB, and other performance bottlenecks.'
cn_related_posts:
    - wp-super-cache-vs-w3-total-cache
    - best-caching-plugins-wordpress
    - shortpixel-image-optimization-plugin-review
---
Optimizing your website for speed is essential for both SEO and good user experience. You should fix any performance bottlenecks and implement proper practices.

To do that, you need to know about the right tools to audit your site. So in this post, we will look at some of the free tools that can measure your website's loading speed.

But not all the tools are the same. That means, one tool may not give you all the metrics. So the best approach is to use multiple tools to gain maximum insights.

## What to Watch for When Checking Website Speed

To give you an idea, these are the top things that I watch for when I analyze the performance of any website:

- Fully loaded time (from different locations)
- [Time to First Byte (TTFB)](http://localhost:10003/reduce-server-response-time-ttfb/)
- Image optimization - are they properly compressed? are they served in appropriate formats?
- are there any [render-blocking resources](http://localhost:10003/eliminate-render-blocking-resources-wordpress/)?
- total no. of requests and no. of external requests
- are there any slow external requests

## 1. GTmetrix

[GTmetrix](https://gtmetrix.com/) is my go-to tool when I want to check the loading speed of any website. There are mainly three reasons why I prefer this tool:

- Test from seven locations from five continents
- Detailed waterfall and timing charts
- Useful insights to improve loading speed, based on Google PageSpeed and [Yahoo YSlow](http://yslow.org/)

As a guest user, you can only test from one location - Vancouver, Canada. But after signing up for a free account, GTmetrix allows testing from all the seven locations:

- Vancouver, Canada
- Dallas, U.S.A
- Sao Paulo, Brazil
- London, U.K

- Sydney, Australia
- Mumbai, India
- Hong Kong, China

Except for Africa and the Middle-East, these locations cover almost all regions of the world. It gives you a fairly good idea of how your site performs from different parts of the world.

The free account also allows saving reports for later reference.

After a test, GTmetrix shows two scores, one based on Google PageSpeed and the other using YSlow. Below that, you get tips to improve the scores, which are highly useful and time-saving.

![gtmetrix speed reports](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/speed-tools-gtmetrix-1-1080x465.png)

**Waterfall charts** are another important feature of GTmetrix. Other tools also show waterfall charts, but I feel GTmetrix is more useable. It shows the loading sequence of all the resources on one page, which helps to quickly find out problematic resources slowing down your page.

![gtmetrix waterfall charts](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/gtmetrix-waterfall-chart-1080x440.png)

Next is **Timings**, which gives a simplified view of the Waterfall Chart. You can find out your TTFB, on-load, and fully-loaded times under this section. It helps to find out where your site is slowing down.

![](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/gtmetrix-timings-1-1080x341.png)

For example, if you have a decent TTFB but a longer than usual on-load time, it means your HTML is loading fast, but subsequent requests are taking more time to load.

## 2. KeyCDN Tools

[KeyCDN](https://tools.keycdn.com/) is a content delivery network provider. They gives a suite of five performance testing tools:

![keycdn tools](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-tools-1-1080x813.png)

- **Website Speed Test:** Tests the loading speed from ten different locations, similar to what GTmetrix does.
- **Performance Test:** Simultaneously checks the connect speeds and TTFB from different locations.
- **HTTP Header Checker:** a tool to check the response headers
- **HTTP/2 Test:** checks if HTTP/2 protocol is enabled or not.
- **Brotli Test:** checks if Brotli compression is available or not.

Out of these tools, the one I quite like is the second one - _Performance Test_. Just enter the URL of the resource you want to check and it will return the TTFB from ten different locations around the world. Currently, I am not aware of any other tool that does this job so well.

![keycdn performance test - showing ttfb and connection speeds](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/keycdn-performance-test-1-1080x886.png)

Not just the web pages, you can also check individual assets with this tool. So, it's a great way to assess the performance of CDNs.

The tool shows fast TTFBs in green color. So, out of the ten locations, if the majority are not in green, it might be time to rethink your hosting selection.

## 3. Pingdom Tools

[Pingdom](https://tools.pingdom.com/) is another free tool that is quite like GTmetrix. It too allows testing your loading speed from seven different locations.

- Tokyo
- Frankfurt
- London
- Washington D.C

- San Francisco
- Sydney
- Sao Paulo

However, it does not show give detailed suggestions on how to improve your speed scores.

![pingdom tools](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/pingdom-tools-1-1080x784.png)

The good part is, Pingdom shows slightly more consistent and faster results than GTmetrix. That means, if you check the same page on both Pingdom and GTmetrix, Pingdom usually shows faster loading times. Also, there is not much variation in results when you repeat the same test.

Pingdom is a freemium tool. Most of the speed test you see in my hosting reviews are with the free version of Pingdom. A disadvantage is, the tests occasionally fail these days. With the paid plan, you might not face this issue. The paid account also allows scheduled testing and uptime monitoring.

## 4. Google PageSpeed Insights

[Google PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/) is not your typical tool that measures absolute loading times. Instead, it is a performance auditing tool that measures the perceived loading speed based on the following metrics:

- First contentful paint,
- Time to interactive,
- Total blocking time
- Speed Index
- Large Contentful Paint
- Cumulative Layout Shift

You can learn more about these metrics from the Google's [Web Dev](http://localhost:10003) site.

![google pagespeed insights](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/google-pagespeed-insights-1-1080x1044.png)

You can see both lab data and field data, based on monitoring real users. While GPSI is an online tool, you can access the same tool in your Chrome Developer Tools as well. Open the **Developer Tools** and go to the **Lighthouse** tab to access it.

You get a ton of suggestions along with a score out of 100 when you test a page. Implementing those tips can highly improve the performance and user experience. However, you don't need to strive to get a perfect 100/100.

## 5. WebPageTest

![webpagetest home page](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/webpage-test-1-1080x795.png)

[WebPageTest](https://www.webpagetest.org/) is a comprehensive tool that supports over forty test locations. You can also select the browser and device to be used for the tests.

The look and feel of their site is a bit dated. But if you want to dig deeper into speed optimization, WebPageTest offers a ton of useful features and insights.

- Test from over 40 locations, covers all regions including Africa and Middle East
- Multiple Runs in one test
- Optionally record a video of the page loading
- Waterfall charts
- Optimization checklists and security header checks

![webpagetest results](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/webpagetest-results-1-1080x835.png)

After a test, the tool displays detailed reports along with grades from A+ to F in each category. Overall, it's better than GTmetrix in terms of the level of insights you get.

## 6. Cloudinary Image Analysis

If you don't already know, Cloudinary is an on-the-fly image optimization and CDN solution. This tool analyses all the images on a page, and calculates the potential savings based on the following parameters:

- Fit
- Compression
- Format
- Color Space, and
- Color Depth

- [Visit Cloudinary Image Analysis](https://webspeedtest.cloudinary.com/)

![cloudinary image analysis](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/cloudinary-image-analysis-1-1080x722.png)

After testing, you will get performance grades for each image as well as an overall grade. The tool has direct integration with WebPageTest (the tool I mentioned above). So, you can also get a complete page analysis too.

If you are using web-friendly formats like JPEG, PNG, or WebP, you usually won't see any issues with color space or color depth. But what usually lowers your score is the **fit and compression**.

Using an [image compression plugin](http://localhost:10003/best-wordpress-image-optimization-plugins/) can partly solve this issue by properly compressing the images. However, to fit the image based on a user's device, you will need to use an on-the-fly image resizing solution.

## 7. Dotcom Tools

Above, we had mentioned about KeyCDN Tools, which tests from multiple locations in one go. However, it shows only the TTFB and connect speed. Not the fully loaded time.

![dotcom tools](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/dotcom-tools-1-1080x906.png)

Unlike that, [Dotcom Tools](https://www.dotcom-tools.com/website-speed-test.aspx) tests your site from several locations at once and shows the loading speed from each. Currently, there are twenty-five locations, covering six continents. You also have the option to select which locations you want to include in a test.

The tool runs the test twice from each locations. The repeat view will be usually faster due to caching. But the results are inconsistent most of the time.

![dotcom tools results](https://cdn-2.coralnodes.com/coralnodes/uploads/2020/08/dotcom-tools-2-1080x691.png)

## Conclusion

I hope you've got an overview of the tools available out there to check your site's speed. Let me conclude it by picking a few from the list:

- **GTmetrix** - best for overall analysis
- **WebPageTest** - for a complete analysis
- **Google PageSpeed Insights** - performance auditing
- **KeyCDN Tools** - for finding TTFB

_Which is your favorite tool? Comment it below._