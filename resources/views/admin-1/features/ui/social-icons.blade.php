@extends('layouts.admin-1.master')

@section('title', 'Social Icons')

@section('breadcrumb')
    <ul class="page-breadcrumb">
        <li>
            <a href="{{ route('admin-1.index') }}">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>UI Features</span>
        </li>
    </ul>
@endsection

@section('content')
    <h1 class="page-title"> Social Icons
        <small>extensive social icons based on socicons plugin</small>
    </h1>

    <div class="m-heading-1 border-green m-bordered">
        <h3>Socicon</h3>
        <p> Socicon provides resolution-free social icon font with full retina support. For more info please check out
            <a href="http://www.socicon.com/" target="_blank">the official documentation</a>. </p>
    </div>

    <div class="portlet light portlet-fit bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-social-dribbble font-red"></i>
                <span class="caption-subject font-red bold uppercase">Socicon Social Icons</span>
            </div>
            <div class="actions">
                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                    <i class="icon-cloud-upload"></i>
                </a>
                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                    <i class="icon-wrench"></i>
                </a>
                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                    <i class="icon-trash"></i>
                </a>
            </div>
        </div>
        <div class="portlet-body">
            <h3>Basic Icons</h3>
            <div class="socicons">
                <a href="#" class="socicon-btn socicon-twitter tooltips" data-original-title="Twitter"></a>
                <a href="#" class="socicon-btn socicon-facebook tooltips" data-original-title="Facebook"></a>
                <a href="#" class="socicon-btn socicon-google tooltips" data-original-title="Google"></a>
                <a href="#" class="socicon-btn socicon-pinterest tooltips" data-original-title="Pinterest"></a>
                <a href="#" class="socicon-btn socicon-foursquare tooltips" data-original-title="Foursquare"></a>
                <a href="#" class="socicon-btn socicon-yahoo tooltips" data-original-title="Yahoo"></a>
                <a href="#" class="socicon-btn socicon-skype tooltips" data-original-title="Skype"></a>
                <a href="#" class="socicon-btn socicon-yelp tooltips" data-original-title="Yelp"></a>
                <a href="#" class="socicon-btn socicon-feedburner tooltips" data-original-title="Feedburner"></a>
                <a href="#" class="socicon-btn socicon-linkedin tooltips" data-original-title="Linkedin"></a>
                <a href="#" class="socicon-btn socicon-viadeo tooltips" data-original-title="Viadeo"></a>
                <a href="#" class="socicon-btn socicon-xing tooltips" data-original-title="Xing"></a>
                <a href="#" class="socicon-btn socicon-myspace tooltips" data-original-title="Myspace"></a>
                <a href="#" class="socicon-btn socicon-soundcloud tooltips" data-original-title="Soundcloud"></a>
                <a href="#" class="socicon-btn socicon-spotify tooltips" data-original-title="Spotify"></a>
                <a href="#" class="socicon-btn socicon-grooveshark tooltips" data-original-title="Grooveshark"></a>
                <a href="#" class="socicon-btn socicon-lastfm tooltips" data-original-title="Lastfm"></a>
                <a href="#" class="socicon-btn socicon-youtube tooltips" data-original-title="Youtube"></a>
                <a href="#" class="socicon-btn socicon-vimeo tooltips" data-original-title="Vimeo"></a>
                <a href="#" class="socicon-btn socicon-dailymotion tooltips" data-original-title="Dailymotion"></a>
                <a href="#" class="socicon-btn socicon-vine tooltips" data-original-title="Vine"></a>
                <a href="#" class="socicon-btn socicon-flickr tooltips" data-original-title="Flickr"></a>
                <a href="#" class="socicon-btn socicon-500px tooltips" data-original-title="500px"></a>
                <a href="#" class="socicon-btn socicon-instagram tooltips" data-original-title="Instagram"></a>
                <a href="#" class="socicon-btn socicon-wordpress tooltips" data-original-title="Wordpress"></a>
                <a href="#" class="socicon-btn socicon-tumblr tooltips" data-original-title="Tumblr"></a>
                <a href="#" class="socicon-btn socicon-blogger tooltips" data-original-title="Blogger"></a>
                <a href="#" class="socicon-btn socicon-technorati tooltips" data-original-title="Technorati"></a>
                <a href="#" class="socicon-btn socicon-reddit tooltips" data-original-title="Reddit"></a>
                <a href="#" class="socicon-btn socicon-dribbble tooltips" data-original-title="Dribbble"></a>
                <a href="#" class="socicon-btn socicon-stumbleupon tooltips" data-original-title="Stumbleupon"></a>
                <a href="#" class="socicon-btn socicon-digg tooltips" data-original-title="Digg"></a>
                <a href="#" class="socicon-btn socicon-envato tooltips" data-original-title="Envato"></a>
                <a href="#" class="socicon-btn socicon-behance tooltips" data-original-title="Behance"></a>
                <a href="#" class="socicon-btn socicon-delicious tooltips" data-original-title="Delicious"></a>
                <a href="#" class="socicon-btn socicon-deviantart tooltips" data-original-title="Deviantart"></a>
                <a href="#" class="socicon-btn socicon-forrst tooltips" data-original-title="Forrst"></a>
                <a href="#" class="socicon-btn socicon-playstore tooltips" data-original-title="Playstore"></a>
                <a href="#" class="socicon-btn socicon-zerply tooltips" data-original-title="Zerply"></a>
                <a href="#" class="socicon-btn socicon-wikipedia tooltips" data-original-title="Wikipedia"></a>
                <a href="#" class="socicon-btn socicon-apple tooltips" data-original-title="Apple"></a>
                <a href="#" class="socicon-btn socicon-flattr tooltips" data-original-title="Flattr"></a>
                <a href="#" class="socicon-btn socicon-github tooltips" data-original-title="Github"></a>
                <a href="#" class="socicon-btn socicon-chimein tooltips" data-original-title="Chimein"></a>
                <a href="#" class="socicon-btn socicon-friendfeed tooltips" data-original-title="Friendfeed"></a>
                <a href="#" class="socicon-btn socicon-newsvine tooltips" data-original-title="Newsvine"></a>
                <a href="#" class="socicon-btn socicon-identica tooltips" data-original-title="Identica"></a>
                <a href="#" class="socicon-btn socicon-bebo tooltips" data-original-title="Bebo"></a>
                <a href="#" class="socicon-btn socicon-zynga tooltips" data-original-title="Zynga"></a>
                <a href="#" class="socicon-btn socicon-steam tooltips" data-original-title="Steam"></a>
                <a href="#" class="socicon-btn socicon-xbox tooltips" data-original-title="Xbox"></a>
                <a href="#" class="socicon-btn socicon-windows tooltips" data-original-title="Windows"></a>
                <a href="#" class="socicon-btn socicon-outlook tooltips" data-original-title="Outlook"></a>
                <a href="#" class="socicon-btn socicon-coderwall tooltips" data-original-title="Coderwall"></a>
                <a href="#" class="socicon-btn socicon-tripadvisor tooltips" data-original-title="Tripadvisor"></a>
                <a href="#" class="socicon-btn socicon-appnet tooltips" data-original-title="Appnet"></a>
                <a href="#" class="socicon-btn socicon-goodreads tooltips" data-original-title="Goodreads"></a>
                <a href="#" class="socicon-btn socicon-tripit tooltips" data-original-title="Tripit"></a>
                <a href="#" class="socicon-btn socicon-lanyrd tooltips" data-original-title="Lanyrd"></a>
                <a href="#" class="socicon-btn socicon-slideshare tooltips" data-original-title="Slideshare"></a>
                <a href="#" class="socicon-btn socicon-buffer tooltips" data-original-title="Buffer"></a>
                <a href="#" class="socicon-btn socicon-rss tooltips" data-original-title="Rss"></a>
                <a href="#" class="socicon-btn socicon-vkontakte tooltips" data-original-title="Vkontakte"></a>
                <a href="#" class="socicon-btn socicon-disqus tooltips" data-original-title="Disqus"></a>
                <a href="#" class="socicon-btn socicon-houzz tooltips" data-original-title="Houzz"></a>
                <a href="#" class="socicon-btn socicon-mail tooltips" data-original-title="Mail"></a>
                <a href="#" class="socicon-btn socicon-patreon tooltips" data-original-title="Patreon"></a>
                <a href="#" class="socicon-btn socicon-paypal tooltips" data-original-title="Paypal"></a>
                <a href="#" class="socicon-btn socicon-playstation tooltips" data-original-title="Playstation"></a>
                <a href="#" class="socicon-btn socicon-smugmug tooltips" data-original-title="Smugmug"></a>
                <a href="#" class="socicon-btn socicon-swarm tooltips" data-original-title="Swarm"></a>
                <a href="#" class="socicon-btn socicon-triplej tooltips" data-original-title="Triplej"></a>
                <a href="#" class="socicon-btn socicon-yammer tooltips" data-original-title="Yammer"></a>
                <a href="#" class="socicon-btn socicon-stackoverflow tooltips" data-original-title="Stackoverflow"></a>
                <a href="#" class="socicon-btn socicon-drupal tooltips" data-original-title="Drupal"></a>
                <a href="#" class="socicon-btn socicon-odnoklassniki tooltips" data-original-title="Odnoklassniki"></a>
                <a href="#" class="socicon-btn socicon-android tooltips" data-original-title="Android"></a>
                <a href="#" class="socicon-btn socicon-meetup tooltips" data-original-title="Meetup"></a>
                <a href="#" class="socicon-btn socicon-persona tooltips" data-original-title="Persona"></a>
            </div>
            <h3>Circle Icons</h3>
            <div class="socicons">
                <a href="#" class="socicon-btn socicon-btn-circle socicon-twitter tooltips" data-original-title="Twitter"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-facebook tooltips" data-original-title="Facebook"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-google tooltips" data-original-title="Google"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-pinterest tooltips" data-original-title="Pinterest"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-foursquare tooltips" data-original-title="Foursquare"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-yahoo tooltips" data-original-title="Yahoo"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-skype tooltips" data-original-title="Skype"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-yelp tooltips" data-original-title="Yelp"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-feedburner tooltips" data-original-title="Feedburner"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-linkedin tooltips" data-original-title="Linkedin"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-viadeo tooltips" data-original-title="Viadeo"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-xing tooltips" data-original-title="Xing"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-myspace tooltips" data-original-title="Myspace"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-soundcloud tooltips" data-original-title="Soundcloud"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-spotify tooltips" data-original-title="Spotify"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-grooveshark tooltips" data-original-title="Grooveshark"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lastfm tooltips" data-original-title="Lastfm"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-youtube tooltips" data-original-title="Youtube"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-vimeo tooltips" data-original-title="Vimeo"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-dailymotion tooltips" data-original-title="Dailymotion"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-vine tooltips" data-original-title="Vine"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-flickr tooltips" data-original-title="Flickr"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-500px tooltips" data-original-title="500px"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-instagram tooltips" data-original-title="Instagram"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-wordpress tooltips" data-original-title="Wordpress"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-tumblr tooltips" data-original-title="Tumblr"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-blogger tooltips" data-original-title="Blogger"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-technorati tooltips" data-original-title="Technorati"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-reddit tooltips" data-original-title="Reddit"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-dribbble tooltips" data-original-title="Dribbble"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-stumbleupon tooltips" data-original-title="Stumbleupon"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-digg tooltips" data-original-title="Digg"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-envato tooltips" data-original-title="Envato"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-behance tooltips" data-original-title="Behance"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-delicious tooltips" data-original-title="Delicious"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-deviantart tooltips" data-original-title="Deviantart"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-forrst tooltips" data-original-title="Forrst"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-playstore tooltips" data-original-title="Playstore"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-zerply tooltips" data-original-title="Zerply"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-wikipedia tooltips" data-original-title="Wikipedia"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-apple tooltips" data-original-title="Apple"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-flattr tooltips" data-original-title="Flattr"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-github tooltips" data-original-title="Github"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-chimein tooltips" data-original-title="Chimein"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-friendfeed tooltips" data-original-title="Friendfeed"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-newsvine tooltips" data-original-title="Newsvine"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-identica tooltips" data-original-title="Identica"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-bebo tooltips" data-original-title="Bebo"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-zynga tooltips" data-original-title="Zynga"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-steam tooltips" data-original-title="Steam"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-xbox tooltips" data-original-title="Xbox"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-windows tooltips" data-original-title="Windows"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-outlook tooltips" data-original-title="Outlook"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-coderwall tooltips" data-original-title="Coderwall"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-tripadvisor tooltips" data-original-title="Tripadvisor"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-appnet tooltips" data-original-title="Appnet"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-goodreads tooltips" data-original-title="Goodreads"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-tripit tooltips" data-original-title="Tripit"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lanyrd tooltips" data-original-title="Lanyrd"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-slideshare tooltips" data-original-title="Slideshare"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-buffer tooltips" data-original-title="Buffer"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-rss tooltips" data-original-title="Rss"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-vkontakte tooltips" data-original-title="Vkontakte"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-disqus tooltips" data-original-title="Disqus"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-houzz tooltips" data-original-title="Houzz"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-mail tooltips" data-original-title="Mail"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-patreon tooltips" data-original-title="Patreon"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-paypal tooltips" data-original-title="Paypal"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-playstation tooltips" data-original-title="Playstation"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-smugmug tooltips" data-original-title="Smugmug"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-swarm tooltips" data-original-title="Swarm"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-triplej tooltips" data-original-title="Triplej"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-yammer tooltips" data-original-title="Yammer"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-stackoverflow tooltips" data-original-title="Stackoverflow"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-drupal tooltips" data-original-title="Drupal"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-odnoklassniki tooltips" data-original-title="Odnoklassniki"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-android tooltips" data-original-title="Android"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-meetup tooltips" data-original-title="Meetup"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-persona tooltips" data-original-title="Persona"></a>
            </div>
            <h3>Solid Icons</h3>
            <div class="socicons">
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-dark font-white bg-hover-grey-salsa socicon-twitter tooltips" data-original-title="Twitter"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-dark font-white bg-hover-grey-salsa socicon-facebook tooltips" data-original-title="Facebook"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-dark font-white bg-hover-grey-salsa socicon-google tooltips" data-original-title="Google"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-green font-white bg-hover-grey-salsa socicon-pinterest tooltips" data-original-title="Pinterest"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-green font-white bg-hover-grey-salsa socicon-foursquare tooltips" data-original-title="Foursquare"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-blue font-white bg-hover-grey-salsa socicon-yahoo tooltips" data-original-title="Yahoo"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-skype tooltips" data-original-title="Skype"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-green font-white bg-hover-grey-salsa socicon-yelp tooltips" data-original-title="Yelp"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-dark font-white bg-hover-grey-salsa socicon-feedburner tooltips" data-original-title="Feedburner"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-linkedin tooltips" data-original-title="Linkedin"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-green font-white bg-hover-grey-salsa socicon-viadeo tooltips" data-original-title="Viadeo"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-yellow font-white bg-hover-grey-salsa socicon-xing tooltips" data-original-title="Xing"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-blue font-white bg-hover-grey-salsa socicon-myspace tooltips" data-original-title="Myspace"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-dark font-white bg-hover-grey-salsa socicon-soundcloud tooltips" data-original-title="Soundcloud"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-yellow font-white bg-hover-grey-salsa socicon-spotify tooltips" data-original-title="Spotify"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-grooveshark tooltips" data-original-title="Grooveshark"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-dark font-white bg-hover-grey-salsa socicon-lastfm tooltips" data-original-title="Lastfm"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-yellow font-white bg-hover-grey-salsa socicon-youtube tooltips" data-original-title="Youtube"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-vimeo tooltips" data-original-title="Vimeo"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-dark font-white bg-hover-grey-salsa socicon-dailymotion tooltips" data-original-title="Dailymotion"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-vine tooltips" data-original-title="Vine"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-dark font-white bg-hover-grey-salsa socicon-flickr tooltips" data-original-title="Flickr"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-green font-white bg-hover-grey-salsa socicon-500px tooltips" data-original-title="500px"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-blue font-white bg-hover-grey-salsa socicon-instagram tooltips" data-original-title="Instagram"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-yellow font-white bg-hover-grey-salsa socicon-wordpress tooltips" data-original-title="Wordpress"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-dark font-white bg-hover-grey-salsa socicon-tumblr tooltips" data-original-title="Tumblr"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-green font-white bg-hover-grey-salsa socicon-blogger tooltips" data-original-title="Blogger"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-green font-white bg-hover-grey-salsa socicon-technorati tooltips" data-original-title="Technorati"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-dark font-white bg-hover-grey-salsa socicon-reddit tooltips" data-original-title="Reddit"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-dribbble tooltips" data-original-title="Dribbble"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-green font-white bg-hover-grey-salsa socicon-stumbleupon tooltips" data-original-title="Stumbleupon"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-blue font-white bg-hover-grey-salsa socicon-digg tooltips" data-original-title="Digg"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-blue font-white bg-hover-grey-salsa socicon-envato tooltips" data-original-title="Envato"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-green font-white bg-hover-grey-salsa socicon-behance tooltips" data-original-title="Behance"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-yellow font-white bg-hover-grey-salsa socicon-delicious tooltips" data-original-title="Delicious"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-yellow font-white bg-hover-grey-salsa socicon-deviantart tooltips" data-original-title="Deviantart"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-forrst tooltips" data-original-title="Forrst"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-blue font-white bg-hover-grey-salsa socicon-playstore tooltips" data-original-title="Playstore"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-green font-white bg-hover-grey-salsa socicon-zerply tooltips" data-original-title="Zerply"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-dark font-white bg-hover-grey-salsa socicon-wikipedia tooltips" data-original-title="Wikipedia"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-dark font-white bg-hover-grey-salsa socicon-apple tooltips" data-original-title="Apple"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-flattr tooltips" data-original-title="Flattr"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-blue font-white bg-hover-grey-salsa socicon-github tooltips" data-original-title="Github"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-green font-white bg-hover-grey-salsa socicon-chimein tooltips" data-original-title="Chimein"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-yellow font-white bg-hover-grey-salsa socicon-friendfeed tooltips" data-original-title="Friendfeed"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-newsvine tooltips" data-original-title="Newsvine"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-identica tooltips" data-original-title="Identica"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-dark font-white bg-hover-grey-salsa socicon-bebo tooltips" data-original-title="Bebo"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-zynga tooltips" data-original-title="Zynga"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-yellow font-white bg-hover-grey-salsa socicon-steam tooltips" data-original-title="Steam"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-yellow font-white bg-hover-grey-salsa socicon-xbox tooltips" data-original-title="Xbox"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-green font-white bg-hover-grey-salsa socicon-windows tooltips" data-original-title="Windows"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-yellow font-white bg-hover-grey-salsa socicon-outlook tooltips" data-original-title="Outlook"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-green font-white bg-hover-grey-salsa socicon-coderwall tooltips" data-original-title="Coderwall"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-yellow font-white bg-hover-grey-salsa socicon-tripadvisor tooltips" data-original-title="Tripadvisor"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-blue font-white bg-hover-grey-salsa socicon-appnet tooltips" data-original-title="Appnet"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-dark font-white bg-hover-grey-salsa socicon-goodreads tooltips" data-original-title="Goodreads"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-blue font-white bg-hover-grey-salsa socicon-tripit tooltips" data-original-title="Tripit"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-blue font-white bg-hover-grey-salsa socicon-lanyrd tooltips" data-original-title="Lanyrd"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-yellow font-white bg-hover-grey-salsa socicon-slideshare tooltips" data-original-title="Slideshare"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-buffer tooltips" data-original-title="Buffer"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-rss tooltips" data-original-title="Rss"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-dark font-white bg-hover-grey-salsa socicon-vkontakte tooltips" data-original-title="Vkontakte"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-blue font-white bg-hover-grey-salsa socicon-disqus tooltips" data-original-title="Disqus"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-houzz tooltips" data-original-title="Houzz"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-dark font-white bg-hover-grey-salsa socicon-mail tooltips" data-original-title="Mail"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-patreon tooltips" data-original-title="Patreon"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-green font-white bg-hover-grey-salsa socicon-paypal tooltips" data-original-title="Paypal"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-dark font-white bg-hover-grey-salsa socicon-playstation tooltips" data-original-title="Playstation"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-dark font-white bg-hover-grey-salsa socicon-smugmug tooltips" data-original-title="Smugmug"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-yellow font-white bg-hover-grey-salsa socicon-swarm tooltips" data-original-title="Swarm"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-dark font-white bg-hover-grey-salsa socicon-triplej tooltips" data-original-title="Triplej"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-blue font-white bg-hover-grey-salsa socicon-yammer tooltips" data-original-title="Yammer"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-blue font-white bg-hover-grey-salsa socicon-stackoverflow tooltips" data-original-title="Stackoverflow"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-red font-white bg-hover-grey-salsa socicon-drupal tooltips" data-original-title="Drupal"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-yellow font-white bg-hover-grey-salsa socicon-odnoklassniki tooltips" data-original-title="Odnoklassniki"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-dark font-white bg-hover-grey-salsa socicon-android tooltips" data-original-title="Android"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-blue font-white bg-hover-grey-salsa socicon-meetup tooltips" data-original-title="Meetup"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid bg-blue font-white bg-hover-grey-salsa socicon-persona tooltips" data-original-title="Persona"></a>
            </div>
            <h3>Large Size</h3>
            <div class="socicons">
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-twitter tooltips" data-original-title="Twitter"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-facebook tooltips" data-original-title="Facebook"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-google tooltips" data-original-title="Google"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-pinterest tooltips" data-original-title="Pinterest"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-foursquare tooltips" data-original-title="Foursquare"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-yahoo tooltips" data-original-title="Yahoo"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-skype tooltips" data-original-title="Skype"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-yelp tooltips" data-original-title="Yelp"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-feedburner tooltips" data-original-title="Feedburner"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-linkedin tooltips" data-original-title="Linkedin"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-viadeo tooltips" data-original-title="Viadeo"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-xing tooltips" data-original-title="Xing"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-myspace tooltips" data-original-title="Myspace"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-soundcloud tooltips" data-original-title="Soundcloud"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-spotify tooltips" data-original-title="Spotify"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-grooveshark tooltips" data-original-title="Grooveshark"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-lastfm tooltips" data-original-title="Lastfm"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-youtube tooltips" data-original-title="Youtube"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-vimeo tooltips" data-original-title="Vimeo"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-dailymotion tooltips" data-original-title="Dailymotion"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-vine tooltips" data-original-title="Vine"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-flickr tooltips" data-original-title="Flickr"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-500px tooltips" data-original-title="500px"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-instagram tooltips" data-original-title="Instagram"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-wordpress tooltips" data-original-title="Wordpress"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-tumblr tooltips" data-original-title="Tumblr"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-blogger tooltips" data-original-title="Blogger"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-technorati tooltips" data-original-title="Technorati"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-reddit tooltips" data-original-title="Reddit"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-dribbble tooltips" data-original-title="Dribbble"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-stumbleupon tooltips" data-original-title="Stumbleupon"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-digg tooltips" data-original-title="Digg"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-envato tooltips" data-original-title="Envato"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-behance tooltips" data-original-title="Behance"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-delicious tooltips" data-original-title="Delicious"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-deviantart tooltips" data-original-title="Deviantart"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-forrst tooltips" data-original-title="Forrst"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-playstore tooltips" data-original-title="Playstore"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-zerply tooltips" data-original-title="Zerply"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-wikipedia tooltips" data-original-title="Wikipedia"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-apple tooltips" data-original-title="Apple"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-flattr tooltips" data-original-title="Flattr"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-github tooltips" data-original-title="Github"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-chimein tooltips" data-original-title="Chimein"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-friendfeed tooltips" data-original-title="Friendfeed"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-newsvine tooltips" data-original-title="Newsvine"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-identica tooltips" data-original-title="Identica"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-bebo tooltips" data-original-title="Bebo"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-zynga tooltips" data-original-title="Zynga"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-steam tooltips" data-original-title="Steam"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-xbox tooltips" data-original-title="Xbox"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-windows tooltips" data-original-title="Windows"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-outlook tooltips" data-original-title="Outlook"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-coderwall tooltips" data-original-title="Coderwall"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-tripadvisor tooltips" data-original-title="Tripadvisor"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-appnet tooltips" data-original-title="Appnet"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-goodreads tooltips" data-original-title="Goodreads"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-tripit tooltips" data-original-title="Tripit"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-lanyrd tooltips" data-original-title="Lanyrd"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-slideshare tooltips" data-original-title="Slideshare"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-buffer tooltips" data-original-title="Buffer"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-rss tooltips" data-original-title="Rss"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-vkontakte tooltips" data-original-title="Vkontakte"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-disqus tooltips" data-original-title="Disqus"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-houzz tooltips" data-original-title="Houzz"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-mail tooltips" data-original-title="Mail"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-patreon tooltips" data-original-title="Patreon"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-paypal tooltips" data-original-title="Paypal"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-playstation tooltips" data-original-title="Playstation"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-smugmug tooltips" data-original-title="Smugmug"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-swarm tooltips" data-original-title="Swarm"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-triplej tooltips" data-original-title="Triplej"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-yammer tooltips" data-original-title="Yammer"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-stackoverflow tooltips" data-original-title="Stackoverflow"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-drupal tooltips" data-original-title="Drupal"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-odnoklassniki tooltips" data-original-title="Odnoklassniki"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-android tooltips" data-original-title="Android"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-meetup tooltips" data-original-title="Meetup"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-persona tooltips" data-original-title="Persona"></a>
            </div>
            <h3>Small Size</h3>
            <div class="socicons">
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-twitter tooltips" data-original-title="Twitter"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-facebook tooltips" data-original-title="Facebook"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-google tooltips" data-original-title="Google"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-pinterest tooltips" data-original-title="Pinterest"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-foursquare tooltips" data-original-title="Foursquare"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-yahoo tooltips" data-original-title="Yahoo"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-skype tooltips" data-original-title="Skype"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-yelp tooltips" data-original-title="Yelp"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-feedburner tooltips" data-original-title="Feedburner"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-linkedin tooltips" data-original-title="Linkedin"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-viadeo tooltips" data-original-title="Viadeo"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-xing tooltips" data-original-title="Xing"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-myspace tooltips" data-original-title="Myspace"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-soundcloud tooltips" data-original-title="Soundcloud"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-spotify tooltips" data-original-title="Spotify"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-grooveshark tooltips" data-original-title="Grooveshark"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-lastfm tooltips" data-original-title="Lastfm"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-youtube tooltips" data-original-title="Youtube"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-vimeo tooltips" data-original-title="Vimeo"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-dailymotion tooltips" data-original-title="Dailymotion"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-vine tooltips" data-original-title="Vine"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-flickr tooltips" data-original-title="Flickr"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-500px tooltips" data-original-title="500px"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-instagram tooltips" data-original-title="Instagram"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-wordpress tooltips" data-original-title="Wordpress"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-tumblr tooltips" data-original-title="Tumblr"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-blogger tooltips" data-original-title="Blogger"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-technorati tooltips" data-original-title="Technorati"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-reddit tooltips" data-original-title="Reddit"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-dribbble tooltips" data-original-title="Dribbble"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-stumbleupon tooltips" data-original-title="Stumbleupon"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-digg tooltips" data-original-title="Digg"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-envato tooltips" data-original-title="Envato"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-behance tooltips" data-original-title="Behance"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-delicious tooltips" data-original-title="Delicious"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-deviantart tooltips" data-original-title="Deviantart"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-forrst tooltips" data-original-title="Forrst"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-playstore tooltips" data-original-title="Playstore"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-zerply tooltips" data-original-title="Zerply"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-wikipedia tooltips" data-original-title="Wikipedia"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-apple tooltips" data-original-title="Apple"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-flattr tooltips" data-original-title="Flattr"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-github tooltips" data-original-title="Github"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-chimein tooltips" data-original-title="Chimein"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-friendfeed tooltips" data-original-title="Friendfeed"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-newsvine tooltips" data-original-title="Newsvine"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-identica tooltips" data-original-title="Identica"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-bebo tooltips" data-original-title="Bebo"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-zynga tooltips" data-original-title="Zynga"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-steam tooltips" data-original-title="Steam"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-xbox tooltips" data-original-title="Xbox"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-windows tooltips" data-original-title="Windows"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-outlook tooltips" data-original-title="Outlook"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-coderwall tooltips" data-original-title="Coderwall"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-tripadvisor tooltips" data-original-title="Tripadvisor"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-appnet tooltips" data-original-title="Appnet"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-goodreads tooltips" data-original-title="Goodreads"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-tripit tooltips" data-original-title="Tripit"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-lanyrd tooltips" data-original-title="Lanyrd"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-slideshare tooltips" data-original-title="Slideshare"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-buffer tooltips" data-original-title="Buffer"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-rss tooltips" data-original-title="Rss"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-vkontakte tooltips" data-original-title="Vkontakte"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-disqus tooltips" data-original-title="Disqus"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-houzz tooltips" data-original-title="Houzz"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-mail tooltips" data-original-title="Mail"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-patreon tooltips" data-original-title="Patreon"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-paypal tooltips" data-original-title="Paypal"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-playstation tooltips" data-original-title="Playstation"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-smugmug tooltips" data-original-title="Smugmug"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-swarm tooltips" data-original-title="Swarm"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-triplej tooltips" data-original-title="Triplej"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-yammer tooltips" data-original-title="Yammer"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-stackoverflow tooltips" data-original-title="Stackoverflow"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-drupal tooltips" data-original-title="Drupal"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-odnoklassniki tooltips" data-original-title="Odnoklassniki"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-yellow bg-hover-grey-salsa font-white bg-hover-white socicon-android tooltips" data-original-title="Android"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-green bg-hover-grey-salsa font-white bg-hover-white socicon-meetup tooltips" data-original-title="Meetup"></a>
                <a href="#" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-persona tooltips" data-original-title="Persona"></a>
            </div>
        </div>
    </div>
@endsection
