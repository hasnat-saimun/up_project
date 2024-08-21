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
                                    <h5 class="">ব্যয় হিসাবের তালিকা </h5>
                                </div>
                            </div>
                        </div>
                        
                        <form method="POST" class="form border" action="">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header text-bg-danger p-2 py-1">
                                            <h6> ব্যয় তথ্য দিন </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=" card-box p-2 ">
                                        <div class="mb-3">
                                            <label for="voucher"> ভাউচার নং </label>
                                            <input type="number" class="form-control" id="voucher" placeholder="" name="voucher" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="busType" class="form-label">ব্যয়ের  ধরন</label>
                                            <select id="busType" class="form-select">
                                                <option value="1"> স্থাবর কর (১%) ক্যাশ বহি </option>
                                                <option value="2"> জম্ম মৃত্যু নিবন্ধন ক্যাশ বহি </option>
                                                <option value="3"> উন্নয়ন তহবিল ক্যাশ বহি </option>
                                                <option value="4"> বিবিধ ব্যয় </option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="costFund">ব্যয়ের খাত</label>
                                            <input type="text" class="form-control" id="costFund" placeholder="" name="costFund" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="number"> টাকার পরিমান </label>
                                            <input type="text" class="form-control" id="number" placeholder="" name="number" />
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
                                            <label for="costDate">ব্যয়ের  তারিখ </label>
                                            <input type="date" class="form-control" id="costDate" placeholder="" name="costDate"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="purpuse">ব্যয়ের বিবরন </label>
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
                                                <th scope="col">তারিখ</th>
                                                <th scope="col">ভাউচার নং </th>
                                                <th scope="col">ব্যয়ের খাত </th>
                                                <th scope="col">আইডি</th> 
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
<div>
    <div>
        @endsection
        <div>
            <div class="app-drawer-overlay d-none animated fadeIn"></div>
        </div>
    </div>
</div>
