---
layout: "post"
title: "Encrypt your disks"
date: "2018-12-20 15:01"
---

If you have a laptop, you should *always* encrypt your harddisk. If you have not already done, make this your new year's resolution - better yet, do it today.

Loosing your laptop sucks, but it sucks a lot more if you have to fear if someone else somehow gets access to all your data. Even if you have a login-password and have all your data in the cloud, you data could still be a at rest in the temporary folder. And a potential thief could access all your 'saved passwords'.

Microsoft Windows and Apple's OS X and most Linux distribution like Ubuntu make disk encryption very easy - it's hopefully the default on any new laptop. If you want to encrypt your disk after installation, I'd refer to the documentation of your operation system: *[Windows](https://www.howtogeek.com/234826/how-to-enable-full-disk-encryption-on-windows-10/)*, *[OS X](https://support.apple.com/en-us/HT204837)*, search the *[web](https://askubuntu.com/questions/366749/enable-disk-encryption-after-installation)* or ask a colleague or family-member.

On the operation system I am using, [Kubuntu Linux](https://kubuntu.org), disk encryption can be chosen during installation and contrary to Linux' reputation that's very easy.  My laptop has an SSD as main-disk containing the root dir, and an additional disk of 2TB for all other data that doesn't fit on my SSD. Of course it's encrypted too.
At first, my configuration required me to enter a passphrase twice, once for the SSD and a second time for the additional disk. Bit of a nuisance. Thanks to this wonderful howto, I have a set-up that's hardly less secury, but easier to use: [HOWTO: Automatically Unlock LUKS Encrypted Drives With A Keyfile](https://www.howtoforge.com/automatically-unlock-luks-encrypted-drives-with-a-keyfile)

The encryption key is stored on my main SSD, so I only have to enter the passphrase for that SSD. After that, the key that's stored on the SSD is used to decrypt the second disk. As mentioned in the howto, if people get access to your root dir all is lost anyway.
