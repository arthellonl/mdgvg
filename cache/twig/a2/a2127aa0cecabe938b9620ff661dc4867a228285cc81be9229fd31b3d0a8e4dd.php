<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_14ec5ff0704ae5e47d21e4ee54ad3e2570d01568527d26e32cb2ba38629b8300 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 18
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "\t\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "\t\t";
        $this->displayBlock('assets', $context, $blocks);
        // line 30
        echo "\t</head>
\t<body>
\t\t";
        // line 32
        $this->displayBlock('header', $context, $blocks);
        // line 57
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 316
        echo "\t\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 326
        echo "\t\t";
        $this->displayBlock('bottom', $context, $blocks);
        // line 344
        echo "\t</body>
</html>";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "\t\t<!-- robots noindex for DEV ONLY -->
\t\t<meta name=\"robots\" content=\"noindex, nofollow\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
\t\t<meta charset=\"utf-8\" />
\t\t<title>Manon de Groot-van Gelder — Stemactrice, voice-over en theatermaker</title>
\t\t<meta name=\"description\" content=\"\" />
\t\t<meta name=\"keywords\" content=\"\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover\" />
\t\t<meta name=\"referrer\" content=\"origin-when-cross-origin\" />
\t\t<!-- <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["siteUrl"] ?? null), "html", null, true);
        echo "assets/favicon.ico\" rel=\"icon\" type=\"image/x-icon\" /> -->
\t\t<!-- <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["siteUrl"] ?? null), "html", null, true);
        echo "assets/favicon.png\"> -->
\t\t<link href=\"https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans:400,600,600i,700,800&display=swap\" rel=\"stylesheet\">
\t\t";
    }

    // line 18
    public function block_javascripts($context, array $blocks = [])
    {
        // line 19
        echo "\t\t<!-- <script defer src=\"";
        echo twig_escape_filter($this->env, ($context["siteUrl"] ?? null), "html", null, true);
        echo "assets/svgxuse.js\"></script> -->
\t\t<!-- <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["siteUrl"] ?? null), "html", null, true);
        echo "assets/jquery-2.1.4.min.js\"></script> -->
\t\t";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 23
        echo "\t\t<!-- <link href=\"assets/css/main.css\" rel='stylesheet' type='text/css' /> -->
\t\t";
        // line 24
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/main.css", 1 => 98], "method");
        // line 25
        echo "\t\t";
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 26
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 27
        echo "\t    \t";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
