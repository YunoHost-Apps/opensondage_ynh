opensondage_ynh
===============

OpenSondage for YunoHost

OpenSondage is used to poll people invite for a meeting.

## Change done from original sources
This package contains a custom version of Framadate (fork of OpenSondage and Studs), the sources are here: https://git.framasoft.org/framasoft/framadate/.

## Broken things

 1. There is no way to configure mail, either with smtp or with sendmail. See https://framagit.org/framasoft/framadate/merge_requests/184
 2. There is no way to use SSOWAT to identify current user. See https://framagit.org/framasoft/framadate/issues/177

## Screenshot

<img src="/sources/images/date.png" style="max-width:100%;" alt="Screen containing a meeting poll"/>
<img src="/sources/images/classic.png" style="max-width:100%;" alt="Screen containing a vote poll to choose a restaurant"/>
