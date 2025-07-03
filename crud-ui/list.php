<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div id="alertMessage" style="display:none; position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%); z-index: 9999; padding: 15px 25px; border-radius: 5px; color: white; font-weight: bold;">Something went wrong.</div>
    
    <div class="container mt-3 d-flex justify-content-center">
        <div style="width: 80%;">
            <div class="header">
                <h3>List Users</h3>
            </div>
            <table class="table table-striped table-bordered table-dark mt-3">
                <thead>
                    <tr>
                        <td>Sr. No</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Mobile No</td>
                        <td>Created Date</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Somesh Koshti</td>
                        <td>someshK123@gmail.com</td>
                        <td>7984526310</td>
                        <td>7th July, 2025</td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#userModal">Edit</button> |
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="userModal">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add New</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="addNewProfileForm" autocomplete="off">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="profileName" placeholder="Enter name" name="profileName">
                        <div class="input-error" id="profileNameErr"></div>
                    </div>
                    <div class="form-check mb-3" id="profileHobbies">
                        <div id="fixed">
                            <label class="form-label">Select Hobbies:</label>
                            <br>
                            <label class="form-check-label">
                                <input type="checkbox" name="profileHobbies[]" value="developer"> Deveoper
                            </label><br>
                            <label class="form-check-label">
                                <input type="checkbox" name="profileHobbies[]" value="developer"> Deveoper
                            </label><br>
                            <div class="input-error" id="profileHobbiesErr"></div>
                        </div>
                        <div id="hobbiesList"></div>
                    </div>
                    <div class="mb-3 mt-3">
                        <select class="form-select" name="profileCategory" id="profileCategories">
                            <option value="">Select category</option>
                        </select>
                        <div class="input-error" id="profileCategoryErr"></div>
                    </div>
                    <div class="mb-3">
                        <label for="profileImage" class="form-label">Profile Image:</label>
                        <input type="file" class="form-control" id="profileImage" name="profileImage">
                        <div class="input-error" id="profileImageErr"></div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>