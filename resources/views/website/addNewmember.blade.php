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
                                    <h5 class="">নতুন সদস্য যোগ করুন </h5>
                                </div>
                            </div>
                        </div>
                        <form method="POST" class="form border" action="">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header text-bg-danger p-2 py-1">
                                            <h6>সদস্যর  তথ্য দিন </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=" card-box p-2 ">
                                        <div class="mb-3">
                                            <label for="memberName">সদস্যর নাম</label>
                                            <input type="text" class="form-control" id="memberName" placeholder="" name="memberName" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="position">সদস্যর পদবী </label>
                                            <input type="text" class="form-control" id="position" placeholder="" name="position" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="mail">ই-মেইল</label>
                                            <input type="text" class="form-control" id="mail" placeholder="" name="mail" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="mobile">মোবাইল নম্বর </label>
                                            <input type="number" class="form-control" id="mobile" placeholder="" name="mobile" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-2">
                                        <div class="mb-3">
                                            <label for="img"> ছবি </label><input type="file" name="img" id="img" class="form-control" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <div class="mb-3">
                                            <label for="wordNo" class="form-label">সদস্য</label>
                                            <select id="wordNo" class="form-select">
                                                <option value="1">  চেয়ারম্যান  </option>
                                                <option value="2">প্যানেল চেয়ারম্যান</option>
                                                <option value="3"> সচিব </option>
                                                <option value="4">  ইউপি সদস্য  </option>
                                                <option value="5">গ্রাম পুলিশ </option>
                                                <option value="6">উদ্যোক্তা ও অন্যান্য </option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="details">বিস্তারিত </label><textarea type="text" rows="4" placeholder="বিস্তারিত " name="details" id="details" class="form-control"></textarea>
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
