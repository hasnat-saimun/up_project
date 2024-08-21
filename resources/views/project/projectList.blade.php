@extends('admin.hader') @section('adminContent')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="tabs-animation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-12 mt-3">
                                <div class="card">
                                    <div class="card-header text-bg-danger p-2 py-1">
                                        <h6>    উন্নয়নমলক প্রকল্পের তালিকা     </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-center mt-2"><b>০</b></h5>
                                            </div>
                                            <div class="col-md-12">
                                                <h5 class="text-center">  মোট প্রকল্প  </h5>
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
                                                <h5 class="text-center">   প্রকল্পের  মোট বাজেট      </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-5">
                                <div class="card">
                                    <div class="card-header text-bg-danger  pt-2 ">
                                        <div class="col-md-12">
                                                <form method="POST" class="form row align-items-center" action="">
                                                            <div class="col-md-7">
                                                                <input type="text" name="search" class="search-control  border-info w-100" placeholder="সদস্যর তথ্য দিন ">
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
                                                <th scope="col">     প্রকল্পের নাম </th>
                                                <th scope="col">প্রকল্প শুরুর তারিখ</th>
                                                <th scope="col">  অর্থ বছর  </th>
                                                <th scope="col"> ঠিকাদারের নাম</th>
                                                <th scope="col"> প্রকল্পের বাজেট </th>
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
                                                <td>Otto</td>
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
                                                <td>Otto</td>
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
                                                <td>Otto</td>
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
