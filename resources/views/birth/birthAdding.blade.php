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
                                    <h5 class="">জন্ম নিবন্ধন করুন</h5>
                                </div>
                            </div>
                        </div>
                        <form method="POST" class="form border" action="">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header text-bg-danger p-2 py-1">
                                            <h6>জন্ম নিবন্ধন কারীর তথ্য দিন</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=" card-box p-2 ">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">নাম</label>
                                            <input type="name" class="form-control" id="name" placeholder="" name="name" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="birth">জম্ম তারিখ </label>
                                            <input type="date" class="form-control" id="birth" placeholder="" name="birth" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="f/hName">পিতা/স্বামীর নাম</label>
                                            <input type="text" class="form-control" id="f/hName" placeholder="" name="f/hName" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="fNidnum">পিতার জাতীয় পরিচয় পত্র নম্বর</label>
                                            <input type="number" class="form-control" id="fNidnum" placeholder="" name="fNidnum" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="mName">মাতার নাম </label>
                                            <input type="text" class="form-control" id="mName" placeholder="" name="mName" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="mNidnum">মাতার জাতীয় পরিচয় পত্র নম্বর</label>
                                            <input type="number" class="form-control" id="mNidnum" placeholder="" name="mNidnum" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-box p-2">
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
                                            <label for="mobile">মোবাইল নাম্বার</label>
                                            <input type="number" class="form-control" id="mobile" placeholder="" name="mobile" />
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="village">গ্রাম</label>
                                            <input type="text" class="form-control" id="village" placeholder="" name="village" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="holdingNo">হোল্ডিং নম্বর </label>
                                            <input type="number" class="form-control" id="holdingNo" placeholder="" name="holdingNo" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="comment">মন্তব্য</label>
                                            <input type="text" class="form-control" id="comment" placeholder="" name="comment" />
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
