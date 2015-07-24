<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 282,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Справочник заболеваний',
    'longtitle' => '',
    'description' => '',
    'alias' => 'spravochnik-zabolevaniy',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 1,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 2,
    'menuindex' => 6,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 0,
    'createdon' => 1436424606,
    'editedby' => 1,
    'editedon' => 1437048519,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1436424600,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'spravochnik-zabolevaniy/',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'doctor' => 
    array (
      0 => 'doctor',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'checkbox',
    ),
    '_content' => '<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html>
<head>

<title>MODX Revolution - Справочник заболеваний</title>
<base href="http://mcmpspb.yellowmarker.ru/" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

<!--[[!MinifyX?
    &cssSources=`
        /assets/css/bootstrap.min.css,
        /assets/css/magnific-popup.css,
        /assets/css/owl.carousel.css,
        /assets/css/owl.theme.css,
        /assets/css/style.css`
    &jsSources=`
        /assets/js/jquery-1.11.2.min.js,
        /assets/js/bootstrap.min.js,
        /assets/js/owl.carousel.min.js,
        /assets/js/jquery.magnific-popup.min.js,
        /assets/js/jquery.form-validator.min.js,
        /assets/js/common.js`
    &minifyCss
    &minifyJs
]]
[[+MinifyX.css]]
[[+MinifyX.javascript]]-->


<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/magnific-popup.css">
<link rel="stylesheet" href="/assets/css/owl.carousel.css">
<link rel="stylesheet" href="/assets/css/owl.theme.css">
<link rel="stylesheet" href="/assets/css/font-awesome.min.css">
<link rel="stylesheet" href="/assets/css/waves.min.css">
<link rel="stylesheet" href="/assets/css/style.css">

<script type="text/javascript" src="/assets/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.form-validator.min.js"></script>
<script type="text/javascript" src="/assets/js/waves.min.js"></script>
<script type="text/javascript" src="/assets/js/common.js"></script>


<script src="//api-maps.yandex.ru/2.0/?load=package.standard&lang=ru-RU" type="text/javascript"></script>


</head>
<body class="spravochnik-zabolevaniy">
<div class="page-container">
    <header class="container">
    <div class="row header-top">
        <div class="header-logo">
            <a title="MCMP" href="http://mcmpspb.yellowmarker.ru/">
                <img width="212" height="51" alt="MCMP" src="/assets/images/logo.png" class="logo img-responsive">
            </a>
        </div>
        <div class="header-phone">
            <div class="phone">+7 (812) 297-93-93</div>
            <div class="phone">+7 (812) 297-11-11</div>
        </div>
    </div>
    <div class="row header-bottom">
        <ul class="header-links"><li>
	<a title="Цены" href="prices/" class="first">Цены</a>
	
</li>
<li>
	<a title="Статьи" href="articles/" class="">Статьи</a>
	
</li>
<li>
	<a title="Справочник заболеваний" href="spravochnik-zabolevaniy/" class="active">Справочник заболеваний</a>
	
</li>
<li>
	<a title="Новости" href="about/novosti/" class="">Новости</a>
	
</li>
<li>
	<a title="О клинике" href="about/" class="">О клинике</a>
	
</li>
<li>
	<a title="Контакты" href="contacts/" class="last">Контакты</a>
	
</li>
</ul>
    </div>
</header>
    <div class="main container">
        <div class="row">
            <div class="col-sm-3">
                <div class="side-menu-wrap">
    [[!getResources?
        &parents=`163`
        &depth=`0`
        &limit=`6`
        &sortby=`menuindex`
        &sortdir=`ASC`
        &tpl=`sideMenuTopTpl`
    ]]
</div>
            </div>
            <div class="col-sm-9 content" id="ajax-container">
                <div class="bc-wrap">
                    <ul class="B_crumbBox"><li class="B_firstCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="B_homeCrumb" itemprop="url" rel="Home" href="http://mcmpspb.yellowmarker.ru/"><span itemprop="title"><i class="fa fa-home"></i></span></a></li>
 <i class="fa fa-long-arrow-right"></i> <li class="B_lastCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><li itemscope="itemscope" class="B_currentCrumb" itemtype="http://data-vocabulary.org/Breadcrumb">Справочник заболеваний</li></li>
</ul>
                </div>
                <div class="title col-sm-9">
                    Справочник заболеваний
                </div>
                <div class="clearfix"></div>
                



[[!isChild:is=`1`:then=`<div class="col-sm-3 side-menu-block">
    <h4>Категории</h4>
[[!Wayfinder?
    &startId=`67`
    &level=`1`
    &ignoreHidden=`1`
    &outerClass=`articles-cats`
]]
</div>
<div class="row articles">
    <div class="col-sm-9">
        
    </div>
    <div class="col-sm-3 right-box">
        
    </div>
</div>`? &parent=`67`]]
[[!isChild:is=`1`:then=``? &parent=`163`]]
            </div>
        </div>
    </div>
    <footer class="container">
    
</footer>
</div>
</body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '/',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$doctype]]' => '<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->',
    '[[*pagetitle]]' => 'Справочник заболеваний',
    '[[$head]]' => '<head>

<title>MODX Revolution - Справочник заболеваний</title>
<base href="http://mcmpspb.yellowmarker.ru/" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

<!--[[!MinifyX?
    &cssSources=`
        /assets/css/bootstrap.min.css,
        /assets/css/magnific-popup.css,
        /assets/css/owl.carousel.css,
        /assets/css/owl.theme.css,
        /assets/css/style.css`
    &jsSources=`
        /assets/js/jquery-1.11.2.min.js,
        /assets/js/bootstrap.min.js,
        /assets/js/owl.carousel.min.js,
        /assets/js/jquery.magnific-popup.min.js,
        /assets/js/jquery.form-validator.min.js,
        /assets/js/common.js`
    &minifyCss
    &minifyJs
]]
[[+MinifyX.css]]
[[+MinifyX.javascript]]-->


<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/magnific-popup.css">
<link rel="stylesheet" href="/assets/css/owl.carousel.css">
<link rel="stylesheet" href="/assets/css/owl.theme.css">
<link rel="stylesheet" href="/assets/css/font-awesome.min.css">
<link rel="stylesheet" href="/assets/css/waves.min.css">
<link rel="stylesheet" href="/assets/css/style.css">

<script type="text/javascript" src="/assets/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.form-validator.min.js"></script>
<script type="text/javascript" src="/assets/js/waves.min.js"></script>
<script type="text/javascript" src="/assets/js/common.js"></script>


<script src="//api-maps.yandex.ru/2.0/?load=package.standard&lang=ru-RU" type="text/javascript"></script>


</head>',
    '[[*alias]]' => 'spravochnik-zabolevaniy',
    '[[~1]]' => 'http://mcmpspb.yellowmarker.ru/',
    '[[Wayfinder?
    &startId=`0`
    &level=`1`
    &sortBy=`menuindex`
    &sortOrder=`ASC`
    &rowTpl=`topMenuTpl`
    &outerClass=`header-links`
]]' => '<ul class="header-links"><li>
	<a title="Цены" href="prices/" class="first">Цены</a>
	
</li>
<li>
	<a title="Статьи" href="articles/" class="">Статьи</a>
	
</li>
<li>
	<a title="Справочник заболеваний" href="spravochnik-zabolevaniy/" class="active">Справочник заболеваний</a>
	
</li>
<li>
	<a title="Новости" href="about/novosti/" class="">Новости</a>
	
</li>
<li>
	<a title="О клинике" href="about/" class="">О клинике</a>
	
</li>
<li>
	<a title="Контакты" href="contacts/" class="last">Контакты</a>
	
</li>
</ul>',
    '[[$topMenu]]' => '<ul class="header-links"><li>
	<a title="Цены" href="prices/" class="first">Цены</a>
	
</li>
<li>
	<a title="Статьи" href="articles/" class="">Статьи</a>
	
</li>
<li>
	<a title="Справочник заболеваний" href="spravochnik-zabolevaniy/" class="active">Справочник заболеваний</a>
	
</li>
<li>
	<a title="Новости" href="about/novosti/" class="">Новости</a>
	
</li>
<li>
	<a title="О клинике" href="about/" class="">О клинике</a>
	
</li>
<li>
	<a title="Контакты" href="contacts/" class="last">Контакты</a>
	
</li>
</ul>',
    '[[$header]]' => '<header class="container">
    <div class="row header-top">
        <div class="header-logo">
            <a title="MCMP" href="http://mcmpspb.yellowmarker.ru/">
                <img width="212" height="51" alt="MCMP" src="/assets/images/logo.png" class="logo img-responsive">
            </a>
        </div>
        <div class="header-phone">
            <div class="phone">+7 (812) 297-93-93</div>
            <div class="phone">+7 (812) 297-11-11</div>
        </div>
    </div>
    <div class="row header-bottom">
        <ul class="header-links"><li>
	<a title="Цены" href="prices/" class="first">Цены</a>
	
</li>
<li>
	<a title="Статьи" href="articles/" class="">Статьи</a>
	
</li>
<li>
	<a title="Справочник заболеваний" href="spravochnik-zabolevaniy/" class="active">Справочник заболеваний</a>
	
</li>
<li>
	<a title="Новости" href="about/novosti/" class="">Новости</a>
	
</li>
<li>
	<a title="О клинике" href="about/" class="">О клинике</a>
	
</li>
<li>
	<a title="Контакты" href="contacts/" class="last">Контакты</a>
	
</li>
</ul>
    </div>
</header>',
    '[[$sideMenu]]' => '<div class="side-menu-wrap">
    [[!getResources?
        &parents=`163`
        &depth=`0`
        &limit=`6`
        &sortby=`menuindex`
        &sortdir=`ASC`
        &tpl=`sideMenuTopTpl`
    ]]
</div>',
    '[[$?text=`Справочник заболеваний`]]' => '<li itemscope="itemscope" class="B_currentCrumb" itemtype="http://data-vocabulary.org/Breadcrumb">Справочник заболеваний</li>',
    '[[$?description=`Home`&text=`<i class="fa fa-home"></i>`]]' => '<a class="B_homeCrumb" itemprop="url" rel="Home" href="http://mcmpspb.yellowmarker.ru/"><span itemprop="title"><i class="fa fa-home"></i></span></a>',
    '[[$?text=`<a class="B_homeCrumb" itemprop="url" rel="Home" href="http://mcmpspb.yellowmarker.ru/"><span itemprop="title"><i class="fa fa-home"></i></span></a>`]]' => '<li class="B_firstCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="B_homeCrumb" itemprop="url" rel="Home" href="http://mcmpspb.yellowmarker.ru/"><span itemprop="title"><i class="fa fa-home"></i></span></a></li>',
    '[[$?text=`<li itemscope="itemscope" class="B_currentCrumb" itemtype="http://data-vocabulary.org/Breadcrumb">Справочник заболеваний</li>`]]' => '<li class="B_lastCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><li itemscope="itemscope" class="B_currentCrumb" itemtype="http://data-vocabulary.org/Breadcrumb">Справочник заболеваний</li></li>',
    '[[$?text=`<li class="B_firstCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="B_homeCrumb" itemprop="url" rel="Home" href="http://mcmpspb.yellowmarker.ru/"><span itemprop="title"><i class="fa fa-home"></i></span></a></li>
 <i class="fa fa-long-arrow-right"></i> <li class="B_lastCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><li itemscope="itemscope" class="B_currentCrumb" itemtype="http://data-vocabulary.org/Breadcrumb">Справочник заболеваний</li></li>
`]]' => '<ul class="B_crumbBox"><li class="B_firstCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="B_homeCrumb" itemprop="url" rel="Home" href="http://mcmpspb.yellowmarker.ru/"><span itemprop="title"><i class="fa fa-home"></i></span></a></li>
 <i class="fa fa-long-arrow-right"></i> <li class="B_lastCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><li itemscope="itemscope" class="B_currentCrumb" itemtype="http://data-vocabulary.org/Breadcrumb">Справочник заболеваний</li></li>
</ul>',
    '[[Breadcrumbs?
    &homeCrumbTitle=`<i class="fa fa-home"></i>`
    &crumbSeparator=`<i class="fa fa-long-arrow-right"></i>`
    &currentAsLink=`0`
    &showCurrentCrumb=`1`
    &respectHidemenu=`0`
]]' => '<ul class="B_crumbBox"><li class="B_firstCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="B_homeCrumb" itemprop="url" rel="Home" href="http://mcmpspb.yellowmarker.ru/"><span itemprop="title"><i class="fa fa-home"></i></span></a></li>
 <i class="fa fa-long-arrow-right"></i> <li class="B_lastCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><li itemscope="itemscope" class="B_currentCrumb" itemtype="http://data-vocabulary.org/Breadcrumb">Справочник заболеваний</li></li>
</ul>',
    '[[$breadcrumbs]]' => '<ul class="B_crumbBox"><li class="B_firstCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="B_homeCrumb" itemprop="url" rel="Home" href="http://mcmpspb.yellowmarker.ru/"><span itemprop="title"><i class="fa fa-home"></i></span></a></li>
 <i class="fa fa-long-arrow-right"></i> <li class="B_lastCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><li itemscope="itemscope" class="B_currentCrumb" itemtype="http://data-vocabulary.org/Breadcrumb">Справочник заболеваний</li></li>
</ul>',
    '[[$newsPage]]' => '<div class="news-list-items-block">
    [[!getPage@standart_ru? 
        &elementClass=`modSnippet` 
        &element=`getResources` 
        &parents=`3` 
        &depth=`1` 
        &limit=`10` 
        &pageVarKey=`page` 
        &includeTVs=`1`
        &processTVs=`1`
        &tvPrefix=``
        &includeContent=`1` 
        &tpl=`newsListTpl`
    ]] 
    <div class="paging"> 
        <ul class="pagination">[[!+page.nav]]</ul> 
    </div>
</div>',
    '[[*id:is=`3`:then=`<div class="news-list-items-block">
    [[!getPage@standart_ru? 
        &elementClass=`modSnippet` 
        &element=`getResources` 
        &parents=`3` 
        &depth=`1` 
        &limit=`10` 
        &pageVarKey=`page` 
        &includeTVs=`1`
        &processTVs=`1`
        &tvPrefix=``
        &includeContent=`1` 
        &tpl=`newsListTpl`
    ]] 
    <div class="paging"> 
        <ul class="pagination">[[!+page.nav]]</ul> 
    </div>
</div>`]]' => '',
    '[[*parent:is=`3`:or:is=`0`:then=``]]' => '',
    '[[$blogCats]]' => '<h4>Категории</h4>
[[!Wayfinder?
    &startId=`67`
    &level=`1`
    &ignoreHidden=`1`
    &outerClass=`articles-cats`
]]',
    '[[*id]]' => 282,
    '[[$articlesPage]]' => '<div class="col-sm-3 side-menu-block">
    <h4>Категории</h4>
[[!Wayfinder?
    &startId=`67`
    &level=`1`
    &ignoreHidden=`1`
    &outerClass=`articles-cats`
]]
</div>
<div class="row articles">
    <div class="col-sm-9">
        <div class="list-box">
            [[!getPage@standart_ru? 
                &elementClass=`modSnippet` 
                &element=`getResources` 
                &parents=`282` 
                &depth=`3` 
                &limit=`15` 
                &pageVarKey=`page` 
                &includeContent=`1` 
                &tpl=`articlesListTpl`
            ]]
        </div>
        <div class="paging"> 
            <ul class="pagination">[[!+page.nav]]</ul> 
        </div>
    </div>
</div>',
    '[[*id:is=`67`:then=`<div class="col-sm-3 side-menu-block">
    <h4>Категории</h4>
