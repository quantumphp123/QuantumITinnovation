<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('website.home');
});

Route::get('/portfolio', function () {
    return view('website.portfolio');
});

Route::get('/sitemap.html', function () {
    return view('sitemap');
});

Route::get('/robots.txt', function () {
    return view('robots');
});

Route::get('/digitalmarketing-pricing', function () {
    return view('website.digitalmarketing-pricing');
});


Route::get('/digitalmarketing-pricing-UK', function () {
    return view('website.digitalmarketing-pricing-uk');
});

Route::get('/digitalmarketing-pricing-US', function () {
    return view('website.digitalmarketing-pricing-us');
});

Route::get('/digitalmarketing-pricing-AUS', function () {
    return view('website.digitalmarketing-pricing-aus');
});

Route::get('/10th-gate-tours', function(){ return view('website.portfolio.10th-gate-tours'); });

Route::get('/adelphia', function(){ return view('website.portfolio.adelphia'); });

Route::get('/bhamas', function(){ return view('website.portfolio.bhamas'); });

Route::get('/bhozon', function(){ return view('website.portfolio.bhozon'); });

Route::get('/canahemp', function(){ return view('website.portfolio.canahemp'); });

Route::get('/celebrity-scene', function(){ return view('website.portfolio.celebrity-scene'); });

Route::get('/eagletax', function(){ return view('website.portfolio.eagletax'); });

Route::get('/footostudio', function(){ return view('website.portfolio.footostudio'); });

Route::get('/fossminerali', function(){ return view('website.portfolio.fossminerali'); });

Route::get('/gastroentrology', function(){ return view('website.portfolio.gastroentrology'); });

Route::get('/healthycreations', function(){ return view('website.portfolio.healthycreations'); });

Route::get('/jivala', function(){ return view('website.portfolio.jivala'); });

Route::get('/kennebunkport', function(){ return view('website.portfolio.kennebunkport'); });

Route::get('/kumba-market', function(){ return view('website.portfolio.kumba-market'); });

Route::get('/luxury-india-tours', function(){ return view('website.portfolio.luxury-india-tours'); });

Route::get('/mercer-and-co', function(){ return view('website.portfolio.mercer-and-co'); });

Route::get('/modest-realty-app', function(){ return view('website.portfolio.modest-realty-app'); });

Route::get('/mudra', function(){ return view('website.portfolio.mudra'); });

Route::get('/onlineradio', function(){ return view('website.portfolio.onlineradio'); });

Route::get('/onstar-pc', function(){ return view('website.portfolio.onstar-pc'); });

Route::get('/peelhypnosis', function(){ return view('website.portfolio.peelhypnosis'); });

Route::get('/relativity-textiles', function(){ return view('website.portfolio.relativity-textiles'); });

Route::get('/remodel', function(){ return view('website.portfolio.remodel'); });

Route::get('/rf-solutions', function(){ return view('website.portfolio.rf-solutions'); });

Route::get('/shangrilah20', function(){ return view('website.portfolio.shangrilah20'); });

Route::get('/alice-in-wonderland', function(){ return view('website.portfolio.alice-in-wonderland'); });

Route::get('/book-my-tiffin', function(){ return view('website.portfolio.book-my-tiffin'); });

Route::get('/contact-manager', function(){ return view('website.portfolio.contact-manager'); });

Route::get('/design-like-app', function(){ return view('website.portfolio.design-like-app'); });

Route::get('/echocardiography', function(){ return view('website.portfolio.echocardiography'); });

Route::get('/festiadvisor', function(){ return view('website.portfolio.festiadvisor'); });

Route::get('/frankieg-fitness-app', function(){ return view('website.portfolio.frankieg-fitness-app'); });

Route::get('/iauditor-android-and-ios-app', function(){ return view('website.portfolio.iauditor-android-and-ios-app'); });

Route::get('/jaded-life-app', function(){ return view('website.portfolio.jaded-life-app'); });

Route::get('/luxury-india-tours-app', function(){ return view('website.portfolio.luxury-india-tours-app'); });

