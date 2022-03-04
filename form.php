<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form action="">
                <div class="form-group">
                    <label for="head_title">Head Title</label>
                    <input type="text" class="form-control" id="head_title" placeholder="Enter Nursery Name">
                </div>
                <div class="form-group">
                    <label for="head_title">Choose Gallery Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        <!-- <a target='_blank' href="+fil_url+"><img src="+fil_url+" width='50' alt="+fileName+"/></a> -->
                    </div>
                </div>
                <div class="form-group">
                    <label for="sub_title">Sub Title</label>
                    <input type="text" class="form-control" id="sub_title" placeholder="Enter Nursery Title">
                </div>
                <div class="form-group">
                    <label for="head_title">Select Nursery Features</label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="age_range">
                        <label class="form-check-label" for="age_range">Age range</label>
                    </div>
                     <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="lang_taught">
                        <label class="form-check-label" for="lang_taught">Languages taught</label>
                    </div>
                     <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="opening_hours">
                        <label class="form-check-label" for="opening_hours">Opening hours</label>
                    </div>
                     <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="play_area">
                        <label class="form-check-label" for="play_area">Outdoor Play area</label>
                    </div>
                     <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="transportation">
                        <label class="form-check-label" for="transportation">Transportation</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" id="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="brochure_link">Brochure Link</label>
                    <input type="text" class="form-control" id="brochure_link" placeholder="Enter Brochure Link">
                </div>
                <div class="form-group">
                    <label for="sch_details">School Details</label>
                    <textarea type="text" class="form-control" id="sch_details"></textarea>
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <textarea type="text" class="form-control" id="location"></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="lat">Lat</label>
                    <input type="number" class="form-control" id="lat" placeholder="Enter Lat">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="long">Long</label>
                    <input type="number" class="form-control" id="long" placeholder="Enter Long">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    
</body>
</html>