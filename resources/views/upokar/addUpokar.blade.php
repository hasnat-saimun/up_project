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
                                    <h5 class=""> উপকারভোগীর তথ্য দিন  </h5>
                                </div>
                            </div>
                        </div>
                        <form method="POST" class="form border" action="">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header text-bg-danger p-2 py-1">
                                            <h6> উপকারভোগীর তথ্য</h6>
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
                                            <label for="cardNo">কার্ড নম্বর</label>
                                            <input type="number" class="form-control" id="cardNo" placeholder="" name="cardNo" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="holdingNo">হোল্ডিং নম্বর</label>
                                            <input type="number" class="form-control" id="holdingNo" placeholder="" name="holdingNo" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="upokarName">উপকারভোগীর  নাম </label>
                                            <input type="text" class="form-control" id="upokarName" placeholder="" name="upokarName" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="nid">  জাতীয় পরিচয়পত্র</label>
                                            <input type="number" class="form-control" id="nid" placeholder="" name="nid" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="fName">পিতার নাম</label>
                                            <input type="text" class="form-control" id="fName" placeholder="" name="fName" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-2">
                                        <div class="mb-3">
                                            <label for="hName">স্বামীর নাম</label>
                                            <input type="text" class="form-control" id="hName" placeholder="" name="hName" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="mName">মাতার নাম</label>
                                            <input type="text" class="form-control" id="mName" placeholder="" name="mName" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="mobile">মোবাইল নম্বর </label>
                                            <input type="number" class="form-control" id="mobile" placeholder="" name="mobile" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="village">গ্রাম</label>
                                            <input type="text" class="form-control" id="village" placeholder="" name="village" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="post">ডাকঘর </label>
                                            <input type="text" class="form-control" id="post" placeholder="" name="post" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="wordNo" class="form-label">ওয়ার্ড নম্বর</label>
                                            <select id="wordNo" class="form-select">
                                                <option value="1"> মাতৃত্বকালীন ভাতা </option>
                                                <option value="2"> বয়স্ক ভাতা </option>
                                                <option value="3"> বিধবা ভাতা </option>
                                                <option value="4"> প্রতিবন্ধী ভাতা </option>
                                                <option value="5"> হতদরিদ্র ভাতা </option>
                                                <option value="6"> মুক্তিযোদ্ধা ভাতা </option>
                                                <option value="7"> ভিজিডি তালিকা </option>
                                                <option value="8"> টিসিবি পন্য </option>
                                                <option value="9"> ভিজিএফ (জেলে)  </option>
                                                <option value="10"> প্রতিবন্ধী ছাত্র-ছাত্রী ভাতা </option>
                                                <option value="11"> জীবনমান উন্নয়ন </option>
                                            </select>
                                        </div>
                                </div>
                                <div class="col-sm-12">
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