Route::get('/mck-tree-fellers-app', function(){ return view('website.portfolio.mck-tree-fellers-app'); });

Route::get('/mera-mechanic', function(){ return view('website.portfolio.mera-mechanic'); });

Route::get('/mobility2', function(){ return view('website.portfolio.mobility2'); });

Route::get('/parivesa', function(){ return view('website.portfolio.parivesa'); });

Route::get('/qr-reader', function(){ return view('website.portfolio.qr-reader'); });

Route::get('/school-management', function(){ return view('website.portfolio.school-management'); });

Route::get('/serwhizz', function(){ return view('website.portfolio.serwhizz'); });

Route::get('/shangrilah2o', function(){ return view('website.portfolio.shangrilah2o'); });

Route::get('/total-holiday-options', function(){ return view('website.portfolio.total-holiday-options'); });

Route::get('/lucid-rank', function(){ return view('website.portfolio.lucid-rank'); });
Route::get('/deliverease', function(){ return view('website.portfolio.deliverease'); });
Route::get('/site-supply', function(){ return view('website.portfolio.site-supply'); });
Route::get('/mein-haus', function(){ return view('website.portfolio.mein-haus'); });
Route::get('/inner-soul', function(){ return view('website.portfolio.inner-soul'); });
Route::get('/dash-tray', function(){ return view('website.portfolio.dash-tray'); });
Route::get('/rania-zara', function(){ return view('website.portfolio.rania-zara'); });
Route::get('/decor-redefined', function(){ return view('website.portfolio.decor-redefined'); });
Route::get('/weaves-of-tradition', function(){ return view('website.portfolio.weaves-of-tradition'); });
Route::get('/rockrooster-footwear', function(){ return view('website.portfolio.rockrooster-footwear'); });
Route::get('/li-golf-academy', function(){ return view('website.portfolio.li-golf-academy'); });
Route::get('/hemp-sure', function(){ return view('website.portfolio.hemp-sure'); });
Route::get('/healthy-creations', function(){ return view('website.portfolio.healthy-creations'); });
Route::get('/child-emergency-plan', function(){ return view('website.portfolio.child-emergency-plan'); });


#SERVICES
Route::get('/android-app-development', function(){ return view('website.service.android-app-development'); });

Route::get('/android-application-development-company', function(){ return view('website.service.android-app-development'); });

Route::get('/iphone-application-development-company', function(){ return view('website.service.iphone-application-development-company'); });

Route::get('/swift-application-development-company', function(){ return view('website.service.swift-application-development-company'); });

Route::get('/ipad-app-development-company', function(){ return view('website.service.ipad-app-development-company'); });

Route::get('/cross-platform-mobile-app-development', function(){ return view('website.service.cross-platform-mobile-app-development'); });

Route::get('/php-development-company', function(){ return view('website.service.php-development-company'); });

Route::get('/mobile-game-development-company', function(){ return view('website.service.mobile-game-development-company'); })->name('mobile-game-development-company');

Route::get('/node-js-development', function(){ return view('website.service.node-js-development'); });

Route::get('/seo-services-company', function(){ return view('website.service.seo-services-company'); });

Route::get('/ppc-campaign-management-services', function(){ return view('website.service.ppc-campaign-management-services'); });

Route::get('/social-media-marketing', function(){ return view('website.service.social-media-marketing'); });

Route::get('/nj-seo-company', function(){ return view('website.service.nj-seo-company'); });

Route::get('/advertising-company-usa', function(){ return view('website.service.advertising-company-usa'); });

Route::get('/seo-services-company-usa', function(){ return view('website.service.seo-services-company-usa'); });

Route::get('/web-development-company-usa', function(){ return view('website.service.web-development-company-usa'); });

Route::get('/app-store-optimization-company', function(){ return view('website.service.app-store-optimization-company'); });

Route::get('/joomla-development-company', function(){ return view('website.service.joomla-development-company'); });

Route::get('/dotnet-development-company', function(){ return view('website.service.dotnet-development-company'); });

