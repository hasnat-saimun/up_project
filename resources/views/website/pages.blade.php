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
                                            <h6>  পেজের তথ্য দিন  </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class=" card-box p-2 ">
                                        <div class="mb-3">
                                            <label for="name">পেজের  নাম</label>
                                            <input type="text" class="form-control" id="name" placeholder="" name="name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-2">
                                        <div class="mb-3">
                                            <label for="img">ছবি</label>
                                            <input type="file" name="img" id="img" class="form-control" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                        </div>
                                </div>
                                <div class="col-sm-12 ">
                                    
                                            <div class="mb-3 p-2">
                                            <label for="description">পেজের  বিররন</label>
                                            <textarea type="text" rows="7" placeholder=" " name="description" id="description" class="form-control"></textarea>
                                        </div>
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
