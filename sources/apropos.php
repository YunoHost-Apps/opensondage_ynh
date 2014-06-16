<?php
//==========================================================================
//
//Université de Strasbourg - Direction Informatique
//Auteur : Guilhem BORGHESI
//Création : Février 2008
//
//borghesi@unistra.fr
//
//Ce logiciel est régi par la licence CeCILL-B soumise au droit français et
//respectant les principes de diffusion des logiciels libres. Vous pouvez
//utiliser, modifier et/ou redistribuer ce programme sous les conditions
//de la licence CeCILL-B telle que diffusée par le CEA, le CNRS et l'INRIA 
//sur le site "http://www.cecill.info".
//
//Le fait que vous puissiez accéder à cet en-tête signifie que vous avez 
//pris connaissance de la licence CeCILL-B, et que vous en avez accepté les
//termes. Vous pouvez trouver une copie de la licence dans le fichier LICENCE.
//
//==========================================================================
//
//Université de Strasbourg - Direction Informatique
//Author : Guilhem BORGHESI
//Creation : Feb 2008
//
//borghesi@unistra.fr
//
//This software is governed by the CeCILL-B license under French law and
//abiding by the rules of distribution of free software. You can  use, 
//modify and/ or redistribute the software under the terms of the CeCILL-B
//license as circulated by CEA, CNRS and INRIA at the following URL
//"http://www.cecill.info". 
//
//The fact that you are presently reading this means that you have had
//knowledge of the CeCILL-B license and that you accept its terms. You can
//find a copy of this license in the file LICENSE.
//
//==========================================================================

session_start();

include_once('variables.php');
include_once( 'i18n.php' );
if (file_exists('bandeaux_local.php')) {
  include_once('bandeaux_local.php');
} else {
  include_once('bandeaux.php');
}

//affichage de la page
echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">'."\n";
echo '<html>'."\n";
echo '<head>'."\n";
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">'."\n";
echo '<title>'.NOMAPPLICATION.'</title>'."\n";
echo '<link rel="stylesheet" type="text/css" href="style.css">'."\n";
echo '</head>'."\n";
echo '<body>'."\n";

framanav();

//debut du formulaire
echo '<form name=formulaire action="apropos.php" method="POST">'."\n";

//bandeaux de tete
logo();
bandeau_tete();
bandeau_titre(_("About"));
sous_bandeau();

echo '<div class=corps>'."\n";

echo <<<mentions
<ul>
  <li><a href="#faq">Questions fréquentes</a></li>
  <ul>
    <li><a href="#framadate">Qu'est-ce que OpenSondage 
?</a></li>
    <li><a href="#studs">Quelles différences entre
OpenSondage et STUdS ?</a></li>
    <li><a href="#doodle">Quelles différences entre
OpenSondage et Doodle ?</a></li>
  </ul>
  <li><a href="#mentions">Mentions légales</a></li>
  <li><a href="#credits">Crédits</a></li>
  <li><a href="#licence">Licence</a></li>
</ul>
<hr style="width: 100%; height: 2px;">
<h1><a name="faq"></a>Questions fréquentes</h1>
<h3><a name="framadate"></a>Qu'est-ce que
OpenSondage ?</h3>
OpenSondage est un service en ligne permettant de planifier un
rendez-vous rapidement et simplement. 
<h3><a name="studs"></a>Quelles différences
entre OpenSondage et STUdS ! ?</h3>
OpenSondage est un logiciel libre <a
 href="https://github.com/leblanc-simon/OpenSondage">OpenSondage</a>.
OpenSondage est lui-même basé sur le logiciel <a
 href="http://studs.u-strasbg.fr">STUdS !</a> développé
par l'Université de Strasbourg. <br>
Après avoir testé STUdS, nous avons décidé d'apporter de nombreuses
modifications, notamment ergonomiques, au code source existant.
L'ensemble de ces modifications ne pouvaient entrer dans le cadre
d'utilisation d'un logiciel déjà en production dans une université et
aurait été (fort logiquement) rejetté de la branche principale de
développement. C'est pourquoi les créateurs d'OpenSondage ont préferé "<a
 href="http://fr.wikipedia.org/wiki/Fork_%28d%C3%A9veloppement_logiciel%29">forker</a>"
