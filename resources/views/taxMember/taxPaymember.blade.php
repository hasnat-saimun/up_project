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
                                    <h5 class="">খানা প্রধানের তথ্য</h5>
                                </div>
                            </div>
                        </div>
                        <form method="POST" class="form border" action="">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header text-bg-danger p-2 py-1">
                                            <h6>ব্যক্তিগত তথ্য</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=" card-box p-2 ">
                                        <div class="mb-3">
                                            <label for="wordNo" class="form-label">ওয়ার্ড নম্বর</label>
                                            <select id="wordNo" class="form-select">
                                                <option value="1">0১</option>
                                                <option value="2">0২</option>
                                                <option value="3">0৩</option>
                                                <option value="4">0৪</option>
                                                <option value="5">0৫</option>
                                                <option value="6">0৬</option>
                                                <option value="7">0৭</option>
                                                <option value="8">0৮</option>
                                                <option value="9">0৯</option>
                                                <option value="10">১0</option>
                                                <option value="11">১১</option>
                                                <option value="12">১২</option>
                                                <option value="13">১৩</option>
                                                <option value="14">১৪</option>
                                                <option value="15">১৫</option>
                                                <option value="16">১৬</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="holdingNo">হোল্ডিং নম্বর</label>
                                            <input type="number" class="form-control" id="holdingNo" placeholder="" name="holdingNo" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="foodName">খানা প্রধানরে নাম </label>
                                            <input type="text" class="form-control" id="foodName" placeholder="" name="foodName" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="f/hName">পিতা/স্বামীর নাম</label>
                                            <input type="text" class="form-control" id="f/hName" placeholder="" name="f/hName" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="f/hName">পিতা/স্বামীর নাম</label>
                                            <input type="text" class="form-control" id="f/hName" placeholder="" name="f/hName" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="nid">আইডি</label>
                                            <input type="number" class="form-control" id="nid" placeholder="" name="nid" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="mobile">মোবাইল নম্বর </label>
                                            <input type="number" class="form-control" id="mobile" placeholder="" name="mobile" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="birth">জম্ম তারিখ </label>
                                            <input type="date" class="form-control" id="birth" placeholder="" name="birth" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-box p-2">
                                        <div class="mb-3">
                                            <label for="gender" class="form-label">লিঙ্গ</label>
                                            <select id="gender" class="form-select">
                                                <option value="female">নারী </option>
                                                <option value="male">পুরুষ </option>
                                                <option value="others">অন্যান্য </option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="religion" class="form-label">ধর্ম </label>
                                            <select id="wordNo" class="form-select">
                                                <option value="islam">ইসলাম </option>
                                                <option value="hindu">হিন্দু </option>
                                                <option value="cristian">খ্রিষ্টান</option>
                                                <option value="others">অন্যান্য</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="profession" class="form-label">পেশা </label>
                                                <select id="wordNo" class="form-select">
                                                    <option value="farmer">কৃষি</option>
                                                    <option value="housewife"> গৃহিনী </option>
                                                    <option value="job"> চাকুরী </option>
                                                    <option value="business"> ব্যবসা </option>
                                                    <option value="driver"> চালক </option>
                                                    <option value="teacher"> শিক্ষক </option>
                                                    <option value="dayLabour"> দিন মজুর </option>
                                                    <option value="fisherMan"> জেলে </option>
                                                    <option value="expatriate"> প্রবাসী </option>
                                                    <option value="doctor"> ডাক্তার </option>
                                                    <option value="others"> অন্যান্য </option>
                                                </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nationality">জাতীয়তা</label>
                                            <input type="text" class="form-control" id="nationality" placeholder="" name="nationality" readonly value="বাংলাদেশী"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nid">আইডি</label>
                                            <input type="number" class="form-control" id="nid" placeholder="" name="nid" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="foodMember">খানার সদস্য</label>
                                            <div class="row g-3">
                                                <div class="col-sm-4">
                                                    <input type="number" class="form-control" id="totalMember" placeholder="মোট সদস্য" name="totalMember" />
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="number" class="form-control" id="women" placeholder="নারী" name="women" />
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="number" class="form-control" id="men" placeholder="পুরুষ" name="men" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="totalChild"> সন্তান সংখ্যা</label>
                                            <div class="row g-3">
                                                <div class="col-sm-6">
                                                <input type="number" class="form-control" id="gril" placeholder="নারী" name="gril" />
                                                </div>
                                                <div class="col-sm-6">
                                                <input type="number" class="form-control" id="boy" placeholder="পুরুষ" name="boy" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="yearlyIncome">বাৎসরিক আয় </label>
                                            <input type="number" class="form-control" id="yearlyIncome" placeholder="" name="yearlyIncome" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-header text-bg-danger p-2 py-1">
                                            <h6>ঠিকানা</h6>
                                        </div>
                                    </div>
                                    <div class="card-box p-2">
                                        <div class="mb-3">
                                            <label for="village">গ্রাম/মহল্লা</label>
                                            <input type="text" class="form-control" id="village" placeholder="" name="village" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="postCode">ডাকঘর </label>
                                            <input type="text" class="form-control" id="postCode" placeholder="" name="postCode" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="district">জেলা</label>
                                            <input type="text" class="form-control" id="district" placeholder="" name="district" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="upozila">উপজেলা</label>
                                            <input type="text" class="form-control" id="upozila" placeholder="" name="upozila" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-header text-bg-danger p-2 py-1">
                                            <h6> বসত ঘর / অবকাঠামোর ধরন</h6>
                                        </div>
                                    </div>
                                    <div class="card-box p-2">
                                        <div class="mb-3">
                                            <label for="building">বহুতল</label>
                                            <input type="number" class="form-control" id="building" placeholder="" name="building" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="paved">পাকা ঘর </label>
                                            <input type="number" class="form-control" id="paved" placeholder="" name="paved" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="halfBuilding">আধা-পাকা ঘর</label>
                                            <input type="number" class="form-control" id="halfBuilding" placeholder="" name="halfBuilding" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="rowHouse">কাঁচা ঘর</label>
                                            <input type="number" class="form-control" id="rowHouse" placeholder="" name="rowHouse" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="year" class="form-label"> অর্থ বছর </label>
                                            <select id="year" class="form-select">
                                                <option value="১২৭"> ২০২৪-২০২৫  </option>
                                                <option value="১২২"> ২০২৩-২০২৪  </option>
                                                <option value="১২১">  ২০২২-২০২৩  </option>
                                                <option value="১২০"> ২০২১-২০২২ </option>
                                                <option value="১৯১">  ২০২০-২০২১ </option>
                                                <option value="১১৮">  ২০১৯-২০২০ </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header text-bg-danger p-2 py-1">
                                            <h6>বার্ষিক করের তথ্য</h6>
                                        </div>
                                    </div>
                                    <div class="card-box p-2">
                                        <div class="mb-3">
                                            <label for="tax"> আপনার ট্যাক্স</label>
                                            <input type="number" class="form-control" id="tax" placeholder="" name="tax" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="comment"> মন্তব্য (যদি থাকে) </label>
                                            <input type="text" class="form-control" id="comment" placeholder="" name="comment" />
                                        </div>
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
