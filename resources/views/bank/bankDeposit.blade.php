@extends('admin.hader') @section('adminContent')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="tabs-animation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                               <h5 class="text-center mt-2"><b>৳০</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">রাজস্ব</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                               <h5 class="text-center mt-2"><b>৳০</b> </h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">স্থাবর কর (১%) </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                               <h5 class="text-center mt-2"><b>৳০</b> </h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">জম্ম মৃত্যু নিবন্ধন</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                               <h5 class="text-center mt-2"><b>৳০</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">উন্নয়ন তহবিল </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <form method="POST" class="form border" action="">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card mt-4">
                                        <div class="card-header text-bg-danger p-2 py-1">
                                            <h6> টাকা জমা করুন </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=" card-box p-2 ">
                                        <div class="mb-3">
                                            <label for="amount"> টাকার পরিমান  </label>
                                            <input type="number" class="form-control" id="amount" placeholder="" name="amount" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="bankName"> ব্যাংকের নাম </label>
                                            <input type="text" class="form-control" id="bankName" placeholder="" name="bankName" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="accName">হিসাবধারীর নাম </label>
                                            <input type="text" class="form-control" id="accName" placeholder="" name="accName" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="accNo">  হিসাব নং </label>
                                            <input type="text" class="form-control" id="accNo" placeholder="" name="accNo" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="receipt">জমা রশিদ নং </label>
                                            <input type="text" class="form-control" id="accName" placeholder="" name="receipt" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-box p-2">
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
                                            <label for="busType" class="form-label"> টাকা জমা খাত</label>
                                            <select id="busType" class="form-select">
                                                <option value="1">  রাজস্ব </option>
                                                <option value="2">  স্থাবর কর (১%) </option>
                                                <option value="3">  জম্ম মৃত্যু নিবন্ধন  </option>
                                                <option value="4">  উন্নয়ন তহবিল </option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="incomeDate"> টাকা জমার তারিখ   </label>
                                            <input type="date" class="form-control" id="incomeDate" placeholder="" name="incomeDate"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="purpuse">মন্তব্য  </label>
                                            <input type="text" class="form-control" id="purpuse" placeholder="" name="purpuse" />
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
                            <div class="col-sm-12 mt-5">
                                <div class="card">
                                    <div class="card-header text-bg-danger  pt-3  row">
                                        <div class="col-12">
                                            <form method="POST" class="form  row align-items-center" action="">
                                                <div class="col-md-7">
                                                    <input type="text" name="search" class="search-control  border-info w-100" placeholder="হিসাব খাত ">
                                                </div>
                                                <div class="col-md-3 mx-auto">
                                                    <button type="submit" class="btn btn-info btn-sm ">+ নতুন যোগ করুন</button>
                                                    <button type="submit" class="btn btn-info btn-sm">খুঁজুন</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12 mt-4">
                                        <table class="table table-hover table-border border-primary">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">জমার তারিখ</th>
                                                <th scope="col">ব্যাংকের নাম	 </th>
                                                <th scope="col">হিসাব নং </th>
                                                <th scope="col">জমার খাত  </th>
                                                <th scope="col">টাকার পরিমান </th>
                                                <th scope="col">প্রক্রিয়া</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <i class="fa-sharp fa-solid fa-print" style="color: #c10b26;"></i>
                                                    <i class="fa-solid fa-eye" style="color: #c10b26;"></i>
                                                    <i class="fa-solid fa-pen-to-square" style="color: #c10b26;"></i>
                                                    <i class="fa-solid fa-trash" style="color: #c10b26;"></i>
                                                </td>
                                                </tr>
                                                <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <i class="fa-sharp fa-solid fa-print" style="color: #c10b26;"></i>
                                                    <i class="fa-solid fa-eye" style="color: #c10b26;"></i>
                                                    <i class="fa-solid fa-pen-to-square" style="color: #c10b26;"></i>
                                                    <i class="fa-solid fa-trash" style="color: #c10b26;"></i>
                                                </td>
                                                </tr>
                                                <tr>
                                                <th scope="row">3</th>
                                                <td >Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>@fat</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <i class="fa-sharp fa-solid fa-print" style="color: #c10b26;"></i>
                                                    <i class="fa-solid fa-eye" style="color: #c10b26;"></i>
                                                    <i class="fa-solid fa-pen-to-square" style="color: #c10b26;"></i>
                                                    <i class="fa-solid fa-trash" style="color: #c10b26;"></i>
                                                </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
