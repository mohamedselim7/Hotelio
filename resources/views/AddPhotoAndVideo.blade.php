
<div class="container py-5">

    <!-- Upload Image Form -->
    <div class="card mb-5 shadow-sm">
        <div class="card-body text-center">
            <h3 class="upload-title mb-4">📸 Upload Image</h3>
            <form action="/Addphoto" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 text-start">
                    <label for="image" class="form-label">Select Image</label>
                    <input type="file" class="form-control" name="imagepath" id="imagepath" required>
                </div>
                <div class="mb-3 text-start">
                    <label for="image_description" class="form-label">Image Description</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Enter image description" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Upload Image</button>
            </form>
        </div>
    </div>

    <!-- Upload Video Form -->
    <div class="card shadow-sm">
        <div class="card-body text-center">
            <h3 class="upload-title mb-4">🎬 Upload Video</h3>
            <form action="/Addvideo" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 text-start">
                    <label for="video" class="form-label">Select Video</label>
                    <input type="file" class="form-control" name="videospath" id="videospath" required>
                </div>
                <div class="mb-3 text-start">
                    <label for="video_description" class="form-label">Video Description</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Enter video description" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Upload Video</button>
            </form>
        </div>
    </div>

</div>

<!-- CSS -->
<style>
.upload-title {
    font-family: 'Poppins', sans-serif; /* خط عصري */
    font-size: 2rem;
    font-weight: 700;
    color: #ff6b6b; /* لون جذاب */
    text-shadow: 2px 2px 5px rgba(0,0,0,0.2);
}
</style>
