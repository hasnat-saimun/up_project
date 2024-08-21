<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.hader');
});
//tax member str
Route::get('/tax/member',[
 'uses' => 'taxMember@taxmember',
 'as'   => 'taxmember'
]);

Route::get('/ward/member/list',[
 'uses' => 'taxMember@wardMemList',
 'as'   => 'wardMemList'
]);

Route::get('/all/member/list',[
    'uses' => 'taxMember@memberList',
    'as'   => 'memberList'
   ]);
   
Route::get('/reg/ward/member/list',[
    'uses' => 'taxMember@regWardlist',
    'as'   => 'regWardlist'
]);


Route::get('/holding/ward/list',[
    'uses' => 'taxMember@holdingWard',
    'as'   => 'holdingWard'
]);

Route::get('/tax/receive',[
    'uses' => 'taxMember@taxReceive',
    'as'   => 'taxReceive'
]);

Route::get('/tax/list',[
    'uses' => 'taxMember@taxList',
    'as'   => 'taxList'
]);

Route::get('/tax/ward/list',[
    'uses' => 'taxMember@wardMemList',
    'as'   => 'taxWardlist'
]);

Route::get('/bill/paper',[
    'uses' => 'taxMember@billPaper',
    'as'   => 'billPaper'
]);

Route::get('/add/brith',[
    'uses' => 'taxMember@birthAdd',
    'as'   => 'birthAdd'
]);

Route::get('/birth/list',[
    'uses' => 'taxMember@birthList',
    'as'   => 'birthList'
]);

//teax member end

//business str

Route::get('/add/business',[
    'uses' => 'businessControl@addBusiness',
    'as'   => 'addBusiness'
]);

route::get('/business/list',[
    'uses' => 'businessControl@busList',
    'as'   => 'busList'
]);

route::get('/business/reg/list',[
    'uses' => 'businessControl@busregList',
    'as'   => 'busregList'
]);

route::get('/business/ward/list',[
    'uses' => 'businessControl@busWard',
    'as'   => 'busWard'
]);

//businessend

//lecense str
route::get('/pending/license',[
    'uses' => 'licenseControl@licensePd',
    'as'   => 'licensePd'
]);

route::get('/license/list',[
    'uses' => 'licenseControl@licenseList',
    'as'   => 'licenseList'
]);

route::get('/renew/license/pending',[
    'uses' => 'licenseControl@reliPd',
    'as'   => 'reliPd'
]);

route::get('/renew/license',[
    'uses' => 'licenseControl@riLicense',
    'as'   => 'riLicense'
]);

route::get('/license/reg',[
    'uses' => 'licenseControl@liReg',
    'as'   => 'liReg'
]);

route::get('/capital/tax',[
    'uses' => 'licenseControl@cpTax',
    'as'   => 'cpTax'
]);
//license end

//warish str
route::get('/warish/pending/list',[
    'uses' => 'warishControl@warishPd',
    'as'   => 'warishPd'
]);
route::get('/warish/list',[
    'uses' => 'warishControl@warishLi',
    'as'   => 'warishLi'
]);

//warish end

//sonodStr
route::get('/sonod/pending',[
    'uses' => 'sonodControl@sonodPd',
    'as'   => 'sonodPd'
]);

route::get('/sonod/list',[
    'uses' => 'sonodControl@sonodLi',
    'as'   => 'sonodLi'
]);
//sonodEnd

//prtynStr
route::get('/prtyn/category/pending',[
    'uses' => 'prtynControl@prtynCatpd',
    'as'   => 'prtynCatpd'
]);

route::get('/prtyn/category/',[
    'uses' => 'prtynControl@prtynCat',
    'as'   => 'prtynCat'
]);
//prtynEnd

//bibidhoStr
route::get('/bibdho/category/pending',[
    'uses' => 'bibdhoControl@bibidhoCatpd',
    'as'   => 'bibidhoCatpd'
]);