[[!Wayfinder?
    &startId=`67`
    &level=`1`
    &ignoreHidden=`1`
    &outerClass=`articles-cats`
]]
</div>
<div class="row articles">
    <div class="col-sm-9">
        <div class="list-box">
            [[!getPage@standart_ru? 
                &elementClass=`modSnippet` 
                &element=`getResources` 
                &parents=`282` 
                &depth=`3` 
                &limit=`15` 
                &pageVarKey=`page` 
                &includeContent=`1` 
                &tpl=`articlesListTpl`
            ]]
        </div>
        <div class="paging"> 
            <ul class="pagination">[[!+page.nav]]</ul> 
        </div>
    </div>
</div>`]]' => '',
    '[[*parent:is=`67`:then=`<div class="col-sm-3 side-menu-block">
    <h4>Категории</h4>
[[!Wayfinder?
    &startId=`67`
    &level=`1`
    &ignoreHidden=`1`
    &outerClass=`articles-cats`
]]
</div>
<div class="row articles">
    <div class="col-sm-9">
        <div class="list-box">
            [[!getPage@standart_ru? 
                &elementClass=`modSnippet` 
                &element=`getResources` 
                &parents=`282` 
                &depth=`3` 
                &limit=`15` 
                &pageVarKey=`page` 
                &includeContent=`1` 
                &tpl=`articlesListTpl`
            ]]
        </div>
        <div class="paging"> 
            <ul class="pagination">[[!+page.nav]]</ul> 
        </div>
    </div>
</div>`]]' => '',
    '[[*doctor]]' => '',
    '[[*doctor:notempty=`
            <div class="recommend">
                <div class="text">
                    Если вы читаете эту статью, то возможно Вас заинтересует консультация специалистов:
                </div>
                <div class="links">
                    
                </div>
            </div>
        `]]' => '',
    '[[$articlePage]]' => '<div class="col-sm-3 side-menu-block">
    <h4>Категории</h4>
[[!Wayfinder?
    &startId=`67`
    &level=`1`
    &ignoreHidden=`1`
    &outerClass=`articles-cats`
]]
</div>
<div class="row articles">
    <div class="col-sm-9">
        
    </div>
    <div class="col-sm-3 right-box">
        
    </div>
</div>',
    '[[*hidemenu:ne=`1`:then=`<div class="col-sm-3 side-menu-block">
    <h4>Категории</h4>
[[!Wayfinder?
    &startId=`67`
    &level=`1`
    &ignoreHidden=`1`
    &outerClass=`articles-cats`
]]
</div>
<div class="row articles">
    <div class="col-sm-9">
        
    </div>
    <div class="col-sm-3 right-box">
        
    </div>
</div>`]]' => '<div class="col-sm-3 side-menu-block">
    <h4>Категории</h4>
[[!Wayfinder?
    &startId=`67`
    &level=`1`
    &ignoreHidden=`1`
    &outerClass=`articles-cats`
]]
</div>
<div class="row articles">
    <div class="col-sm-9">
        
    </div>
    <div class="col-sm-3 right-box">
        
    </div>
</div>',
    '[[$outputManager]]' => '



[[!isChild:is=`1`:then=`<div class="col-sm-3 side-menu-block">
    <h4>Категории</h4>
[[!Wayfinder?
    &startId=`67`
    &level=`1`
    &ignoreHidden=`1`
    &outerClass=`articles-cats`
]]
</div>
<div class="row articles">
    <div class="col-sm-9">
        
    </div>
    <div class="col-sm-3 right-box">
        
    </div>
