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
    <li><a href="#longevite">Mon sondage
restera-t-il longtemps en ligne ?</a></li>
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
mentions;
echo '</div>'."\n";

bandeau_pied_mobile();
echo '</form>'."\n";
echo '</body>'."\n";
echo '</html>'."\n";
