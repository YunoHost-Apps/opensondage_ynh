# OpenSondage pour YunoHost

[![Niveau d'intégration](https://dash.yunohost.org/integration/opensondage.svg)](https://dash.yunohost.org/appci/app/opensondage) ![](https://ci-apps.yunohost.org/ci/badges/opensondage.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/opensondage.maintain.svg)  
[![Installer OpenSondage avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=opensondage)

*[Read this readme in english.](./README.md)*
*[Lire ce readme en français.](./README_fr.md)*

> *Ce package vous permet d'installer OpenSondage rapidement et simplement sur un serveur YunoHost.
Si vous n'avez pas YunoHost, regardez [ici](https://yunohost.org/#/install) pour savoir comment l'installer et en profiter.*

## Vue d'ensemble

Service pour planifier un rendez-vous ou prendre une décision rapidement et facilement

**Version incluse :** 1.1.16~ynh1

**Démo :** https://framadate.org/

## Captures d'écran

![](./doc/screenshots/screenshots.jpg)

## Avertissements / informations importantes

## Limitations

* Impossible de configurer le courrier, que ce soit avec smtp ou avec sendmail. Voir https://framagit.org/framasoft/framadate/merge_requests/184
* Impossible d'utiliser SSOWAT pour identifier l'utilisateur actuel. Voir https://framagit.org/framasoft/framadate/issues/177

## Additional information

* Ce paquet contient une version personnalisée de Framadate (fork d'OpenSondage et Studs), les sources sont ici : https://git.framasoft.org/framasoft/framadate/.

## Documentations et ressources

* Site officiel de l'app : https://framadate.org/
* Documentation officielle utilisateur : https://yunohost.org/#/app_opensondage
* Documentation officielle de l'admin : https://framagit.org/framasoft/framadate/framadate/wikis/home
* Dépôt de code officiel de l'app : https://git.framasoft.org/framasoft/framadate
* Documentation YunoHost pour cette app : https://yunohost.org/app_opensondage
* Signaler un bug : https://github.com/YunoHost-Apps/opensondage_ynh/issues

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche testing](https://github.com/YunoHost-Apps/opensondage_ynh/tree/testing).

Pour essayer la branche testing, procédez comme suit.
```
sudo yunohost app install https://github.com/YunoHost-Apps/opensondage_ynh/tree/testing --debug
ou
sudo yunohost app upgrade opensondage -u https://github.com/YunoHost-Apps/opensondage_ynh/tree/testing --debug
```

**Plus d'infos sur le packaging d'applications :** https://yunohost.org/packaging_apps