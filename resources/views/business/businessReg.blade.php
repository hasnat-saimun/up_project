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
                                    <h5 class="">ব্যবসা নিবন্ধন করুন</h5>
                                </div>
                            </div>
                        </div>
                        <form method="POST" class="form border" action="">
                            <div class="row">
                                <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-header text-bg-danger p-2 py-1">
                                                <h6>ব্যক্তিগত তথ্য </h6>
                                            </div>
                                        </div>
                                        <div class="card-box p-2">
                                            <div class="mb-3">
                                                <label for="wonerName">মালিকের নাম </label>
                                                <input type="text" class="form-control" id="wonerName" placeholder="" name="wonerName" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="nid">এন আই ডি </label>
                                                <input type="number" class="form-control" id="nid" placeholder="" name="nid" />
                                            </div>
                                        <div class="mb-3">
                                            <label for="fName">পিতার নাম</label>
                                            <input type="text" class="form-control" id="fName" placeholder="" name="fName" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="mName">মাতার নাম</label>
                                            <input type="text" class="form-control" id="mName" placeholder="" name="mName" />
                                        <div class="mb-3">
                                            <label for="hName">স্বামীর নাম</label>
                                            <input type="text" class="form-control" id="hName" placeholder="" name="hName" />
                                        </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="mobile">মোবাইল নম্বর </label>
                                            <input type="number" class="form-control" id="mobile" placeholder="" name="mobile" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="gender" class="form-label">লিঙ্গ</label>
                                            <select id="gender" class="form-select">
                                                <option value="female">নারী </option>
                                                <option value="male">পুরুষ </option>
                                                <option value="others">অন্যান্য </option>
                                            </select>
                                        </div>
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
                                            <label for="village">গ্রাম/মহল্লা</label>
                                            <input type="text" class="form-control" id="village" placeholder="" name="village" />
                                        </div>
                                            <div class="mb-3">
                                                <label for="postCode">ডাকঘর </label>
                                                <input type="text" class="form-control" id="postCode" placeholder="" name="postCode" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="upozila">উপজেলা</label>
                                                <input type="text" class="form-control" id="upozila" placeholder="" name="upozila" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="district">জেলা</label>
                                                <input type="text" class="form-control" id="district" placeholder="" name="district" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-header text-bg-danger p-2 py-1">
                                            <h6> ব্যবসায়িক তথ্য</h6>
                                        </div>
                                    </div>
                                    <div class="card-box p-2">
                                        <div class="mb-3">
                                            <label for="type">প্রতিষ্ঠানের ধরণ </label>
                                            <input type="text" class="form-control" id="type" placeholder="" name="type" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="shopNo">দোকান নং</label>
                                            <input type="number" class="form-control" id="shopNo" placeholder="" name="shopNo" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="busType">ব্যবসায় ধরন</label>
                                            <input type="text" class="form-control" id="busType" placeholder="" name="busType" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="village1">গ্রাম/মহল্লা</label>
                                            <input type="text" class="form-control" id="village1" placeholder="" name="village1" />
                                        </div>
                                            <div class="mb-3">
                                                <label for="postCode1">ডাকঘর </label>
                                                <input type="text" class="form-control" id="postCode1" placeholder="" name="postCode1" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="upozila1">উপজেলা</label>
                                                <input type="text" class="form-control" id="upozila1" placeholder="" name="upozila1" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="district1">জেলা</label>
                                                <input type="text" class="form-control" id="district1" placeholder="" name="district1" />
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
                                        <div class="mb-3">
                                            <label for="date">ইসু কৃত তারিখ</label>
                                            <input type="date" class="form-control" id="date" placeholder="" name="date" />
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
