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
                                        <h6>প্রত্যয়নপত্র রিপোর্ট দেখুন</h6>
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
                                        <div class="row ">
                                            <div class="mb-3">
                                                <select id="year" class="form-select">
                                                    <option value="১২৭">সকল প্রত্যয়নপত্র  </option>
                                                    <option value="১২২"> “বার্ষিক আয়ের সনদপত্র”  </option>
                                                    <option value="১২১">   “চারিত্রিক সনদ”   </option>
                                                    <option value="১২০">  “পুনঃ বিবাহ না করার প্রতয়নপত্র” </option>
                                                    <option value="১৯১">   “শারিরক অসুস্থ্যতার প্রত্যয়নপত্র” </option>
                                                    <option value="১১৮">  “ভুমিহীন সনদপত্র”  </option>
                                                    <option value="১১৮"> “অবিবাহিত সনদপত্র” </option>
                                                    <option value="১১৮">  “বিবাহিত সনদপত্র” </option>
                                                    <option value="১১৮">  “একই ব্যক্তির প্রত্যয়নপত্র”  </option>
                                                    <option value="১১৮">  “ভোটার হালনাগাদের প্রত্যয়নপত্র”  </option>
                                                    <option value="১১৮">  “ভোটার স্থানান্তরের প্রত্যয়নপত্র”  </option>
                                                    <option value="১১৮">  “স্থায়ী বাসিন্দার সনদপত্র”  </option>
                                                    <option value="১১৮">  “বেকারত্ব সনদপত্র”  </option>
                                                    <option value="১১৮">  “পেশাগত প্রত্যয়নপত্র”  </option>
                                                    <option value="১১৮">  “নাগরিক সনদ”  </option>
                                                    <option value="১১৮">  “আর্থিক অসচ্ছলতার প্রত্যয়নপত্র”  </option>
                                                    <option value="১১৮">  “প্রত্যয়ন পত্র”  </option>
                                                    <option value="১১৮">  “একই ব্যক্তির প্রত্যয়নপত্র”  </option>
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
                                        <h6>প্রত্যয়নপত্র  সংক্রান্ত তথ্য</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>৩৫</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">মোট প্রত্যয়নপত্র </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>১</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">পেন্ডিং প্রত্যয়নপত্র </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>“বার্ষিক আয়ের সনদপত্র”</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">আবেদন: ২ </h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">পেন্ডিং:  ০</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>“চারিত্রিক সনদ”</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">আবেদন: ০ </h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center"> পেন্ডিং: ০</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>“পুনঃ বিবাহ না করার প্রতয়নপত্র”</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">আবেদন: ০ </h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center"> পেন্ডিং:  ০</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>“শারিরক অসুস্থ্যতার প্রত্যয়নপত্র”</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">আবেদন: ০ </h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center"> পেন্ডিং:  ০</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>“ভুমিহীন সনদপত্র”</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">আবেদন: ০ </h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center"> পেন্ডিং:  ০</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>“অবিবাহিত সনদপত্র”</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">আবেদন: ০ </h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center"> পেন্ডিং:  ০</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>“বিবাহিত সনদপত্র”</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">আবেদন: ০ </h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center"> পেন্ডিং:  ০</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>“একই ব্যক্তির প্রত্যয়নপত্র”</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">আবেদন: ০ </h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center"> পেন্ডিং:  ০</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>“ভোটার হালনাগাদের প্রত্যয়নপত্র”</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">আবেদন: ০ </h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center"> পেন্ডিং:  ০</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>“ভোটার স্থানান্তরের প্রত্যয়নপত্র”</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">আবেদন: ০ </h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center"> পেন্ডিং:  ০</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>“স্থায়ী বাসিন্দার সনদপত্র”</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">আবেদন: ০ </h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center"> পেন্ডিং:  ০</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>“বেকারত্ব সনদপত্র”</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">আবেদন: ০ </h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center"> পেন্ডিং:  ০</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>“পেশাগত প্রত্যয়নপত্র”</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">আবেদন: ০ </h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center"> পেন্ডিং:  ০</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>“নাগরিক সনদ”</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">আবেদন: ০ </h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center"> পেন্ডিং:  ০</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>“আর্থিক অসচ্ছলতার প্রত্যয়নপত্র”</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">আবেদন: ০ </h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center"> পেন্ডিং:  ০</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>“প্রত্যয়ন পত্র”</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">আবেদন: ০ </h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center"> পেন্ডিং:  ০</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mt-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>“একই ব্যক্তির প্রত্যয়নপত্র”</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">আবেদন: ০ </h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center"> পেন্ডিং:  ০</h5>
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
