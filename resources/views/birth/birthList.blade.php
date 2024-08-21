@extends('admin.hader') @section('adminContent')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="tabs-animation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" class="form " action="">
                            <div class="row ">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header text-bg-danger p-2 py-1">
                                            <h6>রিপোর্ট দেখুন</h6>
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
                        
                        
                        <div class="card-box">
                            <div class="row mt-5">
                                <div class="col-sm-12">
                                    <h5 class="">জন্ম নিবন্ধন তালিকা</h5>
                                </div>
                            </div>
                        </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header text-bg-danger  pt-3  row">
                                        <div class="col-12">
                                            <form method="POST" class="form  row align-items-center" action="">
                                                
                                                <div class="col-md-5">
                                                    <input type="text" name="search" class="search-control  border-info w-100" placeholder="তথ্য দিন">
                                                </div>
                                                <div class="col-md-3 mx-auto">
                                                    <button type="submit" class="btn btn-info btn-sm ">খুঁজুন</button>
                                                    <button type="submit" class="btn btn-info btn-sm">পরিষ্কার করুন</button>
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
                                                <th scope="col">তারিখ</th>
                                                <th scope="col">নাম</th>
                                                <th scope="col">পিতা/স্বামীর নাম</th>
                                                <th scope="col">মোবাইল</th>
                                                <th scope="col">প্রক্রিয়া</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
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
</div>
<div>
    <div>
        @endsection
        <div>
            <div class="app-drawer-overlay d-none animated fadeIn"></div>
        </div>
    </div>
</div>