\t    \t";
        // line 28
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
\t\t";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 32
    public function block_header($context, array $blocks = [])
    {
        // line 33
        echo "\t\t<section id=\"header\">
\t\t\t<!-- <div class=\"nav-wrapper\"> -->
\t\t\t\t<a href=\"#\" id=\"logo\"></a>
\t\t\t\t<nav>
\t\t\t\t\t<input type=\"checkbox\" id=\"toggle-nav\">
\t\t\t\t\t<label for=\"toggle-nav\" id=\"nav-icon4\" class=\"toggle-nav-button\"><span></span><span></span><span></span></label>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Over mij</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Demo</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Prijzen</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Reviews</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t<!-- </div> -->
\t\t\t<h2>
\t\t\t\tFris.<br>
\t\t\t\tHelder.<br>
\t\t\t\tPositief.<br>
\t\t\t\tGenieten.<br>
\t\t\t\tToegankelijk.
\t\t\t</h2>
\t\t</section>
\t\t";
    }

    // line 57
    public function block_body($context, array $blocks = [])
    {
        // line 58
        echo "\t\t<section id=\"overmij\">
\t\t\t<div class=\"aboutme-content\">
\t\t\t<h2>Ik ben <span>Manon</span></h2>
\t\t\t<h1>Stemactrice, voice-over, trainer en theatermaker</h1>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col4 col3-xl col12-xs\">
\t\t\t\t\t<figure class=\"avatar\" style=\"background-image:";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/manon-avatar.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<span class=\"avatar-title\">Manon</span>
\t\t\t\t\t</figure>
\t\t\t\t</div>
\t\t\t\t<div class=\"col8 col12-xs\">
\t\t\t\t\t<div class=\"aboutme-text\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\tIk ben een energieke, ondernemende duizendpoot met een zorgvuldig oog (en oor) voor detail. Een creatieve geest die altijd op zoek is naar nieuwe manieren om te inspireren. Of het nu via mijn stem is, via een voorstelling of via een training; met een frisse blik en een knipoog ga ik met veel plezier voor je aan de slag.

\t\t\t\t\t\tNaast mijn werk als voice-over en (stem)actrice ben ik eigenaar van zowel de <a href=\"#\" class=\"orangelink\">Storytelling Fabriek</a> als <a href=\"#\">buro ROOD</a>.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<p>
\t\t\t\t\t\tMijn liefde voor locatietheater uit ik bij <a href=\"#\" class=\"redlink\">toneelgroep ROOD</a>, waaraan ik al ruim twaalf jaar als maker en artistiek leider verbonden ben.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col12 tagline\">
\t\t\t\t\t\t\tMijn stem kan <em>jouw</em> stem zijn...
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t
\t\t<section id=\"demos\" class=\"\">
\t\t\t<h3>Demo's</h3>
\t\t\t<h4>Dit is mijn stem</h4>
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col6 col12-sm\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"demo_item\">
\t\t\t\t\t\t\t<span class=\"geluidaan\"></span>
\t\t\t\t\t\t\t<div class=\"mediPlayer\">
\t\t\t\t\t\t\t    <audio class=\"listen\" preload=\"none\" src=\"assets/audio/piano.mp3\"></audio>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"demo_description\">
\t\t\t\t\t\t\t\t<h5>Lekker fris!</h5>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tVan antiroos-shampoo tot het nieuwe deltaprogramma
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col6 col12-sm\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"demo_item\">
\t\t\t\t\t\t\t<div class=\"mediPlayer\">
\t\t\t\t\t\t\t    <audio class=\"listen\" preload=\"none\" src=\"assets/audio/a.wav\"></audio>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"demo_description\">
\t\t\t\t\t\t\t\t<h5>En een tikkie uitgebreider...</h5>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tVan een winkel waar echt iedereen blij van wordt naar een heerlijke koffie om uitgebreid van te genieten. Met een eindhalte tussen de tulpen.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col6 col12-sm\">
\t\t\t\t\t<video src=\"assets/video/test.mp4\" width=\"100%\" height=\"auto\"  controls></video>
\t\t\t\t</div>
\t\t\t\t<div class=\"col6 col12-sm\">
\t\t\t\t\t<h5>First time right. That's right!</h5>
\t\t\t\t\t<p>
\t\t\t\t\t\tDeze film maakte ik voor Allianz Benelux en guess what...
\t\t\t\t\t\tDe voice-over sprak ik ook in.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t
\t\t</section>
\t\t
\t\t<section id=\"prijzen\" class=\"\">
\t\t\t<div class=\"pricelist-content\">
\t\t\t\t<h3>Prijzen</h3>
\t\t\t\t<h4>Super snelle opname in mijn thuisstudio.</h4>



\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col12\">
\t\t\t\t\t\t<img src=\"assets/img/icon-voice.svg\" />
\t\t\t\t\t\tInspreken bedrijfsfilm, videoproductie, e-learning
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col2 col6-sm col6-xs price\">
\t\t\t\t\t\t\t\t<span>&euro;200</span>
\t\t\t\t\t\t\t\t<em>0-250 woorden</em>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col2 col6-sm col6-xs price\">
\t\t\t\t\t\t\t\t<span>&euro;300</span>
\t\t\t\t\t\t\t\t<em>250&ndash;500 woorden</em>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col2 col6-sm col6-xs price\">
\t\t\t\t\t\t\t\t<span>&euro;370</span>
\t\t\t\t\t\t\t\t<em>500&ndash;1500 woorden</em>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col2 col6-sm col6-xs price\">
\t\t\t\t\t\t\t\t<span>Prijs op maat</span>
\t\t\t\t\t\t\t\t<em>1500+ woorden</em>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr />
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col6 col12-sm col12-xs\">
\t\t\t\t\t\t<img src=\"assets/img/icon-radiocommercial.svg\" />
\t\t\t\t\t\tRadio commercial
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col4 col6-sm col6-xs price\">
\t\t\t\t\t\t\t\t<span>&euro;200</span>
\t\t\t\t\t\t\t\t<em>regionaal uitzendgebied</em>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col4 col6-sm col6-xs price\">
\t\t\t\t\t\t\t\t<span>&euro;400</span>
\t\t\t\t\t\t\t\t<em>nationaal uitzendgebied</em>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr />
\t\t\t\t\t<div class=\"col6 col12-sm col12-xs\">
\t\t\t\t\t\t<img src=\"assets/img/icon-tvcommercial.svg\" />
\t\t\t\t\t\tTv commercial
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col4 col6-sm col6-xs price\">
\t\t\t\t\t\t\t\t<span>&euro;300</span>
\t\t\t\t\t\t\t\t<em>regionaal uitzendgebied</em>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col4 col6-sm col6-xs price\">
\t\t\t\t\t\t\t\t<span>&euro;600</span>
\t\t\t\t\t\t\t\t<em>nationaal uitzendgebied</em>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr />
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col6 col12-sm col12-xs\">
\t\t\t\t\t\t<img src=\"assets/img/icon-webcommercial.svg\" />
\t\t\t\t\t\tWeb commercial
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col4 col12-sm  price\">
\t\t\t\t\t\t\t\t<span>&euro;500</span>
\t\t\t\t\t\t\t\t<!-- <em>regionaal uitzendgebied</em> -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr />
\t\t\t\t\t<div class=\"col6 col12-sm col12-xs\">
\t\t\t\t\t\t<img src=\"assets/img/icon-cartoon.svg\" />
\t\t\t\t\t\tAnimatie en cartoon
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col4 col12-sm price\">
\t\t\t\t\t\t\t<span>Prijs op maat</span>
\t\t\t\t\t\t\t<!-- <em>regionaal uitzendgebied</em> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr />
\t\t\t\t<p>
\t\t\t\t\tVoor bewerking, audio clean up, mixage, sounddesign, copywriting: <a href=\"#\">neem contact op</a>
\t\t\t\t</p>
\t\t\t\t<p class=\"alt\">
\t\t\t\t\tPrijzen zijn voor 1 versie en exclusief uitkoop, exclusief btw
\t\t\t\t</p>
\t\t\t</div>
\t\t</section>

\t\t<section id=\"reviews\" class=\"\">
\t\t\t<h3>Reviews</h3>
\t\t\t<h4>Lieve mensen over mij</h4>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col3 col12-xs\">
\t\t\t\t\t<figure class=\"avatar\" style=\"background-image:url(assets/img/foto-Renata.jpeg);\" />
\t\t\t\t\t\t<span class=\"avatar-title\">Renata</span>
\t\t\t\t\t</figure>
\t\t\t\t</div>
\t\t\t\t<div class=\"col6 col9-sm col12-xs\">
\t\t\t\t\t<h5>Renata Wolak <em>&middot; Customer Experience Manager Allianz Benelux</em></h5>
\t\t\t\t\t<p>
\t\t\t\t\t\t\"Ik heb met Manon mogen werken aan de verfilming van een aantal klantverhalen. Niet zomaar verhalen, maar herkenbare verhalen die gewenst gedrag weergeven en medewerkers bewegen tot verandering en klantgerichtheid. De creatieve geest van Manon, haar humor en haar prachtige, heldere stem (Manon heeft de voice-overs voor de films ingesproken) vallen meteen op. De kwaliteit van de films en de kracht van de voice-overs hebben bijgedragen aan het succes dat we samen hebben neergezet. 'First time right', een belangrijke principe voor Allianz. Maar hoe breng je dit principe tot leven in een groot bedrijf als het onze? Door storytelling samen met Manon! Manon bedankt!\"
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col3 col12-xs\">
\t\t\t\t\t<figure class=\"avatar\" style=\"background-image:url(assets/img/pim-2.png);\" />
\t\t\t\t\t\t<span class=\"avatar-title\">Pim</span>
\t\t\t\t\t</figure>
\t\t\t\t</div>
\t\t\t\t<div class=\"col6 col9-sm col12-xs\">
\t\t\t\t\t<h5>Pim Veth <em>&middot; Voice-over, presentator, (stem)acteur</em></h5>
\t\t\t\t\t<p>
\t\t\t\t\t\t\"Ik werk erg graag met Manon. Haar stem is prettig, vertrouwd en warm. Ze levert snel en professioneel werk en denkt erg goed mee. Ik ben zelf werkzaam als voice-over en weet hoe belangrijk het is mee te denken en snel te kunnen schakelen. Elk merk, elke klant verdient een eigen geluid en Manon is in staat elke opdrachtgever een eigen geluid te geven. Haar achtergrond als regisseur en actrice werkt ongelooflijk in haar voordeel.\"
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col3 col12-xs\">
\t\t\t\t\t<figure class=\"avatar\" style=\"background-image:url(assets/img/ELLEN-Persoon.jpg);\" />
\t\t\t\t\t\t<span class=\"avatar-title\">Ellen</span>
\t\t\t\t\t</figure>
\t\t\t\t</div>
\t\t\t\t<div class=\"col6 col9-sm col12-xs\">
\t\t\t\t\t<h5>Ellen Persoon <em>&middot; Actrice bij Studio de Bakkerij</em></h5>
\t\t\t\t\t<p>
\t\t\t\t\t\t\"In 2019 werkte ik als actrice samen met Manon, een mooi intensief traject. Ik vind haar als regisseur enorm inspirerend. Ik heb haar ervaren als een vakvrouw die het ambacht verstaat en die naast haar heldere maar nooit starre visie een heel prettige en veilige omgeving creëert waarin ik me als acteur kon ontwikkelen. Haar ‘lullen en poetsen’ mentaliteit maakte het werken met haar een feest! Ze geeft ruimte aan vorm èn inhoud. Manon heeft het vermogen echt te luisteren; ook in haar acteurs zoekt ze de verhalen en dat voel je. Er zit oprechtheid in haar vragen en in haar aanwezigheid als regisseur en mens.\"
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section id=\"contact\">
\t\t\t<div class=\"contact-content\">
\t\t\t\t<h3>Contact</h3>
\t\t\t\t<h4>Leuk als je me mailt</h4>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col12\">
\t\t\t\t\t\t<form action=\"\" method=\"\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<fieldset class=\"col6 col12-sm\">
\t\t\t\t\t\t\t\t\t<label for=\"name\">Vul je naam in:</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"name\" value=\"\" />
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<fieldset class=\"col6 col12-sm\">
\t\t\t\t\t\t\t\t\t<label for=\"email\">Je e-mailadres:</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" value=\"\" id=\"email\" />
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<fieldset class=\"col12\">
\t\t\t\t\t\t\t\t\t<label for=\"message\">Berichtje:</label>
\t\t\t\t\t\t\t\t\t<textarea value=\"\" id=\"message\"></textarea>
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\">Sturen!</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t";
    }

    // line 316
    public function block_footer($context, array $blocks = [])
    {
        // line 317
        echo "\t\t<section id=\"footer\">
\t\t\t<div class=\"footer-content\">
\t\t\t\t<div class=\"social-links\">
\t\t\t\t\t<em>Manon</em> <span>vind je op</span> <div class=\"social-buttons\"><a href=\"#\" class=\"twitter\">Twitter</a> <a href=\"#\" class=\"facebook\">Facebook</a> <a href=\"#\" class=\"linkedin\">LinkedIn</a></div>
\t\t\t\t</div>
\t\t\t\t<h4 class=\"tagline\">Stemactrice, voice-over en theatermaker</h4>
\t\t\t</div>
\t\t</section>
\t\t";
    }

    // line 326
    public function block_bottom($context, array $blocks = [])
    {
        // line 327
        echo "\t\t<script>

\t\t</script>
\t\t<script
\t        src=\"https://code.jquery.com/jquery-1.11.2.min.js\"
\t        integrity=\"sha256-Ls0pXSlb7AYs7evhd+VLnWsZ/AqEHcXBeMZUycz/CcA=\"
\t        crossorigin=\"anonymous\"></script>
\t\t<script src=\"assets/js/player.js\"></script>
\t\t<!-- <script src=\"assets/js/jquery.paroller.min.js\"></script> -->

\t\t<script>
\t\t    \$(document).ready(function () {
\t\t        \$('.mediPlayer').mediaPlayer();
\t\t    });
\t\t</script>
\t\t";
        // line 342
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
\t\t";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  479 => 342,  462 => 327,  459 => 326,  447 => 317,  444 => 316,  189 => 65,  180 => 58,  177 => 57,  150 => 33,  147 => 32,  140 => 28,  135 => 27,  132 => 26,  123 => 25,  121 => 24,  118 => 23,  115 => 22,  109 => 20,  104 => 19,  101 => 18,  94 => 15,  90 => 14,  79 => 5,  76 => 4,  70 => 344,  67 => 326,  64 => 316,  61 => 57,  59 => 32,  55 => 30,  52 => 26,  49 => 22,  46 => 18,  44 => 4,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t{% block head %}
\t\t<!-- robots noindex for DEV ONLY -->
\t\t<meta name=\"robots\" content=\"noindex, nofollow\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
\t\t<meta charset=\"utf-8\" />
\t\t<title>Manon de Groot-van Gelder — Stemactrice, voice-over en theatermaker</title>
\t\t<meta name=\"description\" content=\"\" />
\t\t<meta name=\"keywords\" content=\"\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover\" />
\t\t<meta name=\"referrer\" content=\"origin-when-cross-origin\" />
\t\t<!-- <link href=\"{{ siteUrl }}assets/favicon.ico\" rel=\"icon\" type=\"image/x-icon\" /> -->
\t\t<!-- <link rel=\"shortcut icon\" type=\"image/png\" href=\"{{ siteUrl }}assets/favicon.png\"> -->
\t\t<link href=\"https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans:400,600,600i,700,800&display=swap\" rel=\"stylesheet\">
\t\t{% endblock head %}
\t\t{% block javascripts %}
\t\t<!-- <script defer src=\"{{ siteUrl }}assets/svgxuse.js\"></script> -->
\t\t<!-- <script src=\"{{ siteUrl }}assets/jquery-2.1.4.min.js\"></script> -->
\t\t{% endblock %}
\t\t{% block stylesheets %}
\t\t<!-- <link href=\"assets/css/main.css\" rel='stylesheet' type='text/css' /> -->
\t\t{% do assets.addCss('theme://css/main.css', 98) %}
\t\t{% endblock %}
\t\t{% block assets deferred %}
\t    \t{{ assets.css()|raw }}
\t    \t{{ assets.js()|raw }}
\t\t{% endblock %}
\t</head>
\t<body>
\t\t{% block header %}
\t\t<section id=\"header\">
\t\t\t<!-- <div class=\"nav-wrapper\"> -->
\t\t\t\t<a href=\"#\" id=\"logo\"></a>
\t\t\t\t<nav>
\t\t\t\t\t<input type=\"checkbox\" id=\"toggle-nav\">
\t\t\t\t\t<label for=\"toggle-nav\" id=\"nav-icon4\" class=\"toggle-nav-button\"><span></span><span></span><span></span></label>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Over mij</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Demo</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Prijzen</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Reviews</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t<!-- </div> -->
\t\t\t<h2>
\t\t\t\tFris.<br>
\t\t\t\tHelder.<br>
\t\t\t\tPositief.<br>
\t\t\t\tGenieten.<br>
\t\t\t\tToegankelijk.
\t\t\t</h2>
\t\t</section>
\t\t{% endblock %}
\t\t{% block body %}
\t\t<section id=\"overmij\">
\t\t\t<div class=\"aboutme-content\">
\t\t\t<h2>Ik ben <span>Manon</span></h2>
\t\t\t<h1>Stemactrice, voice-over, trainer en theatermaker</h1>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col4 col3-xl col12-xs\">
\t\t\t\t\t<figure class=\"avatar\" style=\"background-image:{{ url('theme://images/manon-avatar.jpg') }}\" />
\t\t\t\t\t\t<span class=\"avatar-title\">Manon</span>
\t\t\t\t\t</figure>
\t\t\t\t</div>
\t\t\t\t<div class=\"col8 col12-xs\">
\t\t\t\t\t<div class=\"aboutme-text\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\tIk ben een energieke, ondernemende duizendpoot met een zorgvuldig oog (en oor) voor detail. Een creatieve geest die altijd op zoek is naar nieuwe manieren om te inspireren. Of het nu via mijn stem is, via een voorstelling of via een training; met een frisse blik en een knipoog ga ik met veel plezier voor je aan de slag.

\t\t\t\t\t\tNaast mijn werk als voice-over en (stem)actrice ben ik eigenaar van zowel de <a href=\"#\" class=\"orangelink\">Storytelling Fabriek</a> als <a href=\"#\">buro ROOD</a>.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<p>
\t\t\t\t\t\tMijn liefde voor locatietheater uit ik bij <a href=\"#\" class=\"redlink\">toneelgroep ROOD</a>, waaraan ik al ruim twaalf jaar als maker en artistiek leider verbonden ben.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col12 tagline\">
\t\t\t\t\t\t\tMijn stem kan <em>jouw</em> stem zijn...
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t
\t\t<section id=\"demos\" class=\"\">
\t\t\t<h3>Demo's</h3>
\t\t\t<h4>Dit is mijn stem</h4>
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col6 col12-sm\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"demo_item\">
\t\t\t\t\t\t\t<span class=\"geluidaan\"></span>
\t\t\t\t\t\t\t<div class=\"mediPlayer\">
\t\t\t\t\t\t\t    <audio class=\"listen\" preload=\"none\" src=\"assets/audio/piano.mp3\"></audio>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"demo_description\">
\t\t\t\t\t\t\t\t<h5>Lekker fris!</h5>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tVan antiroos-shampoo tot het nieuwe deltaprogramma
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col6 col12-sm\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"demo_item\">
\t\t\t\t\t\t\t<div class=\"mediPlayer\">
\t\t\t\t\t\t\t    <audio class=\"listen\" preload=\"none\" src=\"assets/audio/a.wav\"></audio>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"demo_description\">
\t\t\t\t\t\t\t\t<h5>En een tikkie uitgebreider...</h5>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tVan een winkel waar echt iedereen blij van wordt naar een heerlijke koffie om uitgebreid van te genieten. Met een eindhalte tussen de tulpen.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col6 col12-sm\">
\t\t\t\t\t<video src=\"assets/video/test.mp4\" width=\"100%\" height=\"auto\"  controls></video>
\t\t\t\t</div>
\t\t\t\t<div class=\"col6 col12-sm\">
\t\t\t\t\t<h5>First time right. That's right!</h5>
\t\t\t\t\t<p>
\t\t\t\t\t\tDeze film maakte ik voor Allianz Benelux en guess what...
\t\t\t\t\t\tDe voice-over sprak ik ook in.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t
\t\t</section>
\t\t
\t\t<section id=\"prijzen\" class=\"\">
\t\t\t<div class=\"pricelist-content\">
\t\t\t\t<h3>Prijzen</h3>
\t\t\t\t<h4>Super snelle opname in mijn thuisstudio.</h4>



\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col12\">
\t\t\t\t\t\t<img src=\"assets/img/icon-voice.svg\" />
\t\t\t\t\t\tInspreken bedrijfsfilm, videoproductie, e-learning
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col2 col6-sm col6-xs price\">
\t\t\t\t\t\t\t\t<span>&euro;200</span>
\t\t\t\t\t\t\t\t<em>0-250 woorden</em>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col2 col6-sm col6-xs price\">
\t\t\t\t\t\t\t\t<span>&euro;300</span>
\t\t\t\t\t\t\t\t<em>250&ndash;500 woorden</em>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col2 col6-sm col6-xs price\">
\t\t\t\t\t\t\t\t<span>&euro;370</span>
\t\t\t\t\t\t\t\t<em>500&ndash;1500 woorden</em>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col2 col6-sm col6-xs price\">
\t\t\t\t\t\t\t\t<span>Prijs op maat</span>
\t\t\t\t\t\t\t\t<em>1500+ woorden</em>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr />
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col6 col12-sm col12-xs\">
\t\t\t\t\t\t<img src=\"assets/img/icon-radiocommercial.svg\" />
\t\t\t\t\t\tRadio commercial
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col4 col6-sm col6-xs price\">
\t\t\t\t\t\t\t\t<span>&euro;200</span>
\t\t\t\t\t\t\t\t<em>regionaal uitzendgebied</em>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col4 col6-sm col6-xs price\">
\t\t\t\t\t\t\t\t<span>&euro;400</span>
\t\t\t\t\t\t\t\t<em>nationaal uitzendgebied</em>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr />
\t\t\t\t\t<div class=\"col6 col12-sm col12-xs\">
\t\t\t\t\t\t<img src=\"assets/img/icon-tvcommercial.svg\" />
\t\t\t\t\t\tTv commercial
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col4 col6-sm col6-xs price\">
\t\t\t\t\t\t\t\t<span>&euro;300</span>
\t\t\t\t\t\t\t\t<em>regionaal uitzendgebied</em>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col4 col6-sm col6-xs price\">
\t\t\t\t\t\t\t\t<span>&euro;600</span>
\t\t\t\t\t\t\t\t<em>nationaal uitzendgebied</em>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr />
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col6 col12-sm col12-xs\">
\t\t\t\t\t\t<img src=\"assets/img/icon-webcommercial.svg\" />
\t\t\t\t\t\tWeb commercial
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col4 col12-sm  price\">
\t\t\t\t\t\t\t\t<span>&euro;500</span>
\t\t\t\t\t\t\t\t<!-- <em>regionaal uitzendgebied</em> -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr />
\t\t\t\t\t<div class=\"col6 col12-sm col12-xs\">
\t\t\t\t\t\t<img src=\"assets/img/icon-cartoon.svg\" />
\t\t\t\t\t\tAnimatie en cartoon
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col4 col12-sm price\">
\t\t\t\t\t\t\t<span>Prijs op maat</span>
\t\t\t\t\t\t\t<!-- <em>regionaal uitzendgebied</em> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr />
\t\t\t\t<p>
\t\t\t\t\tVoor bewerking, audio clean up, mixage, sounddesign, copywriting: <a href=\"#\">neem contact op</a>
\t\t\t\t</p>
\t\t\t\t<p class=\"alt\">
\t\t\t\t\tPrijzen zijn voor 1 versie en exclusief uitkoop, exclusief btw
\t\t\t\t</p>
\t\t\t</div>
\t\t</section>

\t\t<section id=\"reviews\" class=\"\">
\t\t\t<h3>Reviews</h3>
\t\t\t<h4>Lieve mensen over mij</h4>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col3 col12-xs\">
\t\t\t\t\t<figure class=\"avatar\" style=\"background-image:url(assets/img/foto-Renata.jpeg);\" />
\t\t\t\t\t\t<span class=\"avatar-title\">Renata</span>
\t\t\t\t\t</figure>
\t\t\t\t</div>
\t\t\t\t<div class=\"col6 col9-sm col12-xs\">
\t\t\t\t\t<h5>Renata Wolak <em>&middot; Customer Experience Manager Allianz Benelux</em></h5>
\t\t\t\t\t<p>
\t\t\t\t\t\t\"Ik heb met Manon mogen werken aan de verfilming van een aantal klantverhalen. Niet zomaar verhalen, maar herkenbare verhalen die gewenst gedrag weergeven en medewerkers bewegen tot verandering en klantgerichtheid. De creatieve geest van Manon, haar humor en haar prachtige, heldere stem (Manon heeft de voice-overs voor de films ingesproken) vallen meteen op. De kwaliteit van de films en de kracht van de voice-overs hebben bijgedragen aan het succes dat we samen hebben neergezet. 'First time right', een belangrijke principe voor Allianz. Maar hoe breng je dit principe tot leven in een groot bedrijf als het onze? Door storytelling samen met Manon! Manon bedankt!\"
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col3 col12-xs\">
\t\t\t\t\t<figure class=\"avatar\" style=\"background-image:url(assets/img/pim-2.png);\" />
\t\t\t\t\t\t<span class=\"avatar-title\">Pim</span>
\t\t\t\t\t</figure>
\t\t\t\t</div>
\t\t\t\t<div class=\"col6 col9-sm col12-xs\">
\t\t\t\t\t<h5>Pim Veth <em>&middot; Voice-over, presentator, (stem)acteur</em></h5>
\t\t\t\t\t<p>
\t\t\t\t\t\t\"Ik werk erg graag met Manon. Haar stem is prettig, vertrouwd en warm. Ze levert snel en professioneel werk en denkt erg goed mee. Ik ben zelf werkzaam als voice-over en weet hoe belangrijk het is mee te denken en snel te kunnen schakelen. Elk merk, elke klant verdient een eigen geluid en Manon is in staat elke opdrachtgever een eigen geluid te geven. Haar achtergrond als regisseur en actrice werkt ongelooflijk in haar voordeel.\"
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col3 col12-xs\">
\t\t\t\t\t<figure class=\"avatar\" style=\"background-image:url(assets/img/ELLEN-Persoon.jpg);\" />
\t\t\t\t\t\t<span class=\"avatar-title\">Ellen</span>
\t\t\t\t\t</figure>
\t\t\t\t</div>
\t\t\t\t<div class=\"col6 col9-sm col12-xs\">
\t\t\t\t\t<h5>Ellen Persoon <em>&middot; Actrice bij Studio de Bakkerij</em></h5>
\t\t\t\t\t<p>
\t\t\t\t\t\t\"In 2019 werkte ik als actrice samen met Manon, een mooi intensief traject. Ik vind haar als regisseur enorm inspirerend. Ik heb haar ervaren als een vakvrouw die het ambacht verstaat en die naast haar heldere maar nooit starre visie een heel prettige en veilige omgeving creëert waarin ik me als acteur kon ontwikkelen. Haar ‘lullen en poetsen’ mentaliteit maakte het werken met haar een feest! Ze geeft ruimte aan vorm èn inhoud. Manon heeft het vermogen echt te luisteren; ook in haar acteurs zoekt ze de verhalen en dat voel je. Er zit oprechtheid in haar vragen en in haar aanwezigheid als regisseur en mens.\"
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section id=\"contact\">
\t\t\t<div class=\"contact-content\">
\t\t\t\t<h3>Contact</h3>
\t\t\t\t<h4>Leuk als je me mailt</h4>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col12\">
\t\t\t\t\t\t<form action=\"\" method=\"\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<fieldset class=\"col6 col12-sm\">
\t\t\t\t\t\t\t\t\t<label for=\"name\">Vul je naam in:</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"name\" value=\"\" />
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<fieldset class=\"col6 col12-sm\">
\t\t\t\t\t\t\t\t\t<label for=\"email\">Je e-mailadres:</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" value=\"\" id=\"email\" />
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<fieldset class=\"col12\">
\t\t\t\t\t\t\t\t\t<label for=\"message\">Berichtje:</label>
\t\t\t\t\t\t\t\t\t<textarea value=\"\" id=\"message\"></textarea>
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\">Sturen!</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t{% endblock %}
\t\t{% block footer %}
\t\t<section id=\"footer\">
\t\t\t<div class=\"footer-content\">
\t\t\t\t<div class=\"social-links\">
\t\t\t\t\t<em>Manon</em> <span>vind je op</span> <div class=\"social-buttons\"><a href=\"#\" class=\"twitter\">Twitter</a> <a href=\"#\" class=\"facebook\">Facebook</a> <a href=\"#\" class=\"linkedin\">LinkedIn</a></div>
\t\t\t\t</div>
\t\t\t\t<h4 class=\"tagline\">Stemactrice, voice-over en theatermaker</h4>
\t\t\t</div>
\t\t</section>
\t\t{% endblock %}
\t\t{% block bottom %}
\t\t<script>

\t\t</script>
\t\t<script
\t        src=\"https://code.jquery.com/jquery-1.11.2.min.js\"
\t        integrity=\"sha256-Ls0pXSlb7AYs7evhd+VLnWsZ/AqEHcXBeMZUycz/CcA=\"
\t        crossorigin=\"anonymous\"></script>
\t\t<script src=\"assets/js/player.js\"></script>
\t\t<!-- <script src=\"assets/js/jquery.paroller.min.js\"></script> -->

\t\t<script>
\t\t    \$(document).ready(function () {
\t\t        \$('.mediPlayer').mediaPlayer();
\t\t    });
\t\t</script>
\t\t{{ assets.js('bottom')|raw }}
\t\t{% endblock %}
\t</body>
</html>", "partials/base.html.twig", "/Applications/MAMP/htdocs/burorood/mdgvg/user/themes/mdgvg-theme/templates/partials/base.html.twig");
    }
}
