---
title: 'What is SSH? How it Works - An Overview for Beginners'
date: '2022-07-04 19:12:19'
modified: '2022-07-04 19:13:25'
slug: what-is-ssh-how-it-works-an-overview-for-beginners
categories:
    - fundamentals
tags:
    - linux
featured_image: 2022/07/what-is-ssh-featured-1.png
excerpt: 'Disclosure: This page may contain affiliate links. If you purchase something using those links, we may receive a commission, but it will not cost you anything extra. SSH, or Secure Shell, is a secure method for two computers &ndash; a client and a server &ndash; to communicate each other over encrypted channels. The SSH protocol is one of the protocols defined under TCP. The default port number for SSH connections on a server is 22. Table of Contents 1. What can you do with SSH? 2. How SSH Works 3. SSH Initiation 4. Generating a Symmetric Key 5. Athenticating the…'
yoast_seo_title: ''
yoast_meta_description: ''
cn_related_posts:
    - gzip-vs-brotli
    - best-dedicated-server-hosting
    - aws-alternatives
    - secure-wordpress-essentials
---
SSH, or Secure Shell, is a secure method for two computers - a client and a server - to communicate each other over encrypted channels.

The SSH protocol is one of the protocols defined under TCP. The default port number for SSH connections on a server is 22.

## What can you do with SSH?

SSH enables you to manage a remote machine located somewhere else, from your computer. That' it!

It allows you to access the command line of the remote server, so that you can install programs, manage files and directories, upload or download files, perform software updates, and so on. In short, the ability to perform all the system administration tasks without being physically present at the data center.

## How SSH Works

Just like we use a web browser and a web server to send and receive HTTP requests, SSH also needs a program to carry out the requests and responses.

So, the SSH program involves two components - the SSH client and the SSH Server or Daemon. For instance, the client machine can be your laptop or desktop computer. The SSH Client application is usually installed and enabled by default on Linux & Mac operating systems, including Ubuntu desktop.

If you're on Windows, installing Git Bash is one of the easiest ways to enable SSH and other unix-like utilities.

You can check that by running the ssh command:

```
ssh
```

If it's installed, you'll get a brief usage information.

To get the detailed usage information, use the man command, which opens the ssh manual:

```
man ssh
```

In short, the SSH command utility allows you to initiate connections to a remote SSH server.

Now comes the SSH server.

In contrast to a client machine, an SSH server has both the client and the server program running on it. So it can receive incoming connections, as well as initate connections to other SSH servers.

The SSH server process, a.k.a SSH daemon, or SSHD, listens on port 22 for incoming connections.

On Ubuntu and Debian systems, you can check the process status using the systemctl command:

```
sudo systemctl status sshd
```

## SSH Initiation

Now, let's have a look at the connection process.

In an SSH session, the client is the one who always initiates the connection.

So, the client sends a TCP request to port 22 of the server, which has the SSH daemon process running on it.

Upon receiving the connection request, the server sends its public key fingerprint back to the client. Note that this is not the key you use during authentication. Instead it is the server's public key set up when the SSH program was installed on it. And it sends this key to all clients. Most often it is located in the _/etc/ssh/ssh_host_rsa_key.pub_. Along with that the server also sends the list of encryption & auth methods it supports.

If it's the first time you are connecting to that particular server, the client asks for user confirmation whether you really trust that server or not. If you answer yes, the program saves the public key to the **known_hosts** file. For subsequent connections, the client verifies the key with the existing value in the **known_hosts** file. It's analogous to an SSL certifying authority during SSL negotiation. If it doesn't match, you get a big warning as it can potentially be a man-in-the-middle attack.

After trusting the public key, the client genarates a number, encrypts it using that public key, and sends it back.

Now, let me briefly discuss public key and private key. Only the private key can decrypt something encrypted by the public key. The private key must be kept safely by the owner only, while the public key can be distributed to others.

Okay, back to our client and server model. The client ecrypts a number using the public key sent by the server and sends it back. If the server is able to decrypt it and return a confirmation, it means the server truly possess the private key.

So, the server authentication part is complete.

## Generating a Symmetric Key

In the meantime, both the server and the client agrees upon a symmetric key as well. This shared key is calculated independently, but its value will be the same. For more information on how it works, you can check out Diffie-Hellman key exchange algorithm.

This symmetric key will be used for all further communication between the client and the server.

Now, what's a symmetric key? In contrast to an asymmetric key pair where the public key is used for encryption and private key for decryption, symmetric key involves only one key, which is used for both encryption and decryption.

But why use a symmetric key? The main reason is, symmetric encryption has less overheads than using a pair of asymmetric keys.

## Athenticating the Client using Asymmetric Keys or Password

So, both the server and the client have arrived at a shared symmetric key for encrypting future messages.

Now the server needs to authenticate the client. Right?

There are two options for that:

- Password-based authentication
- Key-based authentication (using another pair of public & private keys)

Key-based authentication is generally more secure as it doesn't involve passwords, which can motivate some people to brute force your server. So, it might be wise to disable password authentication altogether from the server.

However, all the messages, including the password, will be sent encrypted,even if you use password authentication instead of ssh keys.

How? Using the shared symmetric key generated in the previous step. There is a common misconception that SSH uses this pair of public and private keys for encrypting the messages between client and server. But that's not true. The SSH key-pair is only used during authentication, not for encrypting the messages. It's done using the symmetric key.

Usually, the client generates the key pair - using the ssh-keygen command - then uploads the public key to the server, where it gets stored in the **authorized_keys** file. While the client keeps the private key. The default location of these keys will be the .ssh folder in the user's home folder.

So, to authenticate the client, the server encrypts a random number using the client's public key and sends it to the client. If the client holds the private key, it will be able to decrypt the number. Then it calculates the md5 hash of that number and sends it back, symmetrically encrypted.

Back there, the server already knows the number it sent. So it also calculates the _md5_ hash. Then compare the value with the one returned by the client. If it matches, then it proves the client has the private key.

Hence authentication is successful.