</div>`? &parent=`67`]]
[[!isChild:is=`1`:then=``? &parent=`163`]]',
    '[[$footer]]' => '<footer class="container">
    
</footer>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'doctype' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'doctype',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'head' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'head',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '<head>

<title>[[++site_name]] - [[*pagetitle]]</title>
<base href="[[++site_url]]" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

<!--[[!MinifyX?
    &cssSources=`
        /assets/css/bootstrap.min.css,
        /assets/css/magnific-popup.css,
        /assets/css/owl.carousel.css,
        /assets/css/owl.theme.css,
        /assets/css/style.css`
    &jsSources=`
        /assets/js/jquery-1.11.2.min.js,
        /assets/js/bootstrap.min.js,
        /assets/js/owl.carousel.min.js,
        /assets/js/jquery.magnific-popup.min.js,
        /assets/js/jquery.form-validator.min.js,
        /assets/js/common.js`
    &minifyCss
    &minifyJs
]]
[[+MinifyX.css]]
[[+MinifyX.javascript]]-->


<link rel="stylesheet" href="[[++assets_url]]css/bootstrap.min.css">
<link rel="stylesheet" href="[[++assets_url]]css/magnific-popup.css">
<link rel="stylesheet" href="[[++assets_url]]css/owl.carousel.css">
<link rel="stylesheet" href="[[++assets_url]]css/owl.theme.css">
<link rel="stylesheet" href="[[++assets_url]]css/font-awesome.min.css">
<link rel="stylesheet" href="[[++assets_url]]css/waves.min.css">
<link rel="stylesheet" href="[[++assets_url]]css/style.css">

<script type="text/javascript" src="[[++assets_url]]js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="[[++assets_url]]js/bootstrap.min.js"></script>
<script type="text/javascript" src="[[++assets_url]]js/owl.carousel.min.js"></script>
<script type="text/javascript" src="[[++assets_url]]js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="[[++assets_url]]js/jquery.form-validator.min.js"></script>
<script type="text/javascript" src="[[++assets_url]]js/waves.min.js"></script>
<script type="text/javascript" src="[[++assets_url]]js/common.js"></script>


<script src="//api-maps.yandex.ru/2.0/?load=package.standard&lang=ru-RU" type="text/javascript"></script>


</head>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<head>

<title>[[++site_name]] - [[*pagetitle]]</title>
<base href="[[++site_url]]" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

<!--[[!MinifyX?
    &cssSources=`
        /assets/css/bootstrap.min.css,
        /assets/css/magnific-popup.css,
        /assets/css/owl.carousel.css,
        /assets/css/owl.theme.css,
        /assets/css/style.css`
    &jsSources=`
        /assets/js/jquery-1.11.2.min.js,
        /assets/js/bootstrap.min.js,
        /assets/js/owl.carousel.min.js,
        /assets/js/jquery.magnific-popup.min.js,
        /assets/js/jquery.form-validator.min.js,
        /assets/js/common.js`
    &minifyCss
    &minifyJs
]]
[[+MinifyX.css]]
[[+MinifyX.javascript]]-->


<link rel="stylesheet" href="[[++assets_url]]css/bootstrap.min.css">
<link rel="stylesheet" href="[[++assets_url]]css/magnific-popup.css">
<link rel="stylesheet" href="[[++assets_url]]css/owl.carousel.css">
<link rel="stylesheet" href="[[++assets_url]]css/owl.theme.css">
<link rel="stylesheet" href="[[++assets_url]]css/font-awesome.min.css">
<link rel="stylesheet" href="[[++assets_url]]css/waves.min.css">
<link rel="stylesheet" href="[[++assets_url]]css/style.css">

<script type="text/javascript" src="[[++assets_url]]js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="[[++assets_url]]js/bootstrap.min.js"></script>
<script type="text/javascript" src="[[++assets_url]]js/owl.carousel.min.js"></script>
<script type="text/javascript" src="[[++assets_url]]js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="[[++assets_url]]js/jquery.form-validator.min.js"></script>
<script type="text/javascript" src="[[++assets_url]]js/waves.min.js"></script>
<script type="text/javascript" src="[[++assets_url]]js/common.js"></script>


<script src="//api-maps.yandex.ru/2.0/?load=package.standard&lang=ru-RU" type="text/javascript"></script>


</head>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 5,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '<header class="container">
    <div class="row header-top">
        <div class="header-logo">
            <a title="MCMP" href="[[~1]]">
                <img width="212" height="51" alt="MCMP" src="[[++assets_url]]images/logo.png" class="logo img-responsive">
            </a>
        </div>
        <div class="header-phone">
            <div class="phone">+7 (812) 297-93-93</div>
            <div class="phone">+7 (812) 297-11-11</div>
        </div>
    </div>
    <div class="row header-bottom">
        [[$topMenu]]
    </div>
</header>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<header class="container">
    <div class="row header-top">
        <div class="header-logo">
            <a title="MCMP" href="[[~1]]">
                <img width="212" height="51" alt="MCMP" src="[[++assets_url]]images/logo.png" class="logo img-responsive">
            </a>
        </div>
        <div class="header-phone">
            <div class="phone">+7 (812) 297-93-93</div>
            <div class="phone">+7 (812) 297-11-11</div>
        </div>
    </div>
    <div class="row header-bottom">
        [[$topMenu]]
    </div>
</header>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'topMenu' => 
      array (
        'fields' => 
        array (
          'id' => 14,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'topMenu',
          'description' => '',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '[[Wayfinder?
    &startId=`0`
    &level=`1`
    &sortBy=`menuindex`
    &sortOrder=`ASC`
    &rowTpl=`topMenuTpl`
    &outerClass=`header-links`
]]',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '[[Wayfinder?
    &startId=`0`
    &level=`1`
    &sortBy=`menuindex`
    &sortOrder=`ASC`
    &rowTpl=`topMenuTpl`
    &outerClass=`header-links`
]]',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'sideMenu' => 
      array (
        'fields' => 
        array (
          'id' => 7,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'sideMenu',
          'description' => '',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '<div class="side-menu-wrap">
    [[!getResources?
        &parents=`163`
        &depth=`0`
        &limit=`6`
        &sortby=`menuindex`
        &sortdir=`ASC`
        &tpl=`sideMenuTopTpl`
    ]]
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="side-menu-wrap">
    [[!getResources?
        &parents=`163`
        &depth=`0`
        &limit=`6`
        &sortby=`menuindex`
        &sortdir=`ASC`
        &tpl=`sideMenuTopTpl`
    ]]
</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'breadcrumbs' => 
      array (
        'fields' => 
        array (
          'id' => 17,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'breadcrumbs',
          'description' => '',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '[[Breadcrumbs?
    &homeCrumbTitle=`<i class="fa fa-home"></i>`
    &crumbSeparator=`<i class="fa fa-long-arrow-right"></i>`
    &currentAsLink=`0`
    &showCurrentCrumb=`1`
    &respectHidemenu=`0`
]]',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '[[Breadcrumbs?
    &homeCrumbTitle=`<i class="fa fa-home"></i>`
    &crumbSeparator=`<i class="fa fa-long-arrow-right"></i>`
    &currentAsLink=`0`
    &showCurrentCrumb=`1`
    &respectHidemenu=`0`
]]',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'outputManager' => 
      array (
        'fields' => 
        array (
          'id' => 26,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'outputManager',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '[[*id:is=`3`:then=`[[$newsPage]]`]]
[[*parent:is=`3`:or:is=`0`:then=`[[*content]]`]]
[[*id:is=`67`:then=`[[$articlesPage]]`]]
[[*parent:is=`67`:then=`[[$articlesPage]]`]]
[[!isChild:is=`1`:then=`[[*hidemenu:ne=`1`:then=`[[$articlePage]]`]]`? &parent=`67`]]
[[!isChild:is=`1`:then=`[[*content]]`? &parent=`163`]]',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '[[*id:is=`3`:then=`[[$newsPage]]`]]
[[*parent:is=`3`:or:is=`0`:then=`[[*content]]`]]
[[*id:is=`67`:then=`[[$articlesPage]]`]]
[[*parent:is=`67`:then=`[[$articlesPage]]`]]
[[!isChild:is=`1`:then=`[[*hidemenu:ne=`1`:then=`[[$articlePage]]`]]`? &parent=`67`]]
[[!isChild:is=`1`:then=`[[*content]]`? &parent=`163`]]',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'newsPage' => 
      array (
        'fields' => 
        array (
          'id' => 18,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'newsPage',
          'description' => '',
          'editor_type' => 0,
          'category' => 11,
          'cache_type' => 0,
          'snippet' => '<div class="news-list-items-block">
    [[!getPage@standart_ru? 
        &elementClass=`modSnippet` 
        &element=`getResources` 
        &parents=`3` 
        &depth=`1` 
        &limit=`10` 
        &pageVarKey=`page` 
        &includeTVs=`1`
        &processTVs=`1`
        &tvPrefix=``
        &includeContent=`1` 
        &tpl=`newsListTpl`
    ]] 
    <div class="paging"> 
        <ul class="pagination">[[!+page.nav]]</ul> 
    </div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="news-list-items-block">
    [[!getPage@standart_ru? 
        &elementClass=`modSnippet` 
        &element=`getResources` 
        &parents=`3` 
        &depth=`1` 
        &limit=`10` 
        &pageVarKey=`page` 
        &includeTVs=`1`
        &processTVs=`1`
        &tvPrefix=``
        &includeContent=`1` 
        &tpl=`newsListTpl`
    ]] 
    <div class="paging"> 
        <ul class="pagination">[[!+page.nav]]</ul> 
    </div>
</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'articlesPage' => 
      array (
        'fields' => 
        array (
          'id' => 20,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'articlesPage',
          'description' => '',
          'editor_type' => 0,
          'category' => 11,
          'cache_type' => 0,
          'snippet' => '<div class="col-sm-3 side-menu-block">
    [[$blogCats]]
</div>
<div class="row articles">
    <div class="col-sm-9">
        <div class="list-box">
            [[!getPage@standart_ru? 
                &elementClass=`modSnippet` 
                &element=`getResources` 
                &parents=`[[*id]]` 
                &depth=`3` 
                &limit=`15` 
                &pageVarKey=`page` 
                &includeContent=`1` 
                &tpl=`articlesListTpl`
            ]]
        </div>
        <div class="paging"> 
            <ul class="pagination">[[!+page.nav]]</ul> 
        </div>
    </div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="col-sm-3 side-menu-block">
    [[$blogCats]]
</div>
<div class="row articles">
    <div class="col-sm-9">
        <div class="list-box">
            [[!getPage@standart_ru? 
                &elementClass=`modSnippet` 
                &element=`getResources` 
                &parents=`[[*id]]` 
                &depth=`3` 
                &limit=`15` 
                &pageVarKey=`page` 
                &includeContent=`1` 
                &tpl=`articlesListTpl`
            ]]
        </div>
        <div class="paging"> 
            <ul class="pagination">[[!+page.nav]]</ul> 
        </div>
    </div>
</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'blogCats' => 
      array (
        'fields' => 
        array (
          'id' => 28,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'blogCats',
          'description' => '',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '<h4>Категории</h4>
[[!Wayfinder?
    &startId=`67`
    &level=`1`
    &ignoreHidden=`1`
    &outerClass=`articles-cats`
]]',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<h4>Категории</h4>
[[!Wayfinder?
    &startId=`67`
    &level=`1`
    &ignoreHidden=`1`
    &outerClass=`articles-cats`
]]',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'articlePage' => 
      array (
        'fields' => 
        array (
          'id' => 21,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'articlePage',
          'description' => '',
          'editor_type' => 0,
          'category' => 11,
          'cache_type' => 0,
          'snippet' => '<div class="col-sm-3 side-menu-block">
    [[$blogCats]]
</div>
<div class="row articles">
    <div class="col-sm-9">
        [[*content]]
    </div>
    <div class="col-sm-3 right-box">
        [[*doctor:notempty=`
            <div class="recommend">
                <div class="text">
                    Если вы читаете эту статью, то возможно Вас заинтересует консультация специалистов:
                </div>
                <div class="links">
                    [[*doctor]]
                </div>
            </div>
        `]]
    </div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="col-sm-3 side-menu-block">
    [[$blogCats]]
</div>
<div class="row articles">
    <div class="col-sm-9">
        [[*content]]
    </div>
    <div class="col-sm-3 right-box">
        [[*doctor:notempty=`
            <div class="recommend">
                <div class="text">
                    Если вы читаете эту статью, то возможно Вас заинтересует консультация специалистов:
                </div>
                <div class="links">
                    [[*doctor]]
                </div>
            </div>
        `]]
    </div>
</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 6,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '<footer class="container">
    
</footer>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<footer class="container">
    
</footer>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'Wayfinder' => 
      array (
        'fields' => 
        array (
          'id' => 7,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Wayfinder',
          'description' => 'Wayfinder for MODx Revolution 2.0.0-beta-5 and later.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'prop_wayfinder.level_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Depth (number of levels) to build the menu from. 0 goes through all levels.',
              'area' => '',
              'area_trans' => '',
            ),
            'includeDocs' => 
            array (
              'name' => 'includeDocs',
              'desc' => 'prop_wayfinder.includeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will limit the output to only the documents specified in this parameter. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'excludeDocs' => 
            array (
              'name' => 'excludeDocs',
              'desc' => 'prop_wayfinder.excludeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will remove the documents specified in this parameter from the output. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'contexts' => 
            array (
              'name' => 'contexts',
              'desc' => 'prop_wayfinder.contexts_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Specify the contexts for the Resources that will be loaded in this menu. Useful when used with startId at 0 to show all first-level items. Note: This will increase load times a bit, but if you set cacheResults to 1, that will offset the load time.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheResults' => 
            array (
              'name' => 'cacheResults',
              'desc' => 'prop_wayfinder.cacheResults_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Cache the generated menu to the MODX Resource cache. Setting this to 1 will speed up the loading of your menus.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'prop_wayfinder.cacheTime_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 3600,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The number of seconds to store the cached menu, if cacheResults is 1. Set to 0 to store indefinitely until cache is manually cleared.',
              'area' => '',
              'area_trans' => '',
            ),
            'ph' => 
            array (
              'name' => 'ph',
              'desc' => 'prop_wayfinder.ph_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'To display send the output of Wayfinder to a placeholder set the ph parameter equal to the name of the desired placeholder. All output including the debugging (if on) will be sent to the placeholder specified.',
              'area' => '',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'prop_wayfinder.debug_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'With the debug parameter set to 1, Wayfinder will output information on how each Resource was processed.',
              'area' => '',
              'area_trans' => '',
            ),
            'ignoreHidden' => 
            array (
              'name' => 'ignoreHidden',
              'desc' => 'prop_wayfinder.ignoreHidden_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The ignoreHidden parameter allows Wayfinder to ignore the display in menu flag that can be set for each document. With this parameter set to 1, all Resources will be displayed regardless of the Display in Menu flag.',
              'area' => '',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'prop_wayfinder.hideSubMenus_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The hideSubMenus parameter will remove all non-active submenus from the Wayfinder output if set to 1. This parameter only works if multiple levels are being displayed.',
              'area' => '',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'prop_wayfinder.useWeblinkUrl_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => ' If WebLinks are used in the output, Wayfinder will output the link specified in the WebLink instead of the normal MODx link. To use the standard display of WebLinks (like any other Resource) set this to 0.',
              'area' => '',
              'area_trans' => '',
            ),
            'fullLink' => 
            array (
              'name' => 'fullLink',
              'desc' => 'prop_wayfinder.fullLink_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set to 1, will display the entire, absolute URL in the link. (It is recommended to use scheme instead.)',
              'area' => '',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'prop_wayfinder.scheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.relative',
                  'value' => '',
                  'name' => 'Relative',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.absolute',
                  'value' => 'abs',
                  'name' => 'Absolute',
                ),
                2 => 
                array (
                  'text' => 'prop_wayfinder.full',
                  'value' => 'full',
                  'name' => 'Full',
                ),
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Determines how URLs are generated for each link. Set to "abs" to show the absolute URL, "full" to show the full URL, and blank to use the relative URL. Defaults to relative.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortOrder' => 
            array (
              'name' => 'sortOrder',
              'desc' => 'prop_wayfinder.sortOrder_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.ascending',
                  'value' => 'ASC',
                  'name' => 'Ascending',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.descending',
                  'value' => 'DESC',
                  'name' => 'Descending',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Allows the menu to be sorted in either ascending or descending order.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortBy' => 
            array (
              'name' => 'sortBy',
              'desc' => 'prop_wayfinder.sortBy_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menuindex',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Sorts the output by any of the Resource fields on a level by level basis. This means that each submenu will be sorted independently of all other submenus at the same level. Random will sort the output differently every time the page is loaded if the snippet is called uncached.',
              'area' => '',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'prop_wayfinder.limit_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Causes Wayfinder to only process the number of items specified per level.',
              'area' => '',
              'area_trans' => '',
            ),
            'cssTpl' => 
            array (
              'name' => 'cssTpl',
              'desc' => 'prop_wayfinder.cssTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing a link to a style sheet or style information to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'jsTpl' => 
            array (
              'name' => 'jsTpl',
              'desc' => 'prop_wayfinder.jsTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing some Javascript to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'prop_wayfinder.rowIdPrefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set, Wayfinder will replace the id placeholder with a unique id consisting of the specified prefix plus the Resource id.',
              'area' => '',
              'area_trans' => '',
            ),
            'textOfLinks' => 
            array (
              'name' => 'textOfLinks',
              'desc' => 'prop_wayfinder.textOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menutitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktext placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'titleOfLinks' => 
            array (
              'name' => 'titleOfLinks',
              'desc' => 'prop_wayfinder.titleOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'pagetitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktitle placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'prop_wayfinder.displayStart_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Show the document as referenced by startId in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'prop_wayfinder.firstClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'first',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the first item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'prop_wayfinder.lastClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'last',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the last item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'prop_wayfinder.hereClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'active',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the items showing where you are, all the way up the chain.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'prop_wayfinder.parentClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for menu items that are a container and have children.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'prop_wayfinder.rowClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting each output row.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'prop_wayfinder.outerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the outer template.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'prop_wayfinder.innerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the inner template.',
              'area' => '',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'prop_wayfinder.levelClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting every output row level. The level number will be added to the specified class (level1, level2, level3 etc if you specified "level").',
              'area' => '',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'prop_wayfinder.selfClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the current item.',
              'area' => '',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'prop_wayfinder.webLinkClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for weblink items.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerTpl' => 
            array (
              'name' => 'outerTpl',
              'desc' => 'prop_wayfinder.outerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the outer most container; if not included, a string including "<ul>[[+wf.wrapper]]</ul>" is assumed.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowTpl' => 
            array (
              'name' => 'rowTpl',
              'desc' => 'prop_wayfinder.rowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the regular row items.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowTpl' => 
            array (
              'name' => 'parentRowTpl',
              'desc' => 'prop_wayfinder.parentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for any Resource that is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowHereTpl' => 
            array (
              'name' => 'parentRowHereTpl',
              'desc' => 'prop_wayfinder.parentRowHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereTpl' => 
            array (
              'name' => 'hereTpl',
              'desc' => 'prop_wayfinder.hereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerTpl' => 
            array (
              'name' => 'innerTpl',
              'desc' => 'prop_wayfinder.innerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for each submenu. If no innerTpl is specified the outerTpl is used in its place.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerRowTpl' => 
            array (
              'name' => 'innerRowTpl',
              'desc' => 'prop_wayfinder.innerRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the row items in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerHereTpl' => 
            array (
              'name' => 'innerHereTpl',
              'desc' => 'prop_wayfinder.innerHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'activeParentRowTpl' => 
            array (
              'name' => 'activeParentRowTpl',
              'desc' => 'prop_wayfinder.activeParentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for items that are containers, have children and are currently active in the tree.',
              'area' => '',
              'area_trans' => '',
            ),
            'categoryFoldersTpl' => 
            array (
              'name' => 'categoryFoldersTpl',
              'desc' => 'prop_wayfinder.categoryFoldersTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for category folders. Category folders are determined by setting the template to blank or by setting the link attributes field to rel="category".',
              'area' => '',
              'area_trans' => '',
            ),
            'startItemTpl' => 
            array (
              'name' => 'startItemTpl',
              'desc' => 'prop_wayfinder.startItemTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the start item, if enabled via the &displayStart parameter. Note: the default template shows the start item but does not link it. If you do not need a link, a class can be applied to the default template using the parameter &firstClass=`className`.',
              'area' => '',
              'area_trans' => '',
            ),
            'permissions' => 
            array (
              'name' => 'permissions',
              'desc' => 'prop_wayfinder.permissions_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'list',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Will check for a permission on the Resource. Defaults to "list" - set to blank to skip normal permissions checks.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'prop_wayfinder.hereId_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set, will change the "here" Resource to this ID. Defaults to the currently active Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'prop_wayfinder.where_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A JSON object for where conditions for all items selected in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'prop_wayfinder.templates_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A comma-separated list of Template IDs to restrict selected Resources to.',
              'area' => '',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'prop_wayfinder.previewunpublished_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set to Yes, if you are logged into the mgr and have the view_unpublished permission, it will allow previewing of unpublished resources in your menus in the front-end.',
              'area' => '',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'Breadcrumbs' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Breadcrumbs',
          'description' => '',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '/**
 * BreadCrumbs
 *
 * Copyright 2009-2011 by Shaun McCormick <shaun+bc@modx.com>
 *
 * BreadCrumbs is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * BreadCrumbs is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * BreadCrumbs; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package breadcrumbs
 */
/**
 * @name BreadCrumbs
 * @version 0.9f
 * @created 2006-06-12
 * @since 2009-05-11
 * @author Jared <jaredc@honeydewdesign.com>
 * @editor Bill Wilson
 * @editor wendy@djamoer.net
 * @editor grad
 * @editor Shaun McCormick <shaun@collabpad.com>
 * @editor Shawn Wilkerson <shawn@shawnwilkerson.com>
 * @editor Wieger Sloot, Sterc.nl <wieger@sterc.nl>
 * @tester Bob Ray
 * @package breadcrumbs
 *
 * This snippet was designed to show the path through the various levels of site
 * structure back to the root. It is NOT necessarily the path the user took to
 * arrive at a given page.
 *
 * @see breadcrumbs.class.php for config settings
 *
 * Included classes
 * .B_crumbBox Span that surrounds all crumb output
 * .B_hideCrumb Span surrounding the "..." if there are more crumbs than will be shown
 * .B_currentCrumb Span or A tag surrounding the current crumb
 * .B_firstCrumb Span that always surrounds the first crumb, whether it is "home" or not
 * .B_lastCrumb Span surrounding last crumb, whether it is the current page or not .
 * .B_crumb Class given to each A tag surrounding the intermediate crumbs (not home, or
 * hide)
 * .B_homeCrumb Class given to the home crumb
 */
require_once $modx->getOption(\'breadcrumbs.core_path\',null,$modx->getOption(\'core_path\').\'components/breadcrumbs/\').\'model/breadcrumbs/breadcrumbs.class.php\';
$bc = new BreadCrumbs($modx,$scriptProperties);
return $bc->run();',
          'locked' => false,
          'properties' => NULL,
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * BreadCrumbs
 *
 * Copyright 2009-2011 by Shaun McCormick <shaun+bc@modx.com>
 *
 * BreadCrumbs is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * BreadCrumbs is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * BreadCrumbs; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package breadcrumbs
 */
/**
 * @name BreadCrumbs
 * @version 0.9f
 * @created 2006-06-12
 * @since 2009-05-11
 * @author Jared <jaredc@honeydewdesign.com>
 * @editor Bill Wilson
 * @editor wendy@djamoer.net
 * @editor grad
 * @editor Shaun McCormick <shaun@collabpad.com>
 * @editor Shawn Wilkerson <shawn@shawnwilkerson.com>
 * @editor Wieger Sloot, Sterc.nl <wieger@sterc.nl>
 * @tester Bob Ray
 * @package breadcrumbs
 *
 * This snippet was designed to show the path through the various levels of site
 * structure back to the root. It is NOT necessarily the path the user took to
 * arrive at a given page.
 *
 * @see breadcrumbs.class.php for config settings
 *
 * Included classes
 * .B_crumbBox Span that surrounds all crumb output
 * .B_hideCrumb Span surrounding the "..." if there are more crumbs than will be shown
 * .B_currentCrumb Span or A tag surrounding the current crumb
 * .B_firstCrumb Span that always surrounds the first crumb, whether it is "home" or not
 * .B_lastCrumb Span surrounding last crumb, whether it is the current page or not .
 * .B_crumb Class given to each A tag surrounding the intermediate crumbs (not home, or
 * hide)
 * .B_homeCrumb Class given to the home crumb
 */
require_once $modx->getOption(\'breadcrumbs.core_path\',null,$modx->getOption(\'core_path\').\'components/breadcrumbs/\').\'model/breadcrumbs/breadcrumbs.class.php\';
$bc = new BreadCrumbs($modx,$scriptProperties);
return $bc->run();',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'MinifyX' => 
      array (
        'fields' => 
        array (
          'id' => 12,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'MinifyX',
          'description' => 'MinifyX is a snippet the allows you to combine and minify JS and CSS files',
          'editor_type' => 0,
          'category' => 8,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */
if (!$modx->getService(\'minifyx\',\'MinifyX\', MODX_CORE_PATH.\'components/minifyx/model/minifyx/\')) {return;}
/** @var MinifyX $MinifyX */
$MinifyX = new MinifyX($modx, $scriptProperties);
if (!$MinifyX->prepareCacheFolder()) {
	$modx->log(modX::LOG_LEVEL_ERROR, \'[MinifyX] Could not create cache dir "\'.$MinifyX->config[\'cacheFolder\'].\'"\');
	return;
}
$cacheFolderUrl = MODX_BASE_URL . str_replace(MODX_BASE_PATH, \'\', $MinifyX->config[\'cacheFolder\']);

$array = array(
	\'js\' => trim($modx->getOption(\'jsSources\', $scriptProperties, \'\', true)),
	\'css\' => trim($modx->getOption(\'cssSources\', $scriptProperties, \'\', true)),
);

foreach ($array as $type => $value) {
	if (empty($value)) {continue;}
	$filename = $MinifyX->config[$type.\'Filename\'] . \'_\';
	$extension = $MinifyX->config[$type.\'Ext\'];
	$register = $MinifyX->config[\'register\'.ucfirst($type)];
	$placeholder = !empty($MinifyX->config[$type.\'Placeholder\'])
		? $MinifyX->config[$type.\'Placeholder\']
		: \'\';

	$files = $MinifyX->prepareFiles($value);
	$properties = array(
		\'minify\' => $MinifyX->config[\'minify\'.ucfirst($type)]
				? \'true\'
				: \'false\',
	);

	$result = $MinifyX->Munee($files, $properties);
	$file = $MinifyX->saveFile($result, $filename, $extension);

	// Register file on frontend
	if (!empty($file) && file_exists($MinifyX->config[\'cacheFolder\'] . $file)) {
		if ($register == \'placeholder\' && $placeholder) {
			$tag = $type == \'css\'
				? \'<link rel="stylesheet" href="\' . $cacheFolderUrl .  $file . \'" type="text/css" />\'
				: \'<script type="text/javascript" src="\' . $cacheFolderUrl . $file . \'"></script>\';
			$modx->setPlaceholder($placeholder, $tag);
		}
		else {
			if ($type == \'css\') {
				$modx->regClientCSS($cacheFolderUrl . $file);
			}
			else {
				if ($register == \'startup\') {
					$modx->regClientStartupScript($cacheFolderUrl . $file);
				}
				else {
					$modx->regClientScript($cacheFolderUrl . $file);
				}
			}
		}
	}
}
return;',
          'locked' => false,
          'properties' => 
          array (
            'jsSources' => 
            array (
              'name' => 'jsSources',
              'desc' => 'minifyx_prop_jsSources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Список JS файлов для обработки. Можно указывать *.js и *.coffee.',
              'area_trans' => '',
            ),
            'cssSources' => 
            array (
              'name' => 'cssSources',
              'desc' => 'minifyx_prop_cssSources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Список CSS файлов для обработки. Можно указывать *.css, *.less и *.scss.',
              'area_trans' => '',
            ),
            'minifyJs' => 
            array (
              'name' => 'minifyJs',
              'desc' => 'minifyx_prop_minifyJs',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Включить минификацию JS?',
              'area_trans' => '',
            ),
            'minifyCss' => 
            array (
              'name' => 'minifyCss',
              'desc' => 'minifyx_prop_minifyCss',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Включить минификацию CSS?',
              'area_trans' => '',
            ),
            'jsFilename' => 
            array (
              'name' => 'jsFilename',
              'desc' => 'minifyx_prop_jsFilename',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'scripts',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Базовое имя готового JS файла.',
              'area_trans' => '',
            ),
            'cssFilename' => 
            array (
              'name' => 'cssFilename',
              'desc' => 'minifyx_prop_cssFilename',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'styles',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Базовое имя готового CSS файла.',
              'area_trans' => '',
            ),
            'registerJs' => 
            array (
              'name' => 'registerJs',
              'desc' => 'minifyx_prop_registerJs',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'placeholder',
                  'text' => 'Placeholder',
                  'name' => 'Placeholder',
                ),
                1 => 
                array (
                  'value' => 'startup',
                  'text' => 'Startup script',
                  'name' => 'Startup script',
                ),
                2 => 
                array (
                  'value' => 'default',
                  'text' => 'Default',
                  'name' => 'Default',
                ),
              ),
              'value' => 'placeholder',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Подключение javascript: можно сохранить в плейсхолдер (placeholder), вызвать в теге "head" (startup) или разместить перед закрывающим "body" (default).',
              'area_trans' => '',
            ),
            'jsPlaceholder' => 
            array (
              'name' => 'jsPlaceholder',
              'desc' => 'minifyx_prop_jsPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'MinifyX.javascript',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера javascript. Используется, если &registerJs=`placeholder`',
              'area_trans' => '',
            ),
            'registerCss' => 
            array (
              'name' => 'registerCss',
              'desc' => 'minifyx_prop_registerCss',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'placeholder',
                  'text' => 'Placeholder',
                  'name' => 'Placeholder',
                ),
                1 => 
                array (
                  'value' => 'default',
                  'text' => 'Default',
                  'name' => 'Default',
                ),
              ),
              'value' => 'placeholder',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Подключение сss: можно сохранить в плейсхолдер (placeholder) или вызвать в теге "head" (default).',
              'area_trans' => '',
            ),
            'cssPlaceholder' => 
            array (
              'name' => 'cssPlaceholder',
              'desc' => 'minifyx_prop_cssPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'MinifyX.css',
              'lexicon' => 'minifyx:properties',
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера css. Используется,если &registerCss=`placeholder`',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/minifyx/elements/snippets/snippet.minifyx.php',
          'content' => '/** @var array $scriptProperties */
if (!$modx->getService(\'minifyx\',\'MinifyX\', MODX_CORE_PATH.\'components/minifyx/model/minifyx/\')) {return;}
/** @var MinifyX $MinifyX */
$MinifyX = new MinifyX($modx, $scriptProperties);
if (!$MinifyX->prepareCacheFolder()) {
	$modx->log(modX::LOG_LEVEL_ERROR, \'[MinifyX] Could not create cache dir "\'.$MinifyX->config[\'cacheFolder\'].\'"\');
	return;
}
$cacheFolderUrl = MODX_BASE_URL . str_replace(MODX_BASE_PATH, \'\', $MinifyX->config[\'cacheFolder\']);

$array = array(
	\'js\' => trim($modx->getOption(\'jsSources\', $scriptProperties, \'\', true)),
	\'css\' => trim($modx->getOption(\'cssSources\', $scriptProperties, \'\', true)),
);

foreach ($array as $type => $value) {
	if (empty($value)) {continue;}
	$filename = $MinifyX->config[$type.\'Filename\'] . \'_\';
	$extension = $MinifyX->config[$type.\'Ext\'];
	$register = $MinifyX->config[\'register\'.ucfirst($type)];
	$placeholder = !empty($MinifyX->config[$type.\'Placeholder\'])
		? $MinifyX->config[$type.\'Placeholder\']
		: \'\';

	$files = $MinifyX->prepareFiles($value);
	$properties = array(
		\'minify\' => $MinifyX->config[\'minify\'.ucfirst($type)]
				? \'true\'
				: \'false\',
	);

	$result = $MinifyX->Munee($files, $properties);
	$file = $MinifyX->saveFile($result, $filename, $extension);

	// Register file on frontend
	if (!empty($file) && file_exists($MinifyX->config[\'cacheFolder\'] . $file)) {
		if ($register == \'placeholder\' && $placeholder) {
			$tag = $type == \'css\'
				? \'<link rel="stylesheet" href="\' . $cacheFolderUrl .  $file . \'" type="text/css" />\'
				: \'<script type="text/javascript" src="\' . $cacheFolderUrl . $file . \'"></script>\';
			$modx->setPlaceholder($placeholder, $tag);
		}
		else {
			if ($type == \'css\') {
				$modx->regClientCSS($cacheFolderUrl . $file);
			}
			else {
				if ($register == \'startup\') {
					$modx->regClientStartupScript($cacheFolderUrl . $file);
				}
				else {
					$modx->regClientScript($cacheFolderUrl . $file);
				}
			}
		}
	}
}
return;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'getResources' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'getResources',
          'description' => '<strong>1.6.1-pl</strong> A general purpose Resource listing and summarization snippet for MODX Revolution',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * getResources
 *
 * A general purpose Resource listing and summarization snippet for MODX 2.x.
 *
 * @author Jason Coward
 * @copyright Copyright 2010-2013, Jason Coward
 *
 * TEMPLATES
 *
 * tpl - Name of a chunk serving as a resource template
 * [NOTE: if not provided, properties are dumped to output for each resource]
 *
 * tplOdd - (Opt) Name of a chunk serving as resource template for resources with an odd idx value
 * (see idx property)
 * tplFirst - (Opt) Name of a chunk serving as resource template for the first resource (see first
 * property)
 * tplLast - (Opt) Name of a chunk serving as resource template for the last resource (see last
 * property)
 * tpl_{n} - (Opt) Name of a chunk serving as resource template for the nth resource
 *
 * tplCondition - (Opt) Defines a field of the resource to evaluate against keys defined in the
 * conditionalTpls property. Must be a resource field; does not work with Template Variables.
 * conditionalTpls - (Opt) A JSON object defining a map of field values and the associated tpl to
 * use when the field defined by tplCondition matches the value. [NOTE: tplOdd, tplFirst, tplLast,
 * and tpl_{n} will take precedence over any defined conditionalTpls]
 *
 * tplWrapper - (Opt) Name of a chunk serving as a wrapper template for the output
 * [NOTE: Does not work with toSeparatePlaceholders]
 *
 * SELECTION
 *
 * parents - Comma-delimited list of ids serving as parents
 *
 * context - (Opt) Comma-delimited list of context keys to limit results by; if empty, contexts for all specified
 * parents will be used (all contexts if 0 is specified) [default=]
 *
 * depth - (Opt) Integer value indicating depth to search for resources from each parent [default=10]
 *
 * tvFilters - (Opt) Delimited-list of TemplateVar values to filter resources by. Supports two
 * delimiters and two value search formats. The first delimiter || represents a logical OR and the
 * primary grouping mechanism.  Within each group you can provide a comma-delimited list of values.
 * These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the
 * value, indicating you are searching for the value in any TemplateVar tied to the Resource. An
 * example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`
 * [NOTE: filtering by values uses a LIKE query and % is considered a wildcard.]
 * [NOTE: this only looks at the raw value set for specific Resource, i. e. there must be a value
 * specifically set for the Resource and it is not evaluated.]
 *
 * tvFiltersAndDelimiter - (Opt) Custom delimiter for logical AND, default \',\', in case you want to
 * match a literal comma in the tvFilters. E.g. &tvFiltersAndDelimiter=`&&`
 * &tvFilters=`filter1==foo,bar&&filter2==baz` [default=,]
 *
 * tvFiltersOrDelimiter - (Opt) Custom delimiter for logical OR, default \'||\', in case you want to
 * match a literal \'||\' in the tvFilters. E.g. &tvFiltersOrDelimiter=`|OR|`
 * &tvFilters=`filter1==foo||bar|OR|filter2==baz` [default=||]
 *
 * where - (Opt) A JSON expression of criteria to build any additional where clauses from. An example would be
 * &where=`{{"alias:LIKE":"foo%", "OR:alias:LIKE":"%bar"},{"OR:pagetitle:=":"foobar", "AND:description:=":"raboof"}}`
 *
 * sortby - (Opt) Field to sort by or a JSON array, e.g. {"publishedon":"ASC","createdon":"DESC"} [default=publishedon]
 * sortbyTV - (opt) A Template Variable name to sort by (if supplied, this precedes the sortby value) [default=]
 * sortbyTVType - (Opt) A data type to CAST a TV Value to in order to sort on it properly [default=string]
 * sortbyAlias - (Opt) Query alias for sortby field [default=]
 * sortbyEscaped - (Opt) Escapes the field name(s) specified in sortby [default=0]
 * sortdir - (Opt) Order which to sort by [default=DESC]
 * sortdirTV - (Opt) Order which to sort by a TV [default=DESC]
 * limit - (Opt) Limits the number of resources returned [default=5]
 * offset - (Opt) An offset of resources returned by the criteria to skip [default=0]
 * dbCacheFlag - (Opt) Controls caching of db queries; 0|false = do not cache result set; 1 = cache result set
 * according to cache settings, any other integer value = number of seconds to cache result set [default=0]
 *
 * OPTIONS
 *
 * includeContent - (Opt) Indicates if the content of each resource should be returned in the
 * results [default=0]
 * includeTVs - (Opt) Indicates if TemplateVar values should be included in the properties available
 * to each resource template [default=0]
 * includeTVList - (Opt) Limits the TemplateVars that are included if includeTVs is true to those specified
 * by name in a comma-delimited list [default=]
 * prepareTVs - (Opt) Prepares media-source dependent TemplateVar values [default=1]
 * prepareTVList - (Opt) Limits the TVs that are prepared to those specified by name in a comma-delimited
 * list [default=]
 * processTVs - (Opt) Indicates if TemplateVar values should be rendered as they would on the
 * resource being summarized [default=0]
 * processTVList - (opt) Limits the TemplateVars that are processed if included to those specified
 * by name in a comma-delimited list [default=]
 * tvPrefix - (Opt) The prefix for TemplateVar properties [default=tv.]
 * idx - (Opt) You can define the starting idx of the resources, which is an property that is
 * incremented as each resource is rendered [default=1]
 * first - (Opt) Define the idx which represents the first resource (see tplFirst) [default=1]
 * last - (Opt) Define the idx which represents the last resource (see tplLast) [default=# of
 * resources being summarized + first - 1]
 * outputSeparator - (Opt) An optional string to separate each tpl instance [default="\\n"]
 * wrapIfEmpty - (Opt) Indicates if the tplWrapper should be applied if the output is empty [default=0]
 *
 */
