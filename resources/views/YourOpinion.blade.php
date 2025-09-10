 <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="/AddYourOpinion" method="post" id="contactForm" novalidate
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="YourOpinion" id="YourOpinion" cols="30" rows="5"
                                    placeholder="Enter YourOpinion" onfocus="this.placeholder=''" onblur="this.placeholder='Enter description'"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text"
                                    placeholder="Enter Your Name" onfocus="this.placeholder=''"
                                    onblur="this.placeholder='Enter Your Name'">
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <input class="form-control" name="NameOfService" id="NameOfService" type="text"
                                    placeholder="Enter Name Of service" onfocus="this.placeholder=''"
                                    onblur="this.placeholder='Enter Name Of service'">
                            </div>
                        </div>
                            </div>
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <input class="form-control" name="TypeOfClient" id="TypeOfClient" type="text"
                                    placeholder="Enter TypeOfClient" onfocus="this.placeholder=''"
                                    onblur="this.placeholder='Enter Name Of service'">
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="image" class="form-label">Upload Photo Client</label>
                                <input class="form-control" type="file" name="image" id="image">
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary">Send Your Opinion</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>