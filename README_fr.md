# OpenSondage pour YunoHost

[![Integration level](https://dash.yunohost.org/integration/opensondage.svg)](https://dash.yunohost.org/appci/app/opensondage) ![](https://ci-apps.yunohost.org/ci/badges/opensondage.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/opensondage.maintain.svg)  
[![Installer OpenSondage avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.png)](https://install-app.yunohost.org/?app=opensondage)

*[Read this readme in english.](./README.md)* 

> *Ce package vous permet d'installer OpenSondage rapidement et simplement sur un serveur YunoHost.  
Si vous n'avez pas YunoHost, consultez [le guide](https://yunohost.org/#/install) pour apprendre comment l'installer.*


## Vue d'ensemble

OpenSondage est un service en ligne permettant de planifier un rendez-vous ou de prendre une décision rapidement et facilement. C'est une alternative logicielle libre et communautaire à Doodle.

**Version incluse :**  1.1.10

## Captures d'écran

![](https://framadate.org/images/date.png)

## Démo

* [Démo YunoHost](https://demo.yunohost.org/date/)
* [Démo officielle](https://framadate.org/)

## Configuration

## Documentation

 * Documentation officielle : https://framagit.org/framasoft/framadate/framadate/wikis/home
 * Documentation YunoHost : https://yunohost.org/#/app_opensondage_fr

## Caractéristiques spécifiques YunoHost

#### Support multi-utilisateur

#### Architectures supportées

* x86-64 - [![Build Status](https://ci-apps.yunohost.org/ci/logs/opensondage%20%28Apps%29.svg)](https://ci-apps.yunohost.org/ci/apps/opensondage/)
* ARMv8-A - [![Build Status](https://ci-apps-arm.yunohost.org/ci/logs/opensondage%20%28Apps%29.svg)](https://ci-apps-arm.yunohost.org/ci/apps/opensondage/)

## Limitations

* Impossible de configurer le courrier, que ce soit avec smtp ou avec sendmail. Voir https://framagit.org/framasoft/framadate/merge_requests/184
* Impossible d'utiliser SSOWAT pour identifier l'utilisateur actuel. Voir https://framagit.org/framasoft/framadate/issues/177

## Additional information

* Ce paquet contient une version personnalisée de Framadate (fork d'OpenSondage et Studs), les sources sont ici : https://git.framasoft.org/framasoft/framadate/.

## Liens

 * Signaler un bug : https://github.com/YunoHost-Apps/opensondage_ynh/issues
 * Site de l'application OpenSondage : https://git.framasoft.org/framasoft/framadate/framadate
 * Dépôt de l'application principale : https://git.framasoft.org/framasoft/framadate/framadate
 * Site web YunoHost : https://yunohost.org/

---

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche testing](https://github.com/YunoHost-Apps/opensondage_ynh/tree/testing).

Pour essayer la branche testing, procédez comme suit.
```
sudo yunohost app install https://github.com/YunoHost-Apps/opensondage_ynh/tree/testing --debug
or
sudo yunohost app upgrade opensondage -u https://github.com/YunoHost-Apps/opensondage_ynh/tree/testing --debug
```
