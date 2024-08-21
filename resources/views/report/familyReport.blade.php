@extends('admin.hader') @section('adminContent')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="tabs-animation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header text-bg-danger p-2 py-1">
                                        <h6>পারিবারিক সনদ রিপোর্ট দেখুন</h6>
                                    </div>
                                </div>
                            </div>
                            <form method="POST" class="form" action="">
                                <div class="row mx-auto">
                                    <div class="col-md-3 mt-2">
                                        <div class="row ">
                                            <div class="md-3">
                                                <select id="wordNo" class="form-select">
                                                    <option value="1">ওয়ার্ড নম্বর</option>
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
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <div class="card">
                                            <div class="row ">
                                                <div class="md-3">
                                                    <input type="date" class="form-control" id="birth" placeholder="মাস দিন বছর" name="birth" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <div class="card">
                                            <div class="row ">
                                                <div class="md-3">
                                                    <input type="date" class="form-control" id="birth" placeholder="মাস দিন বছর" name="birth" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <div class="row ">
                                            <div class="md-3">
                                                <button type="button" class="btn btn-info">রিপোর্ট দেখুন</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="col-sm-12 mt-5">
                                <div class="card">
                                    <div class="card-header text-bg-danger p-2 py-1">
                                        <h6> পারিবারিক সনদ  সংক্রান্ত তথ্য    </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>০</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">মোট পারিবারিক সনদ </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>০</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center"> পেন্ডিং পারিবারিক সনদ </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
