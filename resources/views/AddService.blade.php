<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg p-4">
                <h3 class="text-center mb-4">➕ Add New Service</h3>
                <form class="form-contact contact_form" action="/AddServices" method="post" id="contactForm" novalidate enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="DescriptionOfService" class="form-label">Service Description</label>
                        <textarea class="form-control" name="DescriptionOfService" id="DescriptionOfService" cols="30" rows="5"
                            placeholder="Enter description of service"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label for="NameOfService" class="form-label">Service Name</label>
                            <input class="form-control" name="NameOfService" id="NameOfService" type="text"
                                placeholder="Enter Name of Service">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="NameOfServiceProvided" class="form-label">Provided By</label>
                            <input class="form-control" name="NameOfServiceProvided" id="NameOfServiceProvided" type="text"
                                placeholder="Name of Service Provider">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="imagepath" class="form-label">Upload Room Image</label>
                        <input class="form-control" type="file" name="imagepath" id="imagepath">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg w-50">Add Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>