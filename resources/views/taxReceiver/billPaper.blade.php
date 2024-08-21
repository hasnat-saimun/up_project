@extends('admin.hader') @section('adminContent')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="tabs-animation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" class="form border" action="">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header text-bg-danger p-2 py-1">
                                            <h6>তারিখ ভিত্তিতে প্লেট তৈরি করুন</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <div class="row align-items-center">
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
                                        <div class="row align-items-center">
                                            <div class="md-3">
                                                <input type="date" class="form-control" id="birth" placeholder="মাস দিন বছর" name="birth" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <div class="card">
                                        <div class="row align-items-center">
                                            <div class="md-3">
                                                <input type="date" class="form-control" id="birth" placeholder="মাস দিন বছর" name="birth" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <div class="row align-items-center">
                                        <div class="md-3">
                                            <button type="button" class="btn btn-info">প্রিন্ট করুন</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        
                        <form method="POST" class="form border mt-5" action="">
                            <div class="row ">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header text-bg-danger p-2 py-1">
                                            <h6>তারিখ ভিত্তিতে রশিদ প্রিন্ট করুন</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <div class="row align-items-center">
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
                                        <div class="row align-items-center">
                                            <div class="md-3">
                                                <input type="date" class="form-control" id="birth" placeholder="" name="birth" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <div class="card">
                                        <div class="row align-items-center">
                                            <div class="md-3">
                                                <input type="date" class="form-control" id="birth" placeholder="" name="birth" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <div class="row align-items-center">
                                        <div class="md-3">
                                            <button type="button" class="btn btn-info">প্রিন্ট করুন</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row mt-5">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header text-bg-danger p-2 py-1">
                                        <h6>ওয়ার্ড নম্বর অনুযায়ী তথ্য প্রিন্ট করুন</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="card">
                                    <a href="" class="text-info p-2">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <i class="fa-solid fa-print fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <h6>ওয়ার্ড নম্বর ০১</h6>
                                                <b> সর্বমোট ০ </b>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="card">
                                    <a href="" class="text-info p-2">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <i class="fa-solid fa-print fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <h6>ওয়ার্ড নম্বর ০২</h6>
                                                <b> সর্বমোট ০ </b>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="card">
                                    <a href="" class="text-info p-2">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <i class="fa-solid fa-print fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <h6>ওয়ার্ড নম্বর ০২</h6>
                                                <b> সর্বমোট ০ </b>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="card">
                                    <a href="" class="text-info p-2">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <i class="fa-solid fa-print fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <h6>ওয়ার্ড নম্বর ০৪</h6>
                                                <b> সর্বমোট ০ </b>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="card">
                                    <a href="" class="text-info p-2">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <i class="fa-solid fa-print fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <h6>ওয়ার্ড নম্বর ০৫</h6>
                                                <b> সর্বমোট ০ </b>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="card">
                                    <a href="" class="text-info p-2">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <i class="fa-solid fa-print fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <h6>ওয়ার্ড নম্বর ০৬</h6>
                                                <b> সর্বমোট ০ </b>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="card">
                                    <a href="" class="text-info p-2">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <i class="fa-solid fa-print fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <h6>ওয়ার্ড নম্বর ০৭</h6>
                                                <b> সর্বমোট ০ </b>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="card">
                                    <a href="" class="text-info p-2">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <i class="fa-solid fa-print fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <h6>ওয়ার্ড নম্বর ০৮</h6>
                                                <b> সর্বমোট ০ </b>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="card">
                                    <a href="" class="text-info p-2">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <i class="fa-solid fa-print fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <h6>ওয়ার্ড নম্বর ০৯</h6>
                                                <b> সর্বমোট ০ </b>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="card">
                                    <a href="" class="text-info p-2">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <i class="fa-solid fa-print fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <h6>ওয়ার্ড নম্বর ১০</h6>
                                                <b> সর্বমোট ০ </b>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="card">
                                    <a href="" class="text-info p-2">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <i class="fa-solid fa-print fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <h6>ওয়ার্ড নম্বর ১১</h6>
                                                <b> সর্বমোট ০ </b>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="card">
                                    <a href="" class="text-info p-2">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <i class="fa-solid fa-print fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <h6>ওয়ার্ড নম্বর ১২</h6>
                                                <b> সর্বমোট ০ </b>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="card">
                                    <a href="" class="text-info p-2">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <i class="fa-solid fa-print fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <h6>ওয়ার্ড নম্বর ১৩</h6>
                                                <b> সর্বমোট ০ </b>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="card">
                                    <a href="" class="text-info p-2">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <i class="fa-solid fa-print fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <h6>ওয়ার্ড নম্বর ১৪</h6>
                                                <b> সর্বমোট ০ </b>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="card">
                                    <a href="" class="text-info p-2">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <i class="fa-solid fa-print fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <h6>ওয়ার্ড নম্বর ১৫</h6>
                                                <b> সর্বমোট ০ </b>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="card">
                                    <a href="" class="text-info p-2">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <i class="fa-solid fa-print fa-xl bg-info text-white py-4 px-3 rounded-circle"></i>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <h6>ওয়ার্ড নম্বর ১৬</h6>
                                                <b> সর্বমোট ০ </b>
                                            </div>
                                        </div>
                                    </a>
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
