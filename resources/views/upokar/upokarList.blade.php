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
                                    <div class="card-header text-bg-danger  pt-2 ">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    
                                                <h6> সকল উপকারভোগীর তালিকা </h6>
                                                </div>
                                                <div class="col-md-7 mx-auto">
                                                    <button type="submit" class="btn btn-info btn-sm "> নতুন যোগ করুন</button>
                                                    <button type="submit" class="btn btn-info btn-sm">  উপকারভোগীর তালিকা</button>
                                                    <button type="submit" class="btn btn-info btn-sm"> সকল ডাটা মুছে ফেলুন </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12 mt-4">
                                        <table class="table table-hover table-border border-primary">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">কার্ড নাম্বার</th>
                                                <th scope="col">উপকারভোগীর নাম</th>
                                                <th scope="col"> জাতীয় পরিচয়পত্র</th>
                                                <th scope="col">মোবাইল</th>
                                                <th scope="col">ভাতার নাম</th>
                                                <th scope="col">প্রোফাইল</th>
                                                <th scope="col">কার্ড</th>
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
                                                <th scope="row">3</th>
                                                <td >Larry the Bird</td>
                                                <td>@twitter</td>
                                                <td>@fat</td>
                                                <td>@mdo</td>
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
