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
                                        <h6>তারিখ ভিত্তিতে প্লেট তৈরী করুন</h6>
                                    </div>
                                </div>
                            </div>
                            <form method="POST" class="form" action="">
                                <div class="row mx-auto">
                                    <div class="col-md-3 mt-2">
                                        <div class="card">
                                            <div class="row ">
                                                <div class="md-3">
                                                    <input type="date" class="form-control" id="1st" placeholder="মাস দিন বছর" name="1st" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <div class="card">
                                            <div class="row ">
                                                <div class="md-3">
                                                    <input type="date" class="form-control" id="2nd" placeholder="মাস দিন বছর" name="2nd" />
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
                                        <h6>  ওয়ার্ড নম্বর   ভিত্তিতে প্লেট তৈরী করুন   </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                
                            <div class="col-md-4 mt-2">
                                <div class="card">
                                    <a href="" class="text-info p-2">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <i class="fa-solid fa-eye fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
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
                                                <i class="fa-solid fa-eye fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
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
                                                <i class="fa-solid fa-eye fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
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
                                                <i class="fa-solid fa-eye fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
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
                                                <i class="fa-solid fa-eye fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
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
                                                <i class="fa-solid fa-eye fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
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
                                                <i class="fa-solid fa-eye fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
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
                                                <i class="fa-solid fa-eye fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
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
                                                <i class="fa-solid fa-eye fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
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
                                                <i class="fa-solid fa-eye fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
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
                                                <i class="fa-solid fa-eye fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
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
                                                <i class="fa-solid fa-eye fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
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
                                                <i class="fa-solid fa-eye fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
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
                                                <i class="fa-solid fa-eye fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
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
                                                <i class="fa-solid fa-eye fa-xl bg-info bg-primary text-white py-4 px-3 rounded-circle"></i>
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
                                    <a href="" class=" text-info p-2">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <i class="fa-solid fa-eye fa-xl bg-info text-white py-4 px-3 rounded-circle"></i>
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
</div>
<div>
    <div>
        @endsection
        <div>
            <div class="app-drawer-overlay d-none animated fadeIn"></div>
        </div>
    </div>
</div>