route::get('/bibidho/category',[
    'uses' => 'bibdhoControl@bibidhoCat',
    'as'   => 'bibidhoCat'
]);
//bibidhoEnd

//incomecoAcStr

route::get('/income/list',[
    'uses' => 'incomeCostControl@incomeLi',
    'as'   => 'incomeLi'
]);

route::get('/cost/list',[
    'uses' => 'incomeCostControl@costLi',
    'as'   => 'costLi'
]);
//incomecoAcEnd

//bankStr
route::get('/bank/deposit',[
    'uses' => 'bankControl@bankDepo',
    'as'   => 'bankDepo'
]);
//bankEnd

//reportStr
route::get('/member/report',[
    'uses' => 'reportControl@memReport',
    'as'   => 'memReport'
]);

route::get('/tax/report',[
    'uses' => 'reportControl@taxReport',
    'as'   => 'taxReport'
]);

route::get('/business/report',[
    'uses' => 'reportControl@busReport',
    'as'   => 'busReport'
]);

route::get('/license/report',[
    'uses' => 'reportControl@liReport',
    'as'   => 'liReport'
]);

route::get('/warish/report',[
    'uses' => 'reportControl@waReport',
    'as'   => 'waReport'
]);

route::get('/family/report',[
    'uses' => 'reportControl@faReport',
    'as'   => 'faReport'
]);

route::get('/prtyn/report',[
    'uses' => 'reportControl@proReport',
    'as'   => 'proReport'
]);

route::get('/account/report',[
    'uses' => 'reportControl@accReport',
    'as'   => 'accReport'
]);

//repotrEnd

//cashBookStr
route::get('/cash/book',[
    'uses' => 'cashControl@casBook',
    'as'   => 'casBook'
]);
//cashBookEnd

//upokarStr
route::get('/add/upokar',[
    'uses' => 'upokarControl@upokarAdd',
    'as'   => 'upokarAdd'
]);
route::get('/upokar/list',[
    'uses' => 'upokarControl@upokarLi',
    'as'   => 'upokarLi'
]);

route::get('/upokar/receive/list',[
    'uses' => 'upokarControl@upokarReceiveLi',
    'as'   => 'upokarReceiveLi'
]);
//upokarEnd

//projectStr
route::get('/add/project',[
    'uses' => 'projectControl@projectAdd',
    'as'   => 'projectAdd'
]);

route::get('/project/list',[
    'uses' => 'projectControl@projectLi',
    'as'   => 'projectLi'
]);
//projectEnd

//sonodCustomigeStr
route::get('/sonod/customaigetion',[
    'uses' => 'sonodCus@sonodCusto',
    'as'   => 'sonodCusto'
]);
//sonodCustomigeEnd

//websiteStr

route::get('/slider',[
    'uses' => 'websiteControl@addSlider',
    'as'   => 'addSlider'
]);

route::get('/add/member',[
    'uses' => 'websiteControl@addMember',
    'as'   => 'addMember'
]);

route::get('/member/list',[
    'uses' => 'websiteControl@memberLi',
    'as'   => 'memberLi'
]);

route::get('/citizen/charter/list',[
    'uses' => 'websiteControl@citizen',
    'as'   => 'citizen'
]);

route::get('/add/page',[
    'uses' => 'websiteControl@addPage',
    'as'   => 'addPage'
]);

route::get('/page/list',[
    'uses' => 'websiteControl@pageLi',
    'as'   => 'pageLi'
]);

route::get('/notic/bord',[
    'uses' => 'websiteControl@noticBord',
    'as'   => 'noticBord'
]);

route::get('/servic',[
    'uses' => 'websiteControl@servicList',
    'as'   => 'servicList'
]);

route::get('/add/img',[
    'uses' => 'websiteControl@photo',
    'as'   => 'photo'
]);

route::get('/add/video',[
    'uses' => 'websiteControl@videoLi',
    'as'   => 'videoLi'
]);

route::get('/add/solgan',[
    'uses' => 'websiteControl@cngVoice',
    'as'   => 'cngVoice'
]);
//websiteEnd