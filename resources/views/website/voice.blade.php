@extends('admin.hader') @section('adminContent')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="tabs-animation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" class="form  " action="">
                            <div class="row">
                                <div class="col-sm-12">
                                        <div class="card-box p-2 py-1">
                                            <h5>স্লোগানের তথ্য  পরিবর্তন করুন </h5>
                                        </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header text-bg-danger p-2 py-1">
                                            <h6> তথ্য দিন  </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class=" card-box p-2 ">
                                        <div class="mb-3">
                                            <label for="name">  স্লোগান  </label>
                                            <input type="text" class="form-control" id="name" placeholder="" name="name" value="“ ইউনিয়ন পরিষদ হলে স্মার্ট , সেবা পাবে তাৎক্ষণাত” - সৌজন্য হৃদয় কান্তি দে।" />
                                        </div>
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
