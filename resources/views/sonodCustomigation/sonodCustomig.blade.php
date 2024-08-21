@extends('admin.hader') @section('adminContent')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="tabs-animation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5 class="">পরিষদের তথ্য পরিবর্তন করুন  </h5>
                                </div>
                            </div>
                        </div>
                        <form method="POST" class="form border" action="">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header text-bg-danger p-2 py-1">
                                            <h6> তথ্য দিন </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=" card-box p-2 ">
                                        <div class="mb-3">
                                            <label for="warishan">ওয়ারিশ সনদ </label>
                                            <textarea type="text"id="warishan" name="warishan" rows="7" class="form-control">অত্র ইউপি এর মৃত্যু রেজিঃ অনুযায়ী তার মৃত্যুর তারিখ: দিন/মাস/সাল ইং। তিনি ---জন স্ত্রী, ---জন পুত্র ও --- জন কন্যা কে ওয়ারেশ হিসাবে রেখে মৃত্যু বরণ করেন। </textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="familyUp">পরিবার উপরে</label>
                                            <textarea type="text" name="familyUp" id="familyUp" rows="7" class="form-control">উল্লেখিত সদস্য ছাড়া তার পরিবারে আর কোন সদস্য নাই। </textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tradeLicense" class="form-label">পেশা </label>
                                            <textarea type="text" name="tradeLicense" id="tradeLicense" rows="7" class="form-control">উল্লেখিত প্রতিষ্ঠানের অনুকূলে প্রদত্ত লাইসেন্স ফি গ্রহন করিয়া বাণিজ্য চালিয়ে যাওয়ার অনুমতি দেওয়া হইল। এই লাইসেন্স ব্যবহার করে কোনপ্রকার অব্যধ কাজ করিতে পারিবেন না।</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-box p-2">
                                        <div class="mb-3">
                                            <label for="warishanBottom" class="form-label"> ওয়ারিশ সনদ  নিচে</label>
                                            <textarea type="text" name="warishanBottom" id="warishanBottom" rows="7" class="form-control"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="familyDown" class="form-label">পরিবার নিচে </label>
                                            <textarea type="text" name="familyDown" id="familyDown" rows="7" class="form-control">প্রকাশ থাকে যে, অত্র আবেদনে উল্লেখিত সদস্য ছাড়া পরবর্তীতে নতুন কোন সদস্য বাহির হলে আবেদন কারী একক ভাবে দায়ী থাকিবে।</textarea>
                                        </div>
                                        <div class="mb-3"><label class="lblm">ওয়ারিশ সনদ ফি</label>
                                            <input type="number" name="warish_fee" value="30" class="form-control">
                                        </div>
                                        <div class="mb-3"><label class="lblm">ফ্যামিলি সনদ ফি</label>
                                            <input type="number" name="family_fee" value="20" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="card-box p-2">
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <button type="button" class="btn btn-info ">সংরক্ষণ করুন</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <div>
        @endsection
        <div>
            <div class="app-drawer-overlay d-none animated fadeIn"></div>
        </div>
    </div>
</div>