Route::get('/ruby-on-rails-development-company', function(){ return view('website.service.ruby-on-rails-development-company'); });

Route::get('/artificial-intelligence', function(){ return view('website.service.artificial-intelligence'); });

Route::get('/internet-of-things', function(){ return view('website.service.internet-of-things'); });
Route::get('/conversion-rate-optimization-services', function(){ return view('website.service.conversion-rate-optimization-services'); });
Route::get('/magento-development-services', function(){ return view('website.service.magento-development-services'); });
Route::get('/mobile-app-development-dallas', function(){
    return view('website.service.mobile-app-development-dallas');
});
Route::get('/drupal-development-services', function(){ 
    return view('website.service.drupal-development-services');
});
Route::get('why-quantumitinnovation', function(){ 
    return view('website.why-quantumitinnovation'); 
});

Route::get('/partnership', function(){ return view('website.partnership'); });

Route::get('/blog', 'Web\FrontendController@blogs');
Route::get('/categ-blogs', 'Web\FrontendController@blogsCatg')->name('categ-blogs');



Route::get('/privacy-policy', function(){ return view('website.privacy-policy'); });
Route::get('/disclaimer', function(){ return view('website.disclaimer'); });

Route::get('/terms-and-condition', function(){ return view('website.terms-and-condition'); });
Route::get('/refund-cancellation-policy', function(){ return view('website.refund-cancellation-policy'); });

Route::get('/contact', function(){ return view('website.contact'); })->name('contact');
Route::get('/robotic-process-automation', function(){ return view('website.rpa'); });

//Extras
Route::get('/seo-services-in-nj', function(){ return view('website.seo_nj'); })->name('seo_nj');
Route::get('/app-development', function(){ return view('website.App_development'); })->name('app-development');
Route::get('/web-development', function(){ return view('website.web_development'); })->name('web-development');
Route::get('/ppc-managment', function(){ return view('website.ppc-managment'); })->name('ppc-managment');
Route::get('/website-design-development-company', function(){ return view('website.website-design-development-company'); })->name('website-design-development-company');


Route::get('/professional-seo-services-company', function(){ return view('website.professional-seo-services'); })->name('professional-seo-services');
Route::get('/digital-marketing-agency', function(){ return view('website.digital_marketing'); })->name('digital-marketing');
Route::get('/seo-services-indianapolis-usa', function(){ return view('website.seo-indianpolis'); })->name('seo-indianpolis');
Route::get('/seo-company-dubai', function(){ return view('website.seo-dubai'); })->name('seo-dubai');
Route::get('/oklahoma-city-seo-company', function(){ return view('website.seo-okhlacity'); })->name('seo-okhlacity');
Route::get('/Fresno-seo-company', function(){ return view('website.seo-fresno'); })->name('seo-fresno');
Route::get('/mobile-app-development-company-dubai-UAE', function(){ return view('website.app-development-dubai'); })->name('mobile-app-development-company-dubai-UAE');
Route::get('/mobile-app-development-company-singapore', function(){ return view('website.mobile-app-singapore'); })->name('mobile-app-development-singapore');
Route::get('/mobile-app-development-company-India', function(){ return view('website.mobile-app-india'); })->name('mobile-app-development-india');
Route::get('/web-design-company-in-dubai', function(){ return view('website.web-development-dubai'); })->name('web-development-dubai');
Route::get('/mobile-app-development-company-new-york', function(){ return view('website.mobile-app-new-york'); })->name('mobile-app-development-company-new-york');
Route::get('/web-development-company-abu-dhabi', function(){ return view('website.web-development-abu-dhabi'); })->name('web-development-company-abu-dhabi');
Route::get('/mobile-app-development-company-uk', function(){ return view('website.mobile-app-uk'); })->name('mobile-app-development-company-uk');
Route::get('/mobile-app-development-company-chicago', function(){ return view('website.mobile-app-chicago'); })->name('mobile-app-development-company-chicago');

