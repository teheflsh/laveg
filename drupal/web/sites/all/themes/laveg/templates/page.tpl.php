<?php
/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>
<div class="header">
    <div class="container">
        <div class="header-left">
            <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                    <img class="logo" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
            <?php endif; ?>
        </div>

        <div class="header-right">
            <div class="header-tel">
                <a href="tel:03222355753">0322 235 57 53</a>
                <img src="sites/all/themes/laveg/images/tel.png" alt="">
            </div>

            <img class="linee" src="sites/all/themes/laveg/images/linee.png" alt="">

            <div class="header-info">
                <div class="header-clock">
                    <p>Mo-Fr von 8-20 Uhr</p>
                    <img src="sites/all/themes/laveg/images/clock.png" alt="">
                </div>

                <div class="consultation">
                    <p>Kostenlose Erstberatung</p>
                    <img src="sites/all/themes/laveg/images/consultation.png" alt="">
                </div>

                <div class="germany">
                    <p>Bundesweit tätig</p>
                    <img src="sites/all/themes/laveg/images/germany.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="navbar">
    <div class="container">
        <?php
        if ($main_menu)
            print theme('links__system_main_menu', array(
                'links' => $main_menu,
            ));
        ?>

        <div class="alert">
            <div class="alert-header">
                <div class="alert-header-title">
                    <img src="sites/all/themes/laveg/images/alert-header-ico.png" alt="">
                    <p>Jeder zweite Bußgeldbescheid ist fehlerhaft.</p>
                </div>
                <div class="alert-header-desc">
                    <p>Akzeptieren Sie niemals einen Bußgeldbescheid ungeprüft. Sprechen Sie zuerst mit uns!</p>
                </div>
            </div>
            <div class="alert-line"></div>
            <div class="alert-body">
                <p>Fragen kostet nichts. Schildern Sie uns Ihren Fall völlig unverbindlich. Bitte füllen Sie folgendes Formular aus:</p>
                <div class="alert-block">
                    <div class="alert-block-1">1</div>
                    <div class="alert-block-line"></div>
                    <div class="alert-block-2">2</div>
                </div>
                <div class="alert-form">
                    <div class="alert-form-shadow">
                        <h4>1. Was wird Ihnen vorgeworfen?</h4>
                        <form action="">
                            <p><input type="radio" name="form"> Geschwindigkeitsverstoß</p>
                            <p><input type="radio" name="form"> Rotlichtverstoß</p>
                            <p><input type="radio" name="form"> Abstandsverstoß</p>
                            <p><input type="radio" name="form"> Alkohol- / Drogenverstoß</p>
                            <p><input type="radio" name="form"> Parkverstoß</p>
                            <p><input type="radio" name="form"> anderer Tatvorwurf</p>
                            <div class="aleft-form-button">
                                <button>Weiter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="banner"></div>

<div class="welcome">
    <div class="container">
        <h1>Welcome Area</h1>
        <div class="welcome-img">
            <img src="sites/all/themes/laveg/images/img-welcome.jpg" alt="">
            <div class="welcome-img-block"></div>
        </div>
        <div class="welcome-content">
            Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımlaLorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarakLorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak
        </div>
    </div>
</div>

<div class="info">
    <div class="container">
        <div class="info-block">
            <img src="sites/all/themes/laveg/images/info-block-1.png" alt="">
            <h1>driver's license</h1>
            <p>Lorem Ipsum kullanmanın amacı, sürekli 'buraya metin gelecek, buraya metin gelecek' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak</p>
            <a href="#">More</a>
        </div>

        <div class="info-block">
            <img src="sites/all/themes/laveg/images/info-block-1.png" alt="">
            <h1>LAWS & LAW</h1>
            <p>Lorem Ipsum kullanmanın amacı, sürekli 'buraya metin gelecek, buraya metin gelecek' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak</p>
            <a href="#">More</a>
        </div>

        <div class="info-block">
            <img src="sites/all/themes/laveg/images/info-block-1.png" alt="">
            <h1>legal services</h1>
            <p>Lorem Ipsum kullanmanın amacı, sürekli 'buraya metin gelecek, buraya metin gelecek' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak</p>
            <a href="#">More</a>
        </div>
    </div>
</div>

<div class="services">
    <div class="container">
        <h1>Services</h1>

        <div class="services-block">
            <ul>
                <li><a href="#">Traffic Law</a></li>
                <li class="active"><a href="#">Speeding Tickets</a></li>
                <li><a href="#">Driver Responsibility Assessment Program</a></li>
                <li><a href="#">Traffic Violations</a></li>
            </ul>
        </div>

        <div class="services-block">
            <ul>
                <li><a href="#">Commercial Traffic Violations</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Suspended License</a></li>
                <li><a href="#">DWI/DWAI</a></li>
            </ul>
        </div>

        <div class="services-block">
            <ul>
                <li><a href="#">Suspension/Revocation Hearings</a></li>
                <li><a href="#">Traffic Violations for Out of State Drivers</a></li>
                <li><a href="#">Traffic Violations Bureau Appeals and Default Convictions</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="about">
    <div class="container">
        <div class="about-block">
            <h1>Laveg.de WORK SYSTEM</h1>
            <p>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımlaLorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarakLorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak</p>
            <a href="#">More Page</a>
        </div>
    </div>
</div>

<div class="slogan">
    “slogan AREA HERE”
</div>

<div class="contacts">
    <div class="container">
        <div class="contacts-block">
            <img src="sites/all/themes/laveg/images/map.png" alt="">
            <p>Mahfesığmaz Mah. 79008 Sokak Sezen Apt. Kat:1 No:1 Çukurova / ADANA</p>
        </div>

        <div class="contacts-block">
            <img src="sites/all/themes/laveg/images/telephone.png" alt="">
            <p>Phone: <a href="tel: 03222355753">0322 235 57 53</a></p>
        </div>

        <div class="contacts-block">
            <img src="sites/all/themes/laveg/images/mphone.png" alt="">
            <p>Mobile: <a href="tel: 05335335333">0533 533 53 33</a></p>
        </div>

        <div class="contacts-block">
            <img src="sites/all/themes/laveg/images/email.png" alt="">
            <p>E-mail: <a href="mailto: info@laveg.de">info@laveg.de</a></p>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="footer-block">
            <img src="sites/all/themes/laveg/images/footer-logo.png" alt="">
            <p class="copyright">©2014 Laveg.de | All Right Reserved</p>
        </div>
        <div class="footer-block">
            <p>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır.</p>
        </div>
    </div>
</div>