STUdS pour créer OpenSondage.<br>
<h3><a name="doodle"></a>Quelles différences
entre OpenSondage et <a href="http://doodle.com">Doodle</a>
?</h3>
Aujourd'hui, le danger pour le logiciel libre
ne provient plus de Microsoft ou d'Adobe et de leurs logiciels qu'on
installe sans avoir le code source, mais des applications web "dans les
nuages" proposés comme services par des entreprises.<br>
<br>
Cela pour au moins 4 raisons :<br>
1- <span style="font-weight: bold;">sécurité</span>
: aucune garantie ne peut vous être apportée quand au fait les données
soient correctement sauvegardées et protégées, ni que le<br>
code source "officiel" soit réellement celui que vous utilisez en ligne.<br>
2- <span style="font-weight: bold;">fiabilité/perennité</span>
: le service peut tomber en panne, et rien&nbsp;ne garanti que la
société Doodle sera toujours là demain et maintiendra le site<br>
3- <span style="font-weight: bold;">propriété des données</span>
: beaucoup d'entreprises s'autoproclament co-détentrices de vos
contenus "clouds" (ex: Facebook impose une clause de partage des droits
sur vos contenus, vos données, vos photos)<br>
4-<span style="font-weight: bold;"> vie privée</span>
: une entreprise - comme Doodle - doit gagner de l'argent (et il n'y a
aucun mal à cela). Mais si elle est en difficulté financière, elle peut
décider de changer ses conditions d'utilisation et vendre vos données à
des tiers (alors que Framasoft, asso loi 1901 d'intérêt général, n'aura
jamais d'intérêt à le faire).<br>
<br>
A cela s'ajoute le problème, plus éthique, de la publicité.<br>
<br>
Les problèmes 1 et 2 concernent aussi cette installation d'OpenSondage : rien ne garanti
la sécurité et la fiabilité du service (d'autant plus que les
administrateurs systèmes du Réald sont bénévoles).<br>
<br>
Par contre :<br>
- les problemes 3 et 4 ne sont pas d'actualité avec le couteau-suisse, exploité
par une association loi 1901<br>
<br>
Bref, oui OpenSondage est inspiré de Doodle.com, et oui Doodle est un
excellent service. Mais Doodle reste une "boite noire" pour
l'utilisateur final qui va sur doodle.com. OpenSondage essaie de
répondre, modestement, à cette problématique en montrant que des
alternatives libres existent et qu'on peut les installer "chez soi".<br>
<hr style="width: 100%; height: 2px;">




<h1><a name="faq"></a>Mentions légales</h1>
<h2>Éditeur et Responsable de la publication</h2>
mentions;
if (!empty(URL_INFO_LEGAL))
{
	echo '<p>Voir la page des <a href="'.URL_INFO_LEGAL.'">Informations légales</a></p>';
}
else
{
	echo <<<mentions2
<p>Vous pouvez rentrer en contact avec l'Editeur et le
Responsable de la publication en passant par la page "<a href="contacts.php">contact</a>".</p>
<p>Les propos tenus sur ce site ne représentent que et uniquement
l’opinion de leur auteur, et n’engagent ni l'administrateur de l'application, ni l'hébergeur, ni les personnes ayant contribuer à la création de l'application.</p>

<h2>Données personnelles</h2>
<p>Les données personnelles collectées par OpenSondage sont
uniquement destinées à un usage interne. En aucun cas ces données ne
seront cédées ou vendues à des tiers.
Conformément à l’article 39 de la loi du 6 janvier 1978 relative à
l’informatique, aux fichiers et aux libertés, vous avez un droit
d’accès, de modification et d’opposition sur vos données personnelles
enregistrées par le blog.
Dans ce cas, utilisez le formulaire de contact.</p>
<h2>Conditions de modération/suppression de sondages</h2>
<p>Les sondages de OpenSondage bénéficient d'une URL aléatoire,
mais publique. Si vous souhaitez supprimer un sondage, utilisez
l'adresse d'aministration fournie à la création. Vous pouvez
exceptionnellement demander la suppression d'un sondage en utilisant la
page de contact.</p>
<h2>Notification des contenus litigieux</h2>
<p>Conformément à l’article 6 I 5° LCEN, la connaissance des
contenus litigieux est présumée acquise par L’Éditeur lorsqu’il lui est
notifié, par lettre recommandée avec accusé de réception adressée au
siège social de L’Éditeur, la totalité des éléments suivants (i) la
date de la notification&nbsp;; (ii) si le notifiant est une
personne physique&nbsp;: ses nom, prénoms, profession, domicile,
nationalité, date et lieu de naissance&nbsp;; si le notifiant est
une personne morale&nbsp;: sa forme, sa dénomination, son siège
social et l’organe qui la représente légalement&nbsp;; (iii) les
nom et domicile du destinataire ou, s’il s’agit d’une personne morale,
sa dénomination et son siège social&nbsp;; (iv) la description des
faits litigieux et leur localisation précise&nbsp;; (v) les motifs
pour lesquels le contenu doit être retiré, comprenant la mention des
dispositions légales et des justifications de faits&nbsp;; (vi) la
copie de la correspondance adressée à l’auteur ou à l’éditeur des
informations ou activités litigieuses demandant leur interruption, leur
retrait ou leur modification, ou la justification de ce que l’auteur ou
l’éditeur n’a pu être contacté.</p>
<p>A défaut d’envoi de la totalité de ces éléments, la
notification ne sera pas prise en compte par L’Éditeur et ce dernier ne
pourra en conséquence être présumé informé d’un contenu litigieux.</p>
<p>L’Éditeur se réserve le droit d’engager des poursuites à
l’encontre de toute personne ayant usé abusivement du droit réservé par
l’article 6 I 4° LCEN. L’Éditeur vous rappelle que toute personne qui
aurait présenté un contenu ou une activité comme étant illicite dans le
but d’en obtenir le retrait ou d’en faire cesser la diffusion alors
qu’elle a connaissance du caractère inexact de cette information, est
susceptible d’encourir une peine d’un an d’emprisonnement et de 15.000
€uros d’amende.</p>
<h2>Licences, droits de reproduction</h2>
<p>Cette instance du logiciel OpenSondage,
basé sur STUdS, est publiée sous licence libre <a
href="http://www.cecill.info/licences.fr.html">CeCILL-B</a>.
Les contenus (sondages) sont publiés sous licence Creative Commons
BY-SA. Cela signifie que si l'adresse de votre sondage est connue d'un
individu, vous autorisez cette personne à utiliser, partager, modifier
votre sondage.</p>
<hr style="width: 100%; height: 2px;">
mentions2;
}


echo <<<mentions3
<h2><a name="credits"></a>Crédits</h2>
<b>Application d'origine</b><br>
<br>
L'application OpenSondage est une instance du logiciel <b><a
 href="http://studs.u-strasbg.fr">STUdS !</a></b>
développé à l'Université de Strasbourg depuis 2008.<br>
<br>
Pour les besoins du paquet d'installation YunoHost, STUdS a fait l'objet d'un fork par
le mainteneur du paquet. Les sources sont disponibles sur le Github <a
 href="https://github.com/zamentur/opensondage_ynh">OpenSondage</a>.<br>
<br>

<b>Propositions am&eacute;liorations</b><br><br>
Si quelquechose venait &agrave; vous manquer, vous pouvez nous en faire part via le <a href="contacts.php">formulaire en ligne</a>. <br>
Les derni&egrave;res am&eacute;liorations sont visibles dans le fichier <a href="CHANGELOG">CHANGELOG</a>.<br><br>

<b>Remerciements</b><br>
<br>
<b><a href="http://studs.u-strasbg.fr">STUdS !</a></b>&nbsp;:
Pour leurs contributions techniques ou ergonomiques : Guy, Christophe,
Julien, Pierre, Romaric, Matthieu, Catherine, Christine, Olivier,
Emmanuel et Florence <br>
<a style="font-weight: bold;"
 href="https://github.com/leblanc-simon/OpenSondage">Framadate</a>
: &nbsp;Simon Leblanc (développement principal), Pierre-Yves Gosset
(développement, graphisme), la communauté Framasoft.<br>
<a style="font-weight: bold;"
 href="https://github.com/zamentur/OpenSondage">YunoHost</a>: Valentin Grimaud (développement du paquet YunoHost)
<br>





<h2><b><a name="licence"></a>Licence</b></h2>
Framadate est placé, comme <b><a
 href="http://studs.u-strasbg.fr">STUdS !</a>,</b>
sous la licence logicielle libre <a
 href="http://www.cecill.info/licences.fr.html">CeCILL-B</a>.<br>
<br>
mentions3;




bandeau_pied_mobile();
echo '</form>'."\n";
echo '</body>'."\n";
echo '</html>'."\n";