$output = array();
$outputSeparator = isset($outputSeparator) ? $outputSeparator : "\\n";

/* set default properties */
$tpl = !empty($tpl) ? $tpl : \'\';
$includeContent = !empty($includeContent) ? true : false;
$includeTVs = !empty($includeTVs) ? true : false;
$includeTVList = !empty($includeTVList) ? explode(\',\', $includeTVList) : array();
$processTVs = !empty($processTVs) ? true : false;
$processTVList = !empty($processTVList) ? explode(\',\', $processTVList) : array();
$prepareTVs = !empty($prepareTVs) ? true : false;
$prepareTVList = !empty($prepareTVList) ? explode(\',\', $prepareTVList) : array();
$tvPrefix = isset($tvPrefix) ? $tvPrefix : \'tv.\';
$parents = (!empty($parents) || $parents === \'0\') ? explode(\',\', $parents) : array($modx->resource->get(\'id\'));
array_walk($parents, \'trim\');
$parents = array_unique($parents);
$depth = isset($depth) ? (integer) $depth : 10;

$tvFiltersOrDelimiter = isset($tvFiltersOrDelimiter) ? $tvFiltersOrDelimiter : \'||\';
$tvFiltersAndDelimiter = isset($tvFiltersAndDelimiter) ? $tvFiltersAndDelimiter : \',\';
$tvFilters = !empty($tvFilters) ? explode($tvFiltersOrDelimiter, $tvFilters) : array();

$where = !empty($where) ? $modx->fromJSON($where) : array();
$showUnpublished = !empty($showUnpublished) ? true : false;
$showDeleted = !empty($showDeleted) ? true : false;

$sortby = isset($sortby) ? $sortby : \'publishedon\';
$sortbyTV = isset($sortbyTV) ? $sortbyTV : \'\';
$sortbyAlias = isset($sortbyAlias) ? $sortbyAlias : \'modResource\';
$sortbyEscaped = !empty($sortbyEscaped) ? true : false;
$sortdir = isset($sortdir) ? $sortdir : \'DESC\';
$sortdirTV = isset($sortdirTV) ? $sortdirTV : \'DESC\';
$limit = isset($limit) ? (integer) $limit : 5;
$offset = isset($offset) ? (integer) $offset : 0;
$totalVar = !empty($totalVar) ? $totalVar : \'total\';

$dbCacheFlag = !isset($dbCacheFlag) ? false : $dbCacheFlag;
if (is_string($dbCacheFlag) || is_numeric($dbCacheFlag)) {
    if ($dbCacheFlag == \'0\') {
        $dbCacheFlag = false;
    } elseif ($dbCacheFlag == \'1\') {
        $dbCacheFlag = true;
    } else {
        $dbCacheFlag = (integer) $dbCacheFlag;
    }
}

/* multiple context support */
$contextArray = array();
$contextSpecified = false;
if (!empty($context)) {
    $contextArray = explode(\',\',$context);
    array_walk($contextArray, \'trim\');
    $contexts = array();
    foreach ($contextArray as $ctx) {
        $contexts[] = $modx->quote($ctx);
    }
    $context = implode(\',\',$contexts);
    $contextSpecified = true;
    unset($contexts,$ctx);
} else {
    $context = $modx->quote($modx->context->get(\'key\'));
}

$pcMap = array();
$pcQuery = $modx->newQuery(\'modResource\', array(\'id:IN\' => $parents), $dbCacheFlag);
$pcQuery->select(array(\'id\', \'context_key\'));
if ($pcQuery->prepare() && $pcQuery->stmt->execute()) {
    foreach ($pcQuery->stmt->fetchAll(PDO::FETCH_ASSOC) as $pcRow) {
        $pcMap[(integer) $pcRow[\'id\']] = $pcRow[\'context_key\'];
    }
}

$children = array();
$parentArray = array();
foreach ($parents as $parent) {
    $parent = (integer) $parent;
    if ($parent === 0) {
        $pchildren = array();
        if ($contextSpecified) {
            foreach ($contextArray as $pCtx) {
                if (!in_array($pCtx, $contextArray)) {
                    continue;
                }
                $options = $pCtx !== $modx->context->get(\'key\') ? array(\'context\' => $pCtx) : array();
                $pcchildren = $modx->getChildIds($parent, $depth, $options);
                if (!empty($pcchildren)) $pchildren = array_merge($pchildren, $pcchildren);
            }
        } else {
            $cQuery = $modx->newQuery(\'modContext\', array(\'key:!=\' => \'mgr\'));
            $cQuery->select(array(\'key\'));
            if ($cQuery->prepare() && $cQuery->stmt->execute()) {
                foreach ($cQuery->stmt->fetchAll(PDO::FETCH_COLUMN) as $pCtx) {
                    $options = $pCtx !== $modx->context->get(\'key\') ? array(\'context\' => $pCtx) : array();
                    $pcchildren = $modx->getChildIds($parent, $depth, $options);
                    if (!empty($pcchildren)) $pchildren = array_merge($pchildren, $pcchildren);
                }
            }
        }
        $parentArray[] = $parent;
    } else {
        $pContext = array_key_exists($parent, $pcMap) ? $pcMap[$parent] : false;
        if ($debug) $modx->log(modX::LOG_LEVEL_ERROR, "context for {$parent} is {$pContext}");
        if ($pContext && $contextSpecified && !in_array($pContext, $contextArray, true)) {
            $parent = next($parents);
            continue;
        }
        $parentArray[] = $parent;
        $options = !empty($pContext) && $pContext !== $modx->context->get(\'key\') ? array(\'context\' => $pContext) : array();
        $pchildren = $modx->getChildIds($parent, $depth, $options);
    }
    if (!empty($pchildren)) $children = array_merge($children, $pchildren);
    $parent = next($parents);
}
$parents = array_merge($parentArray, $children);

/* build query */
$criteria = array("modResource.parent IN (" . implode(\',\', $parents) . ")");
if ($contextSpecified) {
    $contextResourceTbl = $modx->getTableName(\'modContextResource\');
    $criteria[] = "(modResource.context_key IN ({$context}) OR EXISTS(SELECT 1 FROM {$contextResourceTbl} ctx WHERE ctx.resource = modResource.id AND ctx.context_key IN ({$context})))";
}
if (empty($showDeleted)) {
    $criteria[\'deleted\'] = \'0\';
}
if (empty($showUnpublished)) {
    $criteria[\'published\'] = \'1\';
}
if (empty($showHidden)) {
    $criteria[\'hidemenu\'] = \'0\';
}
if (!empty($hideContainers)) {
    $criteria[\'isfolder\'] = \'0\';
}
$criteria = $modx->newQuery(\'modResource\', $criteria);
if (!empty($tvFilters)) {
    $tmplVarTbl = $modx->getTableName(\'modTemplateVar\');
    $tmplVarResourceTbl = $modx->getTableName(\'modTemplateVarResource\');
    $conditions = array();
    $operators = array(
        \'<=>\' => \'<=>\',
        \'===\' => \'=\',
        \'!==\' => \'!=\',
        \'<>\' => \'<>\',
        \'==\' => \'LIKE\',
        \'!=\' => \'NOT LIKE\',
        \'<<\' => \'<\',
        \'<=\' => \'<=\',
        \'=<\' => \'=<\',
        \'>>\' => \'>\',
        \'>=\' => \'>=\',
        \'=>\' => \'=>\'
    );
    foreach ($tvFilters as $fGroup => $tvFilter) {
        $filterGroup = array();
        $filters = explode($tvFiltersAndDelimiter, $tvFilter);
        $multiple = count($filters) > 0;
        foreach ($filters as $filter) {
            $operator = \'==\';
            $sqlOperator = \'LIKE\';
            foreach ($operators as $op => $opSymbol) {
                if (strpos($filter, $op, 1) !== false) {
                    $operator = $op;
                    $sqlOperator = $opSymbol;
                    break;
                }
            }
            $tvValueField = \'tvr.value\';
            $tvDefaultField = \'tv.default_text\';
            $f = explode($operator, $filter);
            if (count($f) >= 2) {
                if (count($f) > 2) {
                    $k = array_shift($f);
                    $b = join($operator, $f);
                    $f = array($k, $b);
                }
                $tvName = $modx->quote($f[0]);
                if (is_numeric($f[1]) && !in_array($sqlOperator, array(\'LIKE\', \'NOT LIKE\'))) {
                    $tvValue = $f[1];
                    if ($f[1] == (integer)$f[1]) {
                        $tvValueField = "CAST({$tvValueField} AS SIGNED INTEGER)";
                        $tvDefaultField = "CAST({$tvDefaultField} AS SIGNED INTEGER)";
                    } else {
                        $tvValueField = "CAST({$tvValueField} AS DECIMAL)";
                        $tvDefaultField = "CAST({$tvDefaultField} AS DECIMAL)";
                    }
                } else {
                    $tvValue = $modx->quote($f[1]);
                }
                if ($multiple) {
                    $filterGroup[] =
                        "(EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.name = {$tvName} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id) " .
                        "OR EXISTS (SELECT 1 FROM {$tmplVarTbl} tv WHERE tv.name = {$tvName} AND {$tvDefaultField} {$sqlOperator} {$tvValue} AND tv.id NOT IN (SELECT tmplvarid FROM {$tmplVarResourceTbl} WHERE contentid = modResource.id)) " .
                        ")";
                } else {
                    $filterGroup =
                        "(EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.name = {$tvName} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id) " .
                        "OR EXISTS (SELECT 1 FROM {$tmplVarTbl} tv WHERE tv.name = {$tvName} AND {$tvDefaultField} {$sqlOperator} {$tvValue} AND tv.id NOT IN (SELECT tmplvarid FROM {$tmplVarResourceTbl} WHERE contentid = modResource.id)) " .
                        ")";
                }
            } elseif (count($f) == 1) {
                $tvValue = $modx->quote($f[0]);
                if ($multiple) {
                    $filterGroup[] = "EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id)";
                } else {
                    $filterGroup = "EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id)";
                }
            }
        }
        $conditions[] = $filterGroup;
    }
    if (!empty($conditions)) {
        $firstGroup = true;
        foreach ($conditions as $cGroup => $c) {
            if (is_array($c)) {
                $first = true;
                foreach ($c as $cond) {
                    if ($first && !$firstGroup) {
                        $criteria->condition($criteria->query[\'where\'][0][1], $cond, xPDOQuery::SQL_OR, null, $cGroup);
                    } else {
                        $criteria->condition($criteria->query[\'where\'][0][1], $cond, xPDOQuery::SQL_AND, null, $cGroup);
                    }
                    $first = false;
                }
            } else {
                $criteria->condition($criteria->query[\'where\'][0][1], $c, $firstGroup ? xPDOQuery::SQL_AND : xPDOQuery::SQL_OR, null, $cGroup);
            }
            $firstGroup = false;
        }
    }
}
/* include/exclude resources, via &resources=`123,-456` prop */
if (!empty($resources)) {
    $resourceConditions = array();
    $resources = explode(\',\',$resources);
    $include = array();
    $exclude = array();
    foreach ($resources as $resource) {
        $resource = (int)$resource;
        if ($resource == 0) continue;
        if ($resource < 0) {
            $exclude[] = abs($resource);
        } else {
            $include[] = $resource;
        }
    }
    if (!empty($include)) {
        $criteria->where(array(\'OR:modResource.id:IN\' => $include), xPDOQuery::SQL_OR);
    }
    if (!empty($exclude)) {
        $criteria->where(array(\'modResource.id:NOT IN\' => $exclude), xPDOQuery::SQL_AND, null, 1);
    }
}
if (!empty($where)) {
    $criteria->where($where);
}

$total = $modx->getCount(\'modResource\', $criteria);
$modx->setPlaceholder($totalVar, $total);

$fields = array_keys($modx->getFields(\'modResource\'));
if (empty($includeContent)) {
    $fields = array_diff($fields, array(\'content\'));
}
$columns = $includeContent ? $modx->getSelectColumns(\'modResource\', \'modResource\') : $modx->getSelectColumns(\'modResource\', \'modResource\', \'\', array(\'content\'), true);
$criteria->select($columns);
if (!empty($sortbyTV)) {
    $criteria->leftJoin(\'modTemplateVar\', \'tvDefault\', array(
        "tvDefault.name" => $sortbyTV
    ));
    $criteria->leftJoin(\'modTemplateVarResource\', \'tvSort\', array(
        "tvSort.contentid = modResource.id",
        "tvSort.tmplvarid = tvDefault.id"
    ));
    if (empty($sortbyTVType)) $sortbyTVType = \'string\';
    if ($modx->getOption(\'dbtype\') === \'mysql\') {
        switch ($sortbyTVType) {
            case \'integer\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS SIGNED INTEGER) AS sortTV");
                break;
            case \'decimal\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS DECIMAL) AS sortTV");
                break;
            case \'datetime\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS DATETIME) AS sortTV");
                break;
            case \'string\':
            default:
                $criteria->select("IFNULL(tvSort.value, tvDefault.default_text) AS sortTV");
                break;
        }
    } elseif ($modx->getOption(\'dbtype\') === \'sqlsrv\') {
        switch ($sortbyTVType) {
            case \'integer\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS BIGINT) AS sortTV");
                break;
            case \'decimal\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS DECIMAL) AS sortTV");
                break;
            case \'datetime\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS DATETIME) AS sortTV");
                break;
            case \'string\':
            default:
                $criteria->select("ISNULL(tvSort.value, tvDefault.default_text) AS sortTV");
                break;
        }
    }
    $criteria->sortby("sortTV", $sortdirTV);
}
if (!empty($sortby)) {
    if (strpos($sortby, \'{\') === 0) {
        $sorts = $modx->fromJSON($sortby);
    } else {
        $sorts = array($sortby => $sortdir);
    }
    if (is_array($sorts)) {
        while (list($sort, $dir) = each($sorts)) {
            if ($sortbyEscaped) $sort = $modx->escape($sort);
            if (!empty($sortbyAlias)) $sort = $modx->escape($sortbyAlias) . ".{$sort}";
            $criteria->sortby($sort, $dir);
        }
    }
}
if (!empty($limit)) $criteria->limit($limit, $offset);

if (!empty($debug)) {
    $criteria->prepare();
    $modx->log(modX::LOG_LEVEL_ERROR, $criteria->toSQL());
}
$collection = $modx->getCollection(\'modResource\', $criteria, $dbCacheFlag);

$idx = !empty($idx) || $idx === \'0\' ? (integer) $idx : 1;
$first = empty($first) && $first !== \'0\' ? 1 : (integer) $first;
$last = empty($last) ? (count($collection) + $idx - 1) : (integer) $last;

/* include parseTpl */
include_once $modx->getOption(\'getresources.core_path\',null,$modx->getOption(\'core_path\').\'components/getresources/\').\'include.parsetpl.php\';

$templateVars = array();
if (!empty($includeTVs) && !empty($includeTVList)) {
    $templateVars = $modx->getCollection(\'modTemplateVar\', array(\'name:IN\' => $includeTVList));
}
/** @var modResource $resource */
foreach ($collection as $resourceId => $resource) {
    $tvs = array();
    if (!empty($includeTVs)) {
        if (empty($includeTVList)) {
            $templateVars = $resource->getMany(\'TemplateVars\');
        }
        /** @var modTemplateVar $templateVar */
        foreach ($templateVars as $tvId => $templateVar) {
            if (!empty($includeTVList) && !in_array($templateVar->get(\'name\'), $includeTVList)) continue;
            if ($processTVs && (empty($processTVList) || in_array($templateVar->get(\'name\'), $processTVList))) {
                $tvs[$tvPrefix . $templateVar->get(\'name\')] = $templateVar->renderOutput($resource->get(\'id\'));
            } else {
                $value = $templateVar->getValue($resource->get(\'id\'));
                if ($prepareTVs && method_exists($templateVar, \'prepareOutput\') && (empty($prepareTVList) || in_array($templateVar->get(\'name\'), $prepareTVList))) {
                    $value = $templateVar->prepareOutput($value);
                }
                $tvs[$tvPrefix . $templateVar->get(\'name\')] = $value;
            }
        }
    }
    $odd = ($idx & 1);
    $properties = array_merge(
        $scriptProperties
        ,array(
            \'idx\' => $idx
            ,\'first\' => $first
            ,\'last\' => $last
            ,\'odd\' => $odd
        )
        ,$includeContent ? $resource->toArray() : $resource->get($fields)
        ,$tvs
    );
    $resourceTpl = false;
    if ($idx == $first && !empty($tplFirst)) {
        $resourceTpl = parseTpl($tplFirst, $properties);
    }
    if ($idx == $last && empty($resourceTpl) && !empty($tplLast)) {
        $resourceTpl = parseTpl($tplLast, $properties);
    }
    $tplidx = \'tpl_\' . $idx;
    if (empty($resourceTpl) && !empty($$tplidx)) {
        $resourceTpl = parseTpl($$tplidx, $properties);
    }
    if ($idx > 1 && empty($resourceTpl)) {
        $divisors = getDivisors($idx);
        if (!empty($divisors)) {
            foreach ($divisors as $divisor) {
                $tplnth = \'tpl_n\' . $divisor;
                if (!empty($$tplnth)) {
                    $resourceTpl = parseTpl($$tplnth, $properties);
                    if (!empty($resourceTpl)) {
                        break;
                    }
                }
            }
        }
    }
    if ($odd && empty($resourceTpl) && !empty($tplOdd)) {
        $resourceTpl = parseTpl($tplOdd, $properties);
    }
    if (!empty($tplCondition) && !empty($conditionalTpls) && empty($resourceTpl)) {
        $conTpls = $modx->fromJSON($conditionalTpls);
        $subject = $properties[$tplCondition];
        $tplOperator = !empty($tplOperator) ? $tplOperator : \'=\';
        $tplOperator = strtolower($tplOperator);
        $tplCon = \'\';
        foreach ($conTpls as $operand => $conditionalTpl) {
            switch ($tplOperator) {
                case \'!=\':
                case \'neq\':
                case \'not\':
                case \'isnot\':
                case \'isnt\':
                case \'unequal\':
                case \'notequal\':
                    $tplCon = (($subject != $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'<\':
                case \'lt\':
                case \'less\':
                case \'lessthan\':
                    $tplCon = (($subject < $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'>\':
                case \'gt\':
                case \'greater\':
                case \'greaterthan\':
                    $tplCon = (($subject > $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'<=\':
                case \'lte\':
                case \'lessthanequals\':
                case \'lessthanorequalto\':
                    $tplCon = (($subject <= $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'>=\':
                case \'gte\':
                case \'greaterthanequals\':
                case \'greaterthanequalto\':
                    $tplCon = (($subject >= $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'isempty\':
                case \'empty\':
                    $tplCon = empty($subject) ? $conditionalTpl : $tplCon;
                    break;
                case \'!empty\':
                case \'notempty\':
                case \'isnotempty\':
                    $tplCon = !empty($subject) && $subject != \'\' ? $conditionalTpl : $tplCon;
                    break;
                case \'isnull\':
                case \'null\':
                    $tplCon = $subject == null || strtolower($subject) == \'null\' ? $conditionalTpl : $tplCon;
                    break;
                case \'inarray\':
                case \'in_array\':
                case \'ia\':
                    $operand = explode(\',\', $operand);
                    $tplCon = in_array($subject, $operand) ? $conditionalTpl : $tplCon;
                    break;
                case \'between\':
                case \'range\':
                case \'>=<\':
                case \'><\':
                    $operand = explode(\',\', $operand);
                    $tplCon = ($subject >= min($operand) && $subject <= max($operand)) ? $conditionalTpl : $tplCon;
                    break;
                case \'==\':
                case \'=\':
                case \'eq\':
                case \'is\':
                case \'equal\':
                case \'equals\':
                case \'equalto\':
                default:
                    $tplCon = (($subject == $operand) ? $conditionalTpl : $tplCon);
                    break;
            }
        }
        if (!empty($tplCon)) {
            $resourceTpl = parseTpl($tplCon, $properties);
        }
    }
    if (!empty($tpl) && empty($resourceTpl)) {
        $resourceTpl = parseTpl($tpl, $properties);
    }
    if ($resourceTpl === false && !empty($debug)) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $output[]= $chunk->process(array(), \'<pre>\' . print_r($properties, true) .\'</pre>\');
    } else {
        $output[]= $resourceTpl;
    }
    $idx++;
}

/* output */
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\', $scriptProperties, false);
if (!empty($toSeparatePlaceholders)) {
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
    return \'\';
}

$output = implode($outputSeparator, $output);

$tplWrapper = $modx->getOption(\'tplWrapper\', $scriptProperties, false);
$wrapIfEmpty = $modx->getOption(\'wrapIfEmpty\', $scriptProperties, false);
if (!empty($tplWrapper) && ($wrapIfEmpty || !empty($output))) {
    $output = parseTpl($tplWrapper, array_merge($scriptProperties, array(\'output\' => $output)));
}

$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, false);
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
    return \'\';
}
return $output;',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'Name of a chunk serving as a resource template. NOTE: if not provided, properties are dumped to output for each resource.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as a resource template. NOTE: if not provided, properties are dumped to output for each resource.',
              'area_trans' => '',
            ),
            'tplOdd' => 
            array (
              'name' => 'tplOdd',
              'desc' => 'Name of a chunk serving as resource template for resources with an odd idx value (see idx property).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as resource template for resources with an odd idx value (see idx property).',
              'area_trans' => '',
            ),
            'tplFirst' => 
            array (
              'name' => 'tplFirst',
              'desc' => 'Name of a chunk serving as resource template for the first resource (see first property).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as resource template for the first resource (see first property).',
              'area_trans' => '',
            ),
            'tplLast' => 
            array (
              'name' => 'tplLast',
              'desc' => 'Name of a chunk serving as resource template for the last resource (see last property).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as resource template for the last resource (see last property).',
              'area_trans' => '',
            ),
            'tplWrapper' => 
            array (
              'name' => 'tplWrapper',
              'desc' => 'Name of a chunk serving as wrapper template for the Snippet output. This does not work with toSeparatePlaceholders.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as wrapper template for the Snippet output. This does not work with toSeparatePlaceholders.',
              'area_trans' => '',
            ),
            'wrapIfEmpty' => 
            array (
              'name' => 'wrapIfEmpty',
              'desc' => 'Indicates if empty output should be wrapped by the tplWrapper, if specified. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if empty output should be wrapped by the tplWrapper, if specified. Defaults to false.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'A field name to sort by or JSON object of field names and sortdir for each field, e.g. {"publishedon":"ASC","createdon":"DESC"}. Defaults to publishedon.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'publishedon',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A field name to sort by or JSON object of field names and sortdir for each field, e.g. {"publishedon":"ASC","createdon":"DESC"}. Defaults to publishedon.',
              'area_trans' => '',
            ),
            'sortbyTV' => 
            array (
              'name' => 'sortbyTV',
              'desc' => 'Name of a Template Variable to sort by. Defaults to empty string.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a Template Variable to sort by. Defaults to empty string.',
              'area_trans' => '',
            ),
            'sortbyTVType' => 
            array (
              'name' => 'sortbyTVType',
              'desc' => 'An optional type to indicate how to sort on the Template Variable value.',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'string',
                  'value' => 'string',
                  'name' => 'Строка',
                ),
                1 => 
                array (
                  'text' => 'integer',
                  'value' => 'integer',
                  'name' => 'integer',
                ),
                2 => 
                array (
                  'text' => 'decimal',
                  'value' => 'decimal',
                  'name' => 'decimal',
                ),
                3 => 
                array (
                  'text' => 'datetime',
                  'value' => 'datetime',
                  'name' => 'datetime',
                ),
              ),
              'value' => 'string',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'An optional type to indicate how to sort on the Template Variable value.',
              'area_trans' => '',
            ),
            'sortbyAlias' => 
            array (
              'name' => 'sortbyAlias',
              'desc' => 'Query alias for sortby field. Defaults to an empty string.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Query alias for sortby field. Defaults to an empty string.',
              'area_trans' => '',
            ),
            'sortbyEscaped' => 
            array (
              'name' => 'sortbyEscaped',
              'desc' => 'Determines if the field name specified in sortby should be escaped. Defaults to 0.',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Determines if the field name specified in sortby should be escaped. Defaults to 0.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'Order which to sort by. Defaults to DESC.',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'DESC',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Order which to sort by. Defaults to DESC.',
              'area_trans' => '',
            ),
            'sortdirTV' => 
            array (
              'name' => 'sortdirTV',
              'desc' => 'Order which to sort a Template Variable by. Defaults to DESC.',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'DESC',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Order which to sort a Template Variable by. Defaults to DESC.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'Limits the number of resources returned. Defaults to 5.',
              'type' => 'textfield',
              'options' => '',
              'value' => '5',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Limits the number of resources returned. Defaults to 5.',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'An offset of resources returned by the criteria to skip.',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'An offset of resources returned by the criteria to skip.',
              'area_trans' => '',
            ),
            'tvFilters' => 
            array (
              'name' => 'tvFilters',
              'desc' => 'Delimited-list of TemplateVar values to filter resources by. Supports two delimiters and two value search formats. THe first delimiter || represents a logical OR and the primary grouping mechanism.  Within each group you can provide a comma-delimited list of values. These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the value, indicating you are searching for the value in any TemplateVar tied to the Resource. An example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`. <br />NOTE: filtering by values uses a LIKE query and % is considered a wildcard. <br />ANOTHER NOTE: This only looks at the raw value set for specific Resource, i. e. there must be a value specifically set for the Resource and it is not evaluated.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Delimited-list of TemplateVar values to filter resources by. Supports two delimiters and two value search formats. THe first delimiter || represents a logical OR and the primary grouping mechanism.  Within each group you can provide a comma-delimited list of values. These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the value, indicating you are searching for the value in any TemplateVar tied to the Resource. An example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`. <br />NOTE: filtering by values uses a LIKE query and % is considered a wildcard. <br />ANOTHER NOTE: This only looks at the raw value set for specific Resource, i. e. there must be a value specifically set for the Resource and it is not evaluated.',
              'area_trans' => '',
            ),
            'tvFiltersAndDelimiter' => 
            array (
              'name' => 'tvFiltersAndDelimiter',
              'desc' => 'The delimiter to use to separate logical AND expressions in tvFilters. Default is ,',
              'type' => 'textfield',
              'options' => '',
              'value' => ',',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The delimiter to use to separate logical AND expressions in tvFilters. Default is ,',
              'area_trans' => '',
            ),
            'tvFiltersOrDelimiter' => 
            array (
              'name' => 'tvFiltersOrDelimiter',
              'desc' => 'The delimiter to use to separate logical OR expressions in tvFilters. Default is ||',
              'type' => 'textfield',
              'options' => '',
              'value' => '||',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The delimiter to use to separate logical OR expressions in tvFilters. Default is ||',
              'area_trans' => '',
            ),
            'depth' => 
            array (
              'name' => 'depth',
              'desc' => 'Integer value indicating depth to search for resources from each parent. Defaults to 10.',
              'type' => 'textfield',
              'options' => '',
              'value' => '10',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Integer value indicating depth to search for resources from each parent. Defaults to 10.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'Optional. Comma-delimited list of ids serving as parents.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Optional. Comma-delimited list of ids serving as parents.',
              'area_trans' => '',
            ),
            'includeContent' => 
            array (
              'name' => 'includeContent',
              'desc' => 'Indicates if the content of each resource should be returned in the results. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if the content of each resource should be returned in the results. Defaults to false.',
              'area_trans' => '',
            ),
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'Indicates if TemplateVar values should be included in the properties available to each resource template. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if TemplateVar values should be included in the properties available to each resource template. Defaults to false.',
              'area_trans' => '',
            ),
            'includeTVList' => 
            array (
              'name' => 'includeTVList',
              'desc' => 'Limits included TVs to those specified as a comma-delimited list of TV names. Defaults to empty.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Limits included TVs to those specified as a comma-delimited list of TV names. Defaults to empty.',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'Indicates if Resources that are hidden from menus should be shown. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if Resources that are hidden from menus should be shown. Defaults to false.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'Indicates if Resources that are unpublished should be shown. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if Resources that are unpublished should be shown. Defaults to false.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'Indicates if Resources that are deleted should be shown. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if Resources that are deleted should be shown. Defaults to false.',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'A comma-separated list of resource IDs to exclude or include. IDs with a - in front mean to exclude. Ex: 123,-456 means to include Resource 123, but always exclude Resource 456.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A comma-separated list of resource IDs to exclude or include. IDs with a - in front mean to exclude. Ex: 123,-456 means to include Resource 123, but always exclude Resource 456.',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'Indicates if TemplateVar values should be rendered as they would on the resource being summarized. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if TemplateVar values should be rendered as they would on the resource being summarized. Defaults to false.',
              'area_trans' => '',
            ),
            'processTVList' => 
            array (
              'name' => 'processTVList',
              'desc' => 'Limits processed TVs to those specified as a comma-delimited list of TV names; note only includedTVs will be available for processing if specified. Defaults to empty.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Limits processed TVs to those specified as a comma-delimited list of TV names; note only includedTVs will be available for processing if specified. Defaults to empty.',
              'area_trans' => '',
            ),
            'prepareTVs' => 
            array (
              'name' => 'prepareTVs',
              'desc' => 'Indicates if TemplateVar values that are not processed fully should be prepared before being returned. Defaults to true.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if TemplateVar values that are not processed fully should be prepared before being returned. Defaults to true.',
              'area_trans' => '',
            ),
            'prepareTVList' => 
            array (
              'name' => 'prepareTVList',
              'desc' => 'Limits prepared TVs to those specified as a comma-delimited list of TV names; note only includedTVs will be available for preparing if specified. Defaults to empty.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Limits prepared TVs to those specified as a comma-delimited list of TV names; note only includedTVs will be available for preparing if specified. Defaults to empty.',
              'area_trans' => '',
            ),
            'tvPrefix' => 
            array (
              'name' => 'tvPrefix',
              'desc' => 'The prefix for TemplateVar properties. Defaults to: tv.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tv.',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The prefix for TemplateVar properties. Defaults to: tv.',
              'area_trans' => '',
            ),
            'idx' => 
            array (
              'name' => 'idx',
              'desc' => 'You can define the starting idx of the resources, which is an property that is incremented as each resource is rendered.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'You can define the starting idx of the resources, which is an property that is incremented as each resource is rendered.',
              'area_trans' => '',
            ),
            'first' => 
            array (
              'name' => 'first',
              'desc' => 'Define the idx which represents the first resource (see tplFirst). Defaults to 1.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Define the idx which represents the first resource (see tplFirst). Defaults to 1.',
              'area_trans' => '',
            ),
            'last' => 
            array (
              'name' => 'last',
              'desc' => 'Define the idx which represents the last resource (see tplLast). Defaults to the number of resources being summarized + first - 1',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Define the idx which represents the last resource (see tplLast). Defaults to the number of resources being summarized + first - 1',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'If set, will assign the result to this placeholder instead of outputting it directly.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If set, will assign the result to this placeholder instead of outputting it directly.',
              'area_trans' => '',
            ),
            'toSeparatePlaceholders' => 
            array (
              'name' => 'toSeparatePlaceholders',
              'desc' => 'If set, will assign EACH result to a separate placeholder named by this param suffixed with a sequential number (starting from 0).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If set, will assign EACH result to a separate placeholder named by this param suffixed with a sequential number (starting from 0).',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'If true, will send the SQL query to the MODX log. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If true, will send the SQL query to the MODX log. Defaults to false.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'A JSON expression of criteria to build any additional where clauses from, e.g. &where=`{{"alias:LIKE":"foo%", "OR:alias:LIKE":"%bar"},{"OR:pagetitle:=":"foobar", "AND:description:=":"raboof"}}`',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A JSON expression of criteria to build any additional where clauses from, e.g. &where=`{{"alias:LIKE":"foo%", "OR:alias:LIKE":"%bar"},{"OR:pagetitle:=":"foobar", "AND:description:=":"raboof"}}`',
              'area_trans' => '',
            ),
            'dbCacheFlag' => 
            array (
              'name' => 'dbCacheFlag',
              'desc' => 'Determines how result sets are cached if cache_db is enabled in MODX. 0|false = do not cache result set; 1 = cache result set according to cache settings, any other integer value = number of seconds to cache result set',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Determines how result sets are cached if cache_db is enabled in MODX. 0|false = do not cache result set; 1 = cache result set according to cache settings, any other integer value = number of seconds to cache result set',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'A comma-delimited list of context keys for limiting results. Default is empty, i.e. do not limit results by context.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A comma-delimited list of context keys for limiting results. Default is empty, i.e. do not limit results by context.',
              'area_trans' => '',
            ),
            'tplCondition' => 
            array (
              'name' => 'tplCondition',
              'desc' => 'A condition to compare against the conditionalTpls property to map Resources to different tpls based on custom conditional logic.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A condition to compare against the conditionalTpls property to map Resources to different tpls based on custom conditional logic.',
              'area_trans' => '',
            ),
            'tplOperator' => 
            array (
              'name' => 'tplOperator',
              'desc' => 'An optional operator to use for the tplCondition when comparing against the conditionalTpls operands. Default is == (equals).',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'is equal to',
                  'value' => '==',
                  'name' => 'is equal to',
                ),
                1 => 
                array (
                  'text' => 'is not equal to',
                  'value' => '!=',
                  'name' => 'is not equal to',
                ),
                2 => 
                array (
                  'text' => 'less than',
                  'value' => '<',
                  'name' => 'less than',
                ),
                3 => 
                array (
                  'text' => 'less than or equal to',
                  'value' => '<=',
                  'name' => 'less than or equal to',
                ),
                4 => 
                array (
                  'text' => 'greater than or equal to',
                  'value' => '>=',
                  'name' => 'greater than or equal to',
                ),
                5 => 
                array (
                  'text' => 'is empty',
                  'value' => 'empty',
                  'name' => 'is empty',
                ),
                6 => 
                array (
                  'text' => 'is not empty',
                  'value' => '!empty',
                  'name' => 'is not empty',
                ),
                7 => 
                array (
                  'text' => 'is null',
                  'value' => 'null',
                  'name' => 'is null',
                ),
                8 => 
                array (
                  'text' => 'is in array',
                  'value' => 'inarray',
                  'name' => 'is in array',
                ),
                9 => 
                array (
                  'text' => 'is between',
                  'value' => 'between',
                  'name' => 'is between',
                ),
              ),
              'value' => '==',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'An optional operator to use for the tplCondition when comparing against the conditionalTpls operands. Default is == (equals).',
              'area_trans' => '',
            ),
            'conditionalTpls' => 
            array (
              'name' => 'conditionalTpls',
              'desc' => 'A JSON map of conditional operands and tpls to compare against the tplCondition property using the specified tplOperator.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A JSON map of conditional operands and tpls to compare against the tplCondition property using the specified tplOperator.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * getResources
 *
 * A general purpose Resource listing and summarization snippet for MODX 2.x.
 *
 * @author Jason Coward
 * @copyright Copyright 2010-2013, Jason Coward
 *
 * TEMPLATES
 *
 * tpl - Name of a chunk serving as a resource template
 * [NOTE: if not provided, properties are dumped to output for each resource]
 *
 * tplOdd - (Opt) Name of a chunk serving as resource template for resources with an odd idx value
 * (see idx property)
 * tplFirst - (Opt) Name of a chunk serving as resource template for the first resource (see first
 * property)
 * tplLast - (Opt) Name of a chunk serving as resource template for the last resource (see last
 * property)
 * tpl_{n} - (Opt) Name of a chunk serving as resource template for the nth resource
 *
 * tplCondition - (Opt) Defines a field of the resource to evaluate against keys defined in the
 * conditionalTpls property. Must be a resource field; does not work with Template Variables.
 * conditionalTpls - (Opt) A JSON object defining a map of field values and the associated tpl to
 * use when the field defined by tplCondition matches the value. [NOTE: tplOdd, tplFirst, tplLast,
 * and tpl_{n} will take precedence over any defined conditionalTpls]
 *
 * tplWrapper - (Opt) Name of a chunk serving as a wrapper template for the output
 * [NOTE: Does not work with toSeparatePlaceholders]
 *
 * SELECTION
 *
 * parents - Comma-delimited list of ids serving as parents
 *
 * context - (Opt) Comma-delimited list of context keys to limit results by; if empty, contexts for all specified
 * parents will be used (all contexts if 0 is specified) [default=]
 *
 * depth - (Opt) Integer value indicating depth to search for resources from each parent [default=10]
 *
 * tvFilters - (Opt) Delimited-list of TemplateVar values to filter resources by. Supports two
 * delimiters and two value search formats. The first delimiter || represents a logical OR and the
 * primary grouping mechanism.  Within each group you can provide a comma-delimited list of values.
 * These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the
 * value, indicating you are searching for the value in any TemplateVar tied to the Resource. An
 * example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`
 * [NOTE: filtering by values uses a LIKE query and % is considered a wildcard.]
 * [NOTE: this only looks at the raw value set for specific Resource, i. e. there must be a value
 * specifically set for the Resource and it is not evaluated.]
 *
 * tvFiltersAndDelimiter - (Opt) Custom delimiter for logical AND, default \',\', in case you want to
 * match a literal comma in the tvFilters. E.g. &tvFiltersAndDelimiter=`&&`
 * &tvFilters=`filter1==foo,bar&&filter2==baz` [default=,]
 *
 * tvFiltersOrDelimiter - (Opt) Custom delimiter for logical OR, default \'||\', in case you want to
 * match a literal \'||\' in the tvFilters. E.g. &tvFiltersOrDelimiter=`|OR|`
 * &tvFilters=`filter1==foo||bar|OR|filter2==baz` [default=||]
 *
 * where - (Opt) A JSON expression of criteria to build any additional where clauses from. An example would be
 * &where=`{{"alias:LIKE":"foo%", "OR:alias:LIKE":"%bar"},{"OR:pagetitle:=":"foobar", "AND:description:=":"raboof"}}`
 *
 * sortby - (Opt) Field to sort by or a JSON array, e.g. {"publishedon":"ASC","createdon":"DESC"} [default=publishedon]
 * sortbyTV - (opt) A Template Variable name to sort by (if supplied, this precedes the sortby value) [default=]
 * sortbyTVType - (Opt) A data type to CAST a TV Value to in order to sort on it properly [default=string]
 * sortbyAlias - (Opt) Query alias for sortby field [default=]
 * sortbyEscaped - (Opt) Escapes the field name(s) specified in sortby [default=0]
 * sortdir - (Opt) Order which to sort by [default=DESC]
 * sortdirTV - (Opt) Order which to sort by a TV [default=DESC]
 * limit - (Opt) Limits the number of resources returned [default=5]
 * offset - (Opt) An offset of resources returned by the criteria to skip [default=0]
 * dbCacheFlag - (Opt) Controls caching of db queries; 0|false = do not cache result set; 1 = cache result set
 * according to cache settings, any other integer value = number of seconds to cache result set [default=0]
 *
 * OPTIONS
 *
 * includeContent - (Opt) Indicates if the content of each resource should be returned in the
 * results [default=0]
 * includeTVs - (Opt) Indicates if TemplateVar values should be included in the properties available
 * to each resource template [default=0]
 * includeTVList - (Opt) Limits the TemplateVars that are included if includeTVs is true to those specified
 * by name in a comma-delimited list [default=]
 * prepareTVs - (Opt) Prepares media-source dependent TemplateVar values [default=1]
 * prepareTVList - (Opt) Limits the TVs that are prepared to those specified by name in a comma-delimited
 * list [default=]
 * processTVs - (Opt) Indicates if TemplateVar values should be rendered as they would on the
 * resource being summarized [default=0]
 * processTVList - (opt) Limits the TemplateVars that are processed if included to those specified
 * by name in a comma-delimited list [default=]
 * tvPrefix - (Opt) The prefix for TemplateVar properties [default=tv.]
 * idx - (Opt) You can define the starting idx of the resources, which is an property that is
 * incremented as each resource is rendered [default=1]
 * first - (Opt) Define the idx which represents the first resource (see tplFirst) [default=1]
 * last - (Opt) Define the idx which represents the last resource (see tplLast) [default=# of
 * resources being summarized + first - 1]
 * outputSeparator - (Opt) An optional string to separate each tpl instance [default="\\n"]
 * wrapIfEmpty - (Opt) Indicates if the tplWrapper should be applied if the output is empty [default=0]
 *
 */
$output = array();
$outputSeparator = isset($outputSeparator) ? $outputSeparator : "\\n";

/* set default properties */
$tpl = !empty($tpl) ? $tpl : \'\';
$includeContent = !empty($includeContent) ? true : false;
$includeTVs = !empty($includeTVs) ? true : false;
$includeTVList = !empty($includeTVList) ? explode(\',\', $includeTVList) : array();
$processTVs = !empty($processTVs) ? true : false;
$processTVList = !empty($processTVList) ? explode(\',\', $processTVList) : array();
$prepareTVs = !empty($prepareTVs) ? true : false;
$prepareTVList = !empty($prepareTVList) ? explode(\',\', $prepareTVList) : array();
$tvPrefix = isset($tvPrefix) ? $tvPrefix : \'tv.\';
$parents = (!empty($parents) || $parents === \'0\') ? explode(\',\', $parents) : array($modx->resource->get(\'id\'));
array_walk($parents, \'trim\');
$parents = array_unique($parents);
$depth = isset($depth) ? (integer) $depth : 10;

$tvFiltersOrDelimiter = isset($tvFiltersOrDelimiter) ? $tvFiltersOrDelimiter : \'||\';
$tvFiltersAndDelimiter = isset($tvFiltersAndDelimiter) ? $tvFiltersAndDelimiter : \',\';
$tvFilters = !empty($tvFilters) ? explode($tvFiltersOrDelimiter, $tvFilters) : array();

$where = !empty($where) ? $modx->fromJSON($where) : array();
$showUnpublished = !empty($showUnpublished) ? true : false;
$showDeleted = !empty($showDeleted) ? true : false;

$sortby = isset($sortby) ? $sortby : \'publishedon\';
$sortbyTV = isset($sortbyTV) ? $sortbyTV : \'\';
$sortbyAlias = isset($sortbyAlias) ? $sortbyAlias : \'modResource\';
$sortbyEscaped = !empty($sortbyEscaped) ? true : false;
$sortdir = isset($sortdir) ? $sortdir : \'DESC\';
$sortdirTV = isset($sortdirTV) ? $sortdirTV : \'DESC\';
$limit = isset($limit) ? (integer) $limit : 5;
$offset = isset($offset) ? (integer) $offset : 0;
$totalVar = !empty($totalVar) ? $totalVar : \'total\';

$dbCacheFlag = !isset($dbCacheFlag) ? false : $dbCacheFlag;
if (is_string($dbCacheFlag) || is_numeric($dbCacheFlag)) {
    if ($dbCacheFlag == \'0\') {
        $dbCacheFlag = false;
    } elseif ($dbCacheFlag == \'1\') {
        $dbCacheFlag = true;
    } else {
        $dbCacheFlag = (integer) $dbCacheFlag;
    }
}

/* multiple context support */
$contextArray = array();
$contextSpecified = false;
if (!empty($context)) {
    $contextArray = explode(\',\',$context);
    array_walk($contextArray, \'trim\');
    $contexts = array();
    foreach ($contextArray as $ctx) {
        $contexts[] = $modx->quote($ctx);
    }
    $context = implode(\',\',$contexts);
    $contextSpecified = true;
    unset($contexts,$ctx);
} else {
    $context = $modx->quote($modx->context->get(\'key\'));
}

$pcMap = array();
$pcQuery = $modx->newQuery(\'modResource\', array(\'id:IN\' => $parents), $dbCacheFlag);
$pcQuery->select(array(\'id\', \'context_key\'));
if ($pcQuery->prepare() && $pcQuery->stmt->execute()) {
    foreach ($pcQuery->stmt->fetchAll(PDO::FETCH_ASSOC) as $pcRow) {
        $pcMap[(integer) $pcRow[\'id\']] = $pcRow[\'context_key\'];
    }
}

$children = array();
$parentArray = array();
foreach ($parents as $parent) {
    $parent = (integer) $parent;
    if ($parent === 0) {
        $pchildren = array();
        if ($contextSpecified) {
            foreach ($contextArray as $pCtx) {
                if (!in_array($pCtx, $contextArray)) {
                    continue;
                }
                $options = $pCtx !== $modx->context->get(\'key\') ? array(\'context\' => $pCtx) : array();
                $pcchildren = $modx->getChildIds($parent, $depth, $options);
                if (!empty($pcchildren)) $pchildren = array_merge($pchildren, $pcchildren);
            }
        } else {
            $cQuery = $modx->newQuery(\'modContext\', array(\'key:!=\' => \'mgr\'));
            $cQuery->select(array(\'key\'));
            if ($cQuery->prepare() && $cQuery->stmt->execute()) {
                foreach ($cQuery->stmt->fetchAll(PDO::FETCH_COLUMN) as $pCtx) {
                    $options = $pCtx !== $modx->context->get(\'key\') ? array(\'context\' => $pCtx) : array();
                    $pcchildren = $modx->getChildIds($parent, $depth, $options);
                    if (!empty($pcchildren)) $pchildren = array_merge($pchildren, $pcchildren);
                }
            }
        }
        $parentArray[] = $parent;
    } else {
        $pContext = array_key_exists($parent, $pcMap) ? $pcMap[$parent] : false;
        if ($debug) $modx->log(modX::LOG_LEVEL_ERROR, "context for {$parent} is {$pContext}");
        if ($pContext && $contextSpecified && !in_array($pContext, $contextArray, true)) {
            $parent = next($parents);
            continue;
        }
        $parentArray[] = $parent;
        $options = !empty($pContext) && $pContext !== $modx->context->get(\'key\') ? array(\'context\' => $pContext) : array();
        $pchildren = $modx->getChildIds($parent, $depth, $options);
    }
    if (!empty($pchildren)) $children = array_merge($children, $pchildren);
    $parent = next($parents);
}
$parents = array_merge($parentArray, $children);

/* build query */
$criteria = array("modResource.parent IN (" . implode(\',\', $parents) . ")");
if ($contextSpecified) {
    $contextResourceTbl = $modx->getTableName(\'modContextResource\');
    $criteria[] = "(modResource.context_key IN ({$context}) OR EXISTS(SELECT 1 FROM {$contextResourceTbl} ctx WHERE ctx.resource = modResource.id AND ctx.context_key IN ({$context})))";
}
if (empty($showDeleted)) {
    $criteria[\'deleted\'] = \'0\';
}
if (empty($showUnpublished)) {
    $criteria[\'published\'] = \'1\';
}
if (empty($showHidden)) {
    $criteria[\'hidemenu\'] = \'0\';
}
if (!empty($hideContainers)) {
    $criteria[\'isfolder\'] = \'0\';
}
$criteria = $modx->newQuery(\'modResource\', $criteria);
if (!empty($tvFilters)) {
    $tmplVarTbl = $modx->getTableName(\'modTemplateVar\');
    $tmplVarResourceTbl = $modx->getTableName(\'modTemplateVarResource\');
    $conditions = array();
    $operators = array(
        \'<=>\' => \'<=>\',
        \'===\' => \'=\',
        \'!==\' => \'!=\',
        \'<>\' => \'<>\',
        \'==\' => \'LIKE\',
        \'!=\' => \'NOT LIKE\',
        \'<<\' => \'<\',
        \'<=\' => \'<=\',
        \'=<\' => \'=<\',
        \'>>\' => \'>\',
        \'>=\' => \'>=\',
        \'=>\' => \'=>\'
    );
    foreach ($tvFilters as $fGroup => $tvFilter) {
        $filterGroup = array();
        $filters = explode($tvFiltersAndDelimiter, $tvFilter);
        $multiple = count($filters) > 0;
        foreach ($filters as $filter) {
            $operator = \'==\';
            $sqlOperator = \'LIKE\';
            foreach ($operators as $op => $opSymbol) {
                if (strpos($filter, $op, 1) !== false) {
                    $operator = $op;
                    $sqlOperator = $opSymbol;
                    break;
                }
            }
            $tvValueField = \'tvr.value\';
            $tvDefaultField = \'tv.default_text\';
            $f = explode($operator, $filter);
            if (count($f) >= 2) {
                if (count($f) > 2) {
                    $k = array_shift($f);
                    $b = join($operator, $f);
                    $f = array($k, $b);
                }
                $tvName = $modx->quote($f[0]);
                if (is_numeric($f[1]) && !in_array($sqlOperator, array(\'LIKE\', \'NOT LIKE\'))) {
                    $tvValue = $f[1];
                    if ($f[1] == (integer)$f[1]) {
                        $tvValueField = "CAST({$tvValueField} AS SIGNED INTEGER)";
                        $tvDefaultField = "CAST({$tvDefaultField} AS SIGNED INTEGER)";
                    } else {
                        $tvValueField = "CAST({$tvValueField} AS DECIMAL)";
                        $tvDefaultField = "CAST({$tvDefaultField} AS DECIMAL)";
                    }
                } else {
                    $tvValue = $modx->quote($f[1]);
                }
                if ($multiple) {
                    $filterGroup[] =
                        "(EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.name = {$tvName} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id) " .
                        "OR EXISTS (SELECT 1 FROM {$tmplVarTbl} tv WHERE tv.name = {$tvName} AND {$tvDefaultField} {$sqlOperator} {$tvValue} AND tv.id NOT IN (SELECT tmplvarid FROM {$tmplVarResourceTbl} WHERE contentid = modResource.id)) " .
                        ")";
                } else {
                    $filterGroup =
                        "(EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.name = {$tvName} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id) " .
                        "OR EXISTS (SELECT 1 FROM {$tmplVarTbl} tv WHERE tv.name = {$tvName} AND {$tvDefaultField} {$sqlOperator} {$tvValue} AND tv.id NOT IN (SELECT tmplvarid FROM {$tmplVarResourceTbl} WHERE contentid = modResource.id)) " .
                        ")";
                }
            } elseif (count($f) == 1) {
                $tvValue = $modx->quote($f[0]);
                if ($multiple) {
                    $filterGroup[] = "EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id)";
                } else {
                    $filterGroup = "EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id)";
                }
            }
        }
        $conditions[] = $filterGroup;
    }
    if (!empty($conditions)) {
        $firstGroup = true;
        foreach ($conditions as $cGroup => $c) {
            if (is_array($c)) {
                $first = true;
                foreach ($c as $cond) {
                    if ($first && !$firstGroup) {
                        $criteria->condition($criteria->query[\'where\'][0][1], $cond, xPDOQuery::SQL_OR, null, $cGroup);
                    } else {
                        $criteria->condition($criteria->query[\'where\'][0][1], $cond, xPDOQuery::SQL_AND, null, $cGroup);
                    }
                    $first = false;
                }
            } else {
                $criteria->condition($criteria->query[\'where\'][0][1], $c, $firstGroup ? xPDOQuery::SQL_AND : xPDOQuery::SQL_OR, null, $cGroup);
            }
            $firstGroup = false;
        }
    }
}
/* include/exclude resources, via &resources=`123,-456` prop */
if (!empty($resources)) {
    $resourceConditions = array();
    $resources = explode(\',\',$resources);
    $include = array();
    $exclude = array();
    foreach ($resources as $resource) {
        $resource = (int)$resource;
        if ($resource == 0) continue;
        if ($resource < 0) {
            $exclude[] = abs($resource);
        } else {
            $include[] = $resource;
        }
    }
    if (!empty($include)) {
        $criteria->where(array(\'OR:modResource.id:IN\' => $include), xPDOQuery::SQL_OR);
    }
    if (!empty($exclude)) {
        $criteria->where(array(\'modResource.id:NOT IN\' => $exclude), xPDOQuery::SQL_AND, null, 1);
    }
}
if (!empty($where)) {
    $criteria->where($where);
}

$total = $modx->getCount(\'modResource\', $criteria);
$modx->setPlaceholder($totalVar, $total);

$fields = array_keys($modx->getFields(\'modResource\'));
if (empty($includeContent)) {
    $fields = array_diff($fields, array(\'content\'));
}
$columns = $includeContent ? $modx->getSelectColumns(\'modResource\', \'modResource\') : $modx->getSelectColumns(\'modResource\', \'modResource\', \'\', array(\'content\'), true);
$criteria->select($columns);
if (!empty($sortbyTV)) {
    $criteria->leftJoin(\'modTemplateVar\', \'tvDefault\', array(
        "tvDefault.name" => $sortbyTV
    ));
    $criteria->leftJoin(\'modTemplateVarResource\', \'tvSort\', array(
        "tvSort.contentid = modResource.id",
        "tvSort.tmplvarid = tvDefault.id"
    ));
    if (empty($sortbyTVType)) $sortbyTVType = \'string\';
    if ($modx->getOption(\'dbtype\') === \'mysql\') {
        switch ($sortbyTVType) {
            case \'integer\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS SIGNED INTEGER) AS sortTV");
                break;
            case \'decimal\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS DECIMAL) AS sortTV");
                break;
            case \'datetime\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS DATETIME) AS sortTV");
                break;
            case \'string\':
            default:
                $criteria->select("IFNULL(tvSort.value, tvDefault.default_text) AS sortTV");
                break;
        }
    } elseif ($modx->getOption(\'dbtype\') === \'sqlsrv\') {
        switch ($sortbyTVType) {
            case \'integer\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS BIGINT) AS sortTV");
                break;
            case \'decimal\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS DECIMAL) AS sortTV");
                break;
            case \'datetime\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS DATETIME) AS sortTV");
                break;
            case \'string\':
            default:
                $criteria->select("ISNULL(tvSort.value, tvDefault.default_text) AS sortTV");
                break;
        }
    }
    $criteria->sortby("sortTV", $sortdirTV);
}
if (!empty($sortby)) {
    if (strpos($sortby, \'{\') === 0) {
        $sorts = $modx->fromJSON($sortby);
    } else {
        $sorts = array($sortby => $sortdir);
    }
    if (is_array($sorts)) {
        while (list($sort, $dir) = each($sorts)) {
            if ($sortbyEscaped) $sort = $modx->escape($sort);
            if (!empty($sortbyAlias)) $sort = $modx->escape($sortbyAlias) . ".{$sort}";
            $criteria->sortby($sort, $dir);
        }
    }
}
if (!empty($limit)) $criteria->limit($limit, $offset);

if (!empty($debug)) {
    $criteria->prepare();
    $modx->log(modX::LOG_LEVEL_ERROR, $criteria->toSQL());
}
$collection = $modx->getCollection(\'modResource\', $criteria, $dbCacheFlag);

$idx = !empty($idx) || $idx === \'0\' ? (integer) $idx : 1;
$first = empty($first) && $first !== \'0\' ? 1 : (integer) $first;
$last = empty($last) ? (count($collection) + $idx - 1) : (integer) $last;

/* include parseTpl */
include_once $modx->getOption(\'getresources.core_path\',null,$modx->getOption(\'core_path\').\'components/getresources/\').\'include.parsetpl.php\';

$templateVars = array();
if (!empty($includeTVs) && !empty($includeTVList)) {
    $templateVars = $modx->getCollection(\'modTemplateVar\', array(\'name:IN\' => $includeTVList));
}
/** @var modResource $resource */
foreach ($collection as $resourceId => $resource) {
    $tvs = array();
    if (!empty($includeTVs)) {
        if (empty($includeTVList)) {
            $templateVars = $resource->getMany(\'TemplateVars\');
        }
        /** @var modTemplateVar $templateVar */
        foreach ($templateVars as $tvId => $templateVar) {
            if (!empty($includeTVList) && !in_array($templateVar->get(\'name\'), $includeTVList)) continue;
            if ($processTVs && (empty($processTVList) || in_array($templateVar->get(\'name\'), $processTVList))) {
                $tvs[$tvPrefix . $templateVar->get(\'name\')] = $templateVar->renderOutput($resource->get(\'id\'));
            } else {
                $value = $templateVar->getValue($resource->get(\'id\'));
                if ($prepareTVs && method_exists($templateVar, \'prepareOutput\') && (empty($prepareTVList) || in_array($templateVar->get(\'name\'), $prepareTVList))) {
                    $value = $templateVar->prepareOutput($value);
                }
                $tvs[$tvPrefix . $templateVar->get(\'name\')] = $value;
            }
        }
    }
    $odd = ($idx & 1);
    $properties = array_merge(
        $scriptProperties
        ,array(
            \'idx\' => $idx
            ,\'first\' => $first
            ,\'last\' => $last
            ,\'odd\' => $odd
        )
        ,$includeContent ? $resource->toArray() : $resource->get($fields)
        ,$tvs
    );
    $resourceTpl = false;
    if ($idx == $first && !empty($tplFirst)) {
        $resourceTpl = parseTpl($tplFirst, $properties);
    }
    if ($idx == $last && empty($resourceTpl) && !empty($tplLast)) {
        $resourceTpl = parseTpl($tplLast, $properties);
    }
    $tplidx = \'tpl_\' . $idx;
    if (empty($resourceTpl) && !empty($$tplidx)) {
        $resourceTpl = parseTpl($$tplidx, $properties);
    }
    if ($idx > 1 && empty($resourceTpl)) {
        $divisors = getDivisors($idx);
        if (!empty($divisors)) {
            foreach ($divisors as $divisor) {
                $tplnth = \'tpl_n\' . $divisor;
                if (!empty($$tplnth)) {
                    $resourceTpl = parseTpl($$tplnth, $properties);
                    if (!empty($resourceTpl)) {
                        break;
                    }
                }
            }
        }
    }
    if ($odd && empty($resourceTpl) && !empty($tplOdd)) {
        $resourceTpl = parseTpl($tplOdd, $properties);
    }
    if (!empty($tplCondition) && !empty($conditionalTpls) && empty($resourceTpl)) {
        $conTpls = $modx->fromJSON($conditionalTpls);
        $subject = $properties[$tplCondition];
        $tplOperator = !empty($tplOperator) ? $tplOperator : \'=\';
        $tplOperator = strtolower($tplOperator);
        $tplCon = \'\';
        foreach ($conTpls as $operand => $conditionalTpl) {
            switch ($tplOperator) {
                case \'!=\':
                case \'neq\':
                case \'not\':
                case \'isnot\':
                case \'isnt\':
                case \'unequal\':
                case \'notequal\':
                    $tplCon = (($subject != $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'<\':
                case \'lt\':
                case \'less\':
                case \'lessthan\':
                    $tplCon = (($subject < $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'>\':
                case \'gt\':
                case \'greater\':
                case \'greaterthan\':
                    $tplCon = (($subject > $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'<=\':
                case \'lte\':
                case \'lessthanequals\':
                case \'lessthanorequalto\':
                    $tplCon = (($subject <= $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'>=\':
                case \'gte\':
                case \'greaterthanequals\':
                case \'greaterthanequalto\':
                    $tplCon = (($subject >= $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'isempty\':
                case \'empty\':
                    $tplCon = empty($subject) ? $conditionalTpl : $tplCon;
                    break;
                case \'!empty\':
                case \'notempty\':
                case \'isnotempty\':
                    $tplCon = !empty($subject) && $subject != \'\' ? $conditionalTpl : $tplCon;
                    break;
                case \'isnull\':
                case \'null\':
                    $tplCon = $subject == null || strtolower($subject) == \'null\' ? $conditionalTpl : $tplCon;
                    break;
                case \'inarray\':
                case \'in_array\':
                case \'ia\':
                    $operand = explode(\',\', $operand);
                    $tplCon = in_array($subject, $operand) ? $conditionalTpl : $tplCon;
                    break;
                case \'between\':
                case \'range\':
                case \'>=<\':
                case \'><\':
                    $operand = explode(\',\', $operand);
                    $tplCon = ($subject >= min($operand) && $subject <= max($operand)) ? $conditionalTpl : $tplCon;
                    break;
                case \'==\':
                case \'=\':
                case \'eq\':
                case \'is\':
                case \'equal\':
                case \'equals\':
                case \'equalto\':
                default:
                    $tplCon = (($subject == $operand) ? $conditionalTpl : $tplCon);
                    break;
            }
        }
        if (!empty($tplCon)) {
            $resourceTpl = parseTpl($tplCon, $properties);
        }
    }
    if (!empty($tpl) && empty($resourceTpl)) {
        $resourceTpl = parseTpl($tpl, $properties);
    }
    if ($resourceTpl === false && !empty($debug)) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $output[]= $chunk->process(array(), \'<pre>\' . print_r($properties, true) .\'</pre>\');
    } else {
        $output[]= $resourceTpl;
    }
    $idx++;
}

/* output */
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\', $scriptProperties, false);
if (!empty($toSeparatePlaceholders)) {
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
    return \'\';
}

$output = implode($outputSeparator, $output);

$tplWrapper = $modx->getOption(\'tplWrapper\', $scriptProperties, false);
$wrapIfEmpty = $modx->getOption(\'wrapIfEmpty\', $scriptProperties, false);
if (!empty($tplWrapper) && ($wrapIfEmpty || !empty($output))) {
    $output = parseTpl($tplWrapper, array_merge($scriptProperties, array(\'output\' => $output)));
}

$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, false);
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
    return \'\';
}
return $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'isChild' => 
      array (
        'fields' => 
        array (
          'id' => 15,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'isChild',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '$id = $modx->resource->get(\'id\');
$array_ids = $modx->getChildIds($parent);
return in_array($id,$array_ids);',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '$id = $modx->resource->get(\'id\');
$array_ids = $modx->getChildIds($parent);
return in_array($id,$array_ids);',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
      'doctor' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'checkbox',
          'name' => 'doctor',
          'caption' => 'Рекомендуемый специалист',
          'description' => '',
          'editor_type' => 0,
          'category' => 14,
          'locked' => false,
          'elements' => 'Акушер-гинеколог==<a class="btn btn-primary" href="[[~169]]">Акушер-гинеколог</a>||
Аллерголог-иммунолог==<a class="btn btn-primary" href="[[~170]]">Аллерголог-иммунолог</a>||
Дерматолог==<a class="btn btn-primary" href="[[~171]]">Дерматолог</a>||
Кардиолог==<a class="btn btn-primary" href="[[~172]]">Кардиолог</a>||
ЛОР==<a class="btn btn-primary" href="[[~173]]">ЛОР</a>||
Нарколог==<a class="btn btn-primary" href="[[~174]]">Нарколог</a>||
Невролог==<a class="btn btn-primary" href="[[~175]]">Невролог</a>||
Окулист==<a class="btn btn-primary" href="[[~176]]">Окулист</a>||
Педиатр==<a class="btn btn-primary" href="[[~177]]">Педиатр</a>||
Психиатр==<a class="btn btn-primary" href="[[~178]]">Психиатр</a>||
Терапевт==<a class="btn btn-primary" href="[[~179]]">Терапевт</a>||
Уролог==<a class="btn btn-primary" href="[[~180]]">Уролог</a>||
УЗИ на дому==<a class="btn btn-primary" href="[[~181]]">УЗИ на дому</a>',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'columns' => '1',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
  ),
);