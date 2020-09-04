# OpenSondage for YunoHost

[![Integration level](https://dash.yunohost.org/integration/opensondage.svg)](https://dash.yunohost.org/appci/app/opensondage) ![](https://ci-apps.yunohost.org/ci/badges/opensondage.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/opensondage.maintain.svg)  
[![Install OpenSondage with YunoHost](https://install-app.yunohost.org/install-with-yunohost.png)](https://install-app.yunohost.org/?app=opensondage)

*[Lire ce readme en français.](./README_fr.md)*

> *This package allow you to install OpenSondage quickly and simply on a YunoHost server.  
If you don't have YunoHost, please see [here](https://yunohost.org/#/install) to know how to install and enjoy it.*

## Overview

OpenSondage is an online service for planning an appointment or making a decision quickly and easily. It's a community free/libre software alternative to Doodle.

**Shipped version:** 1.1.10

## Screenshots

![](https://framadate.org/images/date.png)

## Demo

* [YunoHost demo](https://demo.yunohost.org/date/)
* [Official demo](https://framadate.org/)

## Configuration

## Documentation

 * Official documentation: https://framagit.org/framasoft/framadate/framadate/wikis/home
 * YunoHost documentation: https://yunohost.org/#/app_opensondage

## YunoHost specific features

#### Multi-users support

#### Supported architectures

* x86-64 - [![Build Status](https://ci-apps.yunohost.org/ci/logs/opensondage%20%28Apps%29.svg)](https://ci-apps.yunohost.org/ci/apps/opensondage/)
* ARMv8-A - [![Build Status](https://ci-apps-arm.yunohost.org/ci/logs/opensondage%20%28Apps%29.svg)](https://ci-apps-arm.yunohost.org/ci/apps/opensondage/)

## Limitations

* There is no way to configure mail, either with smtp or with sendmail. See https://framagit.org/framasoft/framadate/merge_requests/184
* There is no way to use SSOWAT to identify current user. See https://framagit.org/framasoft/framadate/issues/177

## Additional information

* This package contains a custom version of Framadate (fork of OpenSondage and Studs), the sources are here: https://git.framasoft.org/framasoft/framadate/.

## Links

 * Report a bug: https://github.com/YunoHost-Apps/opensondage_ynh/issues
 * OpenSondage website: https://git.framasoft.org/framasoft/framadate/framadate
 * OpenSondage repository: https://git.framasoft.org/framasoft/framadate/framadate
 * YunoHost website: https://yunohost.org/

---

## Developers info

Please do your pull request to the [testing branch](https://github.com/YunoHost-Apps/opensondage_ynh/tree/testing).

To try the testing branch, please proceed like that.
```
sudo yunohost app install https://github.com/YunoHost-Apps/opensondage_ynh/tree/testing --debug
or
sudo yunohost app upgrade opensondage -u https://github.com/YunoHost-Apps/opensondage_ynh/tree/testing --debug
```
