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
                                        <h6>রিপোর্ট দেখুন</h6>
                                    </div>
                                </div>
                            </div>
                            <form method="POST" class="form" action="">
                                <div class="row mx-auto">
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
                                        <h6>আয় সংক্রান্ত তথ্য </h6>
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
                                                <h5 class="text-center">বিবিধ সনদ  </h5>
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
                                                <h5 class="text-center"> কর আদায় </h5>
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
                                                <h5 class="text-center">নবায়নকৃত ট্রেড লাইসেন্স </h5>
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
                                                <h5 class="text-center"> ট্রেড লাইসেন্স </h5>
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
                                                <h5 class="text-center">পারিবারিক ফি (রাজস্ব)</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>২৭৯</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">উন্নয়ন তহবিল ক্যাশ বহি</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>২৮০</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">জম্ম মৃত্যু নিবন্ধন ক্যাশ বহি</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>১৩</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">স্থাবর কর (১%) ক্যাশ বহি</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>৬৩</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">বিবিধ ফি(রাজস্ব)</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>৫৬</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">ইজারা ৪১% (রাজস্ব)</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>০</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">ইজারা ৫% (রাজস্ব)</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>৯৯</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">হাট-বাজার (রাজস্ব)</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>২৪</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center"> প্রত্যয়ন ফি (রাজস্ব) </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>০</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">ওয়ারিশান ফি (রাজস্ব)</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-5">
                                <div class="card">
                                    <div class="card-header text-bg-danger p-2 py-1">
                                        <h6>ব্যয় সংক্রান্ত তথ্য    </h6>
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
                                                <h5 class="text-center">বিবিধ ব্যয়</h5>
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
                                                <h5 class="text-center">উন্নয়ন তহবিল ক্যাশ বহি</h5>
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
                                                <h5 class="text-center">জম্ম মৃত্যু নিবন্ধন ক্যাশ বহি</h5>
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
                                                <h5 class="text-center">স্থাবর কর (১%) ক্যাশ বহি</h5>
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
