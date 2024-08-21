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
                                    <h5 class=""> প্রকল্পের বিবরন  </h5>
                                </div>
                            </div>
                        </div>
                        <form method="POST" class="form border" action="">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header text-bg-danger p-2 py-1">
                                            <h6>প্রকল্পের  তথ্য দিন </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=" card-box p-2 ">
                                        <div class="mb-3">
                                            <label for="projectName"> প্রকল্পের নাম </label>
                                            <input type="text" class="form-control" id="projectName" placeholder="" name="projectName" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="projectBazet">  প্রকল্পের  বাজেট </label>
                                            <input type="number" class="form-control" id="niprojectBazetd" placeholder="" name="projectBazet" />
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
                                            <label for="projectAria"> প্রকল্পের অবস্থান   </label>
                                            <input type="text" class="form-control" id="projectAria" placeholder="" name="projectAria" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="proSrt"> প্রকল্প শুরুর  তারিখ</label>
                                            <input type="date" class="form-control" id="proSrt" placeholder="" name="proSrt" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-2">
                                        <div class="mb-3">
                                            <label for="managerName"> ঠিকাদারের নাম   </label>
                                            <input type="text" class="form-control" id="managerName" placeholder="" name="managerName" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="mobile"> মোবাইল নম্বর</label>
                                            <input type="number" class="form-control" id="mobile" placeholder="" name="mobile" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="proEnd">  প্রকল্পের শেষ তারিখ </label>
                                            <input type="date" class="form-control" id="proEnd" placeholder="" name="proEnd" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="comment">  মন্তব্য    </label>
                                            <input type="text" class="form-control" id="post" placeholder="" name="comment" />
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
