---
title: 'How the Internet Works: An Introduction for Beginners'
date: '2020-02-25 17:55:22'
modified: '2020-02-25 17:55:24'
slug: how-the-internet-works
categories:
    - fundamentals
tags: {  }
featured_image: 2020/02/how-internet-works-featured-1.jpg
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. As an internet user, you often check your social accounts, read online articles, and shop online.&nbsp; But have you ever wondered how it reaches in front of you? How does this web page, that you are reading right now, found its way to your screen? I won&rsquo;t be going into overwhelming details, but this post will help you to get an idea of the concepts behind the working of the Internet. In a…'
yoast_seo_title: '%%title%% %%page%%'
yoast_meta_description: 'An introduction about how the internet works - the infrastructure, routing, internet protocols, IP addresses, domain names, and the role of ICANN'
cn_related_posts:
    - a-brief-history-of-the-internet
---
As an internet user, you often check your social accounts, read online articles, and shop online. 

But have you ever wondered how it reaches in front of you? How does this web page, that you are reading right now, found its way to your screen?

I won’t be going into overwhelming details, but this post will help you to get an idea of the concepts behind the working of the Internet.

In a previous article, I had written about the [history of the Internet](http://localhost:10003/a-brief-history-of-the-internet/). Take a look at it also, if you haven't.

## The Internet Backbone & ISPs

You know, the Internet is a global network of networks. But who manages all these connections? How do you connect to it, and where does your ISP stand?

To answer these questions, you should first know that these networks are hierarchical. The Internet backbone is at the center, while most commercial ISPs stand towards the lower end of this hierarchy.

### Network Tiers

Now, what is the [internet backbone](https://en.wikipedia.org/wiki/Internet_backbone)?

It is a group of large networks spreading across countries and continents. Private companies own many of them. [Level 3 Communications](https://www.centurylink.com/) in Europe, [Tata Telecommunications](https://www.tatacommunications.com/) in India, [AT&T](https://www.att.com/) in the U.S, etc. are some examples of privately owned networks that are part of the internet backbone.

So, there is no single administration to manage these backbone services. Private communication companies negotiate with each other to work together. 

Most of the ISPs get their Internet from these backbone networks, which in turn provide internet access to the public, like you and me.

Based on their position in this hierarchy, we can classify all the networks into different tiers - Tier 1, Tier 2, and Tier 3. The backbone networks are usually Tier 1, while many of the ISPs come under Tier 3.

In a broad sense, this is how the Internet is organized. The exact details can be a lot more complicated as it involves thousands of networks, which are ever-changing.

## The Infrastructure

What connects these networks? What is the physical medium that makes inter-continental connections possible?

Optical fiber is the answer. Although there are other mediums like copper cables, optical fiber offers many advantages like less attenuation, better signal strength, and higher bandwidth.

These cables run across the land as well as under the ocean. From the [Submarine Cable Map](https://www.submarinecablemap.com/) website, you can see how these cables tie all the continents together.

If you are accessing the Internet from a mobile or tablet device, then it uses wireless technology. Your smartphones have the same capabilities as a standalone modem, with built-in WI-FI.

These devices convert data into microwave frequency and transmit it to a wireless router in your ISP’s network. The ISP, in turn, sends it to the next network via cables.

So, when you send something through the Internet, it travels through multiple mediums and networks before reaching its final destination.

## Routing & Packet Switching

How does the data find its way to the destinations through multiple networks?

Routers do this job. 

The computers in a network do not interconnect directly. Instead, they connect to a network router. This router can connect to another router, and so on, to form a network of networks.

A router has a [routing table](https://www.geeksforgeeks.org/routing-tables-in-computer-network/) associated with it, which knows all the details of the nodes and sub-networks connected to it. However, it does not know about other networks below its parent network.

So when you send something to another computer on the Internet, the data first traverses its way upwards from your computer. Then it travels through several networks, including the internet backbone. Finally, when it reaches the destination’s parent network, it starts traversing downwards.

Each jump from one network to the next is called a Hop.

### Packet Switching

The data on the web never travels as it is. Instead, it gets split into smaller packets at the source before transmission.

Each packet contains the data of its source and the destination. When all the packets have arrived at the destination, it is reorganized back into the original data.

## Protocols Governing the Internet

During the early days of the Internet, different wide-area-networks used different protocols to connect and transmit data.

[Read the history of the Internet](http://localhost:10003/a-brief-history-of-the-internet/)

It made interconnecting the networks a challenge. That’s why the TCP/IP protocol suite was formed in the 1970s.

It is a collection of rules defining how data should be transmitted over a network. For example, in the above section, you’ve read that data is sent as packets. It is the Internet Protocol that defines how to split data and how to reorganize it.

The Internet Protocol suite contains four layers:

- Link-layer
- Network layer
- Transport layer
- Application layer

## IP Address, Domain Names, and the role of ICANN

Each node (your modem, for example) on the Internet needs something to identify itself uniquely. That’s what IP addresses do.

If you are connected, you, too, have an IP address. You can check it by googling _what my IP is_?

### IPv4 & IPv6

Most of the networks still rely on IPv4 format, which supports a total of 2^32 addresses. But that number is quite limited, and the Internet is quickly running out of available IPv4 addresses.

So, there came the need for a new address format, the IPv6. It is a 128-bit address space, meaning it allows a total of 2^128 addresses. The [adoption is still in progress](https://www.akamai.com/us/en/resources/our-thinking/state-of-the-internet-report/state-of-the-internet-ipv6-adoption-visualization.jsp#countries) as the Internet gradually moves from IPv4 to IPv6.

### ICANN & its Functions

When you connect to the Internet, your ISP allocates the IP address for your modem.

But where do ISPs get these addresses? If every ISP in the world allocates addresses as they wish, wouldn’t it cause collisions?

[ICANN](https://www.icann.org/), in association with Regional Internet Registries, solves this problem. It is a non-profit organization that manages IP addresses and domain names on the Internet.

Out of its several responsibilities, ICANN has a special division called IANA, which manages IP address allocations.

For better management, there are five regional registries to coordinate the responsibilities in each zone.

- [Asia-Pacific](https://www.apnic.net/)
- [Africa](https://afrinic.net/)
- [North America](https://www.arin.net/)
- [Europe](https://www.ripe.net/)
- [Latin America](https://www.lacnic.net/)

According to this architecture, each region gets a range of IP addresses. The ISPs then get their share from regional bodies and allocate it to their customers.

ICANN monitors domain names as well. If you have purchased a domain name, you might have noticed a column for the ICANN fee, in addition to the domain’s price. 

That means, at the root level, ICANN manages the registration of all domain names, ensuring that no two registrars can register the same domain name.

### Domain Name Resolution

When you visit a website with its domain name, the system first finds the IP address of the server and then connects to it.

For example, if you want to visit google.com, two main steps are happening behind the scenes:

1. Finding the IP address of google.com
2. Connection to the host with that IP address 

By default, your browser asks your ISPs [Domain Name System](https://www.cloudflare.com/learning/dns/what-is-dns/) (DNS) for google’s IP address. 

If it knows, it sends back the address. Otherwise, it delegates the query upwards until it finds the required address. Once your browser gets the IP address, it can connect to google’s server. Again, this connection passes through your ISP before reaching google.

## Wrapping Up

Here are the key takeaways from this article:

- Internet is a vast network of network, organized into multiple tiers
- Fiber optic cables are the primary medium of transmission
- Transmission cables run across the land and under the sea
- Routers connect the nodes in a network
- Data is transmitted as several small packets
- Routers determine the path of a packet from its source to the destination
- The Internet follows the specifications given in the Internet Protocol Suite
- Each node on the Internet has an IP address - IPv4 or IPv6
- ICANN and its associated functions manage the allocation of IP addresses
- ICANN also supervises domain registrations
- DNS servers resolve domain names into IP addresses

I hope that this article helped you in getting a basic idea about how the Internet works.