<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f0f2f5;
        }
        .form-card {
            max-width: 700px;
            margin: auto;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            background: #fff;
        }
        .form-header {
            background: #007bff;
            color: white;
            padding: 20px;
            border-radius: 15px 15px 0 0;
            text-align: center;
        }
        .form-body {
            padding: 30px;
        }
        .form-footer {
            padding: 20px;
            text-align: center;
        }
        .input-error {
            color: #d93025;
            font-size: 0.875rem;
            margin-top: 0.25rem;
            min-height: 1em;
            display: none;
        }
        .input-error.active {
            display: block;
        }
    </style>
</head>
<body>
    <div id="alertMessage" style="display:none; position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%); z-index: 9999; padding: 15px 25px; border-radius: 5px; color: white; font-weight: bold;">Something went wrong.</div>
    
    <div class="container py-5">
        <div class="form-card">
            <div class="form-header">
                <h3>Registration Form</h3>
            </div>
            <form class="form-body">
                <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="fullName" placeholder="Enter your name">
                    </div>
                    <div class="input-error" id="profileNameErr">Something went wrong.</div>
                </div>

                <div class="mb-3">
                    <label for="country" class="form-label">Select Country</label>
                    <select class="form-select" id="country">
                        <option selected disabled>Choose...</option>
                        <option value="india">India</option>
                        <option value="usa">USA</option>
                        <option value="uk">UK</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gender</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Hobbies</label>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="reading" value="reading">
                        <label class="form-check-label" for="reading">Reading</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="traveling" value="traveling">
                        <label class="form-check-label" for="traveling">Traveling</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="coding" value="coding">
                        <label class="form-check-label" for="coding">Coding</label>
                    </div>
                </div> 

                <div class="form-footer">
                    <button type="submit" class="btn btn-primary px-4"><i class="fa fa-paper-plane me-1"></i> Submit</button>
                    <button type="reset" class="btn btn-outline-secondary px-4 ms-2"><i class="fa fa-rotate-left me-1"></i> Reset</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>