Route::get('/4-seo-ideas-that-can-make-your-rankings-reach-sky-high',function(){return view('website.4seo');})->name('4-seo-ideas-that-can-make-your-rankings-reach-sky-high');
Route::get('/seo-company-abu-dhabi',function(){return view('website.seo-company-abu-dhabi');})->name('seo-company-abu-dhabi');
Route::get('/ai-chatbots-bringing-revolution-in-the-mobile-app-development-industry',function(){return view('website.ai-chatbots-bringing-revolution-in-the-mobile-app-development-industry');})->name('ai-chatbots-bringing-revolution-in-the-mobile-app-development-industry');
Route::get('/5-important-tips-to-know-before-developing-a-mobile-app',function(){return view('website.5-important-tips-to-know-before-developing-a-mobile-app');})->name('5-important-tips-to-know-before-developing-a-mobile-app');
Route::get('/digital-marketing-company-abu-dhabi',function(){return view('website.digital-marketing-company-abu-dhabi');})->name('digital-marketing-company-abu-dhabi');
Route::post('/user_post_inquiry', 'Web\FrontendController@UserPostInquiry')->name('user_post_inquiry');

// Landing Page
Route::get('/landingpage',function(){return view('landingpage.service');})->name('landing-page');
Route::get('/create-your-website',function(){return view('landingpage.test');})->name('test');
Route::post('contactus/post',			'LandingPageController@contactUsPost')->name('contactus-post');
Route::post('contactus/form/post',			'LandingPageController@contactFormPost')->name('contactus-form-post');

//Landing Page 2
Route::get('/create-your-app',function(){return view('landingpage2.index2');})->name('landing-page-app');
Route::post('app/contact/post',			'LandingPageController@appContactUsPost')->name('app-contactus-post');
Route::post('app/contact-form/post',			'LandingPageController@appContactFormPost')->name('app-contactus-form-post');

// Landing Page Seo
Route::get('/quantum-seo',function(){return view('landingseo.index');})->name('quantum-seo');

Route::get('/rank-your-website',function(){return view('seolanding.index');})->name('web-seo');
Route::post('contactusseo/post',			'LandingPageController@contactUsPostSeo')->name('contactus-post-seo');
Route::post('contactusseo/form/post',			'LandingPageController@contactFormPostSeo')->name('contactus-form-post-seo');

//PPC
Route::get('/ppc-management-company',function(){return view('ppc_landing.index');})->name('ppc-management-company');
Route::post('ppc/post',			'LandingPageController@ppcPost')->name('ppc-post');
Route::post('ppc/form/post',			'LandingPageController@ppcPost')->name('ppc-form-post');

Route::get('/on-demand-app-development',function(){return view('app-demand.index');})->name('on-demand');
Route::post('contactus-appdemand/post',			'LandingPageController@contactUsPostAppDemand')->name('contactus-post-appdemand');
Route::post('contactus-appdemand/form/post',			'LandingPageController@contactFormPostAppDemand')->name('contactus-form-post-appdemand');
// ADmin

Route::get('/login', 		'Admin\LoginController@index')->name('login');
Route::post('/login-post', 'Admin\LoginController@loginPost')->name('login-post');
Route::get('/dashboard', 	'Admin\LoginController@dashboard')->name('dashboard');

Route::get('/transaction', 'Admin\LoginController@trans_index');
Route::post('/searchTransaction', 'Admin\LoginController@search');
Route::get('/razorpay', 'Admin\LoginController@razorpay');
Route::post('/searchRazorpay', 'Admin\LoginController@razorpay_s');
Route::post('/export', 'Admin\LoginController@export_i');

Route::get('/logout', 'Admin\LoginController@logout')->name('logout');

Route::group(['prefix'=>'admin'],function(){
	//Blog Category
	Route::resource('category', 'Admin\CategoryController');
	//Blogs
	Route::resource('blog', 'Admin\BlogController');
	Route::post('upload_image','Admin\BlogController@uploadImage')->name('upload');

});

Route::get('/{id}', 'Web\FrontendController@blogsDetail');



