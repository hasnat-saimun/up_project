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
                                        <h6>ক্যাশ বহি তৈরী করুন</h6>
                                    </div>
                                </div>
                            </div>
                            <form method="POST" class="form" action="">
                                <div class="row mx-auto">
                                    <div class="col-md-3 mt-2">
                                        <div class="row ">
                                            <div class="md-3">
                                                <select id="wordNo" class="form-select">
                                                    <option value="1"> মূল ক্যাশ বহি </option>
                                                    <option value="1"> রাজস্ব ক্যাশ বহি </option>
                                                    <option value="2"> স্থাবর কর (১%) ক্যাশ বহি </option>
                                                    <option value="3"> জম্ম মৃত্যু নিবন্ধন ক্যাশ বহি </option>
                                                    <option value="4"> উন্নয়ন তহবিল ক্যাশ বহি </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <div class="row ">
                                            <div class="mb-3">
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
                                        <h6> ক্যাশ বহি  রিপোর্ট</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>১২৩</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">  মোট আয়  </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>১০৯</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">  মোট ব্যয়  </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>১৪</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center"> মোট ব্যাংক জমা  </h5>
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
                                                <h5 class="text-center"> অন্যান্য সদস্য  </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>৫৫৯</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">  মোট ব্যালেন্স    </h5>
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
