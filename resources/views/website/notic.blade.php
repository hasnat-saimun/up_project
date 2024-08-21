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
                                            <h6>নতুন নোটিশ যোগ করুন   </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class=" card-box p-2 ">
                                        <div class="mb-3">
                                            <label for="title">শিরোনাম</label>
                                            <input type="text" class="form-control" id="title" placeholder="" name="title" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="description">বিস্তারিত</label>
                                            <textarea type="text" rows="7" placeholder="বিস্তারিত" name="description" id="description" class="form-control" ></textarea>
                                            
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
                            <div class="col-sm-12 mt-4">
                                <div class="card">
                                    <div class="card-header text-bg-danger p-2 py-1">
                                        <h6>নোটিশ বোর্ড তালিকা</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 mx-auto">
                                <div class="col-md-12 mt-4">
                                    <table class="table table-hover table-border border-primary">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">  তারিখ </th>
                                                <th scope="col"> শিরোনাম </th>
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
                                                <td>Larry the Bird</td>
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
<div>
    <div>
        @endsection
        <div>
            <div class="app-drawer-overlay d-none animated fadeIn"></div>
        </div>
    </div>
</div>
