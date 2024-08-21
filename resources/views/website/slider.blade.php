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
                                        <h6> নতুন স্লাইডার  </h6>
                                    </div>
                                </div>
                            </div>
                            <form method="POST" class="form" action="">
                                <div class="row mx-auto">
                                  
                                    <div class="col-md-4 mt-3">
                                        <div class="row ">
                                            <div class="mb-3">
                                                <label for="picName">ছবির নাম</label>
                                                <input type="text" class="form-control" id="picName" placeholder="" name="picName" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                            <div class="mb-3">
                                                <label for="picName">ছবি</label><input type="file" name="photo" class="form-control" accept=".jpg, .jpeg, .png, .gif, .webp" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                            </div>
                                    </div>
                                    <div class="col-md-4  mt-5">
                                        <div class="row  ">
                                            <div class="md-3 ">
                                                <button type="button" class="btn btn-info">সংরক্ষণ করুন</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="col-sm-12 mt-5">
                                <div class="card">
                                    <div class="card-header text-bg-danger p-2 py-1">
                                        <h6>স্লাইডার   </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 mx-auto ">
                                <div class="col-md-12 mt-4">
                                        <table class="table table-hover table-border border-primary">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">  ছবি </th>
                                                <th scope="col">  ছবির নাম </th>
                                                <th scope="col">প্রক্রিয়া</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
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
