<?php

Route::get('/', 'HomeController@indexPage');
Route::get('/occupations', 'HomeController@occupationPage');
Route::get('/occupation/{occupationId}', 'HomeController@occupationView');

Route::get('/language/{language}', 'HomeController@changeLanguage');

Route::get('/works', 'HomeController@worksPage');
Route::get('/work/show/{workId}', 'HomeController@workShowPage');

Route::get('/contacts', 'HomeController@contactsPage');

Route::get('/admin/login', 'AdminController@logPage');
Route::post('/admin/login', 'AdminController@login');

Route::group(array('before' => 'auth'), function () {
    Route::get('/admin/image/root/{imageId}', 'ImageController@imageRoot');
    Route::get('/admin/image/delete/{imageId}', 'ImageController@imageDelete');

    Route::get('/admin', 'AdminController@settingsPage');
    Route::get('/admin/logout', 'AdminController@logout');
    Route::get('/admin/settings', 'AdminController@settingsPage');

    Route::get('/admin/occupation/view/', 'AdminController@occupationViewPage');
    Route::get('/admin/occupation/edit/{occupationId?}', 'AdminController@occupationEditPage');
    Route::get('/admin/occupation/add/', 'AdminController@occupationAdd');
    Route::get('/admin/occupation/delete/{occupationId}', 'AdminController@occupationDelete');
    Route::post('/admin/occupation/update/{occupationId}', 'AdminController@occupationUpdate');
    Route::get('/admin/occupation/active/{occupationId}', 'AdminController@occupationActive');
    Route::get('/admin/occupation/image/{action}/{imageId}', 'AdminController@occupationImage');

    Route::get('/admin/partners/view/', 'PartnerController@partnersViewPage');
    Route::post('/admin/partner/add', 'PartnerController@partnerAdd');
    Route::get('/admin/partner/edit/{partnerId}', 'PartnerController@partnerEditPage');
    Route::post('/admin/partner/update/{partnerId}', 'PartnerController@partnerUpdate');
    Route::get('/admin/partner/delete/{partnerId}', 'PartnerController@partnerDelete');
    Route::get('/admin/partner/active/{partnerId}', 'PartnerController@partnerActive');
    Route::get('/admin/partner/image/{action}/{imageId}', 'PartnerController@partnerImage');

    Route::get('/admin/banners/view', 'BannerController@bannersViewPage');
    Route::get('/admin/banner/add', 'BannerController@bannerAdd');
    Route::get('/admin/banner/edit/{bannerId}', 'BannerController@bannerEdit');
    Route::post('/admin/banner/update/{bannerId}', 'BannerController@bannerUpdate');
    Route::get('/admin/banner/delete/{bannerId}', 'BannerController@bannerDelete');
    Route::get('/admin/banner/image/{action}/{imageId}', 'BannerController@bannerImage');

    Route::get('/admin/works/view', 'WorkController@worksViewPage');
    Route::get('/admin/work/add', 'WorkController@workAdd');
    Route::get('/admin/work/edit/{workId}', 'WorkController@workEditPage');
    Route::post('/admin/work/update/{workId}', 'WorkController@workUpdate');
    Route::get('/admin/work/delete/{workId}', 'WorkController@workDelete');
    Route::get('/admin/work/image/{action}/{imageId}', 'WorkController@workImage');

    Route::post('/admin/settings/', 'AdminController@settings');
});

Route::any('*', 'HomeController@indexPage');



